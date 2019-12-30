function checkforempty () {
  var input = document.getElementById('search_input').value;
  if (input == "") {
    alert('The Search field was empty, please try again');
    return false;
  }
  else if (input == " ") {
    alert('The Search field was empty, please try again');
    return false;
  }
}
