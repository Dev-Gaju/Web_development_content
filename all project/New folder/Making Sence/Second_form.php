<html>
    <head>
        <style>
            .required{
                color:red;
            }
        </style>
    </head>
    <body>
        
        <?php
        echo '<pre>';
        print_r($_POST);
        
        
        ?>
        <?php
        $fnameErr = $lnameErr = $emailErr = $wpErr =$comErr = $genderErr= "";
        $fname = $lname = $email = $wp =$com = $gender= "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["fname"])){
                $fnameErr= "Frrst Name is Required";
            }  else {
            $fname=$_POST["fname"];   
            if(!preg_match("/^[a-z A-Z]*$/",$fname)){
                $fnameErr= "Letter and whiteSpce Only";
            }
            }
             if(empty($_POST["lname"])){
                $lnameErr="Last Name is Required";
            }  else {
            $lname=$_POST["lname"];   
             if(!preg_match("/^[a-z A-Z]*$/",$lname)){
                $lnameErr= "Letter and whiteSpce Only";
            }
            }
             if(empty($_POST["email"])){
                $emailErr="Email is Required";
            }  else {
            $email=$_POST["email"];    
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr= "INVALID EMAIL";
             }
            }
             if(empty($_POST["wp"])){
                $wp="";
            }  else {
            $wp=$_POST["wp"];    
            }
             if(empty($_POST["com"])){
                $com="";
            }  else {
            $com=$_POST["com"];    
            }
             if(empty($_POST["gender"])){
                $genderErr="Gender is required";
            }  else {
            $gender=$_POST["gender"];    
            }
            
        }
        ?>
        
        
        
        
        <h3 class="required">Validation PHP Form</h3>
        <form method="post">
            First Name: <input type="text" name="fname"/>
            <span class="required">*<?php echo $fnameErr;?></span>
            <br><br>
            Last Name: <input type="text" name="lname"/>
            <span class="required">*<?php echo $lnameErr;?></span>
            <br><br>
            Email:         <input type="email" name="email"/>
            <span class="required">*<?php echo $emailErr;?></span>
            <br><br>
            Webpage:   <input type="text" name="wp"/>
            <br><br>
            Comment:   <textarea rows="10" cols="30" name="com"></textarea>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="Others">Others
            <span class="required">*<?php echo $genderErr;?></span>
            <br><br>
            <input type="submit">
        </form>
        
        
        
        
        <?php
    echo "<h2>the output is<h2>";
    echo "<br>";
    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $wp;
    echo "<br>";
    echo $com;
    echo "<br>";
    echo $gender;
        
        
        ?>
        
    </body>
</html>