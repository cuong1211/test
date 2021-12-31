@extends('layout.backend.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">bai hoc
                            </h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h1>Your Results</h1>
                                <h3>You answered {{ $correct_answers_count }} out of {{ $question_count }} correctly</h3>
                    
                                <?php $i = 1 ?>
                                @foreach($data as $key => $datum)
                                    @if($key != '_token' && $key != 'invisible')
                                        <p>Your guess for question {{$i}} was {{App\model\Answer::find($datum)->answer}}</p>
                                        <?php $i++ ?>
                                    @endif
                                @endforeach
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Retry this quiz</h2>
                                        <a href="/quizzes/{{$data['invisible']}}"><button class="btn btn-primary">Go for it</button></a>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>Try another Quiz</h2>
                                        <a href="index"><button class="btn btn-primary">Do it now</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
