<?php
    include 'produtoRetrieve.php';

?>
<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/dec-white-logo.jpeg-128x128-2.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>produto</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu3 cid-tOOSvu3hPH" once="menu" id="menu03-5b">
	

	<nav class="navbar navbar-dropdown navbar-expand-lg">
		<div class="container">
			<div class="navbar-brand">
				<span class="navbar-logo">
					<a href="#">
						<img src="assets/images/logo-337x156.png" alt="Projecto DEC" style="height: 5rem;">
					</a>
				</span>
				
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
						<a class="nav-link link text-black text-primary display-4" href="index.html">Home</a>
					</li><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle show display-4" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Sobre</a><div class="dropdown-menu show" aria-labelledby="dropdown-955" data-bs-popper="none"><a class="text-black dropdown-item text-primary display-4" href="curiosiadades.html">Curiosidade</a><div class="dropdown"><a class="text-black dropdown-item dropdown-toggle show display-4" href="#" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Projectos</a><div class="dropdown-menu dropdown-submenu show" aria-labelledby="dropdown-387" data-bs-popper="none"><a class="text-black dropdown-item text-primary display-4" href="projectoSobre.html">Sobre</a><a class="text-black dropdown-item text-primary display-4" href="projectoPronto.html">Pronto</a><a class="text-black dropdown-item text-primary display-4" href="projectoModificado.html">Modificado</a><a class="text-black dropdown-item text-primary display-4" href="projectoExclusivo.html">Exclusivo</a></div></div></div></li><li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="vendas.php">Projectos</a></li>
					
					<li class="nav-item">
						<a class="nav-link link text-black text-primary display-4" href="contacto.html">Contacto</a>
					</li></ul>
				<div class="icons-menu">
					<a class="iconfont-wrapper" href="login.html">
						<span class="p-2 mbr-iconfont mobi-mbri-left-right mobi-mbri" style="color: rgb(5, 15, 70); fill: rgb(5, 15, 70);"></span>
					</a>
					
					
					
				</div>
				
			</div>
		</div>
	</nav>
</section>

<section data-bs-version="5.1" class="header6 cid-tOF5yhNoS4" id="header06-3t">
	

	
	

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="card-wrapper">
					<h3 class="mbr-section-cardtitle mbr-fonts-style mb-2 display-5">
						<strong>Muitas opções!!!</strong></h3>

					<p class="mbr-cardtext mbr-fonts-style mb-0 display-7">
					Aqui podes encontrar as várias opções que possam satisfazer a si.<br></p>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<h1 class="mbr-section-title mbr-fonts-style mb-4 display-1"><strong>Portal de projecto</strong></h1>
				
				
				
			</div>
		</div>
	</div>
</section>

