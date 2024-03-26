<?php
$basePath = dirname(__DIR__);
$command = <<<EOD
curl 'https://www.trec.org.tw/certification_trade_situation/direct_supply/data' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: TS011cb317=017732bd29ad38a956b1837587ac81b19bb7c8be1f6da709dd975a5b77adb25ff658d36d61ba084a2704e8b08dbbb7eddce4d29a3f; XSRF-TOKEN=eyJpdiI6Ikt6ZGVqcTBDVjdHSXplNDB4ZVlIRlE9PSIsInZhbHVlIjoiNmdKLzI5ekdYN3Y1a3hadlg4OHVXTXFPNlBtdmNpSWRXQXJHcnI0YTlmbmtaTVNRRktScTcvMmppck54c2dZTXUxVkU0bVVIczBnYkxtbFpYUHRtMU41eUU5bTlibkh0WFkxSXhwY0UwNGU1b1FUd2xsakdldFFTaHViSVRXWXoiLCJtYWMiOiJiYzQxOTgwOTk3ZmQ0YjRhYmY4Y2RjYmNjY2E0Y2QwNDViMWQwMjAwYmNhZDVhZTUzNmU3NDlkNGM2ZjAwNWFkIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6IkNZM0pQWllsZWlLTzcxSmowNHBhL3c9PSIsInZhbHVlIjoicHNVYnFhTjlKNUFlaGRSRzJkUHcySnlVVW1IaW1uUVMvcU1LT1QySWFrQmxldDhzODRabmpXQlRxVGU4MGdsQXZwalB0d3RUSGI3dzBaQjBFMXhiaG5JOXlQb3BHRElHTmRBVWZUeldHN0YrZysxdnBORkwwS2lqSWE3RWlwTVMiLCJtYWMiOiJiZDVlMzNhYzRmMGZkYTNkYmRkN2M3OWI5NWJlYWRkYWY0N2UxMGIyYjEwODY1Y2I2MWJkZWI0MjRjNWI2N2M5IiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd2979d1e4505498ffae3b8acae7c59f64b56da709dd975a5b77adb25ff658d36d6149a2d894bf05a0c0eede3158b023335472227ad71e672b0511330267156639abfc2925f0cb5d34ad0cfac7b7c1f102e8' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification_trade_situation/direct_supply' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: Yyb0rV2bF5IZ1GtMAnYDwZ2ogegVduPnvVZKerpk' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'draw=1&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=seller_name&columns%5B1%5D%5Bname%5D=seller_name&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=buyer_name&columns%5B2%5D%5Bname%5D=buyer_name&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=energy&columns%5B3%5D%5Bname%5D=energy&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=type&columns%5B4%5D%5Bname%5D=type&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=amount&columns%5B5%5D%5Bname%5D=amount&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=detail&columns%5B6%5D%5Bname%5D=detail&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=1&order%5B0%5D%5Bdir%5D=asc&start=0&length=-1&search%5Bvalue%5D=&search%5Bregex%5D=false&year=___YEAR___'
EOD;

for ($i = 2020; $i <= 2024; $i++) {
  $rawFile = $basePath . '/raw/direct_supply/' . $i . '.json';
  if (!file_exists($rawFile)) {
    $result = shell_exec(str_replace('___YEAR___', $i, $command));
    file_put_contents($rawFile, $result);
  }
}

$command = <<<EOD
curl 'https://www.trec.org.tw/certification_trade_situation/data/___YEAR___' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; TS011cb317=017732bd2970fddeea0d660e2b80732ad5d8ade9966b26c60545079c66f5d1a10041b189340a94485da1bd5fe7fefbdd7fd04ef856; XSRF-TOKEN=eyJpdiI6InRiQUpOM3gzOWhGTjRGbFFxbzZHcnc9PSIsInZhbHVlIjoiWmwvV3luWm9sa0o2Zy9EaS9tdm5JOHBFQ0NaQllHNkFmeVFuem9DemRkcWlHKzBLV1pKMXpWNVRZZ0tMOXpnSGE5MGtFY0FINTZoTDM2OXYrVWpkb1BSK0dxR293OVpDUVRCNWtiRjYxM0N0UlRhWFZGbURhU3RVMWlRcm9zRTAiLCJtYWMiOiI2NTZhZmI0Y2EwYzQxZGE2ZGZhZWY0YTg3NmZhMDg5MzgzODUwZjNkZTY5NDhhZGQwYTJlN2ZhYzA0NmRlN2YzIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6ImxmN3BnYk5UWEpjTDhUQ3AvZGg2Wmc9PSIsInZhbHVlIjoiUCsvMmpoNlN5aWZzQ1RpM1dSY29zYWt4Z0M1cXFJcnJlRkRCOFUzci8zNStMUXd2T1VqVHlnMnpXVkRGUGpnMWhIdkZRZnN4ZUlmZUZlOEZSYmVKV2FzMGhrb2FZRmpaNXl2elh4U21POURYV0MwRnZUVW5KandvSEtGVGRLdzMiLCJtYWMiOiI3ODU5MWNkNTI1ODA1MzAzNDRlZDMyZGI1ZTkxNDE4NTQ4MGQ0ZGQ2YmNjYWM1ZjYyN2RiZWJkZGY0ZDM2YzI0IiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd29253069b1f5f411c8eea7ab365b3225db6da709dd975a5b77adb25ff658d36d6149a2d894bf05a0c0eede3158b02333545878f51e3e1beed00dd1f6d7707fb90b5b8590c7fdf295b05d00686e234c579b; _ga_S7KXQZEWR5=GS1.1.1711436320.2.1.1711436333.47.0.0' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification_trade_situation' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: Yyb0rV2bF5IZ1GtMAnYDwZ2ogegVduPnvVZKerpk' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'draw=1&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=case_id&columns%5B1%5D%5Bname%5D=case_id&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=buyer&columns%5B2%5D%5Bname%5D=buyer&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=energy&columns%5B3%5D%5Bname%5D=energy&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=amount&columns%5B4%5D%5Bname%5D=amount&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=certification_year&columns%5B5%5D%5Bname%5D=certification_year&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=created_at&columns%5B6%5D%5Bname%5D=created_at&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=true&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=6&order%5B0%5D%5Bdir%5D=desc&start=0&length=-1&search%5Bvalue%5D=&search%5Bregex%5D=false'
EOD;

