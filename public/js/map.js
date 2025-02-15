// Khi window đã tải xong, khởi tạo bản đồ
window.addEventListener('load', init);

function init() {
    var mapInitialized = false; // Biến kiểm tra trạng thái bản đồ đã được khởi tạo hay chưa
    var map;
    var mapElement = document.getElementById('map');
    var navElement = document.querySelector('ul.de_nav');

    // Xử lý khi nhấn nút hiển thị bản đồ
    document.querySelector('.cust-map-toggle').addEventListener('click', function () {
        mapElement.style.display = 'block'; // Hiển thị phần tử bản đồ
        navElement.style.display = 'none'; // Ẩn danh sách điều hướng

        // Chỉ khởi tạo bản đồ nếu chưa được khởi tạo trước đó
        if (!mapInitialized) {
            // Thiết lập bản đồ và vị trí ban đầu
            var myLatlng = [35.763769586167456, 139.6784879490752]; // Thay tọa độ tại đây nếu cần
            map = L.map('map').setView(myLatlng, 15); // 15 là mức zoom ban đầu

            // Gắn layer bản đồ OpenStreetMap
            // Define base layers
            var baseLayers = {
                "OpenStreetMap Default": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                    maxZoom: 19
                }),
                "Carto Light": L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
                    subdomains: 'abcd',
                    maxZoom: 19
                })
            };

            // Lựa chọn lauyer bản đồ
            baseLayers["OpenStreetMap Default"].addTo(map);

            // thêm control cho layer đã chọn
            L.control.layers(baseLayers).addTo(map);


            // Thêm marker trên bản đồ
            L.marker(myLatlng).addTo(map)
                .bindPopup(`
                    <b>Bánh Mì Tokyo-ベトナム料理専門店</b><br>
                    174-0071 東京都板橋区常盤台4丁目21番6号アツザワビル1階<br>
                    <i>Phone: 123-456-7890</i>
                    
                `) // Popup khi nhấp vào marker
                .openPopup(); // Tự động mở popup ngay sau khi khởi tạo

            // Đánh dấu trạng thái bản đồ đã được khởi tạo
            mapInitialized = true;
        }
    });

    document.addEventListener('click', function(event) {
        var isClickInsideMap = mapElement.contains(event.target);
        var isClickInsideToggle = document.querySelector('.cust-map-toggle').contains(event.target);

        if (!isClickInsideMap && !isClickInsideToggle) {
            mapElement.style.display = 'none'; // Hide the map
            navElement.style.display = 'block'; // Show the navElement
        }
    });
}
