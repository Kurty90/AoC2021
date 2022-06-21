<?php
$data = file_get_contents('C:\Programme\Apache\xampp\htdocs\DayOne\inputData\data.txt');
$count = 0;
$dataArray = preg_split('/\r\n|\r|\n/', $data);

for ($i = 0; $i < sizeof($dataArray); $i++) {
    if ($dataArray[$i+1] > $dataArray[$i]) {
        $count++;
    }
}
echo $count;