<section data-bs-version="5.1" class="features7 cid-tOF5TbMBWc" id="features7-41">
<?php
  if(!empty($row))
    foreach($row as $rows){
  ?> 
    
  <div class="mbr-class="{'container': !fullWidth, 'container-fluid' : fullWidth}">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <?php echo '<img src="assets/DB/'.$rows['pro_img'].'" alt="Projecto DEC">'; ?>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="text-box">
                    <?php echo '<h4 class="item-title mbr-fonts-style display-5"> <strong>'.$rows['pro_nome'].'</strong></h4>'; ?>
                      <?php echo '<p class="mbr-text mbr-fonts-style mt-3 display-7">'.$rows['pro_descricao'].'</p> '; ?>                            
                        <div class="cost">
                          <?php echo '<p class="mbr-text mbr-fonts-style mt-3 display-7">'.$rows['pro_preco'].',00 MZN</p> '; ?> 
                          <?php echo '<hr> '; ?>
                          <?php echo '<p class="mbr-text mbr-fonts-style mt-3 display-7">Não inclui: </p> '; ?>
                          <?php echo '<h5>Mapa de quantidades </h5> '; ?>   
                          <?php echo '<h5>Orçamento </h5> '; ?>  
                        <?php echo '<div class="mbr-section-btn item-footer mt-2"><a  class="btn item-btn btn-info display-7" target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=258848100497&text=Cumprimentos! Estou interessado no projecto '.$rows['pro_nome'].', visualizado a partir website" value="produto">Estou interessado</a></div>'; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</section>

<section data-bs-version="5.1" class="gallery5 mbr-gallery cid-tPruEDLmmD" id="gallery5-5w">
<div class="container">
  <div class="row mbr-gallery mt-4"> 
<?php
  $count = 0;
  if(!empty($row2)){
  foreach($row2 as $rowt){
?>          
          <?php echo '<div class="col-12 col-md-6 col-lg-3 item gallery-image" >'; ?>
            <?php echo '<div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tPrCNM2GgJ-modal" data-bs-target="#tPrCNM2GgJ-modal">'; ?>
            <?php echo '<img class="w-100" src="assets/projectos/'.$rowt['img_ficheiro'].'" alt="Projecto DEC" data-slide-to="'.$count.'" data-bs-slide-to="'.$count.'" data-target="#lb-tPrCNM2GgJ" data-bs-target="#lb-tPrCNM2GgJ">'; ?>                   
              <?php echo '<div class="icon-wrapper">'; ?>
                <?php echo '<span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>'; ?>
              <?php echo '</div>'; ?> 
            <?php echo '</div>'; ?>  
          <?php echo '</div>'; ?>
  <?php $count ++; }?>
    </div>
        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tPrCNM2GgJ-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-tPrCNM2GgJ" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                            <?php
                              $count = 0;
                              foreach($row2 as $rowt){
                            ?>
                              <?php if ($count == 0)  { ?>
                                <?php echo '<div class="carousel-item active">'; ?>
                                  <?php echo '<img class="d-block w-100" src="assets/projectos/'.$rowt['img_ficheiro'].'" alt="Projecto DEC">'; ?>
                                <?php echo '</div>'; ?>                               
                              <?php } else { ?>
                                <?php echo '<div class="carousel-item">'; ?>
                                  <?php echo '<img class="d-block w-100" src="assets/projectos/'.$rowt['img_ficheiro'].'" alt="Projecto DEC">'; ?>
                                <?php echo '</div>'; ?>                               
                              <?php } ?>
                              <?php $count ++; }?>
                            </div>
                            <ol class="carousel-indicators">
                              <?php
                                $count = 0;
                                foreach($row2 as $rowt){
                              ?>
                              <?php if ($count == 0)  { ?>
                                <?php echo '<li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-tPrCNM2GgJ" data-bs-target="#lb-tPrCNM2GgJ"></li>'; ?>>                               
                              <?php } else { ?>
                                <?php echo '<li data-slide-to="'.$count.'"  data-bs-slide-to="'.$count.'"  class="active" data-target="#lb-tPrCNM2GgJ" data-bs-target="#lb-tPrCNM2GgJ"></li>'; ?>>
                              <?php } ?>
                              <?php $count ++; }?>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-tPrCNM2GgJ">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-tPrCNM2GgJ">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
</div>
</section>


<section data-bs-version="5.1" class="footer4 cid-tOFstXU5Du" once="footers" id="footer4-4f"> 
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-12 col-12">
                    <a href="#/">
                        <img src="assets/images/dec-white-logo.jpeg-506x506.jpg" alt="Projecto DEC">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>DEC PROJECTS</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">
                    Possuimos uma excelente equipa de profissionais altamente qualificados, evoluindo de forma constante no mercado graças aos méritos obtidos nos trabalhos prestados nas áreas de Consultoria e Fiscalização de Projectos.</p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7"></h5>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Contactos</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><span style="font-size: 1.4rem;">+258 84 81 00 497&nbsp;</span></li><li class="mbr-text item-wrap"><span style="font-size: 1.4rem;">+258 87 31 00 497</span><br></li>
                    <li class="mbr-text item-wrap"><br></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.facebook.com/profile.php?id=61550479898746" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.instagram.com/decprojects/" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://wa.me/258848100497">
                            <span class="mbr-iconfont socicon-whatsapp socicon"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

<section><a href="#"></a><a href="#"></a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>