for ($i = 2017; $i <= 2024; $i++) {
  $rawFile = $basePath . '/raw/certification_trade_situation/' . $i . '.json';
  if (!file_exists($rawFile)) {
    $result = shell_exec(str_replace('___YEAR___', $i, $command));
    file_put_contents($rawFile, $result);
  }
}

$command = <<<EOD
curl 'https://www.trec.org.tw/certification/data' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; XSRF-TOKEN=eyJpdiI6Im01b0daZWE1YXN6S0kwZnNEaHRPRmc9PSIsInZhbHVlIjoiQ1ZGTFVUQ0pKZC9XV1V3eUlSVndYM1BNVTVGVFRNTVIrQUY0bGdBR3BOaUlBNDFjWWhENVYwOEx4UkgxT3BaUDNSTUxnWG1rNEtCU1RQRlZQSzQrOXRFRWFjMU1wNzBhMVp4VitNNjFPc0lSajFLeS9tZjh4V1BRMW5nY2dCWlMiLCJtYWMiOiI0YzJkNzQ0NjI1MjM4ZmY3MTc5MTJmY2RmNzlhNzRiMTUxNzA1NzY3Y2FjOTYwNTliNTIyMTNmOGMwZWUxNzA0IiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6IkVuRkxmeU1UWjBKcTFLOVBvTGFHWlE9PSIsInZhbHVlIjoiNmZQT1lLdUNCSkd5T21YWVdoNFVvMTdOdjlEckh1a3phSlFGRlpLYmdZZUI2NldnbU80NmplY1BLcjdXRmgrUUtZSktMTVhoenlnMUEyTWdqWWF4L3hVUmJoeDlkY2JrNlRzbXd5bng0NTF2N09VQzQyY3VycDB4SndvQXFmbHEiLCJtYWMiOiI0Y2E1OTUwMGY1MTk4ZGQyMmFkMDU2NTA1NTAzMzU0ZGU0MTZkODRjZTk4MzhhZjJmZDYzN2JjMTg3YTU3OTJkIiwidGFnIjoiIn0%3D; TS011cb317=017732bd29e42dc9b44e307195c5c3ae9b4a3e83a31baf9d2187d16e82b8a1824640cde82ceddbf1d4b842487fe3c8259621998a4d; TS01db6dfa=017732bd29ff1357a14fb0de7c0becd9175a1cf4d86da709dd975a5b77adb25ff658d36d6149a2d894bf05a0c0eede3158b02333543417aafc2b9c1f85f3ad01f535748ca78d16ca6b6874226966d083823a989690; _ga_S7KXQZEWR5=GS1.1.1711450410.5.0.1711450410.60.0.0' \
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
  --data-raw 'draw=___PAGE___&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=name&columns%5B1%5D%5Bname%5D=name&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=false&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=energy&columns%5B2%5D%5Bname%5D=energy&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=false&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=certification_year&columns%5B3%5D%5Bname%5D=certification_year&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=false&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=traded_count&columns%5B4%5D%5Bname%5D=traded_count&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=remaining_count&columns%5B5%5D%5Bname%5D=remaining_count&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=false&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=detail&columns%5B6%5D%5Bname%5D=detail&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=0&order%5B0%5D%5Bdir%5D=asc&start=___START___&length=100&search%5Bvalue%5D=&search%5Bregex%5D=false&year=___YEAR___&date=___YEAR___-12'
EOD;

for ($i = 2017; $i <= 2024; $i++) {
  $rawFile = $basePath . '/raw/certification/' . $i . '_1.json';
  if (!file_exists($rawFile)) {
    $totalPages = 1000;
    $currentPage = 1;
    while ($currentPage <= $totalPages) {
      $posStart = ($currentPage - 1) * 100;
      $result = shell_exec(strtr($command, [
        '___YEAR___' => $i,
        '___PAGE___' => $currentPage,
        '___START___' => $posStart,
      ]));
      $rawFile = $basePath . '/raw/certification/' . $i . '_' . $currentPage . '.json';
      file_put_contents($rawFile, $result);

      if (1000 === $totalPages) {
        $json = json_decode($result, true);
        $totalPages = ceil($json['recordsTotal'] / 100);
      }

      $currentPage++;
    }
  }
}
