<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class PermissionController extends Controller
{
    public function index()
    {
      
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
        
    }

    public function create()
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }

        return view('admin.permissions.create');
    }

    public function store(StorePermissionsRequest $request)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        try {
            if (Permission::create($request->all())) {
                session()->flash('flash_success', 'Data Permission berhasil disimpan');
            } else {
                session()->flash('flash_error', 'Gagal menyimpan data permission');
            }
        } catch (InvalidArgumentException $e) {
            session()->flash('flash_error', 'Terjadi kesalahan<br>'.$e->getMessage());
        }

        return redirect()->route('admin.permissions.index');
    }

    public function edit($id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $permission = Permission::findOrFail($id);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionsRequest $request, $id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $permission = Permission::findOrFail($id);

        if ($permission->update($request->all())) {
            session()->flash('flash_success', 'Permission berhasil diupdate');
        } else {
            session()->flash('flash_error', 'Permission gagal diupdate');
        }

        return redirect()->route('admin.permissions.index');
    }


    public function destroy($id)
    {
        if (!Gate::allows('user_manage')) {
            return abort(401);
        }
        $permission = Permission::findOrFail($id);

        if ($permission->delete()) {
            session()->flash('flash_success', 'Permisson berhasil dihapus');
        }

        return redirect()->route('admin.permissions.index');
    }



}
