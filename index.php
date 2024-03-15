<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volkswagen</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>

 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

</head>

<body>

<div id="home" class="top-header">
	 <div class="container">
		
		 <div class="top-menu">
			 <span class="menu"><img src="assets/images/nav-icon.png" alt=""/></span>
			 <ul>
				<li><a class="scroll" href="#home">Acasă</a></li>
				<li><a class="scroll" href="#about">Începuturile</a></li>
				<li><a class="scroll" href="#experience">Modele</a></li>
				<li><a href="noutati.php">Noutăți</a></li>
				<li><a href="galerie.php">Galerie</a></li>
				<li><a href="contact.php">Contact</a></li>
			 </ul>
				 <script>					
							$("span.menu").click(function(){
								$(".top-menu ul").slideToggle("slow" , function(){
								});
							});
				 </script>
		  </div>
	 </div>
</div>	

<div class="banner">
    <div class="container">
                    <script src="assets/js/responsiveslides.min.js"></script>
                            <script>
                    $(function () {
                      $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                          $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                          $('.events').append("<li>after event fired.</li>");
                        }
                      });
                
                    });
                  </script>
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="banner-info">
                            <h1>"If only everything in life was as reliable as a Volkswagen."</h1>
                            <p></p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h1>"It’s not a car, it’s a Volkswagen."</h1>
                            <p></p>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h1>"For the love of the car."</h1>
                            <p></p>
                        </div>
                    </li>
                 </ul>
            </div>
            <div class="clearfix"> </div>
    </div>
</div>

<div class="about" id="about">
   <div class="container">
   <h3 class="tittle">Începuturile</h3>
      <div class="col-md-5 ab-grid pic">
      <img src="assets/images/poza2.jpg" alt=" " title="ab">
      </div>
      <div class="col-md-7 ab-grid text">
        <h4>Cuvântul Volkswagen înseamnă „vehicul popular” sau „al poporului”, fiind preconizat de regimul nazist ca automobil pe care să și-l poată cumpăra oricare cetățean german.</h4>
        <p>O fabrică uriașă a fost construită la Fallersleben. Inspirată după fabrica Ford de la Rouge River, fabrica VW a fost sponsorizată, parțial, prin bunuri confiscate de la sindicate.</p>
        <p>Însuși Ferdinand Porsche și ginerele său, Anton Piech, care a condus fabrica, au fost reținuți după război de către francezi pentru legăturile sale cu încercarea naziștilor de a prelua controlul asupra companiei Peugot.</p>
        <p>Din 1948, Volkswagen a devenit un element important – atât economic, cât și simbolic – al regenerării statului german. Primele mașini au fost vândute în SUA în 1949, dar adevăratul succes vine din 1950. În doar cinci ani, producția Beetle-ului a crescut spectaculos, ajungând la un milion de mașini în 1955. </p>
         
      </div>
      <div class="clearfix"> </div>
   </div>
</div>	   

<div class="experience" id="experience">
    <div class="container">
            <h3 class="tittle four">Modele Populare</h3>
            <div class="experience-main">
                <span class="devide-line"></span>
                <div class="experience-left">
                    
                    <h4>VOLKSWAGEN TOUAREG</h4>
                    <h5></h5>
                    <p>Touareg este o apariţie impunătoare şi inconfundabilă pe şosele, fiind desenat din linii incisive şi detalii unice. Tehnologiile de ultimă oră, în parte disponibile ca dotări opţionale, precum sistemul electromecanic de prevenire a răsturnării, farurile IQ. Light - LED-Matrix şi bordul Innovision sporesc nivelul de confort şi vă oferă călătorii şi mai incitante.</p>
                </div>
                <div class="experience-left-snd">
                    
                </div>
                <div class="experience-right-snd">
                    <h4>VOLKSWAGEN PASSAT</h4>
                    <h5></h5>
                    <p>Vă numărați printre cei ce trebuie să se împartă adeseori între călătoriile de business și cotidianul de familie?. Passat ofera chiar mai mult decât atât. Sarcina sa este să vă facă dumneavoastră viața mai uşoară. Datorită funcţiilor sale intuitive, fiecare călătorie devine o experienţă confortabilă și rafinată.</p>
                </div>
                <div class="experience-left-trd">
                    
                    <h4>VOLKSWAGEN PHAETON</h4>
                    <h5></h5>
                    <p>Phaeton: limuzina de lux a lui Volkswagen. Cam așa putem să caracterizăm această mașină, pe care însuși Volkswagen a construit-o ca „premium class vehicle”. Mașină premium decorată cu sigla VW, de mașină a poporului?</p>
                </div>
                <div class="clearfix"> </div>
            </div>
    </div>
</div>

<div id="blog" class="blog">
	 <div class="container">
		 <h3>Mașinile Viitorului</h3>
		 <div class="blog-grids">
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="assets/images/poza3.jpg" class="img-responsive" alt=""/></a> 
				 <h4><a href="#">Volkswagen ID.6. </a></h4>
					<span>Est. 19 iulie | 2023</span>
				 <p>Volkswagen a dezvăluit mai multe detalii despre una dintre electricele sale următoare, ID.6, care va intra în producție în 2023. VW ID.6 va fi un sedan de clasă medie — similar în dimensiuni cu Passat — animat de unul sau două motoare și alimentat de o baterie de 84 kWh. Versiunea cu un motor (4×2) va avea punte motrică spate iar cea bi-motor (4×4) va avea câte un motor pe fiecare punte. </p>				 
			 </div>
			 <div class="col-md-6 blog-grid">
				 <a href="#"><img src="assets/images/poza4.jpg" class="img-responsive" alt=""/> </a> 
				 <h4><a href="#">Volkswagen ID R Pikes Peak</a></h4>
					<span>Est. 25 noiembrie | 2026</span>
				 <p>Prima mașină electrică de curse de la Volkswagen, ID R, vine cu propulsie complet electrică pentru a alerga în legendara cursă Pikes Peak International din Colorado. Cu o construcție ușoară și aerodinamică, ID R-ul, realizat în mare parte din fibră de carbon, prezintă linii futuriste, în stilul prototipurilor concepute pentru Le Mans.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->	

<?php include_once('includes/footer.php'); ?>