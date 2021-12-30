$(document).ready(function(){

  $("input#floatingCompanyName, input#floatingPIVA").hide();

  $("input#pf").click(function(){
    $("input#floatingName, input#floatingSurname, input#floatingCF").show();
    $("input#floatingCompanyName, input#floatingPIVA").hide();
  });
  $("input#pg").click(function(){
      $("input#floatingName, input#floatingSurname, input#floatingCF").hide();
      $("input#floatingCompanyName, input#floatingPIVA").show();
    });

});
