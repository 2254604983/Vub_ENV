<?php
$servername = "localhost";
$username = "zabbix";
$password = "zabbix";
$dbname = "zabbix";

// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 

$sql1 = "create table flag (flag char(100))";
$result1 = $conn->query($sql1);
$value="xxxxxx";
$sql = "insert into flag (flag) values ('$value')";
$result = $conn->query($sql);

$conn->close();
?>