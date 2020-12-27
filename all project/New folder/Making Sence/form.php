 <head>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
     <?php
       
       $fnameErr=$lnameErr=$emailErr=$websiteErr=$comentErr=$genderErr="";
       $fname=$lname=$email=$website=$coment=$gender="";
          if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(empty($_POST["name"])){
            $fnameErr="Name is Required";
        }
        else{
            $fname=$_POST["name"];
            if (!preg_match("/^[a-z A-Z]*$/",$fname)){
                $fnameErr="Only print WhiteSpace And letter";
            }
        }
             if(empty($_POST["Name"])){
                 $lnameErr="Last Name is Required";
             }
                 else{
                     $lname=$_POST["Name"];
                     if (!preg_match("/^(a-zA-Z)*$/",$lname)){
                         $lnameErr="Only letter and whiteSpace Required";
                     }
                 }
                     if (empty($_POST["Email"])){
                         $email="";
                     }  else {
                         $email=$_POST["Email"];
                         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                             $email="Invalid mail";
                         }
                     }
                     if(empty($_POST["website"])){
                         $website="";
                     }else{
                         $email=$_POST["website"];
                         if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
                             $websiteErr="Invalid website";
                         }
                     }
                     if (empty($_POST["Comment"])) {
                         $coment="";
                     }else{
                         $coment=$_POST["Comment"];
                     }
                    if(empty($_POST["Gender"])){
                        $genderErr="gender is required";
                    } else {
                        $gender=$_POST["Gender"];
                    }
                    
 
         }
        
        ?>
        
        <h2 class="error">Required Information</h2>
        <form method="POST">
            <input type="text" name="fname" placeholder="First Name">
            <span class="error">* <?php echo "$fnameErr";?></span>
            <br><br>
            <input type="text" name="lname" placeholder="Last name">
            <span class="error">* <?php echo "$lnameErr";?></span>
            <br><br>
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <input type="text" name="website" placeholder="Website">
            <br><br>
            <textarea placeholder="Comment" name="coment" rows="10" cols="30"></textarea>
            <br><br>
            <input type="radio" name="gender" placeholder="male">Male
            <input type="radio" name="gender" placeholder="female">Female
            <input type="radio" name="gender" placeholder="Others">Others
            <span class="error">*<?php echo "$genderErr";?></span>
            <br><br>
            <input type="submit" name="submit">
            
            
        </form>
        <?php
        echo "<h2>Output Is here</h2>";
        echo "<br>";
        echo $fname;
        echo "<br>";
        echo $lname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $coment;
        echo "<br>";
        echo $gender;
        ?>
 </body>

 
 