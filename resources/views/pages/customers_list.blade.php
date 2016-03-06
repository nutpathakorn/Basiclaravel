@extends('layouts.default')

@section('title_page')
รายการ @parent
@stop

@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Customer List ({{$data_count}})</h1>

	</div>
</div>

<div class="container">
{!!$data_customer->render()!!}
<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr class="danger">
					<th>customerNumber</th>
					<th>customerName</th>
					<th>contactLastName</th>
					<th>phone</th>
					<th>city</th>
					<th>state</th>
				</tr>
			</thead>
			<tbody>
			@foreach($data_customer as $customer)
				<tr>
					<td>{{$customer->customerNumber}}</td>
					<td>{{$customer->customerName}}</td>
					<td>{{$customer->contactLastName}}</td>
					<td>{{$customer->phone}}</td>
					<td>{{$customer->city}}</td>
					<td>{{$customer->state}}</td>
				</tr>
			@endforeach
			</tbody>
</table>
{!!$data_customer->render()!!}
</div>

@stop