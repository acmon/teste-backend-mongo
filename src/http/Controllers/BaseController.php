<?php

namespace Src\http\Controllers;

use Exception;

class BaseController {

	function __construct($container)
	{
		$this->container = $container;

		$this->model = $this->definirModel();
	}

	public function definirModel()
	{
		throw new Exception('Método obrigatório não implementado');
	}

	public function buscar($request, $response)
	{
		try
		{
			$retorno = $this->model->buscar();

			return $response->withJson($retorno, 200, JSON_UNESCAPED_UNICODE);

		} catch (Exception $e) {
			return $response->withStatus(400)->write("Não foi possível realizar a busca. \n Detalhes: ".$e->getMessage());
		}
	}
}
