<?php
$basePath = dirname(__DIR__);
$docsPath = $basePath . '/docs/case';
if (!file_exists($docsPath)) {
    mkdir($docsPath, 0777, true);
}
foreach (glob($basePath . '/raw/certification/*/*.html') as $htmlFile) {
    $p1 = pathinfo($htmlFile);
    $p2 = pathinfo($p1['dirname']);
    $c = file_get_contents($htmlFile);
    $lines = explode('</div>', $c);
    $data = [
        'id' => $p1['filename'],
        'year' => $p2['filename'],
    ];
    $docFile = $docsPath . '/' . $data['id'] . '.json';
    $details = [];
    if (file_exists($docFile)) {
        $details = json_decode(file_get_contents($docFile), true);
    } else {
        $details = [
            'info' => [],
            't-rec' => [],
        ];
    }
    if (isset($details['t-rec'][$data['year']])) {
        continue;
    } else {
        $details['t-rec'][$data['year']] = [];
    }
    foreach ($lines as $line) {
        $cols = explode('</label>', $line);
        if (count($cols) < 2) {
            continue;
        }
        foreach ($cols as $k => $v) {
            $cols[$k] = trim(strip_tags($v));
        }
        $data[$cols[0]] = $cols[1];
    }
    if (!isset($data['發電案場'])) {
        unlink($htmlFile);
        continue;
    }
    $details['info'] = [
        '單位名稱' => $data['單位名稱'],
        '發電案場' => $data['發電案場'],
        '能源類型' => $data['能源類型'],
        '案場地址' => $data['案場地址'],
        '裝置總容量' => $data['裝置總容量'],
    ];
    $details['t-rec'][$data['year']] = [
        '證書編號' => $data['證書編號'],
        'T-REC 最後憑證發放日期' => $data['T-REC 最後憑證發放日期'],
        '發電區間' => $data['發電區間'],
        '再生能源設備查核報告' => $data['再生能源設備查核報告'],
        '再生能源發電量查證報告' => $data['再生能源發電量查證報告'],
        '已移轉張數' => $data['已移轉張數'],
        '剩餘張數' => $data['剩餘張數'],
    ];
    ksort($details['t-rec']);
    file_put_contents($docFile, json_encode($details, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}
