@extends('layouts.master')

@section('content')
<!--Start Sidebar-->
	{{$data->links()}}
		<div class="container margin-top">
			<div class="row">
				@include('partials.home_sideber')

				@foreach ($data as $img)
      
				<div class="col-md-3" >
					<div class="card-deck">
						<div class="zoom">
					  <div class="img-set2">
					      <img src="{{asset('newsimages/'.$img->image)}}" height="350" width="250">
					    </div>
					</div>

					  </div>
					</div>
				@endforeach



				</div>
			</div>
			@endsection
