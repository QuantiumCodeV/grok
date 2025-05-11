<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Order;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('overview');
    }

    public function createOrder(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:80',
            'currency' => 'required|string',
            'rate' => 'required',
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'amount' => $request->amount/$request->rate,
            'currency' => $request->currency,
            'tokens' => $request->amount,
            'bonus_tokens' => 0,
            'total_tokens' => 0,
            'status' => 'pending',
        ]);

        
        $this->sendTelegramNotification($order);

        return response()->json([
            'success' => true,
            'order_id' => $order->order_id,
        ]);
    }

    private function sendTelegramNotification($order)
    {
        $user = User::find($order->user_id);
        
        $currency = is_array($order->currency) ? $order->currency[0] : $order->currency;
        $amountInDollars = $order->tokens * 4.78; // Сумма в долларах
    
        // Форматируем сообщение
        $message = "<b>Новый заказ создан</b>\n\n" .
                   "<b>ID заказа:</b> {$order->order_id}\n" .
                   "<b>Пользователь:</b> {$user->name} (ID: {$user->id})\n" .
                   "<b>Почта:</b> {$user->email}\n" .
                   "<b>Сумма:</b> \${$amountInDollars}\n" . // Сумма в $
                   "<b>Валюта:</b> {$currency}\n" .
                   "<b>Токены:</b> {$order->tokens}\n";
        
        try {
            $token = env('BOT_TOKEN'); // Получаем токен из переменных окружения
            $chat_id = env('CHAT_ID'); // Получаем ID чата из переменных окружения
    
            $response = \Http::timeout(5)->get("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id' => $chat_id,
                'text' => $message,
                'parse_mode' => 'HTML' // Используем HTML для форматирования
            ]);
    
            \Log::info('Ответ от Telegram: ', $response->json());
        } catch (\Throwable $e) {
            \Log::warning('Ошибка при отправке в Telegram: ' . $e->getMessage());
        }
    }
    
    public function viewOrder($id)
    {
        $order = Order::where([
            'order_id' => $id,
            'user_id' => auth()->user()->id
        ])->firstOrFail();


        return view('order', ['order' => $order]);
    }

    public function addBalance(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'balance' => 'required|numeric|min:0',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->back()->withErrors('User with this email not found.');
        }

        $user = User::where('email', $request->email)->first();
        $user->balance += $request->balance;
        
        if ($user->balance >= 50000) {
            $user->status = 'Legendary Status';
        } elseif ($user->balance >= 25000) {
            $user->status = 'Diamond Status';
        } elseif ($user->balance >= 5000) {
            $user->status = 'Platinum Status';
        } elseif ($user->balance >= 1000) {
            $user->status = 'Gold Status';
        } elseif ($user->balance >= 250) {
            $user->status = 'Silver Status';
        } elseif ($user->balance >= 100) {
            $user->status = 'Bronze Status';
        } else {
            $user->status = null;
        }

        $user->save();

        return redirect()->back()->with('success', 'Balance successfully topped up and status updated.');
    }
}
