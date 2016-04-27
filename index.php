<html>
	<head>
		<title>CDC Backups Status</title>
	</head>
	<body>
		<h1>Server Status</h1>
		<p><b>Disk usage: </b><?php echo(shell_exec("df -h | grep /$ | grep -o '[0-9]*%'")); ?></p>

		<h2>Backup Targets</h1>
		<ul>
			<li><a href="/list.php?server=www">Web server</a></li>
			<li><a href="/list.php?server=game">Game server</a></li>
			<li><a href="/list.php?server=forum">Forum database</a></li>
		</ul>	
	</body>
</html>
