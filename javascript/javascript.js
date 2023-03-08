
function val() {
  let username = document.loginform.username.value;
  let password = document.loginform.pass.value;
  if (username.length == null) {
    if (password == null) {
      alert("logged successfully!");
      return false;
    } else {
      window.alert("Invalid username and password!");
      return false;
    }
  }
  else {
    alert("Invalid username and password");
    return true;
  }
}

// javscript validation for rview

function fnameVal() {
  let fname = (document.reviewForm.fname.value).trim();
  if (fname.length < 3) {
    alert("First name must have atleast 3 characters.");
    return false;
  }

}

function lnameVal() {
  let lname = (document.reviewForm.lname.value).trim();
  if (lname.length < 1) {
    alert("Last name cannot be empty.");
    return false;
  }

}

function reviewValidation() {
  let rate = (document.reviewForm.rate.value).trim();
  if (rate === '') {
    alert("Rate is required.");
    return false;
  }
}