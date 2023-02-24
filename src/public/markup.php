<?php 

ini_set('display_errors', 1);

$stylesheet = '';
$script = '';

function attach($resource_name) {
	global $stylesheet;
	global $script;

	$resource = __DIR__ . '/../resources/'.$resource_name;

	if (file_exists($resource.'.css')) {
		$stylesheet .= file_get_contents($resource.'.css');
	}

	if (file_exists($resource.'.js')) {
		$script .= file_get_contents($resource.'.js');
	}

	if (!file_exists($resource.'.php')) {
		return throw new Exception('Resource '.$resource.' is not found!');
	}

	ob_start();

	include $resource.'.php';

	return ob_get_clean();
}

ob_start();

include 'markup.html.php';

$content = ob_get_clean();

if (!empty($generate)) {
	$public_directory = __DIR__ . '/../../';

	file_put_contents($public_directory.'assets/stylesheet.css', $stylesheet);
	file_put_contents($public_directory.'assets/script.js', $script);

	$content = str_replace('</head>', '<link href="/assets/stylesheet.css" rel="stylesheet"></head>', $content);
	$content = str_replace('</body>', '<script src="/assets/script.js"></script></body>', $content);

	file_put_contents($public_directory.'index.html', $content);
} else {
	$content = str_replace('</head>', '<style>'.$stylesheet.'</style></head>', $content);
	$content = str_replace('</body>', '<script>'.$script.'</script></body>', $content);

	echo $content;
}
