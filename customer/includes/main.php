</head>
<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Olá seja bem vindo"; 
         } 
          else
          { 
              echo "Bem vindo : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="../cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../customer_register.php" class="login__link">Criar Conta</a>';
          } 
            else
            { 
                echo '<a href="my_account.php?my_orders" class="login__link">Minha Conta</a>';
            }   
?>  
          </li>


          <li class="login__item">
          <?php
          if(!isset($_SESSION['customer_email'])){
            echo '<a href="../checkout.php" class="login__link">Iniciar Sessão In</a>';
          } 
            else
            { 
                echo '<a href="../logout.php" class="login__link">Sair</a>';
            }   
?>  
            
          </li>
        </ul>
      
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../index.php">
            <h1>ComprasAltas</h1>
        </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                Casa
                <i class="icon-down-open-1"></i>
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="#">
                Tecnologia
            
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Loja
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="../about.php">
                Sobre nós
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="#">
                Fale Connosco
                <i class="icon-down-open-1"></i>
              </a>
              

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>