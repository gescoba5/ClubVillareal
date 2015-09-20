$(function() {

  $('form[name="sentMessage"]').find('input,select,textarea').not('[type=submit]').jqBootstrapValidation({

    submitSuccess: function ($form, event) {

      $.ajax({
        type: 'POST',
        url: "././mail/contact_me.php",
        data: $form.serialize(),
        success: function(data)
        { 
          // just to confirm ajax submission
          $("#btnSubmit").attr("disabled", false);
				$('#success').html("<div class='alert alert-success'>");
				$('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
					.append("</button>");
				$('#success > .alert-success')
					.append("<strong>Su mensaje ha sido enviado exitosamente. </strong>");
				$('#success > .alert-success')
					.append('</div>');

				//clear all fields
				$('#contactForm').trigger("reset");
        }
      });

      // will not trigger the default submission in favor of the ajax function
      event.preventDefault();
    }
  });
});