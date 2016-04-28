<html>
	<head>
<?php
	require 'clean.php';
	$server = $_GET['server'];
	
?>
		<title>Backups of <?php echo(clean($server)) ?></title>
	</head>
	<body>
		<h1>Backup server status</h1>
		<p><b>Disk usage: </b><?php echo(shell_exec("df -h | grep /$ | grep -o '[0-9]*%'")); ?></p>

		<h2>Backups of <?php echo(clean($server))?></h1>
		<b>Total: </b><?php echo(shell_exec("ls /backup | grep ".clean($server)." | wc -l")); ?>
		<ul>
			<?php echo(shell_exec("ls /backup | grep ".clean($server)." | sed 's/\\(.*\\)/<li><a href=\"download.php?file=\\1\">\\1<\\/a><\\/li>/'")); ?>
		</ul>	
		<a href="/">Back</a>
	</body>
</html>
