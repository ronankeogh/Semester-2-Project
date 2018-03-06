<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Payment Details</title>
        <link rel="Stylesheet" href="homepagecss.css" type="text/css" />
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
           <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #000;
}

li {
    float: left;
}

li a {
    display: block;
    color: #fff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a :hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #808080;
}
</style>
<body>
 
            <form name = "myForm"  method="POST" action="Ebus3.php">
                    <br>
                    <label for = "name">
                        <strong>  Name:</strong>
                        <br>
                        <input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for = "email">
                        <strong> Email:</strong>
                        <br>
                        <input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    
                    <label for = "user_number">
                        <strong>Card Number</strong></label>
                    <br>
                     <input type = "text" id ="user_number" name="user_number" maxlength="16"/>
               
                <br><br>
                
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
           </div>
            
            <br>
            <button onClick="validateDetails()">Validate</button>
          
            <?php
            //set session variable 
            $_SESSION["total"]=$_POST["total"];
           
            ?>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
    </body>
    
    
    
</html>