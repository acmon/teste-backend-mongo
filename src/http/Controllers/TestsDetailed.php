<?php

namespace Src\http\Controllers;

use Src\http\Controllers\BaseController as BaseController;
use Src\Models\TestsDetailed as TestsDetailedModel;

class TestsDetailed extends BaseController {

	public function definirModel() 
	{
		return new TestsDetailedModel($this->container);
	}

	public function index($request, $response)
	{
		return parent::buscar($request, $response);
	}
}
