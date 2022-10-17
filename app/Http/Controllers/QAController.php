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
        return Question::orderBy('order', 'ASC')->get();
    }

    function get($number)
    {
        return Question::where('order', $number)->first();
    }

    function search(Request $request)
    {
        return Question::where('question', 'like', '%' . $request->searchQuery . '%')
            ->orWhere('answer', 'like', '%' . $request->searchQuery . '%')->get();
    }

    function reorder(Request $request)
    {
        // dd($request->questions);
        foreach ($request->questions as $ndx => $row) {
            Question::find($row['id'])->update([
                'order' => $ndx + 1
            ]);
        }

        return response()->noContent();
    }

    function delete(Request $request)
    {
        Question::find($request->id)->delete();

        return Question::orderBy('order', 'ASC')->get();
    }
}
