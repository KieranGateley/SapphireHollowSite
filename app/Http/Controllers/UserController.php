<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function index() {

    }

    public function showCurrent() {
        return view('pages.user.profile', ['user' => Auth::user(), ]);
    }

    public function show(User $user) {
        return view('pages.user.profile', ['user' => $user, ]);
    }

    public function editCurrent() {
        return view('pages.user.edit', ['user' => Auth::user(), ]);
    }

    public function edit(User $user) {
        return view('pages.user.edit', ['user' => $user, ]);
    }

    public function update(Request $request, User $user) {
        if ($request->input('email') == $user->email || !Auth::user()->role->administrator) {
            $user->update([ 'name' => $request->input('name'), ]);
        } else {
            $user->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'email_verified_at' => null,
            ]);
        }
        return redirect()->route('home');

    }

    public function destroy(Article $article) {
        $permOther = UserRole::MANAGE_OTHER_ARTICLE;
        $permOwn = UserRole::MANAGE_OWN_ARTICLE;
        $role = Auth::user()->role;
        if ($role->$permOther || ($role->$permOwn && $article->author == Auth::id())) {
            $article->delete();
        }
        return redirect()->route('home');
    }
}
