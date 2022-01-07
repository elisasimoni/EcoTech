$(document).ready(function(){

  $("#registrati").click(function(e) {

    
    e.preventDefault();
    var form = $("#registrazioneForm")

    if($("input#nome").val()==""){
      $("input#nome").addClass('is-invalid');
    }else{
      $("input#nome").addClass('is-valid');
    }

    if($("input#cognome").val()==""){
      $("input#cognome").addClass('is-invalid');
    }else{
      $("input#cognome").addClass('is-valid');
    }

    if(($("input#cf").val().length == 11 ) || ($("input#cf").val().length == 16)){
      $("input#cf").addClass('is-valid')
    }else{
      $("input#cf").addClass('is-invalid');
    }

    if(($("input#telefono").val().length < 9) || ($("input#telefono").val().length > 15)){
      $("input#telefono").addClass('is-invalid');
    }else{
      $("input#telefono").addClass('is-valid');
    }

    if($("input#email").val().includes("@")){
      $("input#email").addClass('is-valid');
    }else{
      $("input#email").addClass('is-invalid');
    }

    if( ($("input#password").val().length >= 8 ) && ($("input#password").val().match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) && ($("input#password").val().match(/([0-9])/)) && ($("input#password").val().match(/([!,%,&,@,#,$,^,*,?,_,~])/)) ) {
      $("input#password").addClass('is-valid');
    }else{
      $("input#password").addClass('is-invalid');
      $("div#passError").html(function(){
        '<p>Password Brutta</p>';
      });
    }

    //Make ajax call here

  })

});