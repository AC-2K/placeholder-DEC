<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    echo '<script type="text/javascript">';
    echo 'alert("Pagina indisponivel, nao acedeu");';;
    echo 'window.location.href = "auth.html";';
    echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" pagina CRUD de projecto">
    <meta name="author" content="DEC">

    <title>DEC Projects & Consultoria - gestao</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/testimonial.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html" class="active">Home</a></li>
              <li><a href="category.html">Sobre</a></li>
              <li><a href="listing.html">Projectos</a></li>
              <li><a href="contact.html">Contacto</a></li> 
              <li><a href="auth.php"><i class="fa fa-plus"></i> </a></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <form id="contact" action="DB.php" method="post" enctype="multipart/form-data" >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2>Criar projecto</h2>
                                            <br>
                                            <fieldset>
                                                <label for="nome" >Nome</label>
                                                <input type="name" name="nome"  class="form-control" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="tipo">Tipo</label>
                                                <select name="tipo" class="form-control" required>
                                                    <option>Alvenaria</option>
                                                    <option>olha</option>
                                                    <option>Alvenaria</option>
                                                    <option>Alvenaria</option>
                                                    <option>Alvenaria</option>
                                                </select>
                                                <hr>
                                            </fieldset>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="categoria">Categoria</label>
                                                <select name="categoria" class="form-control" required>
                                                    <option>Proprio</option>
                                                    <option>Personalizado</option>
                                                    <option>Modificado</option>
                                                    <option>Exclusivo</option>
                                                </select>
                                                <hr>
                                            </fieldset>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="tamanho">Tamanho</label>
                                                <input type="text" name="tamanho" class="form-control" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="quarto">Quarto</label>
                                                <input type="number" name="quarto" class="form-control" min="0" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="wc">WC</label>
                                                <input type="number" name="wc" class="form-control" min="0" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="garagem">Garagem</label>
                                                <input type="number" name="garagem" class="form-control" min="0" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="preco">Preco</label>
                                                <input type="number" name="preco" class="form-control" min="0" required>
                                                <hr>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <label for="foto">Foto</label>
                                                <input type="file" name="foto" class="form-control" required>
                                                <hr>
                                            </fieldset>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit"  value="submitCriar" name="submit" class="main-button" style="width: 200px;">Criar</button>
                                            </fieldset>
                                            <hr>
                                        </div>
                                    </div>
                                </form>
                            </div>   
                        </div>

                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <form id="contact" action="DB.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- Modal 1  - Actualizar -->
                                        <div class="modal fade" id="myModalUpdate" role="dialog">
                                            <div class="modal-dialog" id="dialogACT">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <br>
                                                        <label for="nome" >Nome</label>
                                                        <input type="name" name="nome"  class="form-control" required>
                                                        
                                                        <hr>

                                                        <label for="selectedTipo">Tipo</label>
                                                        <input type="checkbox" id="enableTipo" onclick="toggleSelect('enableTipo', 'selectedTipo')">

                                                        <select id="selectedTipo" name="tipo" class="form-control"  disabled>
                                                            <option>Alvenaria</option>
                                                            <option>olha</option>
                                                            <option>opcao 3</option>
                                                            <option>Alvenaria</option>
                                                            <option>Alvenaria</option>
                                                        </select>

                                                        <hr>

                                                        <label for="selectedCategoria">Categoria</label>
                                                        <input type="checkbox" id="enableCategoria" onclick="toggleSelect('enableCategoria', 'selectedCategoria')">
 
                                                        <select id="selectedCategoria" name="categoria" class="form-control" disabled>
                                                            <option>Proprio</option>
                                                            <option>Personalizado</option>
                                                            <option>Modificado</option>
                                                            <option>Exclusivo</option>
                                                        </select>

                                                        <hr>

                                                        <label for="tamanho">Tamanho</label>
                                                        <input type="text" name="tamanho" class="form-control" >
                                                        
                                                        <hr>
                                                        
                                                        <label for="quarto">Quarto</label>
                                                        <input type="number" name="quarto" class="form-control" min="0" >
                                                        
                                                        <hr>

                                                        <label for="wc">WC</label>
                                                        <input type="number" name="wc" class="form-control" min="0" >
                                                        
                                                        <hr>

                                                        <label for="garagem">Garagem</label>
                                                        <input type="number" name="garagem" class="form-control" min="0" >
                                                        
                                                        <hr>

                                                        <label for="preco">Preco</label>
                                                        <input type="number" name="preco" class="form-control" min="0" >
                                                        
                                                        <hr>
                                                        
                                                        <label for="foto">Foto</label>
                                                        <input type="file" name="foto" class="form-control" >
                                                        
                                                        <hr>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="main-button" name="submit" value="submitActualizar" id="continuarACT">continuar</button>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit"  value="submitActualizar" name="submit" class="main-button" id="botaoACT" style="width: 200px;">Actualizar</button>
                                            <hr>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <form id="contact" action="DB.php" method="post" >
                                    <div class="row">
                                        <!-- Modal 2  - APAGAR -->
                                        <div class="modal fade" id="myModalDelete" role="dialog">
                                            <div class="modal-dialog" id="dialogDEL">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <p class="nav-link">Nome projecto</p>
                                                        <input type="text" class="form-control" name="nomeDEL">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="main-button" name="submit" value="submitApagar" id="continuarDelete">continuar</button>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit"  value="submitApagar" name="submit" class="main-button" id="modalDelete" style="width: 200px;">Apagar</button>
                                            <hr>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                            <script> 
                                    $('document').ready(function(){
                                        $('#botaoACT').on('click',function(e){
                                            e.preventDefault();
                                            $('#myModalUpdate').modal('toggle');

                                        });
                                        $('#modalDelete').on('click',function(e){
                                            e.preventDefault();
                                            $('#myModalDelete').modal('toggle');

                                        });

                                        $('#continuarACT').on('click',function(){
                                            $('form').submit();
                                        });

                                        $('#continuarDelete').on('click',function(){
                                            $('form').submit();
                                        });
                                    });    
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendor-all.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/pcoded.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
