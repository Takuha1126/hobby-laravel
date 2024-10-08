<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Save;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function mypage() {
        $user = Auth::user();
        $userId = Auth::id();
        $save = Save::where('user_id', $userId)->first();
        $otherRecommendedHobbies = $save ? json_decode($save->other_recommended_hobbies, true) : [];
        return view('mypage',compact('user','save','otherRecommendedHobbies'));
    }
}
