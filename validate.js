//<script type="text/javascript">
function validate()
{ 
   if( document.Registration.Name.value == "" )
   {
     alert( "Please provide your Name!" );
     document.Registration.Name.focus() ;
     return false;
   }
   
   var email = document.Registration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.Registration.emailid.focus() ;
     return false;
 }
  if( document.Registration.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.Registration.dob.focus() ;
     return false;
   }
  if( document.Registration.mobileno.value == "" ||
           isNaN( document.Registration.mobileno.value) ||
           document.Registration.mobileno.value.length != 10 )
   {
     alert( "Please correct mobileNo" );
     document.Registration.mobileno.focus() ;
     return false;
   }
   
   
   
    if ( ( Registration.sex[0].checked == false ) && ( Registration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   } 
   
   if( document.Registration.password.value == "" )
   {
     alert( "Please Enter password!" );
     document.Registration.password.focus() ;
     return false;
   }
   
   if( document.Registration.confrm_password.value == "" )
   {
     alert( "Please ReEnter password!" );
     document.Registration.confrm_password.focus() ;
     return false;
   }
   
   
   if( document.Registration.confrm_password.value != document.Registration.confrm_password.value )
   {
     alert( "Both passwords should match" );
     document.Registration.confrm_password.focus() ;
     return false;
   }
   
   
   
    if( document.Registration.Area.value == "-1" )
   {
     alert( "Please provide your Area!" );
     document.Registration.Area.focus() ;
     return false;
   } 
   
  
  /* if( document.Registration.paddress.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.Registration.paddress.focus() ;
     return false;
   }*/
   
    if( document.Registration.add.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.Registration.add.focus() ;
     return false;
   }
    
    
 alert( "Registered successfully" );
   return( true );
}
//</script>
