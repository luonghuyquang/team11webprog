
  function val(){
     let username=document.loginform.username.value;
     let password=document.loginform.password.value;
     if(!username.length==null){
      if(!password==null){
        alert("logged successfully!");
        return false;
      }else{
        alert("Invalid username and password!");
       return false;
      }
     }
     else{
       alert("Invalid username and password!");
       return false;
     }
     
    

   