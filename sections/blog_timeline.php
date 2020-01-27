<?php

//var_dump($feedContent);

foreach ($feedContent->entry as $entry) {

    $date = new DateTime($entry->published);
   
    echo "<h3 class='display-4'>" . $entry->title . "</h3>";
    echo"<blockquote class='blockquote text-right'>";
    echo "<footer class='blockquote-footer'>Por: <cite title='Source Title'>" . $entry->author->name . " </cite> em: " . $date->format('d/m/Y') . " às " . $date->format('H:i') . ".</footer>";
    echo "</blockquote>";
    echo "<p>" . $entry->content . "</p>";
    echo "<hr>";
}

?>