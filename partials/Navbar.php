<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Navbar.css">
    <title>Volunteer Network</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
        <div class="container">
            <a href="../Home/" class="navbar-brand"><img src="../assets/img/logo.png"   alt="" class="w-25 "/></a>
            <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu" >
       <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav mr-5">
                    <li class="nav-item">
                        <a href="../Home/" class="nav-link fw-bold">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Donation/" class="nav-link fw-bold">Donation</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Blog/" class="nav-link fw-bold">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="../Volunteer/" class="nav-link fw-bold">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a href="../AboutUs/" class="nav-link fw-bold">About Us</a>
                    </li>

                    <li class="nav-item">
                    <a href="../auth/" class=" nav-link button">Login</a>
                    </li>
            
                                        
                    

                </ul>
            </div>
        </div>
    </nav>

    <?php
    if(isset($_GET['msg'])){
        ?>
        <div class="alert alert-success" role="alert">
        <?php echo $_GET['msg']; ?>

        </div>
<?php
    }


?>

  
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </body>
        </html>