<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->group('/api/v1', function(){

	$this->group('/tests', function() {

		$this->get('', 'Src\http\Controllers\TestsDetailed:index');

	});
});
