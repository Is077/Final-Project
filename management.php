<?php 

    include 'functions.php';
    if(!isset($_SESSION["logged_in"])) {
    header("Location:index.php");
    }

    //Initialization
    $UserName['fname'] = "";
    $UserName['lname'] = "";
    if (isset($_POST['fname'])) $UserName['fname'] = htmlspecialchars($_POST['fname']);
    if (isset($_POST['lname'])) $UserPhone['lname'] = htmlspecialchars($_POST['lname']);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="sticky">
            <div class="navi-menu">
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
            <h1><br></h1>
            <a class="Bmoved active"  target="_blank"></a>
            <a class="Bmoved active"  target="_blank"></a>
        </div>
    </header>
    <section class="section-tutors js--section-features">
        <div class="navi-menu">
            <h2>Add a new Student</h2>
            <p class="long-text">Fill the form to add a new student to the database</p>
        </div>
        <form method="POST" target="_self" class="book-form">
            <div class="book-whole">
                <div class ="book-div">
                    <div class="column">
                        <label>First Name</label>
                        <input type="text" id="fname" name="fname" class="form-control" value="<?php echo $UserName['fname']; ?>"/>
                        <span style="font-size:15px; margin-left:-3px;"><p style="color: red;"><?php if(isset($errors['Error_fname'])) echo $errors['Error_fname'];?></p></span>
                        <br>
                        <br>
                        <label>Last name</label>
                        <br>
                        <input type="text" id="lname" name="lname" class="form-control"/>
                        <span style="font-size:15px; margin-left:-3px;"><p style="color: red;"><?php if(isset($errors['Error_lname'])) echo $errors['Error_lname'];?></p></span>
                    </div>
                    <div class="column">
                        <label>Age</label>
                        <br>
                        <input type="tinyint" id="age" name="age"  class="form-control"/>
                        <span style="font-size:15px; margin-left:-1px;"><p style="color: red;"><?php if(isset($errors['Error_age'])) echo $errors['Error_age'];?></p></span>
                        <br>
                        <br>
                        <label>Gender</label>
                        <input type="text" id="gender" name="gender"  class="form-control"/>
                        <span style="font-size:15px; margin-left:-1px;"><p style="color: red;"><?php if(isset($errors['Error_gender'])) echo $errors['Error_gender'];?></p></span>
                        <br>
                        <input type="submit" class="btn-primary" value="Submit" name = "save">

                    </div> 

                    <div class="column">
                    <label>Date</label>
                        <br>
                        <input type="date" id="_date" name="_date" placeholder="yyyy-mm-dd" class="form-control"/>
                        <span style="font-size:15px; margin-left:-1px;"><p style="color: red;"><?php if(isset($errors['Error_date'])) echo $errors['Error_date'];?></p></span>
                        <br>
                        <label>Year/Class</label>
                        <input type="text" id="ygroup" name="ygroup"  class="form-control"/>
                        <span style="font-size:15px; margin-left:-1px;"><p style="color: red;"><?php if(isset($errors['Error_yg'])) echo $errors['Error_yg'];?></p></span>
                        <br>
                    </div>
                 </div>
            </div> 
            
        </form>
    </section>
    <footer>
        <div class="footer-whole">
            <div class="footer-div ">
                <section>
                    <h4>Quick Links</h4>
                    <a href="management.php">Management</a>
                    <a href="list.php">Student List</a>
                </section>
                <section>
                    <h4>Developments</h4>
                    <div class="media-links">
                        <a href="https://github.com/AshWeb2020/ashweb20-team-team-o" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
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