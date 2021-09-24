<?php 
	$sql = "select * from Telefonos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->Marcas;?></td>
		<td><?php echo $row->Descripcion;?></td>
        <td><?php echo $row->Precio;?></td>
		<td>

<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
<a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
</td>
	</tr>
	<?php } ?>
