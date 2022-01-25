$(document).ready(function(){

function checkisValid(input){
    $(input).addClass('is-valid');
    $(input).removeClass('is-invalid');
}

function checkisInvalid(input){
    $(input).addClass('is-invalid');
    $(input).removeClass('is-valid');
}

if($("input#nome").focusout(function(){
  if($(this).val() == ""){
      checkisInvalid($(this));
  }else{
      checkisValid($(this));
  }
}));

if($("input#cognome").focusout(function(){
  if($(this).val() == ""){
      checkisInvalid($(this));
  }else{
      checkisValid($(this));
  }
}));

if($("input#cf").focusout(function(){
  if(($(this).val().length == 11 ) || ($(this).val().length == 16)){
      checkisValid($(this));
  }else{
      checkisInvalid($(this));
  }
}));

if($("input#telefono").focusout(function(){
  if(($(this).val().length < 9) || ($(this).val().length > 15)){
      checkisInvalid($(this));
  }else{
      checkisValid($(this));
  }
}));

if($("input#email").focusout(function(){
  if($(this).val().includes("@")){
      checkisValid($(this));
  }else{
      checkisInvalid($(this));
  }
}));

if($("input#password").focusout(function(){
  if(($(this).val().length >= 8 ) && ($(this).val().match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) && ($(this).val().match(/([0-9])/)) && ($(this).val().match(/([!,%,&,@,#,$,^,*,?,_,~])/)) ){
      checkisValid($(this));
  }else{
      checkisInvalid($(this));
  }
}));

});
