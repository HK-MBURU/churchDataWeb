<?php
session_start();
require'dbcon.php';

if(isset($_POST['delete_member'])){
    $member_id=mysqli_real_escape_string($con,$_POST['delete_member']);

    $query="DELETE FROM member_data WHERE id='$member_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Member Deleted Succesfully";
        header("Location:index.php");
        exit(0);

    }else{
        $_SESSION['message']="Member Not Deleted ";
        header("Location:index.php");
        exit(0);

    }
}

if(isset($_POST['update_member'])){
    $member_id=mysqli_real_escape_string($con,$_POST['member_id']);

    $idName=mysqli_real_escape_string($con,$_POST['idName']);
    $idNum=mysqli_real_escape_string($con,$_POST['idNum']);
    $bName=mysqli_real_escape_string($con,$_POST['bName']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $area=mysqli_real_escape_string($con,$_POST['area']);
    $pastor=mysqli_real_escape_string($con,$_POST['pastor']);
    $present=mysqli_real_escape_string($con,$_POST['present']);

    $query="UPDATE member_data SET  idName='$idName',idNo='$idNum',baptismName='$bName',email='$email',phone='$phone',area='$area',pastor='$pastor',present='$present' 
    WHERE id='$member_id'";
    $query_run=mysqli_query($con,$query);

    if($query_run){
        $_SESSION['message']="Member Updated Succesfully";
        header("Location:index.php");
        exit(0);

    }else{
        $_SESSION['message']="Member Not Updated ";
        header("Location:index.php");
        exit(0);

    }



}

if(isset($_POST['save_member'])){
    $idName=mysqli_real_escape_string($con,$_POST['idName']);
    $idNum=mysqli_real_escape_string($con,$_POST['idNum']);
    $bName=mysqli_real_escape_string($con,$_POST['bName']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $area=mysqli_real_escape_string($con,$_POST['area']);
    $pastor=mysqli_real_escape_string($con,$_POST['pastor']);
    $present=mysqli_real_escape_string($con,$_POST['present']);

    $query="INSERT INTO member_data (idName,baptismName,area,pastor,phone,idNo,email,present	
	) VALUES
    ('$idName','$bName','$area','$pastor','$phone','$idNum','$email','$present')";

    $query_run=mysqli_query($con,$query);
    if($query_run){
        $_SESSION['message']="Member Added Succesfully";
        header("Location:student-create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Member not added ";
        header("Location:student-create.php");
        exit(0);

    }

   
}

?>