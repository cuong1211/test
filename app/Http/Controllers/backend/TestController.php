<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Quiz;
use App\model\Question;
use App\model\Answer;
use App\model\CorrectAnswer;

class TestController extends Controller
{
    public function getTest(){
        $quizzes = Quiz::all();

        return view('pages.backend.test.main',compact('quizzes'));
    }
    public function createTest(){
        return view('pages.backend.test.create');
    }
    public function postcreateTest(Request $request){
        //Get Request Data
        $data = $request->all();
       
        //Create Quiz instance
        $quiz = new Quiz;
        
        $quiz->quiz = $data['quiz-name'];
        $quiz->unit_id = $data['unit_id'];
        
        $quiz->save();
        //Create Question Instance
        foreach ($data['question'] as $question_key => $question) {
            $question_instance = new Question;
            $question_instance->quiz_id = $quiz->id;
            $question_instance->question = $question['question-text'];
            $question_instance->save();
            //Create Answer Instance
            foreach ($question['answers'] as $answer_key => $answer ) {
                if($answer_key != "is_correct") {
//                    var_dump($answer_key);
                    $answer_instance = new Answer;
                    $answer_instance->question_id = $question_instance->id;
                    $answer_instance->answer = $answer;
                    $answer_instance->save();
                }
                if($answer_key == 'is_correct'){
                    //Create CorrectAnswer instance
                    $correct_answer = CorrectAnswer::create(['question_id' => $question_instance->id, 'answer_id' => $answer_instance->id ]);
                }
            }
        }
      
        return redirect('test');
    }
    public function detalTest(Quiz $quiz){
           
        return view('createexam',compact('quiz'));
    }
    public function resultTest(Request $request){
        $data = $request->all();
        $answers_array = [];
        $correct_answers_array = [];
        $correct_answers_array_filtered = [];
        $question_count = 0;
        foreach ($data as $key => $datum) {
            if($key != '_token' && $key != 'invisible') {
                $answers_array[$key] = $datum;
                $correct_answers_array[] =  json_decode(DB::table('correct_answers')->where('question_id', $key)->get(), true);
                $question_count++;
            }
        }
        foreach ($correct_answers_array as $correct_answer) {
            $correct_answers_array_filtered[$correct_answer[0]['question_id']] = $correct_answer[0]['answer_id'];
        }
        $correct_answers_count = count(array_intersect($answers_array, $correct_answers_array_filtered));

        return view('pages.backend.test.result', compact('data','correct_answers_array_filtered', 'answers_array', 'correct_answers_count', 'question_count'));
    }
}
