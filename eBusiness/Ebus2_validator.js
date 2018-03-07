/* global $ */

function validateDetails(){
    
    var name;
    var pin;
    var number;
    var email;
    
    name = document.getElementById("name").value;
    number = document.getElementById("user_number").value;
    pin = document.getElementById("user_pin").value;
    email = document.getElementById("email").value
    if (pin==""){
        alert("Please enter your PIN");
        }
    
   
    
    else{
        enablebtnPurchase();
        }
        
        

        
      
    
     if (String(number).length<16){
        alert("Please enter a valid card number");
        }
   
    else{
        enablebtnPurchase();
        }
        
          if (name==""){
        alert("Please enter your name");
    }
    
    else{
        enablebtnPurchase();
    }
    
      if (email==""){
        alert("Please enter your email");
    }
    
    else{
        enablebtnPurchase();
    }
}





function validateName(){
    
    var name;
    
    name = document.getElementById("name").value;
    
    if (name==""){
        alert("Please enter your name");
    }
    
    else{
        enablebtnPurchase();
    }
}    



function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}



