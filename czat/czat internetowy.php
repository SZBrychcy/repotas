<html>



<head>
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>

<meta charset="UTF-8">
<title>Czat Internetowy</title>
<link rel="stylesheet" href="style.css" type="text/css">


	<script type="text/javascript">
		$(document).ready(function(){

			$("#wyslij").click(function(){
				if($('[act="wiadomosc"]').val()==''){
					$('[act="wiadomosc"]').focus();
				}
				else{
					$.ajax({
			        	type:"post",
			        	url:"wyslij.php",
			        	data:{
			        		message : $('[act="wiadomosc"]').val()
			        	},
			        	success: function(dane){
			        		var getDate = new Date(); // for now
							var date = getDate.getHours()+':'+getDate.getMinutes(); 
							var dateDiv = '<div class="datebox">'+date+'</div>';

			        		var divbox = '<div class="message">'+dane+dateDiv+'</div>';
			        		$("#srodek").append(divbox);

			        		$('[act="wiadomosc"]').val('');
							$('[act="wiadomosc"]').focus();
			        	}
			        });
				}
			});
			
		});
	</script>





</head>



<body background="ep_naturalblack.png">

<div id="container">
 <div id="logo">
 	Najlepszy chat internetowy  <br> <br>

 		<div id="Tekst">
 			<a href="Regulamin">Regulamin</a> <br>
 			<a href="Pomoc">Pomoc</a> <br>
 			<a href="Opcje">Opcje</a> <br>
 		</div>
 </div>


 <div id="srodek">

 </div>

  <div id="lewemenu">
 </div>


 <div id="ad">
 	33
 	</div>
 

 	
 	<textarea id="input" act="wiadomosc"></textarea>
 
 	<button id="wyslij"> wyslij wiadomosc </button>








</body>
</html>