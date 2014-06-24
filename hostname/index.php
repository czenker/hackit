<?php
	function getHost() {
		return isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];
	}

	$secret = sha1(uniqid());

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Host name spoofing</title>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

</head>
<body>
	<div class="container">
		<?php if($_SERVER['VIRTUAL_HOST'] == '1'): ?>
			<h1>Welcome to the first virtual host</h1>
		<?php elseif($_SERVER['VIRTUAL_HOST'] == '2'): ?>
			<h1>Welcome to the second virtual host</h1>
		<?php else: ?>
			<h1>Welcome</h1>
		<?php endif ?>

		<p>Lorem ipsum.</p>
		<p>Here is some link <a class="btn btn-primary" href="<?php echo sprintf('http://%s/hostname/index.php?secret=%s', getHost(), $secret) ?>">Follow me</a></p>
		<pre>
Hello World.

Please follow this link to confirm some action
<?php echo sprintf('%s/hostname/index.php?secret=%s', getHost(), $secret) ?>
		</pre>

		<div class="text-muted">
			<ul>
			<?php foreach(array('HTTP_HOST', 'SERVER_NAME', 'HTTP_X_FORWARDED_HOST') as $key):?>
				<?php if(isset($_SERVER[$key])): ?>
					<li><?php echo sprintf('<strong>%s</strong>: %s', htmlspecialchars($key), htmlspecialchars($_SERVER[$key])); ?></li>
				<?php endif ?>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</body>
</html>