<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function signin() {
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

    public function signin_action(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email'     => 'required',
                'password'  => 'required'
            ]);

            $remember = isset($request->remember) ? filter_var($request->remember, FILTER_VALIDATE_BOOLEAN) : false;

            if(Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                $request->user()->tokens()->delete();
                $request->session()->put('auth_token', $token = $request->user()->createToken('authToken')->plainTextToken);

                return response()->json([
                    'success' => true,
                    'message' => 'Login successful!',
                    'user' => $request->user(),
                    'token' => $token,
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Wrong email or password!',
                ], 500);
            }
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Wrong email or password!',
                'errors' => $e->errors()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'errors' => $e->getMessage()
            ], 500);
        }
    }

    public function signup_action(Request $request)
    {
        try {
            DB::beginTransaction();

            $request->validate([
                'name' => 'required|string|between:2,100',
                'email' => 'required|string|email|max:100|unique:users',
                'password' => 'required|string|confirmed|min:6',
            ]);
    
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
    
            if ($user) {
                DB::commit();
                event(new Registered($user));
                return response()->json([
                    'success' => true,
                    'message' => 'Register successful!',
                    'user' => $user,
                ], 200);
            } else {
                DB::rollBack();
                return response()->json([
                    'success' => false,
                    'message' => 'Register failed!',
                ], 500);
            }
        } catch (ValidationException $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Register failed!',
                'errors' => $e->errors()
            ], 500);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!',
                'errors' => $e->getMessage()
            ], 500);
        }
    }

    public function signout(Request $request)
    {
        $request->user()->tokens()->where('tokenable_id', Auth::user()->id)->delete();
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.signin');
    }

    public function forgotPassword() {
        return view('forgot-password');
    }

    public function verifyEmail() {
        return view('verifyemail');
    }
}
