<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	foreach($stylesheets as $name){
		echo "<link rel='stylesheet' href='css/".$name.".css'/>";
	}
	?>
</head>
<body>
	<header>
		<div id="title">
			<h1>Hakumei-Hime</h1>
		</div>

	</header>
	</br></br></br></br>
	<ul id="toolbar">
		<a href='index.php'><li>Home</li></a>
		<a href='index.php'><li>Categories</li></a>
		<a href='index.php'><li>Translator</li></a>
		<a href='index.php'><li>Language</li></a>
		<a href='index.php'><li>Cuisine</li></a>
		<a href='index.php'><li>Sports</li></a>
		<?php
			if(isset($_SESSION['token']))
			{
				echo "<a href='index.php?action=log-out'><li>Log Out</li></a>";

			}
			else
			{
					echo "<a href='index.php?action=log-in'><li>Login</li></a>";
					echo "<a href='index.php?action=sign-in'><li>Sign In</li></a>";
			}
		?>
	</ul>
	<main>
		<?= $contenu; ?>
	</main>
	<footer>
		<a>Conditions generales d'utilisation</a>
		<a>Politique de confidentialite</a>
		<p>Adress</p>
		<p>Infos entreprise et blah blah blah</p>
	</footer>
</body>

</html>