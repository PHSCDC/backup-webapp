<html>
	<head>
<?php
	$server = $_GET['server'];
?>
		<title>Backups of <?php echo($server) ?></title>
	</head>
	<body>
		<h1>Backup server status</h1>
		<p><b>Disk usage: </b><?php echo(shell_exec("df -h | grep /$ | grep -o '[0-9]*%'")); ?></p>

		<h2>Backups of <?php echo($server)?></h1>
		<b>Total: </b><?php echo(shell_exec("ls /backup | grep $server | wc -l")); ?>
		<ul>
			<?php echo(shell_exec("ls /backup | grep $server | sed 's/\\(.*\\)/<li><a href=\"download.php?file=\\1\">\\1<\\/a><\\/li>/'")); ?>
		</ul>	
		<a href="/">Back</a>
	</body>
</html>
