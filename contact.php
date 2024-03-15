<!DOCTYPE HTML>
<html>
<head>
<title>Volkswagen</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/style2.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body style = "background: linear-gradient(
  140deg,
  hsl(204deg 70% 53%) 0%,
  hsl(208deg 67% 64%) 18%,
  hsl(210deg 67% 72%) 35%,
  hsl(211deg 66% 80%) 52%,
  hsl(212deg 66% 87%) 69%,
  hsl(213deg 66% 93%) 85%,
  hsl(0deg 0% 100%) 100%
);">

<div id="home" class="top-header" style = "background-color:white;height:50px;margin-top:0;padding-top:30px;padding-bottom:12px;">
	 <div class="container">
		 <div class="logo">
		 </div>
		 <div class="top-menu">
			 <span class="menu"><img src="assets/images/nav-icon.png" alt=""/></span>
			 <ul>
				<li><a href="index.php">Acasa</a></li>
				<li><a href="index.php">Inceputurile</a></li>
				<li><a href="index.php">Modele</a></li>
				<li><a href="noutati.php">Noutati</a></li>
				<li><a href="galerie.php">Galerie</a></li>
				<li><a href="contact.php">Contact</a></li>
			 </ul>
				 
		    
		  </div>
	 </div>
</div>

<form id = "form" action = "send.php" method="post">
	<input name="nume" type="text" class="input1" placeholder="Nume" required/>
	<input name="prenume" type="text" class="input1" placeholder="Prenume" required/>   	
	<input name="email" type="text" class="input1" placeholder="E-mail" required/>
	<textarea name="mesaj" class="input1" placeholder="Mesajul tau"></textarea>
	<input type="submit" value="TRIMITE"/>
</form>

</body>