<?php 

/**
 * 
 */
class QueryBuilder 
{
	protected $pdo;
	
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		// PREPARE THE QUERY
		$statement = $this->pdo->prepare("select * from {$table}");

		// EXECUTE THE RESULT

		$statement->execute();

		// FETCH THE RECORD AND RETURN IT

		return $statement->fetchAll(PDO::FETCH_OBJ);

	}

	// public function insert()
	// {
	// 	$statement = $this->pdo->prepare("select * from {$table}");
		
	// 	$statement->execute();
	
	// 	return $statement->fetchAll(PDO::FETCH_OBJ);
	// }

	public function counting($count)
	{
	 	$statement = $this->pdo->prepare("SELECT COUNT(*) as Count FROM {$count}");
	 	$statement->execute();
	 	return $statement->fetch(PDO::FETCH_OBJ);
	}

	public function show($table, $id)
	{
		// PREPARE THE QUERY
		$statement = $this->pdo->prepare("select * from {$table} WHERE id = {$id}");

		// EXECUTE THE RESULT

		$statement->execute();

		// FETCH THE RECORD AND RETURN IT

		return $statement->fetchAll(PDO::FETCH_OBJ);

	}
}