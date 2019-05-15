<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

class UsersController extends Controller
{
    public function index()
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUsersRequest $request)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        try {
            $all = $request->all();
            $all['password'] = bcrypt($request->password);
            $user = User::create($all);
            $roles = $request->input('roles') ? $request->input('roles') : [];
            $user->assignRole($roles);
            session()->flash('flash_success', 'Berhasil menambahkan data user');
        } catch (Exception $e) {
            session()->flash('flash_error', 'Gagal menambahkan data user');
        } finally {
            return redirect()->route('admin.users.index');
        }
    }

    public function edit($id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        try {
            $user = User::findOrFail($id);
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
            $user->update($input);
            $roles = $request->input('roles') ? $request->input('roles') : [];
            $user->syncRoles($roles);
            session()->flash('flash_success', 'Berhasil mengupdate data user');
        } catch (Exception $e) {
            session()->flash('flash_error', 'Gagal memperbaharui data user');
        } finally {
            return redirect()->route('admin.users.index');
        }
    }

    public function destroy($id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
        if ($user->delete()) {
            session()->flash('flash_success', 'Berhasil menghapus data user');
        }

        return redirect()->route('admin.users.index');
    }

    public function massDestroy(Request $request)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = User::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
