@extends('layouts.default')

@section('title_page')
รายการ @parent
@stop

@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Products List as Joined ({{$data_count}})</h1>

	</div>
</div>

<div class="container">
<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr class="danger">
					<th>prdname</th>
					<th>categoryname</th>
					<th>menufacname</th>
					<th>price</th>
				</tr>
			</thead>
			<tbody>
			@foreach($data_products as $product)
				<tr>
					<td>{{$product->prdname}}</td>
					<td>{{$product->categoryname}}</td>
					<td>{{$product->menufacname}}</td>
					<td>{{$product->price}}</td>
				</tr>
			@endforeach
			</tbody>
</table>
</div>

@stop