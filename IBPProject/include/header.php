<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

        <link rel="stylesheet" type="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
    </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-info
    bg-info">
        <h5 class="text-white">Hasta Yönetim Sistemi</h5>

        <div class="text-left"></div>
            
        <ul class="navbar-nav">
            <?php 
                if (isset($_SESSION['admin'])) {
                    
                    $user = $_SESSION['admin'];
                    echo'
                    <li class="nav-item"><a href="#"class="nav-link text-white">'.$user.'</a></li>
                    
                    <li class="nav-item"><a href="logout.php"class="nav-link text-white">logout</a></li>';
                }else if(isset($_SESSION['patient'])){
                    $user = $_SESSION['patient'];
                    echo '<li class="nav-item"><a href="#"class="nav-link text-white">'.$user.'</a></li>
                    
                    <li class="nav-item"><a href="logout.php"class="nav-link text-white">logout</a></li>';
                } 
                else {
                    echo'<li class="nav-item"><a href="adminlogin.php"class="nav-link text-white">Admin</a></li>
            
                    <li class="nav-item"><a href="#"class="nav-link text-white">Doctor</a></li>
                    
                    <li class="nav-item"><a href="patientlogin.php"class="nav-link text-white">Patient</a></li>';
                }
                
            
            ?>
        </ul>
    </nav>
</body>
</html>