@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Dashboard</h2></div>

                <div class="card-body">
                  <h3><center>Post News</center></h3>
                  <hr>

                
            
  <form action="{{url('saveimg')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" id="pwd" name="_token" value='{{csrf_token()}}'>

          <div class="form-group">
            <label for="pwd">News Image::</label>
            <div class="row">
              <div class="col-md-4">
                <input type="file" class="form-control" id="pwd" name="image">
              </div>
          </div>
        </div>
          <button type="submit" class="btn btn-default">Post</button>
        </form>
        </div>  
</div>
@endsection
