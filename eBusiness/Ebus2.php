<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Payment Details</title>
        <link rel="Stylesheet" href="../homepagecss.css" type="text/css" />
        
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
                           <ul>
  <li><a href="../Homepage.html">Home</a></li>
  <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
  <li><a href="../interests/sports.html">Interests</a></li>
  <li><a class="active" href="CloudServicesInfo/CompanyInfo.html">The Cirrus Company & Products</a></li>
  
</ul>
 <div class="wrapper">
      <div class="clip-text clip-text_one">Payment Details</div>
      
      <br>
      
        <h4>Please enter your payment details</h4>
        
        <br>
        
        
            <form name = "myForm"  method="POST" action="Ebus3.php">
                
   
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    
                    <br>
                    
                    <label for="creditcardholdername"><strong>Card holder Name:</strong></label>
                    <input type ="text"     id="creditcardholdername" placeholder="Card holder name">
                    
                    
                    <br>
                    
                    <label for "creditcardnumber"><strong>Credit Card Number:</strong></label>
                    <input type = "password" id="creditcardnumber" placeholder="Credit Card Number" maxlength="16">
                    
                    
                    <br>
                    
                    <label for "cvvnumber"><strong>CVV Number:</strong></label>
                    <input type = "password" id="cvvnumber" placeholder="CVV Number" maxlength="3">
                    
                    
                    <br>
                    
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            
            // set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>
       
        </div>
        
        <script type="text/javascript" src="Ebus2_validator.js"></script>
        
        </div>
    </body>
</html>