<?php

// เชื่อมต่อกับ Firebase
require_once 'vendor/autoload.php'; // Firebase PHP SDK
use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('serviceAccountKey.json'); // เปลี่ยนเป็น path ของไฟล์ service account key ของคุณ "C:\test1-d4022-firebase-adminsdk-cfzh4-a12e2d6cff.json"
$database = $factory->createDatabase();

// รับข้อมูลตำแหน่งปัจจุบันจาก Firebase Realtime Database
$database->getReference('/locations')->on('value', function ($snapshot) {
    $data = $snapshot->getValue(); // ข้อมูลตำแหน่งทั้งหมด
    // เริ่มส่วนของ JavaScript
    echo '<script>';
    echo 'function initMap() {';
    echo 'var center = { lat: 13.736717, lng: 100.523186 };'; // ตำแหน่งเริ่มต้นของแผนที่ (Bangkok, Thailand)
    echo 'map = new google.maps.Map(document.getElementById("map"), {';
    echo 'center: center,';
    echo 'zoom: 10';
    echo '});';
    // เพิ่มเครื่องหมายตำแหน่งที่ได้รับจาก Firebase
    foreach ($data as $key => $location) {
        echo 'var marker' . $key . ' = new google.maps.Marker({';
        echo 'position: { lat: ' . $location['latitude'] . ', lng: ' . $location['longitude'] . ' },';
        echo 'map: map,';
        echo 'title: "Location"';
        echo '});';
    }
    echo '}';
    echo '</script>';
});


?>

<script>
    function initMap() {
        var center = { lat: 13.736717, lng: 100.523186 }; // ตำแหน่งเริ่มต้นของแผนที่ (Bangkok, Thailand)
        map = new google.maps.Map(document.getElementById("map"), {
            center: center,
            zoom: 10
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRKeGgFVqFIhbFY24VBLaB6gwWkqkv0c&callback=initMap" async defer></script>




<!DOCTYPE html>
<html>
<head>
    <title>Realtime Google Maps</title>
    <!-- โหลด Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeRKeGgFVqFIhbFY24VBLaB6gwWkqkv0c&callback=initMap" async defer></script>
</head>
<body>
    <div id="map" style="height: 400px; width: 100%;"></div>
</body>
</html>
