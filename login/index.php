<?php 
session_start();
if ( !empty($_SERVER['HTTP_REFERER']) ) 
	$_SESSION['loginreferer'] = $_SERVER['HTTP_REFERER'];

include_once('../header.php');
?>
	<title>OpenPOIs Registry Login</title>
</head>
<body>
	<div id="banner">
		<span id="title">OpenPOIs</span>
		<span id="sub">the web of location data</span>
	</div>
	<div class="ink-container">
		<h3><br>Sign in with any of these sites</h3>
		<div id="fb-root"></div>
		<script>
		  // Additional JS functions here
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '473919912642476', // App ID
		      channelUrl : '//openpois.ogcnetwork.net/channel.html', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });

		    // Additional init code here
			FB.getLoginStatus(function(response) {
			  if (response.status === 'connected') {
			    // connected
			  } else if (response.status === 'not_authorized') {
			    // not_authorized
			  } else {
			    // not_logged_in
				FBlogin();
			  }
			 });
		
		
		  };

		  // Load the SDK Asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>
	
		<div>
			<a href="#" onclick="FBlogin()">
				<img src="../graphics/social_signin/facebook_signin.png" alt="Sign in with Facebook"/>
			</a>
		</div>
		<div>
			<a href="openid_login.php">
				<img src="../graphics/social_signin/openid_signin.png" alt="Sign in with OpenID"/>
			</a>
		</div>
		<div>
			<hr>
			<h5>Why doesn't OpenPOIs have it's own user accounts?</h5>
			<ul>
				<li>One less password to remember</li>
				<li>One less online presence to manage</li>
				<li>We won't <em>ever</em> post anything to your account</li>
			</ul>
		</div>
	</div><!-- end ink-container -->

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="komodocredit">
	<p><a href="http://www.komodomedia.com/blog/2009/06/sign-in-with-twitter-facebook-and-openid/">sign in graphics courtesy of komodomedia.com</a></p>
</div>
<?php include('../footer.php'); ?>
</body>
</html>