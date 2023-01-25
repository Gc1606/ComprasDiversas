<?php

include_once('cnx.php');
    include_once('gravar_verificacao.php');
     if(!isset($_POST)){
        header("Location: ../admin/login.php"); exit;
    }

    if($_GET['info'] == "add"){

        class AddBanner{

            private string $titulo;
            private string $descricao;

            public function add(
                string $titulo,
                string $descricao){

                    $this->titulo = $titulo;
                    $this->descricao = $descricao;

                $ficheiro = $_FILES['ficheiro'];
                $conect = new conexao;
                $cnx = $conect->cnxb();

               
                //verificando se é uma imagem pegando o ultimo
                if($ficheiro['size'] > 5211203){
                    header("Location: ?info=ImgMax"); 
                }
                   
                    $novoNome = uniqid()."b";
                    $nomeArquivo = $ficheiro['name'];
                    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
            
              
                move_uploaded_file($ficheiro["tmp_name"], "../img_banner/" .$novoNome . "." . $extensao);
                
               $consulta = mysqli_query($cnx,"insert into banner values(default,'".$this->titulo."','".$this->descricao."', '$novoNome.$extensao',default,default)");
          
                header("Location: ../admin/index4.php?acao=sucess"); 
           // }
                
            }
        }
        $addBanner = new AddBanner;
        $addBanner->add($_POST['titulo'],$_POST['descricao']);

    }



    class ListarTudo
    {
        public function listar()
        {
            $conect = new conexao();
            $cnx = $conect->cnxb();
            $consulta = mysqli_query($cnx, "select *from banner");
            return $consulta;
        }
    }

    $listarBannerTudo = new ListarTudo();
    $TBannerTudo = $listarBannerTudo->listar();



    class ListarUpBanner
    {
        private int $id;
        public function listarUp(int $id)
        {
            $conect = new conexao();
            $cnx = $conect->cnxb();
            $this->id = $id;

            $consulta = mysqli_query($cnx, "select *from banner where id='".$this->id."'");
            return $consulta;
        }
    }

    
?>