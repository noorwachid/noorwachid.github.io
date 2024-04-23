<?php

$name = 'Noor Wachid';
$specialist = 'Full-stack web developer';

$projects = [
];

$contacts = [
	'Github' => [
		'url'   => 'https://github.com/noorwachid',
		'label' => '@noorwachid',
	],
	'LinkedIn' => [
		'url'   => 'https://linkedin.com/in/noorwachid',
		'label' => '/in/noorwachid',
	],
	'Email' => [
		'url'   => 'mailto:noorwach@yahoo.com',
		'label' => 'noorwach@yahoo.com',
	]
];

$projects = [
	[
		"name"        => "Gularen", 
		"description" => "A sweet-spot in markup languages", 
		"thumbnail"   => "gularen.png", 
		"stack"       => [
			"C++",
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url"  => "https://github.com/noorwachid/gularen/" 
			], 
			[
				"type"    => "demo", 
				"url"     => "http://noorwach.id/gularen-web/", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "Dinominator", 
		"description" => "Google Chrome offline dino game clone", 
		"thumbnail"   => "dinominator.png", 
		"stack"       => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url"  => "https://github.com/noorwachid/dinominator" 
			], 
			[
				"type"    => "demo", 
				"url"     => "http://noorwach.id/dinominator", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "RainType", 
		"description" => "Typing test program", 
		"thumbnail"   => "raintype.png", 
		"stack"       => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url"  => "https://github.com/noorwachid/raintype" 
			], 
			[
				"type"    => "demo", 
				"url"     => "http://noorwach.id/raintype", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "Sprint", 
		"description" => "Speed reader: Read article or anything faster than ever", 
		"thumbnail"   => "sprint.png", 
		"stack"       => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url"  => "https://github.com/noorwachid/jar/tree/main/sprint" 
			], 
			[
				"type"    => "demo", 
				"url"     => "http://noorwach.id/jar/sprint", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "WFileServer", 
		"description" => "Complete rewrite simplified version of HFS", 
		"thumbnail"   => "wfs.png", 
		"stack"       => [
			"JavaScript", 
			"Node.JS" 
		], 
		"links" => [
			[
				"type"    => "source", 
				"url"     => "https://github.com/noorwachid/webfileserver", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "SimpleBlog", 
		"description" => "Dead simple bloging system", 
		"thumbnail"   => "simpleblog.png", 
		"stack"       => [
			"PHP", 
			"CodeIgniter3", 
			"MySQL" 
		], 
		"links" => [
			[
				"type"    => "source", 
				"url"     => "https://github.com/noorwachid/simpleblog", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name"        => "Anggur", 
		"description" => "Graphics rendering library", 
		"thumbnail"   => "anggur.png", 
		"stack"       => [
			"C++", 
			"OpenGL" 
		], 
		"links" => [
			[
				"type"    => "source", 
				"url"     => "https://github.com/noorwachid/anggur", 
				"primary" => true 
			] 
		] 
	] 
]; 

$experiences = [
    [
        'company'  => 'Esoftplay',
        'position' => 'Back-End Web Developer',
        'year'     => '2021 - present',
        'url'      => 'https://esoftplay.com',
        'logo'     => 'esoftplay.png'
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#7333f9">
		<meta name="description" content="<?= $name ?>: <?= $specialist ?>">
		<title>Noor Wachid</title>
		<link href="/index.css" rel="stylesheet">
	</head>
	<body>
		<section id="banner">
			<h1><?= $name ?></h1>
			<p><?= $specialist ?></p>
		</section>

		<section id="projects">
			<h2>Projects</h2>
			<ul>
				<?php foreach ($projects as $project): ?>
					<li>
						<h3><?= $project['name'] ?></h3>
						<p class="description"><?= $project['description'] ?></p>
						<p class="stack"><?= implode(', ', $project['stack']) ?></p>
						<p class="links">
							<?php foreach ($project['links'] as $link): ?>
								<a href="<?= $link['url'] ?>"><?= $link['type'] ?></a>
							<?php endforeach ?>
						</p>
					</li>
				<?php endforeach ?>
			</ul>
		</section>

		<section id="experiences">
			<h2>Experiences</h2>
			<ul>
				<?php foreach ($experiences as $experience): ?>
					<li>
						<h3><?= $experience['company'] ?></h3>
						<p class="position"><?= $experience['position'] ?></p>
						<p class="year"><?= $experience['year'] ?></p>
						<p class="url"><a href="<?= $experience['url'] ?>"><?= $experience['url'] ?></a></p>
					</li>
				<?php endforeach ?>
			</ul>
		</section>

		<section id="contacts">
			<h2>Contacts</h2>
			<ul>
				<?php foreach ($contacts as $key => $contact): ?>
					<li>
						<?= $key ?>: 
						<a href="<?= $contact['url'] ?>"><?= $contact['label'] ?></a>
					</li>
				<?php endforeach ?>
			</ul>
		</section>
	</body>
</html>
