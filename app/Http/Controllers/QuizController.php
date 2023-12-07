<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::where('status', 1)
        ->whereNotNull('image')
        ->orderBy('created_at', 'desc')
        ->take(8)
        ->get();

        if ($quizzes->count() < 8) {
            $additionalQuizzes = Quiz::whereNotNull('description')
                ->take(8 - $quizzes->count())
                ->get();

            $quizzes = $quizzes->merge($additionalQuizzes);
        }

        return view("home", ['quizzes' => $quizzes]);
    }

    public function mySuperMiddleware(Request $request) {
        return ["name" => $request->input('name')];
    }
}
