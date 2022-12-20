<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'),true);

header('Content-Type: application/json; charset=utf-8');

if (isset($data["password"]) && $data["password"] == 'krager') {
    $sql = "SELECT * FROM produkter WHERE 1=1";
    $bind = [];

    if (!empty($data["nameSearch"])) {
        $sql .= " AND (prodNavn LIKE CONCAT('%', :nameSearch, '%') OR prodKategori LIKE CONCAT('%', :nameSearch, '%') OR prodSort LIKE CONCAT('%', :nameSearch, '%')) ";
        $bind[":nameSearch"] = $data["nameSearch"];

    }

    $produkter = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($produkter);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Dit kodeord var forkert";
    echo json_encode($error);
}

?>