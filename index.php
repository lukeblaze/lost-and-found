<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Cyber security</title>
</head>

<body>
    
    <!-- navbar -->
<div class="header text-white">
        <img src="logo.png" alt="logo" height="50" width="50" class="rounded-circle">


        <span class="pull-right" style="padding:10px 30px;text-decoration:none">
        <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i></a>
        </span>
    </div>
    <!-- end navbar -->


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










    <main class="p-5 mt-5 mb-4 bg-dark text-white">
        <h1 class="bg-success text-center text-wite">LOST AND FOUND ITEMS SERVICES</h1>
        <p>
       <b class="text-center"> Don't panic. Most lost items are soon found.</b>
       <br>
           Check for your lost item in the last place you had it. Perhaps it's in the classroom you were just in, so check around your seat and ask the teacher.
           If you don't find it, check the Lost and Found (see below). Check once right away. If you don't find it there, check again later or in a day or two because somebody might have found it and turned it in.
        </p>
        <!-- <button class="btn btn-primary">Learn More</button> -->
    </main>

        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center bg-success">LOST ITEMS</h1>
                    <div class="mb-3 col-lg-12 bg-light shadow">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text"  name="fullName" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                        <input type="text" name="phoneNumber" class="form-control" placeholder="+2547.....">
                    </div>
                
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" name="email" class="form-control" placeholder="Please enter your email">
                    </div>
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="gender" class="form-label">What's your gender?</label>
                        <div>
                        <select name="gender" class="form-select" aria-label="Default select example">
                            <option selected>--Select your gender-- </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>      
                    </div>
                    <br>
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="lostitem" class="form-label">LOST ITEM(s):</label>
                        <input type="text" name="lostitem" class="form-control" placeholder="Item info">
                    </div>
                    </div>
                
                        <!-- <button class="btn btn-primary">Learn More</button> -->
                    
                </div>
                <div class="col-lg-12 bg-light shadow">
                    <h1 class="text-center bg-success">FOUND ITEMS</h1>
                    <div class="mb-3 col-lg-12 bg-light shadow">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text"  name="fullName" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                        <input type="text" name="phoneNumber" class="form-control" placeholder="+2547.....">
                    </div>
                    <div class="mb-3 col-lg-12  bg-light shadow">
                        <label for="lostitem" class="form-label">LOST ITEM(s):</label>
                        <input type="text" name="lostitem" class="form-control" placeholder="Item info">
                    </div>
                        <!-- <button class="btn btn-primary">Learn More</button> -->
                    
                </div>
                <!-- <div class="col-lg-6 bg-light shadow">
                    <h1 class="text-center">About Us</h1>
                    We are a committed lost and found company aiming to releive the stress most people face when they lose their items.
                    Our goal is to make sure all lost items are found in the appropriate manner and by their real owners.
                         <button class="btn btn-primary">Learn More</button>
                    </div>
                        
                </div> -->
            </div>

            <!-- contact us page here -->
            <!-- <div class="row pt-5"></div>
            <h1>Contact us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nam debitis natus quibusdam! Sit, esse nobis? Repellendus magni laboriosam eius placeat culpa, illum ullam ut reiciendis vitae ipsum.            
            </p>
            <form action="index.php" method="POST">
            <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text"  name="firstName" class="form-control" placeholder="Enter your first name">
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" class="form-control" placeholder="Enter your last name">
                </div>
            </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter your phone number">
                    </div>
            </div>
                <div class="row">
                    <div class="col-lg-12">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea  name="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <br>
                <button type="submit" name="submitButton" class="btn btn-primary">Send a Message</button>
            </form> -->

            <!-- End contact us page -->
            <!-- About us page here-->
                
            






            <!-- End About us page -->
            <hr>
            <footer>
                &copy;Company 2022
            </footer>
           
        </div>
    
    







   <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>