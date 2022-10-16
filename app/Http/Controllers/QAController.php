<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QAController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'q' => 'required',
            'a' => 'required'
        ]);

        $order = Question::all()->count();

        return Question::create([
            'question' => $request->q,
            'answer' => $request->a,
            'order' => ++$order
        ]);
    }

    function metadata()
    {
        return response()->json([
            'total_questions' => Question::all()->count()
        ]);
    }

    function list()
    {
        return Question::all();
    }

    function get($number)
    {
    }

    function reorder(Request $request)
    {
    }
}
