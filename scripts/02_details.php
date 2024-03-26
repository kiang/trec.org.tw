<?php
$basePath = dirname(__DIR__);

$command = <<<EOD
curl 'https://www.trec.org.tw/certification/detail' \
  -H 'accept: text/html, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; TS011cb317=017732bd29c8b4b673877db6d22b1e6bc610edfa04cb6622b33f69c4e74f17b94106c857d30ee6bef14126d1c739caf179401b3c09; _ga_S7KXQZEWR5=GS1.1.1711442721.4.1.1711442730.51.0.0; XSRF-TOKEN=eyJpdiI6Ijl3a3FLSW1RTzl3enpGRWszWENRNEE9PSIsInZhbHVlIjoiR0h2VXNreURHR3VlZG5SR3Z6WUE4ZGE4SDlHeUEwWENKc051ZkxmWS9BVmIwdGpacG9uTVR3bVlJVVpONkZVbllhQ3Zud2NJTk4yN2Y5b2dsT3EvMGdOcldZMTJleXBnM2NIbFFMYzJIOGFLRVlhS1QzSUQ2clFQcW1CWXJPNVAiLCJtYWMiOiIyYzgyMzFlNWI4NTliZGUyMWRjZmYzNjIyMDc3NWFiYjRjNTU0ZTlkYTQ2M2M5YzgwNDRhMDAzODc0MjVlMmFkIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6ImEzRy9xVU4xZEZXeHMwTFN6aXRldWc9PSIsInZhbHVlIjoiRG1EL2Y3OHlQVDNWWWFqcTc2ODhtK2h6RktLaVc2RHYrcUMyNEFnNVUzS3ZSWFJubWVQVW81bURuelpnQWhKWXIzakViaGhDMytTaTM0OGdLcEhQQm5CalhTSFJ1VEljZVVZS1h4Vm9BTkRZZitZZjg3WUIxMytRbTFFYTNUeFIiLCJtYWMiOiI1OGM4OTJmYzBiYTFkMDI2NGYzYWJhNzlkNDBkNzQxZGRhNjc5MWRlOTAwZWU0NDQ5YmVkMGI5NDAzZmZiZDk0IiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd291421f0aed6d4fa1ca3f602fa930b5d096da709dd975a5b77adb25ff658d36d6149a2d894bf05a0c0eede3158b0233354d06b476099227ae1e5ea90308a288ac616c7d9dc77ec74d1295254c473382227' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification?year=___YEAR___' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: Yyb0rV2bF5IZ1GtMAnYDwZ2ogegVduPnvVZKerpk' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'id=___ID___&year=___YEAR___&date=___YEAR___-12-31'
EOD;

foreach (glob($basePath . '/raw/certification/*.json') as $jsonFile) {
    $p = pathinfo($jsonFile);
    $parts = explode('_', $p['filename']);
    $year = $parts[0];
    $detailPath = $basePath . '/raw/certification/' . $year;
    if (!file_exists($detailPath)) {
        mkdir($detailPath, 0777, true);
    }

    $json = json_decode(file_get_contents($jsonFile), true);
    if (!isset($json['data'])) {
        continue;
    }
    foreach ($json['data'] as $item) {
        $detailFile = $detailPath . '/' . $item['id'] . '.html';
        if (!file_exists($detailFile)) {
            $result = shell_exec(strtr($command, [
                '___YEAR___' => $year,
                '___ID___' => $item['id'],
            ]));
            file_put_contents($detailFile, $result);
        }
    }
}
