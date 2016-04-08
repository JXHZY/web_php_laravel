<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
</head>
<body>
	<h1>Hey This is My Page</h1>
	<!-- Only can used in ".blade.php" -->
	<p>{{ $var1 }}</p>
	<p>{{ $var2 }}</p>
	<p>{{ $var3 }}</p>

	<?php if($var1 == 'Hamburger'):	?>
		<?php echo 'I love hamburgers!!';?>
	<?php endif;?>

	<!-- In Blade, the above things can write like this: -->
	@if($var1 == 'Hamburger')
		I love hamburgers!!
	@endif

	<!-- can used in ".blade.php" and ".php"-->
	<p><?php echo $var1;?></p>
	<p><?php echo $var2;?></p>
	<p><?php echo $var3;?></p>
</body>
</html>