<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>지도 API</title>
</head>
<style type="text/css">
#menu {
  position: absolute;
  top: 13px;
  left: 12px;
  width: 254px;
  z-index: 10;
}

html, body {width:100%;height:100%;margin:0;padding:0;} 
.map_wrap {position:relative;overflow:hidden;width:100%;height:350px;}
.radius_border{border:1px solid #919191;border-radius:5px;}      

.custom_zoomcontrol {position:absolute;top:50px;left:700px;width:36px;height:80px;overflow:hidden;z-index:1;background-color:#f5f5f5;} 
.custom_zoomcontrol span {display:block;width:36px;height:40px;text-align:center;cursor:pointer;}     
.custom_zoomcontrol span img {width:15px;height:15px;padding:12px 0;border:none;}             
.custom_zoomcontrol span:first-child{border-bottom:1px solid #bfbfbf;}      
</style>
<body>
	<div class="map_wrap">
        <div id="mapArea" style="width:750px;height:450px;"></div>
        <!-- 지도 확대, 축소 컨트롤 div 입니다 -->
        <div class="custom_zoomcontrol radius_border"> 
            <span onclick="zoomIn()"><img src="http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/ico_plus.png" alt="확대"></span>  
            <span onclick="zoomOut()"><img src="http://i1.daumcdn.net/localimg/localimages/07/mapapidoc/ico_minus.png" alt="축소"></span>
        </div>
    </div>

	<div id="menu">
		<h3>Menu</h3>
	</div>

    <div id="clickLatlng"></div>

<script src="//apis.daum.net/maps/maps3.js?apikey=5725fdfd188424108c5a02899bf5fcea"></script>
<!-- <script src="./public/js/jquery-1.8.0.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="./public/js/bootstrap.min.js"></script>     -->
<script>


var mapContainer = document.getElementById('mapArea'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(0, 0), // 지도의 중심좌표
        level: 2 // 지도의 확대 레벨 
    };

var map = new daum.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

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
    
    var locPosition = new daum.maps.LatLng(33.450701, 126.570667),    
        message = 'geolocation을 사용할수 없어요..'
        
    displayMarker(locPosition, message);
}

// 지도에 마커와 인포윈도우를 표시하는 함수입니다
function displayMarker(locPosition, message) {

    // 마커 이미지의 주소
    var markerImageUrl = 'http://i1.daumcdn.net/localimg/localimages/07/2012/img/marker_p.png', 
        markerImageSize = new daum.maps.Size(40, 42), // 마커 이미지의 크기
        markerImageOptions = { 
            offset : new daum.maps.Point(20, 42)// 마커 좌표에 일치시킬 이미지 안의 좌표
        };

    // 마커 이미지를 생성한다
    var markerImage = new daum.maps.MarkerImage(markerImageUrl, markerImageSize, markerImageOptions);

    // 마커를 생성합니다
    var marker = new daum.maps.Marker({  
        map: map, 
        draggable : true, // 마커를 드래그 가능하도록 설정한다
        image : markerImage, // 마커의 이미지
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

// 기타 기능 추가

// // 지도에 확대 축소 컨트롤을 생성한다
// var zoomControl = new daum.maps.ZoomControl();

// // 지도의 우측에 확대 축소 컨트롤을 추가한다
// map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);


// 지도 타입 변경 컨트롤을 생성한다
var mapTypeControl = new daum.maps.MapTypeControl();

// 지도의 상단 우측에 지도 타입 변경 컨트롤을 추가한다
map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT); 

// 실시간교통 타일 이미지 추가
map.addOverlayMapTypeId(daum.maps.MapTypeId.TRAFFIC); 

// 지도 확대, 축소 컨트롤에서 확대 버튼을 누르면 호출되어 지도를 확대하는 함수입니다
function zoomIn() {
    map.setLevel(map.getLevel() - 1);
}

// 지도 확대, 축소 컨트롤에서 축소 버튼을 누르면 호출되어 지도를 확대하는 함수입니다
function zoomOut() {
    map.setLevel(map.getLevel() + 1);
}


// 지도를 클릭한 위치에 표출할 마커입니다
var marker = new daum.maps.Marker({ 
    // 지도 중심좌표에 마커를 생성합니다 
    position: map.getCenter() 
}); 
// 지도에 마커를 표시합니다
marker.setMap(map);


// 지도에 클릭 이벤트를 등록합니다
// 지도를 클릭하면 마지막 파라미터로 넘어온 함수를 호출합니다
daum.maps.event.addListener(map, 'click', function(mouseEvent) {        
    
    // 클릭한 위도, 경도 정보를 가져옵니다 
    var latlng = mouseEvent.latLng; 
    
    // 마커 위치를 클릭한 위치로 옮깁니다
    marker.setPosition(latlng);
    
    var message = '클릭한 위치의 위도는 ' + latlng.getLat() + ' 이고, ';
    message += '경도는 ' + latlng.getLng() + ' 입니다';
    
    var key = '5725fdfd188424108c5a02899bf5fcea';

    data = {
        longitude : latlng.getLng(),
        latitude : latlng.getLat()
    }    

    $.post('/index.php/map/getAddress',data,function(json){
        console.log(json["datas"]["fullName"]);
    });
    
    var resultDiv = document.getElementById('clickLatlng'); 
    resultDiv.innerHTML = message;
    
});

// $.ajax(
// {
//   type:'post',
//   url:'/index.php/map/getAddress',
//   dataType:'json',
//   success:function(json){   
//     // if(json['status'])
//     // {
//     //   window.location.replace('/');
//     // }
//     // else
//     // {
//     //   alert(json['error']['message']);
//     // }
//   },
//   error:function(e){  
//     alert(e.responseText); 
//   }  
// });





</script>
</body>
</html>