$(
  function () {
    $("#email_error").hide();
    $("#password_error").hide();

    var error_email = false;
    var error_password = false;

    $("#email").focusout(
      function () {
        check_email();
      }
    );

    $("#password").focusout(
      function () {
        check_password();
      }
    );

    function check_email() {
      var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      if (pattern.test($("#email").val())) {
        $("#email_error").hide();
      } else {
        $("#email_error").html("Formato incorrecto");
        $("#email_error").show();
        error_email = true;
      }
    }

    function check_password() {
      var password_length = $("#password").val().length;
      if (password_length < 8) {
        $("#password_error").html("Al menos 8 caracteres y maximo 30");
        $("#password_error").show();
        error_password = true;
      } else {
        $("#password_error").hide();
      }
    }
  }
)
