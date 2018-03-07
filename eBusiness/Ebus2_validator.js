/* global $ */

function validateDetails(){
    
    var pin;
    var number;
    
    pin = document.getElementById("user_number").value;
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length < 4){
        alert("Please ensure your PIN is four characters long");
        }
        
    else{
        enablebtnPurchase();
        }
        
        if (number==""){
        alert("Please enter your Card number");
        }
        
    else if (String(pin).length<16){
        alert("Please ensure card number is 16 digits long");
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
        
        



function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}



function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
