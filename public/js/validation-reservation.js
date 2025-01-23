$(document).ready(function () {
    // Validate chỉ cho phép nhập chữ vào ô name
    $('#name').on('input', function() {
        var value = $(this).val();
        $(this).val(value.replace(/[^\p{L}\s]/gu, '').substring(0, 25));
    });

    // Validate chỉ cho phép nhập số vào ô person
    $('#person').on('input', function() {
        var value = $(this).val();
        $(this).val(value.replace(/[^0-9]/g, '')); // Loại bỏ các ký tự không phải số
        if (parseInt(value, 10) > 99) {
            $(this).val(99); // Giới hạn số người dưới 99
        }
    });

    // Validate chỉ cho phép nhập số vào ô table và giới hạn 10 ký tự
    $('#table').on('input', function() {
        var value = $(this).val();
       $(this).val(value.substring(0, 10)); // Giới hạn 10 ký tự
    });

    $('#send_message').click(function (e) {
        e.preventDefault();

        // Variable declaration
        var error = false;
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        var date = $('#date').val();
        var time = $('#time').val();
        var person = $('#person').val();
        var table = $('#table').val();

        $('#name,#email,#phone,#message,#date,#time,#person,#table').click(function () {
            $(this).removeClass("error_input");
        });

        // Form field validation
        if (name.length === 0 || name.length > 25) {
            error = true;
            $('#name').addClass("error_input");
        } else {
            $('#name').removeClass("error_input");
        }

        if (email.length === 0 || email.indexOf('@') === -1) {
            error = true;
            $('#email').addClass("error_input");
        } else {
            $('#email').removeClass("error_input");
        }

        if (date.length === 0) {
            error = true;
            $('#date').addClass("error_input");
        } else {
            $('#date').removeClass("error_input");
        }

        if (time.length === 0) {
            error = true;
            $('#time').addClass("error_input");
        } else {
            $('#time').removeClass("error_input");
        }

        if (person.length === 0 || parseInt(person, 10) > 99) {
            error = true;
            $('#person').addClass("error_input");
        } else {
            $('#person').removeClass("error_input");
        }

        if (table.length === 0 || table.length > 10) {
            error = true;
            $('#table').addClass("error_input");
        } else {
            $('#table').removeClass("error_input");
        }

        // If there is no validation error, next to process the mail function
        if (!error) {
            var currentLang = $('html').attr('lang') || 'vi';
            var buttonTexts = {
                vi: 'Đang gửi...',
                en: 'Sending...',
                jp: '送信中...'
            };

            var originalText = $('#send_message').val();
            console.log("Original Text:", originalText);
            $('#send_message').val(buttonTexts[currentLang]).attr('disabled', true);
            $('#send_message').prop('disabled', true);
            // console.log("Button text updated and disabled.");

            $.post("/home/bookTable", $("#contact_form").serialize(), function (result) {
                // console.log("Result:", result, "Type:", typeof result);
                if (result.trim().toLowerCase() === 'sent') {
                    $('#mail_success').fadeIn(500);
                    $('#submit').remove();
                    console.log('Success');
                } else {
                    $('#mail_fail').fadeIn(500);
                    $('#send_message').val(originalText).removeAttr('disabled');
                    console.log('Failed');
                }
            }).fail(function (xhr, status, error) {
                console.error("AJAX error:", error, "Status:", status, "Response:", xhr.responseText);
                $('#send_message').val(originalText).removeAttr('disabled');
            });
        }
    });
});

