<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Form Design</title>
</head>
<body>
   <div class="center">
        <h1>Login</h1>
        <form action="#" method="POST" autocomplete="off">
            <div class="form">
                <input type="email" name="email" class="textfeild" placeholder ="EMAIL" required>
                <input type="password" name="password" class="textfeild" placeholder = "PASSWORD" required>

                <div class="forgetpass"><a href="#" class ="link" onclick = "message()">Forget Password?</a></div>

                <input type ="submit" name="login" value ="SIGN IN" class ="btn">

                <div class ="signup">New Member ? <a href = "form.php" class ="link">Register Here </a></div>
            </div>
        </form>
   </div>
   <script>
        function message()
        {
            alert("Try to remember your password");
        }
   </script>
</body>
</html>

<?php 
    include ("connection.php");

    if($_POST['login'])
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM details WHERE email = '$email' AND password = '$pwd'";

        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);

        if($total == 1)
        {
            echo "<script>alert('Login successful');</script>";
        }
        else
        {
            echo "<script>alert('Login failed');</script>";
        }
    }

?>