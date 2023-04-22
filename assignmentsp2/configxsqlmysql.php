<?php
define ( 'DB_HOST' , 'localhost' );
define ( 'DB_NAME' , 'schoolopdracht' );
define ( 'DB_USER' , 'bri_sg' );
define ( 'DB_PASS' , '28172817' );

function connectDatabase(){
    $conn = 'mysql:host=' . DB_HOST . ';DB_NAME=' . DB_NAME;

    try{
        return new PDO($conn, DB_USER, DB_PASS );
    }
    catch (PDOException $e) {
        return NULL;
    }
}

$db = connectDatabase();
if( is_null ( $db ) )
    die('<h1>Database-verbinding mislukt</h1>' );
echo 'gelukt';

$sql = 'SELECT * FROM schoolopdracht.gebruikers';

$statement = $db->prepare( $sql );
$statement->execute();
$result = $statement->fetchall ( PDO::FETCH_OBJ );

foreach ( $result as $record ){
    echo '<ul>';

    foreach ( $record  as $key => $value ) {
        echo "<li>$key => $value</li>";
    };
    echo '</ul>';
}
?>