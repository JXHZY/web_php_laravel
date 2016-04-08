<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>
	<h1>Hey This is My Page</h1>
	<ul>
	<?php foreach($orders as $order): ?>
		<li><?php echo $order->name;?></li>
	<?php endforeach;?>
	</ul>

	<ul>
	@foreach($orders as $order)
		<li>{{$order->name}}</li>
	@endforeach
	</ul>

</body>
</html>