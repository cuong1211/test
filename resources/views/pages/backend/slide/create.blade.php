@extends('layout.backend.index')
@section('content')
<div class="iq-card">
    <div class="iq-card-header d-flex justify-content-between">
       <div class="iq-header-title">
          <h4 class="card-title">Create Lesson</h4>
       </div>
    </div>
    <div class="iq-card-body">
       <form class="form-horizontal" action="{{url('/createslide')}}" method="POST">
         @csrf
          <div class="form-group row">
             <label class="control-label col-sm-2 align-self-center mb-0" for="email">Tên slide:</label>
             <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="email" placeholder="Enter name">
             </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-sm-2 align-self-center mb-0" for="email">Link:</label>
            <div class="col-sm-10">
               <input type="text" name="link" class="form-control" id="email" placeholder="Enter name">
            </div>
         </div>
          <div class="form-group">
             <button type="submit" class="btn btn-primary">Submit</button>
             <button type="submit" class="btn iq-bg-danger">Cancel</button>
          </div>
       </form>
    </div>
 </div>
 @endsection