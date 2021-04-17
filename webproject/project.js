function validateForm() {
    var x = document.forms["myName"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }