
<nav>
	<ul>
	<?php
	$menu = [ 
			"Fu�ball" => "fussball.html",
			"Tennis" => "tennis.html",
			"Wandern" => "wandern.html",
			"Schwimmen" => "schwimmen.html",
			"Judo" => "judo.html" 
	];
	foreach ( $menu as $key => $value ) {
		echo "<li><a href=\"/$value\">$key</a></li>";
	}
	?>
		</ul>
</nav>