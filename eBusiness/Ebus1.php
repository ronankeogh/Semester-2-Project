<!DOCTYPE html>
<html>
    <head>
        <title>Select a Product</title>
        <link rel="Stylesheet" href="../homepagecss.css" type="text/css" />
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>

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
  <li><a class="active" href="../CloudServicesInfo/CompanyInfo.html">The Cirrus Company & Products</a></li>
  
</ul>

      <div class="wrapper">
      <div class="clip-text clip-text_one">Products available for purchase</div>
      
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
              </label>
              
              <br/>
              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
              </label>
              
              <br/>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total $
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="discount">
                Discount @ 5%: $
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                Vat @ 10% : $
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br/>
              
              
              
              <label for="total">
                Total: $
                <input type="text" id="total"  name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
            </div>
            
    
    </body>
</html>