<?php
header('Content-type: application/json', true);
require_once('who.php');
try{
  $user = getUser();
  $_conf = json_decode(file_get_contents("config.json"), true)["app_conf"];
  $xml_0 = file_get_contents('php://input');
  $xml = str_replace('anonymous', $user, $xml_0);
  $fichier = hash('md5', $xml) . '.xml';
  file_put_contents($_conf['export_conf_folder'] . $fichier, $xml);
  echo '{"success":true, "filepath":"' . $fichier . '"}';
} catch(Exception $e){
  echo '{"success":false, "reason":"' . $e . '"}';
}
?>
