<?php
require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/vendor/autoload.php";
include ('script.js');
use App\Model\Person;
use App\Model\Ref;
use App\Model\Province;


if (isset($_REQUEST['action'])=='edit') {
	$personObj = new Person;
	$person = $personObj->getPersonById($_REQUEST['id']);
	
}
{ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/ysdn/inc/components/head.php";?>
</head>
<body class="font-mali">
	<div class="container">
		<div class="row mt-5">
			<div class="col">
				<div class="card mb-3">
					<div class="card-header bg-primary text-white d-flex justify-content-between">
						<h4>แบบฟอร์ม<?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูลสมาชิก" : "เพิ่มสมาชิกใหม่";?></h4>
						<a href="index.php" class="btn btn-light">ย้อนกลับ</a>
					</div>
					<div class="card-body">
						<form action="save.php" method="POST" id="myForm" enctype="multipart/form-data">
							<input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
							<input type="hidden" name="id" value="<?php echo $person['id']; ?>">
							<div class="form-group">
								<label for="firstname">ชื่อจริง</label>
								<input type="text" name="firstname" required id="firstname" class="form-control" 
								value="<?php  if(isset ($person['firstname'])) 
										{
											echo $person['firstname']; 
										;?>
										<?php };?>">
							</div>
							<div class="form-group">
								<label for="lastname">นามสกุล</label>
								<input type="text" name="lastname" id="lastname" class="form-control" 
								value="<?php  if(isset ($person['lastname'])) 
										{
											echo $person['lastname']; 
										;?>
										<?php };?>">
							</div>
							<div class="form-group">
								<label for="nickname">ชื่อเล่น</label>
								<input type="text" name="nickname" id="nickname" class="form-control" 
								value="<?php  if(isset ($person['nickname'])) 
										{
											echo $person['nickname']; 
										;?>
										<?php };?>">
							</div>	
							<div class="form-group" id="myForm">
								<label for="date">วันเกิด:</label>
								<input type="date" name="dob" id="dob" class="form-control"
								value= "<?php echo $person['dob']; ?>">
								
							</div>
							<div class="form-group">
								<label for="gender_id"></label>
								<select name="gender_id" class="form-control">
									<option value="">เพศ</option>
									<?php
										$refObj = new Ref;
										$genders = $refObj->getRefsByGroupId(2);
										foreach($genders as $gender) {
											$selected = ($gender['ref_id'] == $person['gender_id']) ? "selected" : "";
											echo "
												<option value='{$gender['ref_id']}' {$selected} >{$gender['ref_title']}</option>
											";
										}
									?>
								</select>
							</div>
						
							<h4>เลือกที่อยู่ของคุณ</h2>
							<div class="form-group">
							<label for="sub_district">ตำบล/แขวง</label>
							<input type="text" name="sub_district" id="sub_district" class="form-control"placeholder="ตำบล"
							value="<?php  if(isset ($person['sub_district'])) 
										{
											echo $person['sub_district']; 
										;?>
										<?php };?>">
							</div>
							<div class="form-group">
							<label for="district">อำเภอ/เขต</label>
							<input type="text" name="district" id="district" class="form-control"placeholder="อำเภอ"
							value="<?php  if(isset ($person['district'])) 
										{
											echo $person['district']; 
										;?>
										<?php };?>">
							</div>
							<div class="form-group">
							<label for="province">จังหวัด</label>
							<input type="text" name="province" id="province" class="form-control"placeholder="จังหวัด"
							value="<?php  if(isset ($person['province'])) 
										{
											echo $person['province']; 
										;?>
										<?php };?>">
							</div>
							<div class="form-group">
							<label for="zipcode">รหัสไปรษณีย์</label>
							<input type="text" name="zipcode" id="zipcode" class="form-control"placeholder="รหัสไปรษณีย์"
							value="<?php  if(isset ($person['zipcode'])) 
										{
											echo $person['zipcode']; 
										;?>
										<?php };?>">
							</div>
							
							
			
							<div class="form-group">
								<label for="phone">เบอร์มือถือ</label>
								<input type="text" name="phone" id="phone" class="form-control" 
								value="<?php  if(isset ($person['phone'])) 
										{
											echo $person['phone']; 
										;?>
										<?php };?>">
							</div>
							
							
						</div>
						</body>
						</html>
						

							<div class="form-group">
								<label for="upload">รูปภาพ</label>
								<input type="file" name="upload" id="upload" class="form-control">
								<input type="hidden" name="avatar" id="avatar" class="form-control" 
								value="<?php echo $person ['avatar'];?>">
							</div>
							<button class="btn btn-success" type="submit">บันทึก</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>

		$.Thailand({
		
			$district: $('#sub_district'), // input ของตำบล
			$amphoe: $('#district'), // input ของอำเภอ
			$province: $('#province'), // input ของจังหวัด
			$zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
		
		});

</script>






	

</body>
</html>



<?php }; ?>