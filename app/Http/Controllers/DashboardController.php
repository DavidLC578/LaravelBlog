<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    // views
    public function dashboardView()
    {
        $users = User::paginate(5);
        return view('admin.dashboard', compact('users'));
    }

    public function editRoleView($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.editRole', compact('user', 'roles'));
    }

    // Actions
    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return to_route('admin.dashboard');
    }



    public function editRole(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->syncRoles([$request->role]); // Reemplaza cualquier rol previo con el nuevo

        return to_route('admin.dashboard')->with('success', 'Rol actualizado correctamente');
    }
}
