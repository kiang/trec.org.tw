<?php
$basePath = dirname(__DIR__);

$tradePath = $basePath . '/docs/trade';
if (!file_exists($tradePath)) {
    mkdir($tradePath . '/buyer', 0777, true);
    mkdir($tradePath . '/seller', 0777, true);
}

foreach (glob($basePath . '/raw/certification_trade_situation/*.json') as $jsonFile) {
    $json = json_decode(file_get_contents($jsonFile), true);
    foreach ($json['data'] as $item) {
        $buyerFile = $tradePath . '/buyer/' . $item['buyer'] . '.csv';
        $sellerFile = $tradePath . '/seller/' . $item['seller'] . '.csv';
        if (!file_exists($buyerFile) || !file_exists($sellerFile)) {
            $oFh1 = fopen($buyerFile, 'w');
            $oFh2 = fopen($sellerFile, 'w');
            fputcsv($oFh1, array_keys($item));
            fputcsv($oFh2, array_keys($item));
        } else {
            $oFh1 = fopen($buyerFile, 'a');
            $oFh2 = fopen($sellerFile, 'a');
        }
        fputcsv($oFh1, $item);
        fputcsv($oFh2, $item);
        fclose($oFh1);
        fclose($oFh2);
    }
}
