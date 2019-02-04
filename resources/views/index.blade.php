@extends('layouts.master')

@section('content')
<!--Start Sidebar-->




        {{$data->links()}}
		<div class="container margin-top">
			<div class="row">
				 @include('partials.home_sideber')
				@foreach ($data as $img)
				<div class="col-md-3">
					<div class="card-deck">
					  <div class="img-set1">
					    <!--   <img src="{{asset('newsimages/'.$img->image)}}" height="350" width="250"> -->
					      <img class="fancybox" src="{{asset('newsimages/'.$img->image)}}" title="{{($img->category)}}" height="400" width="275"/>
					    </div>					  
					</div>
				</div>
				@endforeach
				<!-- <div class="col-md-2">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action">First item</a>
						<a href="#" class="list-group-item list-group-item-action">Second item</a>
						<a href="#" class="list-group-item list-group-item-action">Third item</a>
						<a href="#" class="list-group-item list-group-item-action">First item</a>
						<a href="#" class="list-group-item list-group-item-action">Second item</a>
						<a href="#" class="list-group-item list-group-item-action">Third item</a>
						<a href="#" class="list-group-item list-group-item-action">First item</a>
						<a href="#" class="list-group-item list-group-item-action">Second item</a>
						<a href="#" class="list-group-item list-group-item-action">Third item</a>
					</div>

				</div> -->

			</div>
		</div>

@endsection
