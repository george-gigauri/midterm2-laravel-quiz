<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function nextQuestion(Request $req)
    {
        $ind = $req->input('ind');

        
        $db = json_decode(DB::table('quiz')->take(5)->get(), true);
        $question = $db[$ind]['question'];
        $answers = array($db[$ind]['option1'], $db[$ind]['option2'], $db[$ind]['option3'], $db[$ind]['correct_answer']);
        $correct = $db[$ind]['correct_answer'];
      //  $ind -= 1;

        $score = 0;

        if($ind > 0) {
            $selectedAnswer = $req->input('selectedAnswer');
            $currentScore = $req->input('currentScore');

            $score += static::checkAnswer($selectedAnswer, $ind, $currentScore); 
        }
    
       // $ind = $ind + 1;
       $ind += 1;


        if($ind <= count($db) - 1) {
            return view('student')->with(['index'=>$ind, 'question'=>$question, 'answers'=>$answers, 'correct'=>$correct, 'score'=>$score]);
        } else {
            return view('result')->with(['score'=>$score]);
        }
    }

    public static function checkAnswer($answer, $index, $currentScore) {
        $db = json_decode(DB::table('quiz')->take(5)->get(), true);
        $answers = array($db[$index]['option1'], $db[$index]['option2'], $db[$index]['option3'], $db[$index]['correct_answer']);
        $correct = $db[$index]['correct_answer'];
        $score = $db[$index]['score'];

        if($answer == $correct) {
            $currentScore += $score;
        }

        return $currentScore;
    }
}
