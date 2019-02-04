
@extends('layouts.master')
@section('content')
<div class="container margin-top">
      <div class="row">
         <!-- @include('partials.home_sideber') -->
        @foreach ($data as $img)
        <div class="col-md-3">
          <div class="card-deck">
            <div class="img-set1">
               <!--  <img src="{{asset('newsimages/'.$img->image)}}" height="350" width="250"> -->

<img class="fancybox" src="{{asset('newsimages/'.$img->image)}}" title="{{$img->category}}" height="350" width="250"/>              
</div>            
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endsection