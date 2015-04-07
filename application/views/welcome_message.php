<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>다음 지도 API</title>
</head>
<style type="text/css">
#menu {
  position: absolute;
  top: 13px;
  left: 12px;
  width: 254px;
  z-index: 10;
}
</style>
<body>
	<div id="map" style="width:750px;height:450px;"></div>

	<div id="menu">
		<h3>Menu</h3>
	</div>

<script src="//apis.daum.net/maps/maps3.js?apikey=5725fdfd188424108c5a02899bf5fcea"></script>
<script>


// HTML5의 geolocation으로 사용할 수 있는지 확인합니다 
if (navigator.geolocation) {
    
    // GeoLocation을 이용해서 접속 위치를 얻어옵니다
    navigator.geolocation.getCurrentPosition(function(position) {
        
        var lat = position.coords.latitude, // 위도
            lon = position.coords.longitude; // 경도
        
        var locPosition = new daum.maps.LatLng(lat, lon), // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
            message = '<div style="padding:5px;">여기에 계신가요?!</div>'; // 인포윈도우에 표시될 내용입니다
        
        // 마커와 인포윈도우를 표시합니다
        displayMarker(locPosition, message);
            
      });
    
} else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다
    
    var locPosition = new daum.maps.LatLng(0, 0),    
        message = 'geolocation을 사용할수 없어요..'
        
    displayMarker(locPosition, message);
}

// 지도에 마커와 인포윈도우를 표시하는 함수입니다
function displayMarker(locPosition, message) {

    // 마커를 생성합니다
    var marker = new daum.maps.Marker({  
    	draggable : true, // 마커를 드래그 가능하도록 설정한다
    	image : markerImage, // 마커의 이미지
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


var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = {
    	center: new daum.maps.LatLng(0, 0), // 지도의 중심좌표
        level: 3, // 지도의 확대 레벨
        mapTypeId : daum.maps.MapTypeId.ROADMAP // 지도종류
    }; 

// 지도를 생성한다 
var map = new daum.maps.Map(mapContainer, mapOption); 

// 실시간교통 타일 이미지 추가
map.addOverlayMapTypeId(daum.maps.MapTypeId.TRAFFIC); 

// 지도 타입 변경 컨트롤을 생성한다
var mapTypeControl = new daum.maps.MapTypeControl();

// 지도의 상단 우측에 지도 타입 변경 컨트롤을 추가한다
map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT);	

// 지도에 확대 축소 컨트롤을 생성한다
var zoomControl = new daum.maps.ZoomControl();

// 지도의 우측에 확대 축소 컨트롤을 추가한다
map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);
// 마커 이미지의 주소
var markerImageUrl = 'http://i1.daumcdn.net/localimg/localimages/07/2012/img/marker_p.png', 
    markerImageSize = new daum.maps.Size(40, 42), // 마커 이미지의 크기
    markerImageOptions = { 
        offset : new daum.maps.Point(20, 42)// 마커 좌표에 일치시킬 이미지 안의 좌표
    };

// 마커 이미지를 생성한다
var markerImage = new daum.maps.MarkerImage(markerImageUrl, markerImageSize, markerImageOptions);

// 지도에 마커를 생성하고 표시한다
// var marker = new daum.maps.Marker({
//     position: new daum.maps.LatLng(37.53616, 127.00500), // 마커의 좌표
//     draggable : true, // 마커를 드래그 가능하도록 설정한다
//     image : markerImage, // 마커의 이미지
//     map: map // 마커를 표시할 지도 객체
// });

// // 마커 위에 표시할 인포윈도우를 생성한다
// var infowindow = new daum.maps.InfoWindow({
//     content : '<div style="padding:5px;">인포윈도우 :D</div>' // 인포윈도우에 표시할 내용
// });

// // 인포윈도우를 지도에 표시한다
// infowindow.open(map, marker);

// 커스텀 오버레이를 생성하고 지도에 표시한다
var customOverlay = new daum.maps.CustomOverlay({
	map: map,
	clickable : true, // 커스텀 오버레이 클릭 시 지도에 이벤트를 전파하지 않도록 설정한다
	content: '<div style="padding:0 5px;background:#fff;">HTML코드를 입력해주세요 :D</div>', 
	position: new daum.maps.LatLng(0, 0), // 커스텀 오버레이를 표시할 좌표
	xAnchor: 0.5, // 컨텐츠의 x 위치
	yAnchor: 0 // 컨텐츠의 y 위치
});


</script>
</body>
</html>