<?php
function basePath()
{
	return BASE_PATH;
}

function viewPath()
{
	return basePath() . '/public/view/';
}

function layoutsPath()
{
	return viewPath() . 'layouts/';
}

function errorsPath()
{
	return viewPath() . 'errors/';
}

function css(string $file, bool $dir = false)
{
	$file = str_replace(['.css', '/css/'], '', $file);

	return
	$dir == false
	? "/css/{$file}.css"
	: basePath() . "/public/css/{$file}.css";
}

function js(string $file, bool $dir = false)
{
	$file = str_replace(['.js', '/js/'], '', $file);

	return
	$dir == false
	? "/js/{$file}.js"
	: basePath() . "/public/js/{$file}.js";
}