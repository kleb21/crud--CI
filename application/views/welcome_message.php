<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>crud con CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container p-4">
		<div class="row">
			<!-- header -->
			<h2 class="mb-3">CRUD CodeIgniter</h2>
			<div class="col-md-4">



				<!-- form -->
				<div class="card card-body">
					<?php echo form_open('welcome/addUser', ['id'=> 'form-persona']) ?>

					<div class="mb-3">
						<input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
					</div>
					<div class="mb-3">
						<input type="text" name="lastN" id="lastN" class="form-control" placeholder="Apellido">
					</div>
					<div class="mb-3">
						<input type="date" name="birth" id="birth" class="form-control" placeholder="fecha de nacimiento">
					</div>
					<div class="mb-3">
						<input type="text" name="genre" id="genre" class="form-control" placeholder="genero">
					</div>

					<input type="submit" name="save" class="btn btn-success btn-block" value="Enviar datos">

					<?php echo form_close() ?>
				</div>
			</div>


			<!-- table -->
			<div class="col-md-8 ">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Fecha de Nacimiento</th>
							<th>Genero</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($users as $user) {
						?><tr>
							    <td><?php echo $user->id; ?></td>
								<td><?php echo $user->name; ?></td>
								<td><?php echo $user->lastN; ?></td>
								<td><?php echo $user->birth; ?></td>
							    <td><?php echo $user->genre; ?></td>
								<td>
									<a onclick="fullData('<?php echo $user->id; ?>',`<?php echo $user->name ?>`, `<?php echo $user->lastN ?>`,`<?php echo $user->birth ?>`,`<?php echo $user->genre ?>`)" class="btn btn-info">Editar</a>
									<td><a href="<?php echo base_url('welcome/delete/'.$user->id)  ?>" class="btn btn-danger">Eliminar</a></td>								</td>
							</tr>
						<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
							<script>
								let url = '<?php echo base_url('welcome/update'); ?>';


								const fullData = (id, name, lastN, birth, genre) => {
									let path = url + '/' + id;
									document.getElementById('form-persona').setAttribute('action', path);
									document.getElementById('name').value = name;
									document.getElementById('lastN').value = lastN;
									document.getElementById('birth').value = birth;
									document.getElementById('genre').value = genre;
								}
							</script>


</body>

</html>
