<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RolePermissionController extends Controller
{
    public function index()
    {
        return view('admin.roles.index');
    }

    public function store(Request $request)
    {
        // simpan role
    }
}
