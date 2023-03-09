// for reservation validation of the phone number
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

    // javscript validation for review

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

function rateValidation() {
  let rate = (document.reviewForm.rate.value).trim();
  if (rate === '') {
    alert("Rate is required.");
    return false;
  }
}