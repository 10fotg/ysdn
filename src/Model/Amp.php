<?php
namespace App\Model;

use App\Database\Db;

class Amp extends Db {

	public function getAmp() {
		$sql = "
			SELECT
                *
			FROM 
                amphures
			ORDER BY
			
                amphures.id
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}
?>