<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        
         
        <link rel="Stylesheet" href="../homepagecss.css" type="text/css" />
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

.borderbox{
   
    position:absolute;
    left:38.5%;
}
    
</style>

    <body>
                               <ul>
  <li><a href="../Homepage.html">Home</a></li>
  <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
  <li><a href="../interests/sports.html">Interests</a></li>
  <li><a class="active" href="../CloudServicesInfo/CompanyInfo.html">The Cirrus Company & Products</a></li>
  
</ul>

   <div class="wrapper">
      <div class="clip-text clip-text_one">Payment Reciept</div>
      </div>
          
                   

         
             
             <br>
             <br>
             <br>
             
             <div class=borderbox>
             
             <?php
            //Echo session varaibles that were set to the previous page
            
            echo("<strong>Name: </strong>". $name);
            ?>
            
            <br>
            
            <?php
            echo("<br><strong>Email: </strong>". $email);
            ?>
            <br>
            
            <?php
            echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
              ?>
              
              <br>
              
              </div>
              
             
              
             
    
      
    
    
    </html>
    </body>
</html>