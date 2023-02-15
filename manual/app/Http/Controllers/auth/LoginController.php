<?php

    namespace app\Http\Controllers\auth;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller {
        public function login() {
            return view('login');
        }

        public function authenticate(Request $request) {
            $loginDetails = $request->validate(
                [
                    'email' => ['required', 'email'],
                    'password' => ['required']
                ]
            );

            if(Auth::attempt($loginDetails)) {
                $request->session()->regenerate();
                return redirect()->intended('home');
            }

            return back()->withErrors(['email' => 'does not match our records']);
        }
    }

?>
