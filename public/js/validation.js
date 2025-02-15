$(document).ready(function () {
  // Validate chỉ cho phép nhập chữ vào ô name
  $("#name").on("input", function () {
    var value = $(this).val();
    $(this).val(value.replace(/[^\p{L}\s]/gu, "").substring(0, 25));
  });

  // Validate chỉ cho phép nhập số vào ô person
  $("#phone").on("input", function () {
    var value = $(this).val();
    $(this).val(value.replace(/[^0-9]/g, "").substring(0, 13)); // Loại bỏ các ký tự không phải số
  });

  $("#send_message").click(function (e) {
    //Stop form submission & check the validation
    e.preventDefault();

    // Variable declaration
    var error = false;
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();

    $("#name,#email,#phone,#message").click(function () {
      $(this).removeClass("error_input");
    });

    // Form field validation
    if (name.length == 0 || name.length > 25) {
      var error = true;
      $("#name").addClass("error_input");
    } else {
      $("#name").removeClass("error_input");
    }
    if (email.length == 0 || email.indexOf("@") == "-1") {
      var error = true;
      $("#email").addClass("error_input");
    } else {
      $("#email").removeClass("error_input");
    }
    if (phone.length == 0 || phone.length > 13) {
      var error = true;
      $("#phone").addClass("error_input");
    } else {
      $("#phone").removeClass("error_input");
    }
    if (message.length == 0) {
      var error = true;
      $("#message").addClass("error_input");
    } else {
      $("#message").removeClass("error_input");
    }

    // If there is no validation error, next to process the mail function
    if (!error) {
      var currentLang = $("html").attr("lang") || "vi";
      var buttonTexts = {
        vi: "Đang gửi...",
        en: "Sending...",
        jp: "送信中...",
      };

      var originalText = $("#send_message").val();
      console.log("Original Text:", originalText);
      $("#send_message").val(buttonTexts[currentLang]).attr("disabled", true);
      $("#send_message").prop("disabled", true);
      // console.log("Button text updated and disabled.");

      $.post(
        "/contact/sendEmail",
        $("#contact_form").serialize(),
        function (result) {
          // console.log("Result:", result, "Type:", typeof result);
          if (result.trim().toLowerCase() === "sent") {
            $("#mail_success").fadeIn(500);
            $("#submit").remove();
            console.log("Success");
          } else {
            $("#mail_fail").fadeIn(500);
            $("#send_message").val(originalText).removeAttr("disabled");
            console.log("Failed");
          }
        }
      ).fail(function (xhr, status, error) {
        console.error(
          "AJAX error:",
          error,
          "Status:",
          status,
          "Response:",
          xhr.responseText
        );
        $("#send_message").val(originalText).removeAttr("disabled");
      });
    }
  });
});
