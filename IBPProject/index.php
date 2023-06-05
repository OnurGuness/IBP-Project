
<!DOCTYPE html>
<html>
    <head>
        <title>HYS Home Page</title>
    </head>
    <body>
        <?php
include("include/header.php");
?>
<div style="margin-top: 50px;">
    <div class="container">
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-3 mx-1 shadow">
                    <img src="resimler/info.png" style="width: 92%;height:190px;">
                    <h5 class="text-center">Click on the button for more information</h5>

                    <a href="#">
                        <button class="btn btn-success my-3" style="margin-left:20%;">More Information!!</button></button>
                    </a>   
                </div>
                
                <div class="col-md-4 mx-1 shadow">
                    <img src="resimler/patient.jpeg" style="width: 100%;">
                    
                    <h5 class="text-center">Create Account so that we can take good care of you.</h5>

                    <a href="account.php">
                        <button class="btn btn-success my-3" style="margin-left: 30%;">Create Account!!</button>
                    </a>     
                </div>
                <div class="col-md-3 mx-1 shadow">
                    <img src="resimler/doctor.jpeg" style="width: 100%;">

                    <h5 class="text-center">We are employing for doctors</h5>

                    <a href="#">
                        <button class="btn btn-success my-3" style="margin-left: 30%;">Apply Now!!</button> 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>