<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }

        $roles = Role::all();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $permissions = Permission::get()->pluck('name', 'name');

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(StoreRolesRequest $request)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        try {
            $role = Role::create($request->except('permission'));
            $permissions = $request->input('permission') ? $request->input('permission') : [];
            $role->givePermissionTo($permissions);

            session()->flash('flash_success', 'Role berhasil ditambahkan');
        } catch (Exception $e) {
            session()->flash('flash_error', 'Gagal menambahkan role');
        }

        return redirect()->route('admin.roles.index');
    }

    public function edit($id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $permissions = Permission::get()->pluck('name', 'name');

        $role = Role::findOrFail($id);

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRolesRequest $request, $id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        try {
            $role = Role::findOrFail($id);
            $role->update($request->except('permission'));
            $permissions = $request->input('permission') ? $request->input('permission') : [];
            $role->syncPermissions($permissions);
            session()->flash('flash_success', 'Berhasil mengupdate data role');
        } catch (Exception $e) {
            session()->flash('flash_error', 'Gagal mengubah data role');
        }

        return redirect()->route('admin.roles.index');
    }

    public function massDestroy(Request $request)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Role::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }




}
