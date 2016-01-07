$(function() {
  $('form[name="registroProfe"]').find("input").not('[type=submit]').jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },

    submitSuccess: function($form, event) {
      // Prevent spam click and default submit behaviour
      $("#btnSubmit").attr("disabled", true);
      event.preventDefault();
      
      // get values from FORM
      var name      = $("input#name").val();
      var lastName  = $("input#lastName").val();
      var user      = $("input#user").val();
      var password  = $("input#password").val();
      var firstName = name; // For Success/Failure record
      
      // Check for white space in name for Success/Fail record
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }

      $.ajax({
        url: "../util/registro_profe.php",
        type: "POST",
        data: {
          name: name,
          lastName: lastName,
          user: user,
          password: password
        },

        cache: false,
        success: function() {
          // Enable button & show success message
          $("#btnSubmit").attr("disabled", false);
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>El nuevo profe ha sido guardado exitosamente. </strong>");
          $('#success > .alert-success')
            .append('</div>');

          //clear all fields
          $('#profeForm').trigger("reset");
        },

        error: function() {
          // Fail message
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append("<strong>Lo siento, parece que " + firstName + " no pudo ser guardado como nuevo profe.");
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#profeForm').trigger("reset");
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