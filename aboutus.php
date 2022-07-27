<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>bootstap-gridlayout</title>
</head>
<body>
     <!-- navigation bar -->
     <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
         <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
            </button>
                
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-link active">Home</a>
                    <a href="aboutus.php" class="nav-link">About Us</a>
                    <a href="contactus.php" class="nav-link">Contact us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End navigation bar -->
    
      <!-- About Us page here -->
<div class="row pt-5 bg-dark col-lg-12 mt-5 mb-5 text-white">
    <div class="row bg-light shadow text-black text-center">
    <h1>About Us</h1>
    <p>We are located at the company's lobby across from the security desk</p>
    <p class="text-success">MOTTO:Give The Best</p>
    </div>
   

        <div class="row radius-border:50;">
        <img src="logo.png" alt="logo" height="400" width="100" class="rounded" border-radius="20px">
        </div>
        
        <div class="row mt-5">
            <div class="mb-5 col-lg-12 card-body shadow">
            <h2>Our mission</h2></div>
            <p>To make sure everyone expiriences a day without stress of looking for their lost items.</p>
            </div>
            <div class="col-lg-6 card-body shadow bg-light text-black p-5">
                <h3>Our goal</h3>
                <p class="text-success">We are a committed lost and found company aiming to releive the stress most people face when they lose their items.</p>                 
            </div> 
            <div class="col-lg-6 card-body shadow bg-light text-black p-5">
                <h3>Our Commitment</h3>
                <p class="text-success">Our goal is to make sure all lost items are found in the appropriate manner and by their real owners.</p>                 
            </div>         
            <div class="text-secondary text-center mb-3 col-lg-12 bg-primary text-white">
                <h6>Subscribe to get information, latest news about<br>
                    Lost and found items</h6>
            </div>
        </div>
            <div class=" row ">
                <form action="aboutus.php" method="POST">
                    <table>
                    <tr>
                        <td class="col-lg-6">
                            <label for="email" class="form-label"></label>
                            <input type="email" name="email" class="form-control" placeholder="Your email address">
                        </td>

                        <td class="col-lg-6">
                            <button name='submitButton' class="btn btn-primary">Subscribe</button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
            </div>
    
    <!-- End About Us page -->
   <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
