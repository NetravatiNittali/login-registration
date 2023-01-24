<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="register.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <h2>Responsive Registration </h2>
        <h2>Form</h2>
        <div class="form-container">
            <form action="#" method="POST" autocomplete="off">
                
                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="email" placeholder="Email" class="text-name" name ="email" required>
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Password" class="text-name" name="password" required>
                </div>
                <div class="input-name">
                    <i class="fa fa-lock lock"></i>
                    <input type="password" placeholder="Re-type Password" class="text-name" name="conpassword" required>
                </div>
                <div class="input-name">
                    <i class="fa fa-user lock"></i>
                    <input type="text" placeholder="First Name" class="name" name="fname" required>
                    <span>
                        <i class="fa fa-user lock"></i> 
                        <input type="text" placeholder="Last Name" class="name" name="lname" required>
                    </span>
                </div>
                <div class="input-name">
                    <input type="radio" class="radio-button" name="gender" value = "Male" required>
                    <label style="margin-right: 30px;">Male</label>

                    <input type="radio" class="radio-button" name="gender" value = "Female" required>
                    <label>Female</label>
                </div>
                <div class="input-name">
                    <select class="country" name = "country" required>
                        <option value ="">Select a country</option>
                        <option value = "India">India</option>
                        <option value ="Japan">Japan</option>
                        <option value="USA">USA</option>
                        <option value ="Canada">Canada</option>
                    </select>
                    <div class="arrow"></div>
                </div>
                <div class="input-name">
                    <input type="checkbox" class="check-button" required>
                    <label for="check-button" class="check">I agree with terms and conditions</label>
                </div>
                <div class="input-name">
                    <input type="checkbox" class="check-button">
                    <label for="check-button" class="check">I want to receive the newsletter </label>
                </div>
                <div class="input-name">
                    <input type="submit" class="button" value="Register" name="register">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>

<?php 
    if($_POST['register'])
    {
        $email    = $_POST['email'];
        $pwd      = $_POST['password']; 
        $cpwd     = $_POST['conpassword'];   
        $fname    = $_POST['fname'];
        $lname    = $_POST['lname'];
        $gender   = $_POST['gender'];
        $country  = $_POST['country'];

        $query = "INSERT INTO DETAILS VALUES('$email','$pwd','$cpwd','$fname','$lname','$gender','$country')";
        $data = mysqli_query($conn, $query);

        if($data)
        {
           // echo "data inserted into Database";
           echo "<script>alert('Registration Successful');</script>";
        }
        else
        {
           // echo "Failed";
           echo "<script>alert('Registration Unsuccessful');</script>";
        }
    }    
       
    
?>
