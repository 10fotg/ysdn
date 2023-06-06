<?php
require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/vendor/autoload.php";
use App\Model\Person;
use App\Model\Ref;
use App\Model\Geo;


{ ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/head.php";?>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/profile_nav.php";?>
</head>
<body class="font-mali">
	
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card mb-3">
					<div class="card-header bg-primary text-white d-flex justify-content-between">
						<h4>ระบบข้อมูลสมาชิก CRUD </h4>
						<a href="form.php" class="btn btn-secondary">เพิ่มสมาชิกใหม่</a>
					</div>
					<div class="card-body">
						<form action="" class="form-inline mb-3" method="GET">
							<div class="input-group mr-2">
								<div class="input-group-prepend">
									<div class="input-group-text">ค้นหา</div>
								</div>
								<input type="text" name="search" id="search" class="form-control" value="<?php echo isset($_REQUEST['search']);?>">
							</div>
							<div class="input-group mr-2">
								<div class="input-group-prepend">
									<div class="input-group-text">เพศ</div>
								</div>
								<select name="gender_id" class="form-control">
									<option value="">ทั้งหมด</option>
									<?php
										$refObj = new Ref;
										$genders = $refObj->getRefsByGroupId(2);
										foreach($genders as $gender) {
											$selected = ($gender['ref_id'] == $_REQUEST['gender_id']) ? "selected" : "";
											echo "
												<option value='{$gender['ref_id']}' {$selected} >{$gender['ref_title']}</option>
											";
										}
									?>
								</select>
							</div>
							<div class="input-group mr-2">
								<div class="input-group-prepend">
									<div class="input-group-text">ภาค</div>
								</div>
								<select name="club_id" class="form-control">
									<option value="">ทั้งหมด</option>
									<?php
										$geogObj = new Geo;
										$geos = $geogObj->getAllGeo();
										foreach($geos as $geo) {
											$selected = ($geo['id'] == $_REQUEST['geo']) ? "selected" : "";
											echo "
												<option value='{$geo['id']}' {$selected} >{$geo['name']}</option>
											";
										}
									?>
								</select>			
							</div>
							<button type="submit" class="btn btn-primary">ตกลง</button>
						</form>
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Avatar</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Nickname</th>
									<th>DOB</th>
									<th>Gender</th>
									<th>Phone</th>
									<th>sub_district</th>
									<th>District</th>
									<th>Province</th>
									<th>Zipcode</th>
									<th>จัดการ</th>
									
								
									
								
								</tr>
							</thead>
							<tbody>
								<?php

									$personObj = new Person();

									$filters = array_intersect_key($_REQUEST, array_flip(['search', 'gender_id', 'geo']));
									$persons = $personObj->getAllPersons($filters);
									$n=0;
									foreach($persons as $person) {
										$n++;
										echo "
											<tr>
												<td>{$n}</td>
												<td><img src='{$person['avatar']}' class='avatar'></td>
												<td>{$person['firstname']}</td>
												<td>{$person['lastname']}</td>
												<td>{$person['nickname']}</td>
												<td>{$person['dob']}</td>
												<td>{$person['gender']}</td>
												<td>{$person['phone']}</td>
												<td>{$person['sub_district']}</td>
												<td>{$person['district']}</td>
												<td>{$person['province']}</td>
												<td>{$person['zipcode']}</td>
		
												<td>
													<a href='form.php?id={$person['id']}&action=edit' class='mr-2 btn btn-info'>แก้ไข</a>
													<a href='save.php?id={$person['id']}&action=delete' class='btn btn-danger'>ลบ</a>
												</td>
											</tr>
										";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</body>
</html>
<?php };?>