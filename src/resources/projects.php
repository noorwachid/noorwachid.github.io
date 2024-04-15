<?php 

$projects = [
	[
		"name" => "Gularen", 
		"description" => "A sweet-spot of markup language", 
		"thumbnail" => "gularen.png", 
		"stack" => [
			"C++",
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/gularen/" 
			], 
			[
				"type" => "demo", 
				"url" => "http://noorwach.id/gularen-web/", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "Dinominator", 
		"description" => "Google Chrome offline dino game clone", 
		"thumbnail" => "dinominator.png", 
		"stack" => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/dinominator" 
			], 
			[
				"type" => "demo", 
				"url" => "http://noorwach.id/dinominator", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "RainType", 
		"description" => "Typing test program", 
		"thumbnail" => "raintype.png", 
		"stack" => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/raintype" 
			], 
			[
				"type" => "demo", 
				"url" => "http://noorwach.id/raintype", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "Sprint", 
		"description" => "Speed reader: Read article or anything faster than ever", 
		"thumbnail" => "sprint.png", 
		"stack" => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/jar/tree/main/sprint" 
			], 
			[
				"type" => "demo", 
				"url" => "http://noorwach.id/jar/sprint", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "FixQuote", 
		"thumbnail" => "fixquote.png", 
		"description" => "Equalize / Differentiate quotation marks", 
		"stack" => [
			"JavaScript" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/jar/tree/main/fixquote" 
			], 
			[
				"type" => "demo", 
				"url" => "http://noorwach.id/jar/fixquote", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "WFileServer", 
		"description" => "Complete rewrite simplified version of HFS", 
		"thumbnail" => "wfs.png", 
		"stack" => [
			"JavaScript", 
			"Node.JS" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/webfileserver", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "SimpleBlog", 
		"description" => "Dead simple bloging system", 
		"thumbnail" => "simpleblog.png", 
		"stack" => [
			"PHP", 
			"CodeIgniter3", 
			"MySQL" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/simpleblog", 
				"primary" => true 
			] 
		] 
	], 
	[
		"name" => "Anggur", 
		"description" => "Graphics rendering library", 
		"thumbnail" => "anggur.png", 
		"stack" => [
			"C++", 
			"OpenGL" 
		], 
		"links" => [
			[
				"type" => "source", 
				"url" => "https://github.com/noorwachid/anggur", 
				"primary" => true 
			] 
		] 
	] 
]; 

$projects = array_map(function ($project) {
	$link = array_filter($project['links'], function ($link) { 
		return $link['primary'] ?? false;
	});

	$project['primary_link'] = count($link) > 0 ? array_values($link)[0]['url'] : '#';

	return $project;
}, $projects);

include 'projects.html.php';
