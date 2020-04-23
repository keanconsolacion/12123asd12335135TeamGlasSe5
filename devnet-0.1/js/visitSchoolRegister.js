
function ClearFields(){
  var inputFields = document.getElementsByClassName('form-control');

  for(var i = 0; i < inputFields.length; i++){
    inputFields[i].value = "";
  }

}
