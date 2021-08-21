<?php
$FirstName = $email = $PhoneNumber= $enquiries = "";
if(isset($_POST['Submit'])){
    
    if(empty($_POST['FirstName'])){
        echo "Enter your first name";
    }else{
        $FirstName= $_POST['FirstName'];
    }


    if(empty($_POST['email'])){
        echo "Enter your email";
    }else{
        $email= $_POST['email'];
    }

    if(empty($_POST['PhoneNumber'])){
        echo "Enter your first name";
    }else{
        $PhoneNumber= $_POST['PhoneNumber'];
    }

    if(empty($_POST['enquiries'])){
        echo "Enter your enquiry";
    }else{
        $enquiries= $_POST['enquiries'];
    }
}








?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resume.css">
    <title>Jenny's Resume</title>

</head>

<body>
    <div class="container">
        <div class="left-column">

            <img src="pic/pic.png" id="profile">
            <div id="names">
                <p id="name">Jenny Ngozi Emenike</p>
                <h3 id="titles"> Student</h3>
            </div>
            <hr>
            <br>



            <div class="mini-titles">
                <p>CONTACT</p>
            </div>
            <p class="details">No 4 , Irepodun Avenue, Ijeshatedo,<br>Surulere, Lagos, Nigeria</p>
            <p class="details">emenikejenny2001@gmail.com</p>
            <p class="details">+2349079863182</p>
            <br>



            <div class="mini-titles">
                <p>SKILLS</p>
            </div>
            <p class="details">1. Problem-Solving Skills</p>
            <p class="details">2. Time Management</p>
            <p class="details">3. Able to work under pressure</p>
            <p class="details">4. Interpersonal Skills</p>
            <p class="details">5. Able to work in a team</p>
            <br>


            <div class="mini-titles">
                <p>HOBBIES</p>
            </div>
            <p class="details">1. Reading</p>
            <p class="details">2. Cooking</p>
            <p class="details">3. Coding</p>
            <p class="details">4. Designing Logos</p>
            <p class="details">5. Dancing</p>




        </div>
        <div class="right">

            <h1 class="rightTitle">EDUCATION</h1>
            <hr>
            <br>

            <p>2020-present</p>
            <b>Aptech</b>
            <p>Advanced Diploma In Software Engineering (ADSE)</p>

            <br>



            <p>2016-2018</p>
            <b>Babcock University High School</b>
            <p>West African Examinations Certificate (WAEC)</p>
            <br>


            <h1 class="rightTitle">VOLUNTEERING</h1>
            <hr>
            <br>
            <p>2019- </p>

            <b>Volunteer In Church's Technical Department</b>

            <p>Lagos, Nigeria</p>
            <br>


            <li>Assisting in the technical facilities within local church.</li>
            <li>Cooperating with the ushering and choir teams to ensure that the church activities run smoothly.</li>
            </li>
            <li>Utilising a sound mixer to ensure sound balance coming from the audio devices become audible for the
                audience.</li>
            <li>Assisting in the accounting department with tithe and offering figures.</li>
            <br>
            <br>


            <h1 class="rightTitle">EMPLOYMENT</h1>
            <hr>
            <br>
            <p>2019- </p>

            <b>Freelance Logo Designer</b>

            <p>Lagos, Nigeria</p>
            <br>


            <li>Designed logos professionally for various brands</li>
            <li>Working with the clients' requirements to ensure the prefect logos for their brands</li>
            </li>
            <li>Providing clients with several revisions for any logo alterations</li>
            <br>
            <hr>

            <h1 class="rightTitle">PORTFOLIO</h1>

            <hr>
            <br>

            <b> Logo portfolio:</b> <a href="https://www.instagram.com/2001jem/" style="margin-top: 10pt;"> Click
                Here</a><br />

            <b>Linkedln</b><a href="https://www.linkedin.com/in/jenny-emenike-8982141ab/"> Click Here</a>



            <br>
            <br>
            <hr>
            <div id="form">
                <form action="success.php" method="POST">
                    <h3 id="enquiryTitle">Let's chat!!!</h3>
                    <p><b>HNG Internship </b><a href="https://internship.zuri.team/"> https://internship.zuri.team/</a>
                    </p>
                    <img src="pic/hng.png" id="hng">

                    <br>

                    <input type="text" name="FirstName" placeholder=" Name" required class="textbox"><br />
                    <br>
                    <input type="email" name="Email" placeholder=" Email" required class="textbox"><br>
                    <br>
                    <input type="text" name="PhoneNumber" placeholder="Phone Number" required class="textbox"><br />
                    <br>
                    <input type="text" name="enquiries" placeholder="Comments" required id="bigbox"><br />
                    <br>
                    <input type="submit" name="Submit" value="Submit" id="btn">
                </form>





            </div>

        </div>

</body>

</html>