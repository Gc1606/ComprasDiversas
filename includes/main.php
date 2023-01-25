</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Olá seja bem vindo"; 
          }
          else
          { 
              echo "Bemvindo : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Criar Conta</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">A minha conta</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Iniciar Sessão</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Sair</a>';
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
          <a class="logo__link" href="index.php">
            <h1>ComprasAltas</h1>
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="#">
                Casa
               
              </a>
              </li>

            <li class="categories__item">
              <a class="categories__link" href="">
                Tecnologia
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                Loja
              </a>
            </li>


          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                Minha Conta
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Definições da Conta</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Minha lista de desejos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Meus Pedidos</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ver carrinho de compras</a>
                      </li>
                    </ul>
                  </div>
                  
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Ediar conta</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Mudar senha</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Delete Account</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>

      </div>
    </div>
  </header>