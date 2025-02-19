<!-- http://feeds.feedburner.com/Deskify -->

<?php

// URL location of your feed
$feedUrl = "http://feeds.feedburner.com/Deskify";
$feedContent = "";

// Fetch feed from URL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $feedUrl);
curl_setopt($curl, CURLOPT_TIMEOUT, 3);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);

// FeedBurner requires a proper USER-AGENT...
curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate");
curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");

$feedContent = curl_exec($curl);
curl_close($curl);

$feedContent = simplexml_load_string($feedContent);

//var_dump($feedContent)

//Criando array de posts
$lista_posts = array();

foreach ($feedContent->entry as $entry) {
		
		//var_dump($entry);

        $url = $entry->link[4]['href'];
		$postname = pathinfo(parse_url($url)['path'])['filename'];
		
		array_push($lista_posts,$postname);        
}

?>