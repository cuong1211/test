@extends('layout.frontend.index')
@section('content')
    <div class="container">
        <div class="iq-card-body">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>Kết quả: </h1>
                    <h3>bạn trả lời đúng {{ $correct_answers_count }} trên {{ $question_count }} </h3>

                    <?php $i = 1; ?>
                    @foreach ($data as $key => $datum)
                        @if ($key != '_token' && $key != 'invisible')
                            <p>Your guess for question {{ $i }} was
                                {{ App\model\Answer::find($datum)->answer }}</p>
                            <?php $i++; ?>
                        @endif
                    @endforeach
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/quizzes/{{ $data['invisible'] }}"><button class="btn btn-primary">Go for
                                    it</button></a>
                        </div>
                        {{-- <div class="col-md-6">
                            <h2>Try another Quiz</h2>
                            <a href="index"><button class="btn btn-primary">Do it now</button></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
