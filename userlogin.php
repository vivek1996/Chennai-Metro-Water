<?php
session_start();
if(isset($_POST['action']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('test') or die(mysql_error());
 $name=$_POST['user_name'];
 $pwd=$_POST['user_pass'];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("select * from login1 where username='".$name."' and password='".$pwd."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    header('location:view.php');
   }
   else
   {
       $msg="You entered username or password is incorrect";
     echo "<script type='text/javascript'>alert('$msg');
    </script>";
       header('location:index.php');
   }
 }
 else
 {
    $msg1="Enter both username and password";
 echo "<script type='text/javascript'>alert('$msg1');</script>";
     header('location:index.php');
 }
}
?>