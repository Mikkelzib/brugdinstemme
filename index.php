<?php
	require_once("conf.php");

	if(isset($_POST["submit"])){
		$nummer = filter_input(INPUT_POST, "nummer",FILTER_SANITIZE_STRING);
		
		$sql = "INSERT INTO sms (nummer) VALUES (?)";
		$stmt = $con->prepare($sql);
		$stmt->bind_param('s', $nummer);
		$stmt->execute();
		$stmt->close();
		echo "Data er sendt til databasen";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Eksamen</title>
    <link rel="stylesheet" href="css/base.css" />
</head>
<body>
	<h1 style="font-size: 30pt; text-align: center;">Hvordan påvirker kommunalvalget dig?</h1>
    <div class="horizon scroll">
 <img id="pic" src="img/vej1.png" width="4000" height="700" alt=""/>
		<div id="textbox" style="width=70; height=20;"><B><p>Hvis ikke du bruger din stemme<br> kan det føre til følgende:</p></B><ul style="padding:0; margin:0; list-style: none;"><li style="font-size:2pt; padding:0;margin:0;">- Færre studiepladser</li><li style="font-size:2pt;padding:0;">- Dårligere undervisningsniveau </li></ul></div>
		<div id="textbox2" style="width=100; height=60; padding-top: 0;"><p></p style="padding-top: =;font-weight:bold;"><b>Hvis ikke du bruger din stemme<br> kan det føre til følgende:</b></p><ul style="padding:0; margin:0; list-style: none;"><li>- Begrænsning af natte-livet i københavn</li><li>- Færre events for unge i bybilledet</li></ul></div>
		<div id="textbox3" style="width=100; height=60;"><b>Hvis ikke du bruger din stemme<br> har du ikke indflydelse på følgende:</b><ul style="padding:0; margin:0; list-style: none;"><li>- Byplanlægningen</li><li>- Vedligeholdelse af veje</li></ul></div>
		<div id="textbox4" style="width=100; height=60;"><b>Hvis ikke du bruger din stemme, har du ikke indflydelse på følgende:</b><ul style="padding:0; margin:0; list-style: none;"><li>- eventuelle besparelser i sundhedsvæsnet</li><li>- Udvikling af fremtidens velfærd i din kommune</li></ul></div>

<div id="husk" style="position: absolute; bottom: 50%; left:87%;z-index: 1; max-width: 300px;"><h1>Husk at stemme</h1>	
		<br>Indtast dit nummer her, og bliv mindet om at gå til stemmeboksen på dagen
		<form action="index.php" method="post"><input name="nummer" type="text" placeholder="Telefonnummer">
		<button name="submit" >send</button></form>
	  </div>
	  
</div>
	
<div class="front scroll">
    <img src="img/gå.png" width="100" height="120" alt=""/>
     </div>
<script type="text/javascript" src="Js/jquery.min.js"></script>
    <script type="text/javascript" src="Js/jquery.jInvertScroll.js"></script>
    <script type="text/javascript">
    (function($) {
        $.jInvertScroll(['.scroll'],        
            {
            height: 9000,
        });
		
    }(jQuery));
    </script>
<script>
   
window.onscroll = function() {tekst(), tekst2(),tekst3(),tekst4()};

function tekst() {
    if (document.body.scrollTop > 1350 || document.documentElement.scrollTop > 1350) {
        document.getElementById("textbox").className = "fadein";
    }
}
	function tekst2() {
    if (document.body.scrollTop > 2350 || document.documentElement.scrollTop > 2350) {
        document.getElementById("textbox2").className = "fadein";
    }
}
	function tekst3() {
    if (document.body.scrollTop > 3350 || document.documentElement.scrollTop > 3350) {
        document.getElementById("textbox3").className = "fadein";
    }
}
	function tekst4() {
    if (document.body.scrollTop > 4350 || document.documentElement.scrollTop > 4350) {
        document.getElementById("textbox4").className = "fadein";
    }
}
	</script>
	
</body>
</html>
