<?php
require 'vendor/autoload.php';

use Spatie\PdfToText\Pdf;
$str = Pdf::getText('EFI241107334-001.pdf');
$data = [];

preg_match('/Mode Code\s*:\s*(.*?)\s*Probe Type/', $str, $device);
print_r($device);die;

preg_match_all('/(\d{2}\/\d{2}\/\d{2} \d{2}:\d{2}:\d{2}) (\d+\.\d+)/', $str, $logs);
foreach ($logs[0] as $index => $match) {
    $log1 = explode(' ', $logs[1][$index]);
    $data[$index] = [
        'date' => $log1[0],
        'time' => $log1[1],
        'temp' => $logs[2][$index]
    ];
}

echo json_encode($data);