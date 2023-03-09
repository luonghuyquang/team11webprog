
  function val(){
     let username=document.loginform.username.value;
     let password=document.loginform.pass.value;
     if(username.length==null){
      if(password==null){
       alert("logged successfully!");
        return false;
      }else{
        window.alert("Invalid username and password!");
       return false;
      }
     }
     else{
       alert("Invalid username and password!");
       return true;
     }
    }

    function formatPhoneNumber(input) {
      // Get the input value without any non-digit characters
      var phoneNumber = input.value.replace(/\D/g, '');
      
      // Remove the leading '0' from the phone number
      if (phoneNumber.charAt(0) === '0') {
        phoneNumber = phoneNumber.substr(1);
      }
      
      // Add the prefix to the phone number
      phoneNumber = '+' + phoneNumber;
      
      // Set the input value to the formatted phone number
      input.value = phoneNumber;
    }
    
    