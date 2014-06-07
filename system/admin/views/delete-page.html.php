<?php
	if(isset($_GET['destination'])) {
		$destination = $_GET['destination'];
	}
	$url = $p->file;

	$dir = substr($url, 0, strrpos($url, '/'));
	$oldurl = str_replace($dir . '/','',$url);
	$oldmd = str_replace('.md','',$oldurl);

	$post = site_url() . $oldmd;

	if(isset($destination)) {

		if($destination == 'post') {
			$back = $post;
		}
		else {
			$back = site_url() . $destination;
		}
	}
	else {
		$back = site_url();
	}

?>
<?php echo '<p>Êtes-vous sûr de vouloir supprimer <strong>' . $p->title . '</strong> ?</p>';?>
<form method="POST">
	<input type="hidden" name="file" value="<?php echo $p->file ?>"/><br>
	<input type="submit" name="submit" value="Supprimer"/>
	<span><a href="<?php echo $back ?>">Annuler</a></span>
</form>
