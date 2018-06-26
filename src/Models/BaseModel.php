<?php

namespace Src\Models;

use Exception;

class BaseModel {

	protected $collection = '';
	protected $dbCollection = '';
	protected $identificadoresExternos = [];

	function __construct($container)
	{
		$this->container = $container;
		$this->collection = $this->definirCollection();
		$this->dbCollection = $this->settings['db']['name'].'.'.$this->collection;
	}

	function __get($property)
	{
		if($this->container->{$property}) {
			return $this->container->{$property};
		}
	}

	protected function definirCollection()
	{
		throw new Exception('Método obrigatório');
	}

	public function buscar() 
	{
		try {
			$query = new \MongoDB\Driver\Query([]);
			$itensBusca = $this->db->executeQuery($this->dbCollection, $query);
			
			$retorno = [];

			foreach ($itensBusca as $item) {
				array_push($retorno, $item);
			}

			return $retorno;

		} catch (\MongoDB\Driver\Exception\Exception $e) {
			
			throw new Exception($e->getMessage());

		}
	}
}