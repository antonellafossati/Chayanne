<?php

define ( 'SITE.VERSION', '0.0.1' );

$url = "https://api.discogs.com/artists/384914/releases";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad
  )
);

$context = stream_context_create($options);
$file = file_get_contents($url, true, $context);

$discografia = json_decode( $file );
$discografia_completa = array( 'object(stdClass)' => array() );

echo '<pre>' ;
var_dump ( $discografia ) ;

/*

Que hace ese object(stdClass) ahi >:(
Warning: Undefined array key "releases" in C:\xampp\htdocs\php\chayanne\discografia.php on line 25
Fatal error: Uncaught TypeError: count(): Argument #1 ($var) must be of type Countable|array, null given in C:\xampp\htdocs\php\chayanne\discografia.php:25 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php\chayanne\discografia.php on line 25

*/

for ( $i = 0;  $i < count( $discografia_completa['releases'] );  $i++ ) {
	if ( ! empty( $discografia_completa['releases'][ $i ]['title'] )
		&& ! empty( $discografia_completa['releases'][ $i ]['artist'] )
	) {
		$discografia_completa[] = $discografia['releases'][ $i ]['resource_url'];
	}
}

header('Content-Type: application/json');
echo json_encode( $discografia_completa );
