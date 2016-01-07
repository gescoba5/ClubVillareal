$(document).ready(function () {
  var userReg = /^[a-zA-Z0-9!$%^&*()_+|~={}\[\]:;<>?,.\/@]+$/;
  var passReg = /^[a-zA-Z0-9!$%^&*()_+|~={}\[\]:;<>?,.\/@]+$/;

  $(".boton").click(function () {
    $(".help-block").remove();
    $(".text-danger").remove();

    if ($(".user").val() == "" || !userReg.test($(".user").val())) {
      $(".user").focus().after("<span class='help-block text-danger'>" + 
        "<strong>Ingrese un nombre de usuario válido</strong></span>");
      return false;
    } else if ($(".pass").val() == "" || !passReg.test($(".pass").val())) {
        $(".pass").focus().after("<span class='help-block text-danger'>" + 
          "<strong>Ingrese una contraseña válida</strong></span>");
        return false;
    }
  });

  $(".user, .pass").keyup(function() {
    if ($(this).val() != "") {
      $(".help-block").fadeOut();
      $(".text-danger").fadeOut();
      return false;
    }
  });
});