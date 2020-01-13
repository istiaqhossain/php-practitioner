<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		// select * from %s
		
		$sql = sprintf(
			'select * from %s',
			$table
		);
		
		$statement = $this->pdo->prepare($sql);

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}	

	public function insert($table, $parameters)
	{
		// insert into %s (%s) values (%s)

		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ',array_keys($parameters)),
			':'.implode(', :',array_keys($parameters))
		);

		try {

			$statement = $this->pdo->prepare($sql);
	
			$statement->execute($parameters);
			
		} catch (Exception $e) {
			
			die($e->getMessage());

		}

	}
}