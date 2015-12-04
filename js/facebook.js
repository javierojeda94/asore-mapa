  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      FB.api('/me', function(response) {
        window.location = 'map.php?name=' + response.name;
      });
    } else if (response.status === 'not_authorized') {
      console.log('Please log into this app.');
    } else {
      console.log('Please log into Facebook.');
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1056318407732159',
    cookie     : true,
    xfbml      : true, 
    version    : 'v2.5'
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
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
