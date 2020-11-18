$(document).ready(function () {

    (function ($) {
        "use strict";


        // jQuery.validator.addMethod('answercheck', function (value, element) {
        //     return this.optional(element) || /^\bcat\b$/.test(value)
        // }, "type the correct answer -_-");

        $(function () {
            $('#enrollForm').validate({
                rules: {
                    name: {
                        required: true
                    },
                    contact: {
                        required: true,
                        digits: true
                    },
                    address: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    enroll_type: {
                        required: true
                    }
                    // },
                    // message: {
                    //     required: true,
                    //     minlength: 20
                    // }
                },
                messages: {
                    name: {
                        required: "** Name is required."
                    },
                    contact: {
                        required: "** Contact is required.",
                        digits: "** Please enter valid contact number."
                    },
                    address: {
                        required: "** Address is required."
                    },
                    email: {
                        required: "** Email is required."
                    },
                    enroll_type: {
                        required: "** Enroll type is required."
                    }
                },
                submitHandler: function (form) {

                    $('#enrollForm').fadeTo("slow", 1, function () {
                        $('#success').fadeIn()
                        $('.modal').modal('hide');
                        $('#success').modal('show');
                    })

                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "enroll_process.php",
                        success: function (data) {

                            $('#enrollForm :input').val('');
                            $(this).find(':input').val('');
                            $(this).find('label').css('cursor', 'default');
                            document.getElementById("message_enroll").innerHTML = "Your enrollment is successfully registered.";
                            // $('#enrollForm').fadeTo( "slow", 1, function() {
                            //     $(this).find(':input').val('');
                            //     $(this).find('label').css('cursor','default');
                            //     $('#success').fadeIn()
                            //     $('.modal').modal('hide');
                            //     $('#success').modal('show');
                            // })

                        },
                        error: function () {
                            $('#enrollForm').fadeTo("slow", 1, function () {
                                $('#error').fadeIn()
                                $('.modal').modal('hide');
                                $('#error').modal('show');
                            })
                        }
                    })
                }
            })
        })

    })(jQuery)
})