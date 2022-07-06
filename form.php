
<html>
<head>
    <meta charset="UTF-8">
    
    <title></title>
</head>
<body>
    <?php
    $con = mysqli_connect('localhost', 'root', '');
    if(!$con){
        echo 'Not Found!';
    }
    if(!mysqli_select_db($con,'registration form')){
        echo 'Database not selected';
    }
    $name = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $sql = "INSERT INTO registers(user_name, user_email, user_pass) VALUES('$name','$email','$password')";

    if(!mysqli_query($con,$sql)){
        echo 'Not Inserted';
    }
    else{
        echo 'Inserted';
    }
    ?>
</body>
</html>