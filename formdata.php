<?php

if(isset($_POST['btnregister'])){
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];

   $dsn = "mysql:host=localhost;dbname=testings";
   $username="root";
   $password="";

   try{
        $conn=new PDO($dsn, $username, $password);
        $query= ("insert into user(Fname, Lname, email, password, dob, gender) values(?, ?, ?, ?, ?, ?)");
        $query->bindparam(1, $Fname);
        $query->bindparam(2, $Lname);
        $query->bindparam(3, $email);
        $query->bindparam(4, $password);
        $query->bindparam(5, $dob);
        $query->bindparam(6, $gender);

   }

   catch(PDOException $e){
    echo $e;
   }

}


?>