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
                   <a class="btn btn-sm iq-bg-success" href="{{url('/createlesson')}}"><i
                      class="ri-add-fill"><span class="pl-1">Add New</span></i>
                   </a>
                   </span>
                   <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ten</th>
                            <th>khoa hoc</th>
                            <th>Thời gian</th>
                            <th>phong zoom</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;

                        @endphp
                        @foreach ($lesson as $item)
                            <tr>
                                <td>{{$count}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->course->name}}</td>

                                {{-- <td>
                                 <form action="{{ url('api/meetings').'/'.$item['id'] }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                   <button type="submit"
                                            class="btn iq-bg-danger btn-rounded btn-sm my-0">Remove</button></span>
                                </form>
                                </td> --}}

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
