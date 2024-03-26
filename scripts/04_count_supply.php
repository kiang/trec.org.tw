<?php
$basePath = dirname(__DIR__);

$supplyPath = $basePath . '/docs/supply';
if (!file_exists($supplyPath)) {
    mkdir($supplyPath . '/buyer', 0777, true);
    mkdir($supplyPath . '/seller', 0777, true);
    mkdir($supplyPath . '/type', 0777, true);
}

$pool = [];
foreach (glob($basePath . '/raw/direct_supply/*.json') as $jsonFile) {
    $json = json_decode(file_get_contents($jsonFile), true);
    foreach ($json['data'] as $item) {
        $buyerFile = $supplyPath . '/buyer/' . $item['buyer'] . '.csv';
        $sellerFile = $supplyPath . '/seller/' . $item['seller'] . '.csv';
        $typeFile = $supplyPath . '/type/' . $item['type'] . '.csv';
        if (!isset($pool[$buyerFile])) {
            $pool[$buyerFile] = true;
            $oFh1 = fopen($buyerFile, 'w');
            fputcsv($oFh1, array_keys($item));
        } else {
            $oFh1 = fopen($buyerFile, 'a');
        }
        if (!isset($pool[$sellerFile])) {
            $pool[$sellerFile] = true;
            $oFh2 = fopen($sellerFile, 'w');
            fputcsv($oFh2, array_keys($item));
        } else {
            $oFh2 = fopen($sellerFile, 'a');
        }
        if (!isset($pool[$typeFile])) {
            $pool[$typeFile] = true;
            $oFh3 = fopen($typeFile, 'w');
            fputcsv($oFh3, array_keys($item));
        } else {
            $oFh3 = fopen($typeFile, 'a');
        }

        fputcsv($oFh1, $item);
        fputcsv($oFh2, $item);
        fputcsv($oFh3, $item);
        fclose($oFh1);
        fclose($oFh2);
        fclose($oFh3);
    }
}
