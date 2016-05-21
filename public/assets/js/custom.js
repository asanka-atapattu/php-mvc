// When the browser is ready...
$(document).ready(function(){

    $(function() {

        // Setup form validation on the #register-form element
        $("#register-form").validate({

            // Specify the validation rules
            rules: {
                fname: "required",
                lname: "required",
                email: {
                    required: true,
                    email: true
                },
                username: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 5
                }
            },

            // Specify the validation error messages
            messages: {
                firstname: "Please enter your first name",
                lastname: "Please enter your last name",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                email: "Please enter a valid email address",
                username: "Please enter proper username"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        // Setup form validation on the #login-form element
        $("#login-369").validate({

            // Specify the validation rules
            rules: {
                user: "required",
                pass: {
                    required: true,
                    minlength: 5
                }
            },

            // Specify the validation error messages
            messages: {
                user: "Please enter your username",
                pass: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
              },

            submitHandler: function(form) {
                form.submit();
            }
        });


    });
});