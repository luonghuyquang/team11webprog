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