<h3>Últimas Postagens</h3>

<ul class="list-group">
    <?php

    $path = "sections/blog_post.php";

    $i = 0;

    foreach ($feedContent->entry as $entry) {

        $url = $entry->link[4]['href'];

        $postname = pathinfo(parse_url($url)['path'])['filename'];

        echo "<li class='list-group-item'><a href='" . $path . "?post=" . $postname . "'>" . $entry->title . "</a></li>";

        if ($i == 4) {
            break;
        }

        $i++;
    }

    ?>
</ul>