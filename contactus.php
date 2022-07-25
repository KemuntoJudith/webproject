<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="daisycss.css">
<style>
  form{padding:10px}
  table, th, td {border: 1px solid whitesmoke;}
  body{font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; background-image: url(images/background.png); color: black; font-size: 16px; font-weight: 300; text-emphasis: bold;}
</style>
</head>
<body>

    <?php

$fullname = $email =  $city = $requesttype = $ticketsubject= "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = test_input($_POST["fullname"]);
            $email = test_input($POST["email"]); 
            $city = test_input($_POST["city"]);
            $requesttype = test_input($_POST["requesttype"]);
            $ticketsubject = test_input($_POST["ticketsubject"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = striplashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

<p><b> Fill out the details below and we will get back to you as soon as we can</b></p>
<br>
    <form method="post" action="contactform.php">

    Full Name: <input type="text" name="fullname">
    <br><br>  
    E-mail: <input type="email" name="email">
    <br><br>
    City: <input type="text" id="city" name="city" placeholder="Where do you live?">
    <br><br>
    Request Type: <select id="requesttype" name="requesttype">
        <option value="Inquiry">Inquiry</option>
        <option value="Complaint">Complaint</option>
        <option value="communication">Communication/Suggestion</option>
      </select>
    <br><br>
    Subject: <br>
    <textarea id="ticketsubject" name="ticketsubject" rows="10" cols="60" placeholder="How can we help?" style="height:200px"></textarea>
      <br><br>
      <input type="submit" value="Submit"><br>
      <br>
      <a href="C:\Users\JUDITH\OneDrive\Documents\Web App Labs\web project\Home.html"><b>Return to HOME</b></a>
    <br><br>
    
    </form>

    </body>
    </html>