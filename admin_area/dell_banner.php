<?php

            if(!isset($_POST)){
            header("Location: ../admin/login.php"); exit;
        }

        class DellBanner{
            private int $id;

            public function dell(int $id){
            $this->id = $id;

            mysqli_query(mysqli_connect("localhost","root","","ecom_store"),"delete from banner where id = ".$this->id."");
            header("Location: index.php?view_banner"); 
            
        }
       
    }

    $delBanner = new DellBanner;
    $delBanner->dell($_GET['delete_banner']); 


?>