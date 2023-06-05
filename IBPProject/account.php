<?php 
    include("include/connection.php");

    if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        
        $error = array();

        if(empty($firstname)){
            $error['ac'] = "Enter Firstname";
        }else if(empty($surname)){
            $error['ac'] = "Enter Surname";
        }else if(empty($usesrname)){
            $error['ac'] = "Enter Username";
        }else if(empty($email)){
            $error['ac'] = "Enter Email";
        }else if(empty($phone)){
            $error['ac'] = "Enter Phone Number";
        }else if($gender==""){
            $error['ac'] = "Select Your Gender";
        }else if($country==""){
            $error['ac'] = "Select Your Country";
        }else if(empty($password)){
            $error['ac'] = "Enter Password";
        }else if($confirm_password != $password){
            $error['ac'] = "Password Does Not Match";
        }

        if(count($error)==0){

            $query = "INSERT INTO patient(firstname,surname,username,email,phone,gender,country,password,date_reg, profile) VALUES($firstname,$surname,$username,$email,$phone,$gender,$country,$password,NOW(),'patient.jpg)";

            $res = mysqli_query($connect,$query);

            if($res){
                header("Location:patientlogin");
            }else{
                echo "<script>alert('failed')</script>";
            }
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Create Account</title>
    </head>
    <body>
        <?php 
            include("include/header.php");
        ?>
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 my-2">
                        <h5 class="text-center text-info my-2">Create Account</h5>
                        <form method="post">
                            <div class="alert alert-danger">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname">
                                </div>
                                <div class="form-group">
                                    <label>Surname</label>
                                    <input type="text" class="form-control" name="surname" placeholder="Enter Surname">
                                </div><div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                                </div><div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">Select Your Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control" name="country">
                                        <option value="">Select Your Country</option>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option><option value="Russia">Russia</option><option value="Turkiye">Turkiye</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Your Password">
                                </div>
                                <input type="submit" name="create" value="Create Account" class="btn btn-info">
                                <p>I already have an account <a href="patientlogin.php">Click Here</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>