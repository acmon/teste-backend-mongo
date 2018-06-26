<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->group('/api/v1', function(){

	$this->get('/tests', 'Src\http\Controllers\TestsDetailed:index');

});
