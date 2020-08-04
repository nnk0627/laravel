@extends('frontendtemplate')

@section('title','Cart Page')

@section('content')
	<div class="container my-5">
		<h4>Cart Page</h4>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name/Photo</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Item One<img src="" class="img-fluid"></td>
					<td>6000</td>
					<td>3</td>
					<td>30000</td>
				</tr>
			</tbody>
			
		</table>
		

	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}">
	</script>
@endsection