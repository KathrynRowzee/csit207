<?php
$characters = array(array('name' => 'Peter Parker', 'email' => 'peterparker@mail.com',),
array('name' => 'Clark Kent', 'email' => 'clarkkent@mail.com',),
array('name' => 'Harry Potter', 'email' => 'harrypotter@mail.com',));
$characters[] = array('name' => 'Graha Tia', 'email' => 'grahatia@mail.com',);
print_r($characters);

$xml = new SimpleXMLElement(' ');
array_walk_recursive($characters, array($xml,'addChild'));

$handler = fopen("characters.xml", 'x+');
fwrite($xml);
fclose($handler);
?>
