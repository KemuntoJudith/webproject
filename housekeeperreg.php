<!DOCTYPE html>
<html>
<head>
<title>Housekeeper Registration</title>
<link rel="stylesheet" href="daisycss.css">
<style>
  form{padding:10px}
  table, th, td {border: 1px solid whitesmoke;}
  body{font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; background-image: url(images/background.png); color: black; font-size: 16px; font-weight: 300; text-emphasis: bold;}
</style>
</head>
<body>

    <?php

        $firstname = $lastname =  $age = $gender = $phone = $comments = $email = $pass = $repass="";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = test_input($_POST["firstname"]);
            $lastname = test_input($_POST["lastname"]);
            $city = test_input($_POST["city"]);
            $servicetype = test_input($_POST["servicetype"]);
            $phone = test_input($POST["phone"]); 
            $comments = test_input($_POST["comments"]);
            $email = test_input($POST["email"]); 
            $pass = test_input($POST["pass"]);
            $repass = test_input($POST["repass"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = striplashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        ?>

<p><b>Fill out the details below and we will get back to you as soon as we can</b></p>
<br>
    <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    First Name: <input type="text" name="firstname">
    Last Name: <input type="text" name="lastname">
    <br><br>  
    Age: 
    <select>  
        <option value="20-25">20-25</option>  
        <option value="26-30">26-30</option>  
        <option value="31-35">31-35</option>  
        <option value="36-40">36-40</option>  
        <option value="41-45">41-45</option>  
        <option value="46-50">46-50</option>   
        </select> 
        <br><br>
    Gender: <br>
    <input type="radio" name="male"/> Male <br>  
    <input type="radio" name="female"/> Female <br>  
    <br><br>  
    Tell us more about yourself and the kind of work you are looking for: <br>
    <textarea id="comments" name="comments" textarea cols="80" rows="5" style="height:200px"></textarea>
    <br><br>
    Phone Number: <input type="number" id="phone">
    E-mail: <input type="email" name="email">
    <br><br>
    Password: <input type="password" name="pass">
    Re-type Password: <input type="password" name="repass">
    <br><br>
      <input type="submit" value="Submit"><br>
      <br>
      <a href="C:\Users\JUDITH\OneDrive\Documents\Web App Labs\web project\Home.html"><b>Return to HOME</b></a>
    <br><br>
    
    </form>

    </body>
    </html>