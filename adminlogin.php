<?php
session_start();
if(isset($_POST['admin_login']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('test') or die(mysql_error());
 $name=$_POST['admin_name'];
 $pwd=$_POST['admin_pass'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from login where username='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:admin.html');
   }
   else
   {
       $msg="You entered username or password are incorrect";
   echo "<script type='text/javascript'>alert('$msg');</script>";
       header('location:index.php');
   }
 }
 else
 {
     $msg1="Enter both Username and password";
echo "<script type='text/javascript'>alert('$msg1');</script>";
     header('location:index.php');
 }
}
?>