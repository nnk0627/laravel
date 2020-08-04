
@extends('frontendtemplate')

@section('title','Item Detail')

@section('content')
	<div class="container">
		
		<div class="row my-5">
			<div class="col-md-6 mt-3">
				<img src="{{asset($item->photo)}}" class="img-fluid w-50 d-block mx-auto">
			</div>
			<div class="col-md-6 mt-3">
				<p><span class="badge badge-info">
					{{$item->codeno}}
				</span></p>
				<p><strong>{{$item->name}}</strong></p>
				<p>Price: {{$item->price}} MMK</p>

				<a href="{{route('cart')}}" class="btn btn-success">Add To Cart</a>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script>
@endsection
