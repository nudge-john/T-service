<!-- Wrap -->
<div id="wrap">
	<!-- Container -->
	<div class="container text-center animsition" data-animsition-in="fade-in-left" data-animsition-out="fade-out-left">		<h2>Welcome T-service </h2>		
		<div id="profileImg"></div>

		<div class="col-md-12" style="margin-top:100px;">
			<div class="col-md-6">
				<h1><a href="/isme" class="animsition-link" data-animsition-out="fade-out-right" data-animsition-out-duration="700">It's me</a></h1>
			</div>

			<div class="col-md-6">
				<h1>Find</h1>
			</div>
		</div>
	</div> 
	<!-- container end. -->
</div>
<!-- Wrap end. -->

<script type="text/javascript">
// $(".animsition").animate({ top: '-=100px' }, 600, 'easeOutElastic')

$(document).ready(function(){
	$(".animsition").animsition({   
    
    loading               :    false,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
})
</script>
