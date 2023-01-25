<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
include("admin_area/add_banner.php");


?>


  <!-- Cover -->
  <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
                        <?php
                                    $consulta = mysqli_query(mysqli_connect("localhost","root","","ecom_store"), "select count(id) conta from banner where estado='activado'");
                                    $recebe = mysqli_fetch_assoc($consulta);
                                    $contar = $recebe['conta'];
                            $i=0;
                          if (mysqli_num_rows(mysqli_query(mysqli_connect("localhost","root","","ecom_store"), "select *from banner where estado='activado'"))>0) {
                            while ($i<=($contar-1)) {
                                if ($i==0) {
                                        echo "<li data-target='#slider-carousel' data-slide-to='$i' class='active'></li>";
                                }else{
                                    echo "<li data-target='#slider-carousel' data-slide-to='$i' ></li>";

                                }
                                $i++;
                            }
                          
                            }?>
                      
						</ol>
						
						<div class="carousel-inner">

                        <?php
                            $cont=1;
                          if (mysqli_num_rows(mysqli_query(mysqli_connect("localhost","root","","ecom_store"), "select *from banner where estado='activado'"))>0) {
                            $bt_banner = mysqli_query(mysqli_connect("localhost","root","","ecom_store"), "select *from banner where estado='activado'");
                          while ($data2=mysqli_fetch_array($bt_banner, MYSQLI_ASSOC)) {                       
                        
                            if ($cont==1) {
                                echo "<div class='item active'>
								<div class='col-sm-6'>
									<h1><span>C</span>ompras Diversas</h1>
									<h2>".$data2['titulo']."</h2>
									<p>".$data2['descricao']." </p>
									<button type='button' class='btn btn-default get'>Ver Produtos</button>
								</div>
								<div class='col-sm-6'>
                                <img style='height:350px;' class='d-block w-100' src='img_banner/".$data2['imgBanner']."'  class='girl img-responsive' alt='''>
									
								</div>
							</div>";
                            }else{
                                echo " <div class='item'>
								<div class='col-sm-6'>
                <h1><span>C</span>ompras Diversas</h1>
									<h2>100% ".$data2['titulo']."</h2>
                                    <p>".$data2['descricao']." </p>									
                                    <button type='button' href='customer/my_account.php?my_orders' class='btn btn-default get'>Ver Produtos</button>
								</div>
								<div class='col-sm-6'>
                                <img style='height:350px;' class='d-block w-100' src='img_banner/".$data2['imgBanner']."'  class='girl img-responsive' alt='''>					
                                	</div>
							</div>";
                            }
                            $cont++;
                        }
                    }?>
							
											
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
  <main>

    <div class="hero">

</a>
    </div>
    <!-- Main -->
  



    <div class="wrapper">
            <h1>Futura Coleção<h1>
            <form action="?view_products" method="post">
    <center>
    <input type="search" name="search" id="search" value="">
    <input type="submit" value="Pesquisar">
    </center>
</form>
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php
$search="";
if (isset($_POST['search'])) {
    # code...
    $search = $_POST['search'];
}
    getPro($search);

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Informação</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">A marca</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Lojas Locais</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Serviço ao cliente</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacidade e Cookies</a>
              </li>
              
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Garantias</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Envio &amp; Retorno</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Envio Seguro</a>
              </li>

              
          
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Minha Conta</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Iniciar Sessão</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Criar Conta</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ver Carrinho</a>
              </li>
             
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Acompanhar Encomenda</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Actualizar Informação</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Informações de Contacto</div>
            <address class="address">
            Luanda - Angola.<br>
            
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> HTecZone&trade;
          </div>

          <div class="developer">
          Por Grine Costa
          </div>

          <div class="designby">
            Por Grine Costa
          </div>

        </div>
      </div>
    </footer>
         <!-- Latest jQuery form server -->
         <script src="js/jquery.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
