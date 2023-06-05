<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/vendor/autoload.php";?>
<?php
use App\Model\User;

$user_obj = new User;
$result = $user_obj->createUser($_POST);
if($result) {
	header("location: /ysdn_thailand/ysdn/member/index.php");
} else {
	header("location: register.php?msg=error");
}
?>