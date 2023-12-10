<?php

$con=mysqli_connect("localhost","root","","mystudy");
if(!$con){
    echo  "Not connected";
}
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
$email=$_POST['email'];

if($password!=$cpassword){

    echo "Password didn't match !! try again";

}else{

    $query="SELECT * FROM users WHERE email='$email'";
    $res=mysqli_query($con,$query);
    if(!$res->num_rows>0){
        $sql="INSERT INTO users(username,passwor,email)VALUES('$username','$password','$email')";
        $result=mysqli_query($con,$sql);
       if($result) {
        header('LOCATION:form.php#about-us');
            // echo "success";
    
        }else{
            echo "Error";
        }


    }else{
        echo "Email is already exist";
    }


   



}






}


?>