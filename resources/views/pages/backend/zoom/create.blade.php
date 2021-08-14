@extends('layout.backend.index')
@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Create Zoom</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form class="form-horizontal" action="{{ url('/api/createmeetings') }}" method="POST">
                @csrf
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-2 align-self-center mb-0">khoa hoc:</label>
                    <select class="form-control col-sm-10" name="course_id" id="course_id">
                        @foreach ($course as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-2 align-self-center mb-0">bai hoc:</label>
                    <select class="form-control col-sm-10 " name="lesson_id" id="lesson_id">
                        @foreach ($lesson as $a)
                            <option value="{{ $a->id }}">{{ $a->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2 align-self-center mb-0 " for="pwd1">Unit ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="unit_id" class="form-control" id="unit_id" placeholder="Enter type">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-2 align-self-center mb-0" for="email">Tên phòng</label>
                    <div class="col-sm-10">
                        <input type="text" name="topic" class="form-control" id="email" placeholder="Enter name">
                    </div>
                </div>
                <div class="form-group row" style="display:none">
                    <label class="control-label col-sm-2 align-self-center mb-0" for="email">Loại phòng</label>
                    <div class="col-sm-10">
                        <input type="text" name="type" class="form-control" id="email" value="1">
                    </div>
                </div>
                <div class="form-group" style="display:none">
                    <label for="exampleInputdatetime">Thời gian bắt đầu</label>
                    <input type="text" name="start_time" class="form-control" id="exampleInputdatetime">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn iq-bg-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var today = new Date();
    var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    $(document).ready(function() {

        $("button").click(function() {
            $("#exampleInputdatetime:text").val(function(n, c) {
                return date + ' ' + time;
            });
            $('#lesson_id').change(function() {
                $('#unit_id').val($('#lesson_id').val());
            });
        });
    });
</script>
