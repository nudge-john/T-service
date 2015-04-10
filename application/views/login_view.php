<div id="wrap">
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12 text-center">
				<div id="status"></div>
				<h2 class="text-center">Please sign in</h2>
				<button class="btn btn-lg btn-facebook" id="fblogin" style='cursor:pointer;'>Log in with Facebook</button>
			</div> <!-- col-12 end. -->
		</div> <!-- row end. -->

		<div class="row">		
			<div class="col-xs-12">
				<br>
			    
			    <form class="form-signin">			        
			        <label for="inputEmail" class="sr-only">Email address</label>
			        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			        <label for="inputPassword" class="sr-only">Password</label>
			        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			        <div class="checkbox">
			          	<label>
			            	<input type="checkbox" value="remember-me"> Remember me
			          	</label>
			        </div>
			        <button id="signIn" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			    </form>

			    <!-- <div class="fb-like pull-right" data-share="true" data-width="450" data-show-faces="true"></div> -->

			</div> <!-- col-12 end. -->
		</div> <!-- row end. -->

	</div> <!-- /container -->
</div> <!-- wrap end. -->
<script>
var response = '';
var accessToken = '';
var userFbImage = '';
  
$(document).ready(function(){	

	$('#fblogin').click(function(){	
		statusChangeCallback(response);
	})

	window.fbAsyncInit = function() {
		FB.init({
		    appId      : '1574129482835926',
		    cookie     : true,  // enable cookies to allow the server to access                         
		    xfbml      : true,  // parse social plugins on this page
		    version    : 'v2.2' // use version 2.2
		});  

		FB.getLoginStatus(function(response) {			
			console.log(response);
			// statusChangeCallback(response);
		});
	};

	// Load the SDK asynchronously
	(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	
	function statusChangeCallback(response) {    
		//console.log('Status');
	    if (response.status === 'connected') {
	    	// 미리 연결되어 있는 상태 일수도 있다.
	    	// Logged into your app and Facebook.      	
	      	
	      	console.log('FB Login');
	      	getProfileImage();

	    } else if (response.status === 'not_authorized') {
	      // The person is logged into Facebook, but not your app.
	      document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
	    } else {
	      // The person is not logged into Facebook, so we're not sure if
	      // they are logged into this app or not.
	      document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
	      console.log('First Login');
	      loginAPI();
	    }
  	}

  	function loginAPI() {  	
  		console.log('loginAPI');
		FB.login(function(logresponse){
	    	var fbname;  
	    	accessToken = logresponse.authResponse.accessToken; 

	    	getUserInfo(logresponse);

	  	},{ scope: 'email', auth_type: 'rerequest' });
	}

	function getUserInfo(){
		console.log('getUserInfo');

		getProfileImage();

		FB.api('/me', function(response) {
	    	console.log(response);

		    $.post('/login/facebookProc', { name: response.name, fb_id: response.id+'__fac', email:response.email, sns:'facebook',user_img:userFbImage},function(json){ 
		        console.log(json['result']);

		        if(accessToken)
		        {
		        	location.replace('/');
		        }
		    }); // POST end.    
	  	}); // API end.
	}

	function getProfileImage(){
		FB.api("/me/picture", function (response) {
				userFbImage = response['data']['url'];		    	
		    	
		    	console.log(response['data']['url']);
		    	
		    	if (response && !response.error) 
		    	{
		        	/* handle the result */
		        	document.getElementById('status').innerHTML = '<img src="'+userFbImage+'">';
		    	}
	 		}
		);
	}

}); // Ready end.

// Log Out
function fbLogOut(){	
  	FB.logout(function(response) {
    	location.replace('/');
    	// 사용자 로그 아웃 이후 콜백처리
  	});
}

/** Input Login Jquery **/


$("#signIn").click(function(e){	
	e.preventDefault();
	
	$.ajax(
    {
        type:'post',
        url:'/login/signIn',
        data:{
          email:$("#inputEmail").val(),
          password:$("#inputPassword").val()
        },
        dataType:'json',
        success:function(json)
        {
          	if(json['status'])
          	{                
            	if(json['data']['redirect'])
            	{
            		window.location.replace(json['data']['redirect']);
            	}
            	else
            	{
            		window.location.replace('/');
            	}
        	}	
          	else
          	{
            	alert('<?php echo lang("error_4"); ?>');
            	$('input#password2').val('');
            	$('input#password2').focus();          
          	}
        },
        error:function(e)
        {
          	alert(e.responseText); 
        }
    });

});

</script>