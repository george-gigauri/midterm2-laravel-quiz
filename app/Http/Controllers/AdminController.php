<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{
    public function insertQuestion(Request $req) {
        $question = $req->input('question');
        $o1 = $req->input('option1');
        $o2 = $req->input('option2');
        $o3 = $req->input('option3');
        $correct = $req->input('correct');
        $score = $req->input('score');

        $rules = [
			"question" => 'required'
        ];
        $validator = Validator::make($req->all(),$rules);

        if($validator->fails()) {
            return view('admin')->with(["error"=>true, "msg"=>"შეცდომა დაფიქსირდა!"]);
        } else {
            $values = array('question'=>$question, 'option1'=>$o1, 'option2'=>$o2, 'option3'=>$o3, 'correct_answer'=>$correct, 'score'=>1);
            DB::table('quiz')->insert($values);
            return view('admin')->with(["error"=>false, "msg"=>"წარმატებით დაემატა!"]);
        }
    }
}
