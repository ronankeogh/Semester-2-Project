/* global $ */

function validateDetails(){
    
    var pin;
    var number;
    
    pin = document.getElementById("user_number").value;
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    
   
    
    else{
        enablebtnPurchase();
        }
        
        

        
      
    
     if (String(pin).length<16){
        alert("Please enter a valid card number");
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



function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}