// app/controllers/LoginController.php

<?php

namespace App\Controllers;

use App\Models\User;

class LoginController extends \Controller {

    public function index() {
        if (User::isLoggedIn()) {
            return redirect('/');
        }

        return view('login');
    }

    public function login() {
        $username = request()->input('username');
        $password = request()->input('password');

        $user = User::where('username', $username)->first();

        if ($user && $user->checkPassword($password)) {
            auth()->login($user);
            return redirect('/');
        } else {
            return back()->withErrors(['Invalid username or password.']);
        }
    }

}

?>
