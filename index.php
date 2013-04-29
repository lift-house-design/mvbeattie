<?php
	require('includes/functions.php');
	require('includes/header.php');
?>
<header>mvBeattie Development</header>
<nav>
<?php foreach(config('nav') as $page=>$title): ?>
	<h3><?php echo $title ?></h3>
	<div><?php require('pages/'.$page) ?></div>
<?php endforeach; ?>
</nav>
<?php require('includes/footer.php') ?>
