<script type="text/javascript">

var page = '<?=$page;?>';

$('#'+page).addClass('active');

var user_img = "<?=$this->session->userdata('user_img');?>";

$(document).ready(function(){
	$('#profileImg').append('<img src="'+user_img+'">');

}); // Ready end.

$('#logout').click(function(){
	fbLogOut();	
	window.location.href = "/login/sign_out";
});

window.fbAsyncInit = function() {
	FB.init({
	    appId      : '1574129482835926',
	    cookie     : true,  // enable cookies to allow the server to access                         
	    xfbml      : true,  // parse social plugins on this page
	    version    : 'v2.2' // use version 2.2
	});  

	FB.getLoginStatus(function(response) {
		//console.log(response);
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

// Log Out
function fbLogOut(){	
  	FB.logout(function(response) {
    	location.replace('/');
    	// 사용자 로그 아웃 이후 콜백처리
  	});
}
</script>
