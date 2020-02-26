<?php include _DIR_ . '/../db.php';

header('Content-Type: application/json');
echo json_encode($database);

?>
