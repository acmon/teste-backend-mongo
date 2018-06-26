<?php

namespace Src\Models;

use Src\Models\BaseModel as BaseModel;

use Exception;

class TestsDetailed extends BaseModel {

	public function definirCollection()
	{
		return 'tests';
	}

}