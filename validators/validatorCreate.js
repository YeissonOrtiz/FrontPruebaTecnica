$(
  function () {
    $("#first_name_error").hide();
    $("#second_name_error").hide();
    $("#first_surname_error").hide();
    $("#second_surname_error").hide();
    $("#email_error").hide();
    $("#password_error").hide();

    var error_first_name = false;
    var error_second_name = false;
    var error_first_surname = false;
    var error_second_surname = false;
    var error_email = false;
    var error_password = false;

    $("#first_name").focusout(
      function () {
        check_first_name();
     }
    );

    $("#second_name").focusout(
      function () {
        check_second_name();
      }
    );

    $("#first_surname").focusout(
      function () {
        check_first_surname();
      }
    );

    $("#second_surname").focusout(
      function () {
        check_second_surname();
      }
    );

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

    function check_first_name() {
      var first_name_length = $("#first_name").val().length;
      if (first_name_length < 2 || first_name_length > 20) {
        $("#first_name_error").html("Al menos 2 caracteres y menos de 20");
        $("#first_name_error").show();
        error_first_name = true;
      } else {
        $("#first_name_error").hide();
      }
    }

    function check_second_name() {
      var second_name_length = $("#second_name").val().length;
      if ( second_name_length > 20) {
        $("#second_name_error").html("Al menos 1 caracteres y menos de 20");
        $("#second_name_error").show();
        error_second_name = true;
      } else {
        $("#second_name_error").hide();
      }
    }

    function check_first_surname() {
      var first_surname_length = $("#first_surname").val().length;
      if (first_surname_length < 2 || first_surname_length > 20) {
        $("#first_surname_error").html("Al menos 2 caracteres y menos de 20");
        $("#first_surname_error").show();
        error_first_surname = true;
      } else {
        $("#first_surname_error").hide();
      }
    }

    function check_second_surname() {
      var second_surname_length = $("#second_surname").val().length;
      if (second_surname_length > 20) {
        $("#second_surname_error").html("Al menos 1 caracteres y menos de 20");
        $("#second_surname_error").show();
        error_second_surname = true;
      } else {
        $("#second_surname_error").hide();
      }
    }

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

    $("#submit").click(
      function () {
        check_first_name();
        check_second_name();
        check_first_surname();
        check_second_surname();
        check_email();
        check_password();
      }
    );

  }
)
