
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
   $pass="";

   try{
        $conn=new PDO($dsn, $username, $pass);
        $query= $conn->prepare ("insert into user(Fname, Lname, email, password, dob, gender) values(?, ?, ?, ?, ?, ?)");
        $query->bindparam(1, $Fname);
        $query->bindparam(2, $Lname);
        $query->bindparam(3, $email);
        $query->bindparam(4, $password);
        $query->bindparam(5, $dob);
        $query->bindparam(6, $gender);
        $query->execute();

   }

   catch(PDOException $e){
    echo $e;
   }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <header>
                    <img src="logo.png" alt="">
                </header>

                <div col-8>
                    <h3>Create a new account</h3>
                    <h5>it's quick and easy.</h5>
                    <hr>
                </div>
                
               <form action="" method="post">
                <div class="mb-3" style="display: flex;">
                    <input type="text" name = "Fname"  id = "name" placeholder="First Name" class="form-control col-xs-3">
                    <input type="text" name = "Lname" id = "name" placeholder="Last Name" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="email" name = "email" placeholder="Mobile number or Email address" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="password" name="password" placeholder="New password" class="form-control">
                </div>

                <div class="mb-3">
                    <small>date of birth</small>
                    <input type="date" name = "dob" class = "form-control">
                </div>
                
                <div class="mb-3">
                <small>Gender</small><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="gender" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>

                <div class="mb-3">
                    <input type="submit" name = "btnregister" class = "btn btn-success form-control" >
                </div>






                </form>
                    
            

            </div>
        </div>
    </div>    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</script>
</body>
</html>