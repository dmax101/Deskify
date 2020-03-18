<?php

//var_dump($feedContent);

	
	if (!isset($_GET['post'])) {
		
		$entry = $feedContent->entry[ sizeof($feedContent->entry) - 1 ];

		$date = new DateTime($entry->published);

		echo "<h3 class='display-4'>" . $entry->title . "</h3>";
		echo"<blockquote class='blockquote text-right'>";
		echo "<footer class='blockquote-footer'>Por: <cite title='Source Title'>" . $entry->author->name . " </cite> em: " . $date->format('d/m/Y') . " às " . $date->format('H:i') . ".</footer>";
		echo "</blockquote>";
		echo "<p>" . $entry->content . "</p>";
		echo "<br>";
		echo "<br>";
		//echo "<hr>";
		
	} else {
		
		$post_name = $_GET['post'];
		$search = array_search($post_name, $lista_posts);
		//echo $search . "<br>";
		
		if(!($search === FALSE)) {
			$entry = $feedContent->entry[ $search ];

			$date = new DateTime($entry->published);

			echo "<h3 class='display-4'>" . $entry->title . "</h3>";
			echo"<blockquote class='blockquote text-right'>";
			echo "<footer class='blockquote-footer'>Por: <cite title='Source Title'>" . $entry->author->name . " </cite> em: " . $date->format('d/m/Y') . " às " . $date->format('H:i') . ".</footer>";
			echo "</blockquote>";
			echo "<p>" . $entry->content . "</p>";
			echo "<br>";
			echo "<br>";
		} else {
			echo "<h1>Erro 404</h1><h2>Página não encontrada!</h2><p>Por favor verifique se o endereço está correto.</p>";
		}
		
		
	}

?>