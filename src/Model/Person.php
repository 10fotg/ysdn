<?php
namespace App\Model;

use App\Database\Db;

class Person extends Db {

	public function getAllPersons($filters=[]) {

		$where = "";

		if (isset($filters['search'])) {
			$where .= " AND ( 
				persons.firstname LIKE :search 
				OR persons.nickname LIKE :search
			) ";
			$filters['search'] = "%{$filters['search']}%";
		}else{
			unset($filters['search']);
		}

		if (isset($filters['gender_id'])) {
			$where .= " AND persons.gender_id = :gender_id ";
		}else{
			unset($filters['gender_id']);
		}

		if (isset($filters['geographies.id'])) {
			$where .= " AND persons.geo = :geo";
		}else{
			unset($filters['geo']);
		}

		$sql = "
			SELECT
				persons.id,
				persons.firstname,
				persons.lastname,
				persons.nickname,
				persons.dob,
				persons.phone,
				persons.avatar,
				refs.ref_title AS gender,
				persons.sub_district,
				persons.district,
				persons.province,
				persons.zipcode


			FROM 
				persons
				LEFT JOIN refs ON persons.gender_id = refs.ref_id
				
				

			
			WHERE
				persons.id > 0
				{$where}
			ORDER BY 
				persons.id DESC
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($filters);
		$data = $stmt->fetchAll();
		
		return $data;
		
	}

	public function addPerson($person) {
		$sql = "
			INSERT INTO persons (
				firstname, 
				lastname, 
				nickname, 
				dob, 
				gender_id, 
				avatar, 
				phone,
				sub_district,
				district,
				province,
				zipcode

			
		

			) VALUES (
				:firstname, 
				:lastname, 
				:nickname, 
				:dob, 
				:gender_id, 
				:avatar, 
				:phone,
				:sub_district,
				:district,
				:province,
				:zipcode
		
			
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return $this->pdo->lastInsertId();
	}

	public function updatePerson($person) {
		$sql = "
			UPDATE persons SET
				firstname = :firstname, 
				lastname = :lastname, 
				nickname = :nickname, 
				dob = :dob,
				gender_id = :gender_id, 
				avatar = :avatar, 
				phone = :phone,
				sub_district =  :sub_district,
				district = :district,
				province = :province,
				zipcode =  :zipcode
				
		
			
			
			WHERE id = :id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return true;
	}

	public function deletePerson($id) {
		$sql = "
			DELETE FROM persons WHERE id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		return true;
	}
//ดึงข้อมูลคนเดียวเพื่อนำมาแก้ไข ให้ค่าเดิมยังคงอยู่ โดยใช้ class Person
	public function getPersonById($id) {
		$sql = "
			SELECT
				persons.id,
				persons.firstname,
				persons.lastname,
				persons.nickname,
				persons.dob,
				persons.phone,
				persons.gender_id,
				persons.avatar,
				persons.sub_district,
				persons.district,
				persons.province,
				persons.zipcode
			
			FROM 
				persons
			WHERE 
				persons.id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}
}
?>