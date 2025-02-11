<?php
require 'vendor/autoload.php';
use Spatie\PdfToText\Pdf;

$data = [];
$str = Pdf::getText('EFI241107334-001.pdf');
$str = str_replace("\n", " ", $str);

// data log temperature
preg_match_all('/(\d{2}\/\d{2}\/\d{2} \d{2}:\d{2}:\d{2}) (\d+\.\d+)/', $str, $logs);
foreach ($logs[0] as $index => $match) {
    $log = explode(' ', $logs[0][$index]);
    $date = DateTime::createFromFormat('y/m/d', $log[0])->format('Y-m-d');
    $time = $log[1];
    $temp = $log[2];
    $data[$index] = [
        'timestamp' => strtotime("$date $time"),
        'date' => $date,
        'time' => $time,
        'temp' => $temp
    ];
}

// sort by timestamp (ascending)
usort($data, function ($a, $b) {
    return $a['timestamp'] <=> $b['timestamp'];
});

// device info
preg_match_all('/Mode Code\s*:\s*(.*?)\s*Probe/', $str, $device, PREG_SET_ORDER, 0);
$device_info = explode(' ', $device[0][1]);
$response = [
    'device_code' => $device_info[0],
    'serial_number' => $device_info[1],
    'mode_code' => $device_info[2],
    'data_point' => count($data),
    'data' => $data
];

header('Content-type: application/json');
echo json_encode($response);