<?php
require_once('who.php');
$user_infos = getUserInfos();
header('Content-type: application/json',true);
echo '{"first_name": "'.$user_infos[0].'", "last_name":"'.$user_infos[1].'", "organisation": {"legal_name":""}}';
?>
