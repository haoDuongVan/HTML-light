// Revolution Slider Settings
function initializeRevolutionSlider() {
    let slider = jQuery("#revolution-slider");
    slider.revolution({
        sliderType: "standard",
        sliderLayout: "fullscreen",
        delay: 3500,
        navigation: {
            arrows: { enable: true },
        },
        parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
        },
        spinner: "off",
        gridwidth: 1140,
        gridheight: 600,
        disableProgressBar: "on",
        lazyType: "smart",
        visibilityLevels: [2048, 1024, 768, 480],
    });

    // Tắt overlay khi slider đã sẵn sàng
    slider.on("revolution.slide.onloaded", function () {
        console.log("Slider đã sẵn sàng!");
        jQuery("#overlay").fadeOut();
    });

    // Hiển thị fallback nếu slider không tải được
    setTimeout(function () {
        if (!slider.hasClass("tp-simpleresponsive")) {
            console.error("Slider không thể tải.");
            jQuery("#revolution-slider .fallback").show();
        }
    }, 3000); // Sau 3 giây nếu slider không sẵn sàng
}

// Fallback cho ảnh lỗi
function handleImageError() {
    jQuery("#revolution-slider img").on("error", function () {
        console.error("Không thể tải ảnh:", jQuery(this).attr("src"));
        jQuery(this).attr("src", "/public/images-slider/default.jpg"); // Thay bằng ảnh mặc định
    });
}

// Date Picker Settings
function initializeDatePicker() {
    let nowTemp = new Date();
    let now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    let checkin = jQuery("#date")
        .datepicker({
            onRender: function (date) {
                return date.valueOf() < now.valueOf() ? "disabled" : "";
            },
        })
        .on("changeDate", function (ev) {
            if (ev.date.valueOf() > checkin.date.valueOf()) {
                let newDate = new Date(ev.date);
                newDate.setDate(newDate.getDate() + 1);
                checkin.setValue(newDate);
            }
            checkin.hide();
        })
        .data("datepicker");
}

// Time Picker Settings
function initializeTimePicker() {
    jQuery("#time")
        .timepicker({
            showMeridian: false, // 24-hour format
            minuteStep: 15,
            defaultTime: false,
            showInputs: false,
            disableFocus: true,
            template: "dropdown",
            maxHours: 24,
            snapToStep: true,
        })
        .on("focus", function () {
            let currentTime = new Date();
            let hours = currentTime.getHours();
            let minutes = currentTime.getMinutes();
            if (hours < 9) {
                hours = 9;
                minutes = 0;
            } else if (hours >= 24) {
                hours = 23;
                minutes = 45;
            }
            jQuery(this).timepicker(
                "setTime",
                hours + ":" + (minutes < 10 ? "0" : "") + minutes
            );
        })
        .on("changeTime.timepicker", function (e) {
            let hours = e.time.hours;
            let minutes = e.time.minutes;
            if (hours < 9) {
                jQuery(this).timepicker("setTime", "09:00");
            } else if (hours >= 24) {
                jQuery(this).timepicker("setTime", "23:45");
            }
        });
}

// Document Ready
jQuery(document).ready(function () {
    console.log("Initializing Scripts...");
    initializeRevolutionSlider();
    handleImageError();
    initializeDatePicker();
    initializeTimePicker();
    
});
