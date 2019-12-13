<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Exception;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('pages.admin.users-index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('pages.admin.users-create', [
            'roles' => Role::all(),
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'confirmed', 'min:8'],
            'role' => ['required', 'exists:roles,id'],
        ]);

        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->email_verified_at = now();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $role = Role::findOrFail($request->input('role'));

        $user->roles()->save($role);

        return back()->with('success', trans('users.registered'));
    }

    public function edit(User $user)
    {
        return view('pages.admin.users-edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * @param User $user
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id), 'max:255'],
            'password' => ['nullable', 'confirmed', 'min:8'],
            'role' => ['required', 'exists:roles,id'],
        ]);

        $user->roles()->detach();
        $user->roles()->save(Role::findOrFail($request->input('role')));
        $user->update($request->only(['first_name', 'last_name', 'email']));

        return back()->with('success', trans('users.updated'));
    }

    /**
     * @param $user
     * @return RedirectResponse
     * @throws Exception
     */
    public function delete(int $user)
    {
        User::whereId($user)->delete();

        return back()->with('success', trans('users.deleted'));
    }
}
