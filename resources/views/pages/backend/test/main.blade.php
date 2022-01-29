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
                        <div id="table" class="table-editable">
                            <span class="table-add float-right mb-3 mr-2">
                                <a class="btn btn-sm iq-bg-success" href="{{ url('/createtest') }}"><i
                                        class="ri-add-fill"><span class="pl-1">Add New</span></i>
                                </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Cau hoi</th>
                                        <th>Unit</th>
                                        <th>khoa hoc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $count = 1;

                                    @endphp
                                    @foreach ($unit as $item)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->course->name}}</td>
                                            <td>{{ $item->zoom->topic}}</td>
                                            <td>{{ $item->slide->title}}<br><a class="btn btn-primary" href="{{$item->slide->link}}" role="button">link</a></td>
                                            
                                        </tr>
                                        @php
                                            $count++;
                                        @endphp
                                    @endforeach --}}
                                    <div class="col-md-6 offset-md-3">
                                        @php
                                        $count = 1;

                                    @endphp
                                        @foreach ($quizzes as $quiz)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td><li class="list-group-item"><h3><a href="{{ url('/detal').'/'.$quiz->id}}">{{$quiz->quiz}}</a></h3></li><td>
                                        </td>
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
