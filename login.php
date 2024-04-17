<?php
if (isset($_POST['btnlogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $dsn = "mysql:host=localhost;dbname=testings";
   $username="root";
   $pass="";

   try{
        $conn=new PDO($dsn, $username, $pass);
        $query= $conn->prepare("select * from user where email = ? && password = ?");
        $query->bindparam(1, $email);
        $query->bindparam(2, $password);
        $query->execute();

        $count = $query->rowCount();

        if($count > 0)
            header('Location: ./dashboard.php');
        else
            echo 'Invalid username or password';

   }

   catch(PDOException $e){
    echo $e;
   }


}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>

</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-6">
            <form action="" method="POST">
                <div class="mb-3">
                        <input type="email" name = "email" placeholder="Mobile number or Email address" class="form-control">
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" placeholder="New password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="btnlogin" class="btn btn-success">
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
</body>

</html>