<?php
include "database.php";

$db = new Database();

// Example usage
$data = $db->get("mahasiswa", "nim='12345678'");
print_r($data);

$newData = array(
    'nim' => '312210375',
    'nama' => 'Hafiz Faturrohman',
    'alamat' => 'Cikarang Utara',
);
$db->insert("mahasiswa", $newData);

$updatedData = array(
    'nama' => 'Hafiz Faturrohman',
);
$db->update("mahasiswa", $updatedData, "nim='312210375'");

$db->delete("mahasiswa", "nim='312210375'");
?>
