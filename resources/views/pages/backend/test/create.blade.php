@extends('layout.backend.index')
@section('content')
<div class="iq-card">
    <div class="iq-card-header d-flex justify-content-between">
       <div class="iq-header-title">
          <h4 class="card-title">Create test</h4>
       </div>
    </div>
    <div class="iq-card-body">
       <form class="form-horizontal" action="{{url('/createtest')}}" method="POST">
         @csrf
         <div class="form-group">
            <label for="quiz-name[1]" class="col-sm-3 control-label">Quiz Name</label>
            <div class="col-sm-6">
                <input type="text" name="quiz-name" id="quiz-name" class="form-control" required>
            </div>
        </div>

        <table class="table" id="tab_logic">
            <thead>
            <tr>
                <th>Question</th>
                <th colspan="4">Answers</th>
            </tr>
            </thead>
            <tbody>
            <tr id="index1">
                <td>
                    <label for="question[1][question-text]">Question 1</label>
                    <input type="text" name="question[1][question-text]" id="question[1][question-text]" required>
                </td>
                <td>
                    <table class="table-sm">
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="question[1][answers][1]">Answer 1</label>
                                    <input type="text" class="form-control" name="question[1][answers][1]" id="question[1][answers][1]" aria-describedby="question[1][answers][1]" placeholder="Enter answer" required>
                                </div>
                                <div class="form-check">
                                    <label class="question[1][answers][is_correct]">
                                        <input type="radio" class="form-check-input" name="question[1][answers][is_correct]" id="question[1][answers][1][is_correct]" value="1" checked>
                                        Correct?
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="question[1][answers][2]">Answer 2</label>
                                    <input type="text" class="form-control" name="question[1][answers][2]" id="question[1][answers][2]" aria-describedby="question[1][answers][2]" placeholder="Enter answer" required>
                                </div>
                                <div class="form-check">
                                    <label for="question[1][answers][is_correct]" class="form-check">
                                        <input type="radio" class="form-check-input" name="question[1][answers][is_correct]" id="question[1][answers][2][is_correct]" value="2">
                                        Correct?
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="question[1][answers][3]">Answer 3</label>
                                    <input type="text" class="form-control" name="question[1][answers][3]" id="question[1][answers][3]" aria-describedby="question[1][answers][3]" placeholder="Enter answer" required>
                                </div>
                                <div class="form-check">
                                    <label for="question[1][answers][3][is_correct]" class="form-check-label">
                                        <input type="radio" class="form-check-input" name="question[1][answers][is_correct]" id="question[1][answers][3][is_correct]" value="3">
                                        Correct?
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="question[1][answers][4]">Answer 4</label>
                                    <input type="text" class="form-control" name="question[1][answers][4]" id="question[1][answers][4]" aria-describedby="question[1][answers][4]" placeholder="Enter answer" required>
                                </div>
                                <div class="form-check">
                                    <label for="question[1][answers][is_correct]" class="form-check-label">
                                        <input type="radio" class="form-check-input" name="question[1][answers][is_correct]" id="question[1][answers][4][is_correct]" value="4">
                                        Correct?
                                    </label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
                <td>
                    <div id="add_question" class="btn btn-info">Add Question</div>
                </td>
            </tr>
            <tr id='index2'></tr>
            </tbody>
        </table>
        <div class="form-group row">
            <label class="control-label col-sm-2 align-self-center mb-0" for="email">Unit:</label>
            <div class="col-sm-10">
               <input type="text" name="unit_id" class="form-control" id="email" placeholder="Enter name">
            </div>
         </div>
         <div class="form-group col-sm-6">
            <label for="uname">Unit:</label>
            <select class="form-control" name="zoom_id" id="email">
                @foreach ($ as $item)
                    <option value="{{ $item->id }}">{{ $item->topic }}</option>
                @endforeach
            </select>
        </div>
          <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>
             <button type="submit" class="btn iq-bg-danger">Cancel</button>
          </div>
       </form>
    </div>
 </div>

 <script>
    $(document).ready(function(){
        var i=2;
        $("#add_question").click(function(){
            $('#index'+i).html('<td><label for="question['+i+'][question-text]">Question '+i+'</label><input type="text" name="question['+i+'][question-text]" id="question['+i+'][question-text]" required></td><td><table class="table-sm"><tbody><tr><td><div class="form-group"><label for="question['+i+'][answers][1]">Answer 1</label><input type="text" class="form-control" name="question['+i+'][answers][1]" id="question['+i+'][answers][1]" aria-describedby="question['+i+'][answers][1]" placeholder="Enter answer" required></div><div class="form-check"><label for="question['+i+'][answers][is_correct]" class="answer-check"><input type="radio" class="form-check-input" name="question['+i+'][answers][is_correct]" id="question['+i+'][answers][1][is_correct]" value="true" checked>Correct?</label></div></td><td><div class="form-group"><label for="question['+i+'][answers][2]">Answer 2</label><input type="text" class="form-control" name="question['+i+'][answers][2]" id="question['+i+'][answers][2]" aria-describedby="question['+i+'][answers][2]" placeholder="Enter answer" required></div><div class="form-check"><label for="question['+i+'][answers][is_correct]" class="form-check"><input type="radio" class="form-check-input" name="question['+i+'][answers][is_correct]" id="question['+i+'][answers][2][is_correct]" value="true">Correct?</label></div></td><td><div class="form-group"><label for="question['+i+'][answers][3]">Answer 3</label><input type="text" class="form-control" name="question['+i+'][answers][3]" id="question['+i+'][answers][3]" aria-describedby="question['+i+'][answers][3]" placeholder="Enter answer" required></div><div class="form-check"><label for="question['+i+'][answers][is_correct]" class="form-check-label"><input type="radio" class="form-check-input" name="question['+i+'][answers][is_correct]" id="question['+i+'][answers][3][s_icorrect]" value="true">Correct?</label></div></td><td><div class="form-group"><label for="question['+i+'][answers][4]">Answer 4</label><input type="text" class="form-control" name="question['+i+'][answers][4]" id="question['+i+'][answers][4]" aria-describedby="question['+i+'][answers][4]" placeholder="Enter answer" required></div><div class="form-check"><label for="question['+i+'][answers][is_correct]" class="form-check-label"><input type="radio" class="form-check-input" name="question['+i+'][answers][is_correct]" id="question['+i+'][answers][4][is_correct]" value="true">Correct?</label></div></td></tr></tbody></table></td><td id="DeleteQuestionWrapper'+i+'"><button class="btn btn-danger row-delete" id="DeleteQuestion'+i+'">Delete Question</button></td>');
            $('#tab_logic').append('<tr id="index'+(i+1)+'"></tr>');
            var delete_button = $('#DeleteQuestion'+(i-1));
            delete_button.remove();
            if (i==3) {
                $('#DeleteQuestion4').remove();
            }
            i++;
            console.log(i);
        });
        $(document.body).on('click', '.row-delete' ,function(){
            var row = $(this).closest('tr');
            row.remove();
            $('#index'+(i)).attr("id","index"+(i-1));
            var insertedDeleteButton = '<button class="btn btn-danger row-delete" id="DeleteQuestion'+(i)+'">Delete Question</button>';
            $('#DeleteQuestionWrapper'+(i-2)).append(insertedDeleteButton);
            i--;
            console.log(i);
        });
    });
</script>
 @endsection
