<?php
	include "config.php";
	
	$id = (!empty($_POST['id'])) ? htmlspecialchars($_POST['id']) : 0;
	$map = $d->rawQueryOne("select descvi from #_news where id = ? limit 0,1",array($id));
?>
<?php if($map['descvi']!='') { echo htmlspecialchars_decode($map['descvi']); } ?>