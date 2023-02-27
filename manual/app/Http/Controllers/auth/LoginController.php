<?php

    namespace app\Http\Controllers\auth;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    /**
     * Controller responsible for handling the login page and requests.
     * @author Ibrahim Ahmad <210029073@aston.ac.uk>
     * @since 15/02/2023
     * @version 1.1
    */
    class LoginController extends Controller {

        /**
         * This should return the view of the login page.
         * @author Ibrahim Ahmad <210029073@aston.ac.uk>
        */
        public function login() {
            if(Auth::check()) {
                return redirect()->back();
            }

            else return view('login');
        }

        /**
         * This should let the user to login, by validating their login credentials, if valid then it
         * should automatically redirect the user to their homepage. Otherwise return to the login page
         * with an error pop-up message.
         * @author Ibrahim Ahmad <210029073@aston.ac.uk>
        */
        public function authenticate(Request $request) {
            //validate login credentials
            $check = $request->validate([
                'username' => 'required|email',
                'password' => 'required'
            ]);
            $loginDetails = array(

                    'email' => ['required', $request->get('username')],
                    'password' => $request->get('password')

            );
//            dd(Auth::attempt($loginDetails));
            if(Auth::attempt($loginDetails)) {
                $request->session()->regenerate();
                return redirect()->intended('');
            }

            return back()->withErrors(['email' => 'does not match our records']);        }
    }

?>
