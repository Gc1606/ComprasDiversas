<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Painel / Banners

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Ver Banners

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>#</th>
<th>Título</th>
<th>Imagem</th>
<th>Descriçao</th>
<th>Estado</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select *from banner";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['titulo'];

$pro_image = $row_pro['imgBanner'];
$pro_descricao = $row_pro['descricao'];
$pro_estado = $row_pro['estado'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="../img_banner/<?php echo $pro_image; ?>" width="60" height="60"></td>

<td> <?php echo $pro_descricao; ?></td>

<td> <?php echo $pro_estado; ?></td>

<td>

<a href="up_banner.php?id=<?php echo $pro_id; ?>&estado=<?php echo $pro_estado; ?>">
<i class="fa fa-pencil"> </i> Actualizar

</a>
<td>

<a href="dell_banner.php?delete_banner=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Eliminar

</a>

</td>


</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php } ?>