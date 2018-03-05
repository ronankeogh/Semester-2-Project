/* global $ */
function calcSub(){
    
     var=argSubTotal;
      if (document.getElementById('Salesforce').checked {
          argSubtotal = 100
      }
      else if (document.getElementbyId('cloud9').checked){
    argSubtotal = 200 ;
      }
      else if (document.getElementbyId('aws').checked){
    argSubtotal = 300 ;
      }
           else{
           argSubtotal = 400 ;
           }
           
           
           calcDisVatTotal(argSubTotal);
}

 function calcDisVatTotal(parmSubTotal){
     var subTotal = parmSubTotal
     var discountAmt;
     var vatAmt;
     var totalPrice;
     
     discountAmt = (parmSubTotal* 0.05);
     
     vatAmt = ((parmSubTotal - discountAmt) * 0.1);
      totalPrice = ((parmsubtotal + vatAmt0) - discountAmt);
       display(subTotal, discountAmt , vatAmt, totalPrice) ;
     }
     
     function display(parm1, parm2, parm3 , parm4)
     document.getElementById("subtotal").value = parm1;
     document.getElementById("discount").value = parm2;
     document.getElementById("vat").value = parm3;
     document.getElementById("total").value = parm4;
     
     enablebtnProceed();
     }
     
     function enablebtnProceed(){
         $('btnProceed').prop('disabled', false);
     }
     
         function disablebtnProceed(){
         $('btnProceed').prop('disabled', true);
     }
     }
     