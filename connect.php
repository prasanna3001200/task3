<?php
include('connect.php');
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select *from login where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
    header("location:welcom.php");

}else{
    echo '<script>
    window.location.href="index.html";
    alert("login failed.Invalid username or password!")
    </script>';

    
}
}
?>
