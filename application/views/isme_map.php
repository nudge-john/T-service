
<div id="wrap">
    <div class="container">
        
        <div class="col-md-3">
            <!-- <h5>출발</h5> -->

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#start" id="startTab" aria-controls="home" role="tab" data-toggle="tab">출 발 지</a></li>
                    <li role="presentation"><a href="#arrival" id="arrivalTab" aria-controls="profile" role="tab" data-toggle="tab">도 착 지</a></li>
                
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="start">

                        <form class="mt15">
                            <div class="form-group">
                                <label for="areaInput">지 역</label>
                                <input class="form-control" id="areaInput" placeholder="지도를 클릭해 주세요.">
                            </div>
                            
                            <div class="form-group">
                               <label for="memoInput">주변건물</label>
                                <input class="form-control" id="memoInput" placeholder="참조 : 합정역 5번출구">
                            </div>  

                            <textarea class="form-control textarea_noresize" rows="3" placeholder="자신을 찾을수 있는 메모를 남겨 주세요."></textarea>
                        </form>

                    </div>
                    
                    <!-- Arrival -->
                    <div role="tabpanel" class="tab-pane" id="arrival">

                        <div id="menu_wrap" class="bg_white">
                            <div class="option">
                                <p>
                                    <form onsubmit="searchPlaces(); return false;">
                                    키워드 : <input type="text" value="이태원 맛집" id="keyword" size="15"> 
                                    <button type="submit">검색하기</button> 
                                </p>
                            </div>
                            <hr>
                            <ul id="placesList"></ul>
                            <div id="pagination"></div>
                        </div>

                        


                    </div>
                    <!-- Arrival end. -->
                </div>
                <!-- Tab panes end. -->
                <button class="btn btn-primary btn-block mt15" >Submit</button>

            </div>            

        </div>

        <!-- Map -->
        <div class="col-md-9" id="mapArea">
            <div class="map_wrap">
                <div class="map-style pull-right" id="map"></div>
                <!-- <div id="centerAddr"></div> -->

                <div id="menu">
                    <h3>Menu</h3>
                    <button type="button" class="btn btn-default" id="loc">
                        <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>                    
                    </button>
                </div>
            </div>
        </div>
        <!-- Map end. -->

        <!-- Map -->
        <div class="col-md-9" id="mapAreaArrival">
            <div class="map_wrap">
                <div class="map-style pull-right" id="mapSearch"></div>
                <!-- <div id="centerAddr"></div> -->
            </div>
        </div>
        <!-- Map end. -->
        
    </div>
</div>