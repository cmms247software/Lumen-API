<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta charset="utf-8">
	<meta content="IE=11" http-equiv="X-UA-Compatible">
	<meta content="telephone=no" name="format-detection">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="all,follow" name="robots">
	<title>  Sign in || ISS 24/7 - Total.js</title>
	<meta content="Your company name" name="author">
	<link href="http://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.common.min.css" rel="stylesheet" type="text/css">
	<link href="http://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.blueopal.min.css" rel="stylesheet" type="text/css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/css/login.css" rel="stylesheet" type="text/css">
	<link href="/favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
	<div id="main_container">
        <div class="card-container">
            <div class="row">
                <div class="col-md-4 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12 card">
                    <center>
                        <img class="img" src="/images/logo.png" style="width:150px">
                    </center><br>
                    <form id="login_form" name="login_form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="user_icon"><i aria-hidden="true" class="fa fa-user-circle"></i></span><input aria-describedby="user_icon" aria-label="Username" autofocus="" class="form-control" name="username" placeholder="Username" required="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="password_icon"><i aria-hidden="true" class="fa fa-key"></i></span><input aria-describedby="password_icon" aria-label="Password" class="form-control" name="password" placeholder="Password" required="" type="password">
                            </div><a class="forgot-password" href="#" style="float:right">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <input class="k-checkbox" id="remember_me" name="remember_me" type="checkbox" value="1"> <label class="k-checkbox-label" for="remember_me">Remember me</label>
                        </div>
                        <button class="form-control bg-primary" id="login_submit_button" name="submit" type="submit">Sign in</button>
                        <p>Copyright 2018 - 24x7 Software</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // window.onbeforeunload = function (evt) {

        //     console.log(evt);

        //     XMLHttpRequest.setRequestHeader("Harshal","pandey");

        //   var message = 'Are you sure you want to leave?';
        //   if (typeof evt == 'undefined') {
        //     evt = window.event;
        //   }
        //   if (evt) {
        //     evt.returnValue = message;
        //   }
        //   return message;
        // }
    </script>

	<script src="https://code.jquery.com/jquery-3.2.1.js"> </script>
	<script src="/js/default.js"> </script>
    <script type="text/javascript">
	$(document).ready(function() {
		// $("#login_submit_button").kendoButton();
		$("#login_form").submit(function(e) {
			e.preventDefault();
			$.ajax({
				url: 'authenticate',
				type: "POST",
                // xhrFields: {    withCredentials: true},
				data: get_all_input_values('#login_form :input'),
				success: function(result) {
                    console.log(result.success.token);

                    // localStorage.setItem('Authorization', result.success.token);


                    // $.ajaxSetup({
                    //     headers: { 'Authorization': 'Bearer '+ result.success.token}
                    // });

                    $.ajax({

                        //url: 'https://4ds3k2zbj5.execute-api.us-west-2.amazonaws.com/stage1',
                         url: 'dashboard',
                        method: "GET",
                        success: function(result) {
                            $('#main_container').html(result);
                        }
                    });

                    console.log(result);
				}
			});
			return false
		})
	});
	</script><span id="notification"></span>
</body>
</html>
