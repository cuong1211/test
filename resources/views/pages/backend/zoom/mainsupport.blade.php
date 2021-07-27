@extends('layout.backend.index')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Các phòng zoom support
                            </h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div id="table" class="table-editable">
                            <span class="table-add float-right mb-3 mr-2">
                                <a class="btn btn-sm iq-bg-success" href="{{ url('/api/createmeetingsupport') }}"><i
                                        class="ri-add-fill"><span class="pl-1">Add New</span></i>
                                </a>
                            </span>
                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ten</th>
                                        <th>Class</th>
                                        <th>Thời gian</th>
                                        <th>link</th>
                                        <th>Action</th>
                                        <th>ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 1;
                                        
                                    @endphp
                                    @foreach ($zoomsupport as $item)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $item->topic }}</td>
                                            <td>{{ $item->class }}</td>
                                            <td>{{ $item->start_time }}
                                            <td><a class="btn btn-primary" href="{{$item->join_url}}" role="button">Link</a></td>
                                            <td>
                                                <form action="{{ url('api/meetingsupport') . '/' . $item['id'] }}"
                                                    method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                        class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                                </form>
                                            </td>
                                            <td>{{ $item['id'] }}</td>
                                        </tr>
                                        @php
                                            $count++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
