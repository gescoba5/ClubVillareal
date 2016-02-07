$(function() {
  $('form[name="matriculaJugador"]').find("input, select").not('[type=submit]').jqBootstrapValidation({
    preventSubmit: true,

    submitError: function($form, event, errors) {
      // additional error messages or events
    },

    submitSuccess: function($form, event) {
      // Prevent spam click and default submit behaviour
      $("#btnSubmit").attr("disabled", true);
      event.preventDefault();

      // get values from FORM
      var name          = $("input#name").val();
      var lastName      = $("input#lastName").val();
      var docId         = $("input#docId").val();
      var birth         = $("input#birth").val();
      var age           = $("input#age").val();
      var address       = $("input#address").val();
      var tel           = $("input#tel").val();
      var eps           = $("input#eps").val();
      var category      = $("select#category").val();
      var acudiente     = $("input#acudiente").val();
      var telAcudiente  = $("input#telAcudiente").val();
      var firstName     = name; // For Success/Failure record

      // Check for white space in name for Success/Fail record
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }

      $.ajax({
        url: "../util/matricula_jugador.php",
        type: "POST",
        data: {
          name: name,
          lastName: lastName,
          docId: docId,
          birth: birth,
          age: age,
          address: address,
          tel: tel,
          eps: eps,
          category: category,
          acudiente: acudiente,
          telAcudiente: telAcudiente
        },

        cache: false,
        success: function() {
          // Enable button & show success message
          $("#btnSubmit").attr("disabled", false);
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>La matrícula del nuevo jugador se ha realizado exitosamente.</strong>");
          $('#success > .alert-success').append('</div>');

          //clear all fields
          $('#jugadorForm').trigger("reset");
          $('#category').selectpicker('deselectAll');
        },

        error: function() {
          // Fail message
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger')
            .append("<strong>Lo siento, parece que la matrícula de " + firstName + " no se pudo guardar.</strong>");
          $('#success > .alert-danger').append('</div>');

          //clear all fields
          $('#jugadorForm').trigger("reset");
          $('#category').selectpicker('deselectAll');
        },
      })
    },

    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

// When clicking on Full hide fail/success boxes
$('#name').focus(function() {
  $('#success').html('');
});