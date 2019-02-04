

	<!-- Navigation -->
	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				  <!-- <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('img/logo.jpg')}}" style="height: 65px"></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button> -->

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="{{route('about')}}">About</a>
				    </li>

				      <li class="nav-item">
				        <a class="nav-link disabled" href="{{route('contact')}}">Contact</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link disabled" href="{{route('advertisement')}}">Advertisement</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="get">
				      <div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Search News Keywords" name="search" aria-label="Recipient's username" aria-describedby="button-addon2" required >
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
						  </div>
						</div>
				    </form>
				  </div>
			</div>
		</nav>

		<!--End Navber-->
		<!-- <div>
			<ul class="pagination">
			  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">4</a></li>
			  <li class="page-item"><a class="page-link" href="#">5</a></li>
			  <li class="page-item"><a class="page-link" href="#">6</a></li>
			  <li class="page-item"><a class="page-link" href="#">7</a></li>
			  <li class="page-item"><a class="page-link" href="#">Next</a></li>
			</ul>
		</div> -->
