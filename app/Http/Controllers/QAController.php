<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function get(Request $request, $number)
    {
        $rand = $request->input('random_question');
        if ($rand === '1' || $rand === 'true') {
            return [
                'data' => Question::inRandomOrder()->first(),
                'count' => 1
            ];
        } else {
            return [
                'data' => Question::where('order', $number)->first(),
                'count' => \Illuminate\Support\Facades\DB::table('questions')->count()
            ];
        }
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
