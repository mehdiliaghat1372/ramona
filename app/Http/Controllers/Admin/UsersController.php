<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('pages.admin.users-index', [
            'users' => $users,
        ]);
    }
}
