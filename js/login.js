$(function() {

  $('form[name="loginF"]').find('input').not('[type=submit]').jqBootstrapValidation({

    submitSuccess: function ($form, event) {

      $.ajax({
        type: 'POST',
        url: $form.attr('../back-end/login.php')
        data: $form.serialize(),
        success: function(data)
        { 
          // just to confirm ajax submission
          $("#loginForm").attr("disabled", false);
				$('#success2').html("<div class='alert alert-success'>");
				$('#success2 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
					.append("</button>");
				$('#success2 > .alert-success')
					.append("<strong>login. </strong>");
				$('#success2 > .alert-success')
					.append('</div>');

				//clear all fields
				$('#loginForm').trigger("reset");
        }
      });

      // will not trigger the default submission in favor of the ajax function
      event.preventDefault();
    }
  });
});