<?php
namespace App\Model;

use App\Database\Db;

class Geo extends Db {

	public function getAllGeo() {
		$sql = "
			SELECT
				geographies.id,
				geographies.name
			FROM 
				geographies
			ORDER BY
			
				geographies.name
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}

?>