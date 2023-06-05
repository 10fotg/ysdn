<?php require $_SERVER['DOCUMENT_ROOT']."/ysdn_thailand/vendor/autoload.php";?>
<?php
use App\Model\User;

$user_obj = new User;
print_r ($user_obj);
$result = $user_obj->checkUser($_POST);

if($result){
	header("location: /ysdn_thailand/ysdn/member/index.php");
} else {
	header("location: login.php?msg=error");
}
?>