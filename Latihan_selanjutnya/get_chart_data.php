<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yohanes dio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Koneksi database gagal']));
}

$sql = "SELECT label_data, nilai_data FROM chart_data ORDER BY id ASC";
$result = $conn->query($sql);

$labels = [];
$data_points = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $labels[] = $row['label_data'];
        $data_points[] = $row['nilai_data'];
    }
}

$conn->close();

$chart_data = [
    'labels' => $labels,
    'data' => $data_points
];

echo json_encode($chart_data);
?>