<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>منصة قيم</title>
<link href="static/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="static/js/jquery.min.js"></script>
<script src="static/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion           
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                    });
            });
        </script>
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrap">
	<h1>منصة قيم</h1>
	<div class="main-content">
		<div class="sap_tabs">
			 
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			 
				  <ul>
					  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>دخول</span></li>
					  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>تسجيل</span></li>
				  </ul>

				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="register">
							<form method="POST" action="login.php">
								<input name="username" placeholder="Your ID" class="mail" type="text" required>
								<input name="password" placeholder="Password" class="lock" type="password" required>
								<input type="submit" value="دخول"/>
							</form>
						</div>
				</div>	

				<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="register">
							<form method="POST" action="login.php">	
								<input placeholder="Name" type="text" required="">
								<input placeholder="Email Address" type="text" required="">									
								<input placeholder="Password" type="password" required="">	
								<input placeholder="Confirm Password" type="password" required="">
									<div class="sign-up">
										<input type="submit" value="انشاء حساب"/>
									</div>
							</form>
						</div>
					</div> 	        					            	      
					
			</div>	
			
		</div>
	</div>
 </div>
</body>
</html>