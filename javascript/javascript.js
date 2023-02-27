
  function val(){
     let username=document.getElementById('username');
     let password=document.getElementById('pass');
     if(!username.length==null){
      if(!password==null){
        alert("logged successfully!");
        return true;
      }else{
        alert("Invalid username and password!");
       return false;
      }
     }
     else{
       alert("Invalid username and password!");
       return false;
     }
    }