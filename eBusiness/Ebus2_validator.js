/* global $ */

function validateDetails(){
    
    var pin;
    var creditcardholdername;
    var creditcardnumber;
    var  cvvnumber;
    
    pin = document.getElementById("user_pin").value;
    creditcardholdername = document.forms ["myForm"]["creditcardholdername"].value ;
    creditcardnumber = document.getElementById("user_number").value;
    cvvnumber = document.getElementById("user_cvv").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    
    else if (String(pin).length<4){
        alert("Please make sure your PIN is 4 figures long.");
    }
    
    else if (creditcardholdername == ""){
         alert("Please enter the creditcard holder's name");
     return false;
    }
    
    else if (creditcardnumber == ""){
             alert("Please enter the creditcard number");
    }
    
    else if (cvvnumber == ""){
             alert("Please enter the CVV number located on the back of the creditcard")
    }
    
    else if (String(creditcardnumber).length<16){
             alert("You have entered a card number that is too short, please enter a valid number.")
    }
    

    else if (String(cvvnumber).length<3){
             alert("You have entered a CVV number that is too short, please enter a valid CVV number.")
    }
    
 

    else
        enablebtnPurchase();
    }
    
    
 
    function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
    }

    function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
    }