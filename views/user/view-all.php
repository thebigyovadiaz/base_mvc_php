<h1>Listado de usuarios</h1>
<?php while($user = $get_all_users->fetch_object()): ?>
	<?=$user->email?> - <?=$user->fecha?> <br/>
<?php endwhile; ?>