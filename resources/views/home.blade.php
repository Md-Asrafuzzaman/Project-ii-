@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body"><!-- 
<button type="button" class="btn btn-primary btn-lg"><a href='{{url('postnews')}}'>News</a></button>
<button type="button" class="btn btn-primary btn-md">Medium</button>
<button type="button" class="btn btn-primary btn-sm">Small</button>
<button type="button" class="btn btn-primary btn-xs">XSmall</button> -->
<button type="button" class="btn btn-primary active"><a href='{{url('postnews')}}'><h3>NewsPost</h3></a></button>
<button type="button" class="btn btn-primary disabled"><a href='{{url('builder')}}'><h3>Edit News</h3></a></button>


                    
                </div>
            </div>
            

        </div>
  
</div>
@endsection
