<?php if($page == 'isme') {?>
<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=5725fdfd188424108c5a02899bf5fcea&libraries=services"></script>
<script type="text/javascript">
var lat = '';
var lon = '';
var locPosition = '';

var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
        center: new daum.maps.LatLng(0, 0), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

// 지도를 생성합니다    
var map = new daum.maps.Map(mapContainer, mapOption); 

// HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
if (navigator.geolocation) {
    
    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    navigator.geolocation.getCurrentPosition(function(position) {
        
        lat = position.coords.latitude // 위도
        lon = position.coords.longitude; // 경도

        locPosition = new daum.maps.LatLng(lat, lon); // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다

        searchAddrFromCoords(locPosition, function(status, result) {
            
            if (status === daum.maps.services.Status.OK) {
                var content = '<div style="padding:5px;">' + result[0].fullName + '</div>';                
                $('input#areaInput').val(result[0].fullName);
                marker.setPosition(locPosition);
                marker.setMap(map);
                infowindow.setContent(content);
                infowindow.open(map, marker);

                // 지도 중심좌표를 접속위치로 변경합니다
                map.setCenter(locPosition);
            }   
        });

    });
    
} else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
    
    var locPosition = new daum.maps.LatLng(0, 0), // 지도의 중심좌표
        message = 'geolocation을 사용할수 없어요..'
        
    displayMarker(locPosition, message);
}

$('#loc').click(function(){

	searchAddrFromCoords(locPosition, function(status, result) {
            
        if (status === daum.maps.services.Status.OK) {
            var content = '<div style="padding:5px;">' + result[0].fullName + '</div>';
            // console.log(result[0].fullName);
            $('input#areaInput').val(result[0].fullName);
            marker.setPosition(locPosition);
            marker.setMap(map);
            infowindow.setContent(content);
            infowindow.open(map, marker);

            // 지도 중심좌표를 접속위치로 변경합니다
            map.setCenter(locPosition);
        }   
    });
})




function displayMarker(locPosition, message) {

    // 마커를 생성합니다
    var marker = new daum.maps.Marker({  
        map: map, 
        position: locPosition
    }); 
    
    var iwContent = message, // 인포윈도우에 표시할 내용
        iwRemoveable = true;

    // 인포윈도우를 생성합니다
    var infowindow = new daum.maps.InfoWindow({
        content : iwContent,
        removable : iwRemoveable
    });
    
    // 인포윈도우를 마커위에 표시합니다 
    infowindow.open(map, marker);
    
    // 지도 중심좌표를 접속위치로 변경합니다
    map.setCenter(locPosition);      
}


// 주소-좌표 변환 객체를 생성합니다
var geocoder = new daum.maps.services.Geocoder();


var marker = new daum.maps.Marker({}), // 클릭한 위치를 표시할 마커입니다
    infowindow = new daum.maps.InfoWindow({zindex:1}); // 클릭한 위치에 대한 주소를 표시할 인포윈도우입니다


// 지도를 클릭했을 때 클릭 위치 좌표에 대한 주소정보를 표시하도록 이벤트를 등록합니다
daum.maps.event.addListener(map, 'click', function(mouseEvent) {

    searchAddrFromCoords(mouseEvent.latLng, function(status, result) {
        console.log(mouseEvent.latLng);
        
        if (status === daum.maps.services.Status.OK) {        	
            var content = '<div style="padding:5px;">' + result[0].fullName + '</div>';
            $('input#areaInput').val(result[0].fullName);
            marker.setPosition(mouseEvent.latLng);
            marker.setMap(map);
            infowindow.setContent(content);
            infowindow.open(map, marker);
        }   
    });
});

// 중심 좌표나 확대 수준이 변경됐을 때 지도 중심 좌표에 대한 주소 정보를 표시하도록 이벤트를 등록합니다
daum.maps.event.addListener(map, 'idle', function() {
    searchAddrFromCoords(map.getCenter());
});

function searchAddrFromCoords(coords, callback) {
    // 좌표로 주소 정보를 요청합니다
    geocoder.coord2addr(coords, callback);         
}

/** 기타 기능 추가  **/


// 지도 타입 변경 컨트롤을 생성한다
var mapTypeControl = new daum.maps.MapTypeControl();

// 지도의 상단 우측에 지도 타입 변경 컨트롤을 추가한다
map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT); 

// // 실시간교통 타일 이미지 추가
// map.addOverlayMapTypeId(daum.maps.MapTypeId.TRAFFIC); 

// 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
var zoomControl = new daum.maps.ZoomControl();
map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);

</script>
<?php } ?>