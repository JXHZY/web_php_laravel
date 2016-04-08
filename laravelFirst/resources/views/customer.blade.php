<!DOCTYPE html>
<html>
<head>
	<title>Customers</title>
</head>
<body>
	<h1>{{$customer->name}}</h1>
	<h2>Orders:</h2>
	<ul>
		@foreach($customer->orders as $order)
			<li>{{ $order->name }}</li>
		@endforeach
	</ul>
	
</body>
</html>