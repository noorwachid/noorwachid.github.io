<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="/assets/favicon.png">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#7333f9">
		<meta name="description" content="Noor Wachid: Full-Stack Web Developer">
		<title>Noor Wachid</title>
		<?php attach('base') ?>
	</head>
	<body>
		<div id="root">
			<div id="app">
				<?php echo attach('navigation') ?>
				<?php echo attach('banner') ?>
				<?php echo attach('skillset') ?>
				<?php echo attach('projects') ?>
				<?php echo attach('experiences') ?>
				<?php echo attach('contact') ?>
				<?php echo attach('footer') ?>
			</div>
		</div>
	</body>
</html>

