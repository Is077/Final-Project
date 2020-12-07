<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="sticky">
            <div class="navi-menu">
                <img src="logo/complogo.png" alt="Company Logo" id="logo">
                <ul class="main-menu">
                <li><span style="font-size:20px;"><p style="color: white;"><?php if(isset($errors['Error_field'])) echo $errors['Error_field'];?></p></span></li>
                    <li style="margin-left:300px"class="onsite"><a href= "home.php">Home</a></li>
                    <li><a href= "management.php">Management</a></li>
                    <li><a href= "list.php">Student List</a></li>
                    <li><a href= "retrieve.php">Attendance</a></li>
                </ul>
            </div>
        </nav>
        <div class="intro">
            <h1><p style="color: white;">Welcome to Smart Kids Learning Center<br>Learning begins here</h1></p>
            <a class="Bmoved active" target="_blank"></a>
            <a class="Bmoved active" target="_blank"></a>
        </div>
    </header>
    <section class="section-tutors js--section-features">
        <div class="navi-menu">
            <h2>About Us</h2>
            <p> Smart Kids Learning Center is an educational prep center. Where your child's educational 
                needs are met. We offer tutoring in the subjects areas of: Mathematics, English, Science, Physics and Chemistry. 
            </p>
            <br><br>
        </div>

                    <div class="column">
                        <p class="long-text">Mission</label></p>
                        <p class="long-text">Our mission is to provide students with the educational support they need irrespective of their abilities</p>
                        <br>
                        <br>
                    </div>
                    <div class="column">
                        <p class="long-text">Vision</label></p>
                        <p class="long-text">Our vision is to provide students with the necessary tools to excel in the classroom</p> 
                        <br><br>
                    </div> 
                 </div>
            </div> 

        <p>Address:</p><br>
            <address>
            Written by <a href="mailto:webmaster@example.com">Israel O</a>.<br> 
            Visit us at: 425 Crescent East Legon, Accra, Ghana<br>
            Tel: +233 55 555 5555, +233 00 000 0000<br>
            P.O.Box 199, Accra Crescent,<br>
            GHANA
            </address>
    </section>
    <footer>
        <div class="footer-whole">
            <div class="footer-div ">
                <section>
                    <h4>Quick Links</h4>
                    <a href="management.php">Management</a>
                    <a href="list.php">Student List</a>
                </section>
            </div> 
            <div class="Copy">
                    <p>
                        This webpage was created for the course "Web Development".
                    </p>
                    <p>
                        Copyright &copy; 2020 by Israel Orevaoghene. All rights reserved
                    </p>
            </div>
        </div>
    </footer> 

</body>
</html>