<?php

            if(!isset($_POST)){
            header("Location: ../admin/login.php"); exit;
        }

        class UpBanner{
            private int $id;
            private string $estado;

            public function dell(int $id, string $estado){
            $this->id = $id;
            $this->estado = $estado;
            if ($this->estado=="activado") {
                # code...
                mysqli_query(mysqli_connect("localhost","root","","ecom_store"),"update banner set estado='desativado' where id = ".$this->id."");
                header("Location: index.php?view_banner");
            }else{
                mysqli_query(mysqli_connect("localhost","root","","ecom_store"),"update banner set estado='activado' where id = ".$this->id."");
                header("Location: index.php?view_banner");
            }
            
        }
       
    }

    $upBanner = new UpBanner;
    $upBanner->dell($_GET['id'],$_GET['estado']); 


?>