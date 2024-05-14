<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Cache;

class RoleController extends Controller
{
    //
    // Hiển thị danh sách vai trò
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    // Hiển thị form tạo vai trò
    public function create()
    {
        $permissions = Permission::all()->groupBy('group');
        // dd($permissions);
        return view('admin.role.create', compact('permissions'));
    }

    // Lưu vai trò mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'permission_ids' => 'required|array'
        ]);

        $dataCreate = $request->all();
        // dd($dataCreate); 
        $dataCreate['guard_name'] = 'web';
        $role = Role::create($dataCreate);
        $role->permissions()->sync($dataCreate['permission_ids'] ?? []);

        return redirect()->route('admin.role')
            ->with('success', 'Role created successfully.');
    }

    // Hiển thị form chỉnh sửa vai trò
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy('group');

        return view('admin.role.edit', compact('role', 'permissions'));
    }

    // Cập nhật vai trò trong cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'permission_ids' => 'required|array'
        ]);


        $role = Role::findOrFail($id);
        $dataUpdate = $request->all();
        $dataUpdate['guard_name'] = 'web';
        $role->update($dataUpdate);
        $role->permissions()->sync($dataUpdate['permission_ids'] ?? []);
        return redirect()->route('admin.role')
            ->with('success', 'Role updated successfully.');    
    }
        

    // Xóa vai trò
    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.role')
            ->with('success', 'Role deleted successfully.');
    }
}
