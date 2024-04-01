<?php
$basePath = dirname(__DIR__);
$thisYear = date('Y');
$command = <<<EOD
curl 'https://www.trec.org.tw/certification_trade_situation/direct_supply/data' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; TS011cb317=017732bd29485cc7ae7561d03830eb1f93956ce4f0e4d3fc4e18a5926acfeb8b8ba878eb6a99fb9608a1c51fb9b440fb9b0c8d606c; _ga_S7KXQZEWR5=GS1.1.1711949287.10.0.1711949287.60.0.0; XSRF-TOKEN=eyJpdiI6ImR2UVptbFBRTi8wYnVac2tyR0NrSmc9PSIsInZhbHVlIjoiZFZsc05UV3pDaDlzVTZkWXdzS1M2cnFoREdiTzc1K0pkNXZJT0ZYQm1YbGdhQ2o4NFczYllKY2pxUkdzQndLSzFqTVgzcElqUC9nb1k1RnhaQnJUUTN3WXZKR1BBY0w3RnF3WUhFU1FWVmF2ejdsRlFpbUpsVlVzbVFPWXlkbnQiLCJtYWMiOiIxNTE4NmY1YzA0YjAwODkwNDVmOTg0MTE1Yjk5YWYyMTg2NTg4NzQ1YmI1YTIxZTEyMzU2MGQ5Yzg2MzNiNWZkIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6IkVvaHRlTXRiMCtrcDJUUm9NVTZ3L3c9PSIsInZhbHVlIjoiM1lrVU1KR01YYWp1Y3lxaStjRGR0UFlJWDFibmxMaUlWLzBOZkVuS0tKcUxwNGFYdm8rMCtrWWZlVFJyNzJ4NndDWmVnSXR4cGRsNndjS1N6TGNSc1NLMmRTQytsZVRaVVN4My9SdkVvTmZqU29tRUFldThnbU1hdnpxSlBoSisiLCJtYWMiOiJiNDRhNTQ2MzI2ODljOTM4OTdkZjhlMTBjNWI4ZTY5ZTg1ZTk4NDMyMjFkNTAyMzRlNDkwMWRjZjc2MDQ2NzFlIiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd29f1c8506617e7f42846d84a2239bad4a2e4d3fc4e18a5926acfeb8b8ba878eb6a3a19c2ee35c6e24716aa1664364317f1b6b870ef793f7c8ed7c1bd27bf1f10706016d7283b9a68c8aa64aeb7a710ac69' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification_trade_situation/direct_supply' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: g1Ug1hrqYMhkvwI9VOosMfmcwsqxc1ZhyKAReX0l' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'draw=1&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=seller_name&columns%5B1%5D%5Bname%5D=seller_name&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=buyer_name&columns%5B2%5D%5Bname%5D=buyer_name&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=energy&columns%5B3%5D%5Bname%5D=energy&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=type&columns%5B4%5D%5Bname%5D=type&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=amount&columns%5B5%5D%5Bname%5D=amount&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=detail&columns%5B6%5D%5Bname%5D=detail&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=1&order%5B0%5D%5Bdir%5D=asc&start=0&length=-1&search%5Bvalue%5D=&search%5Bregex%5D=false&year=___YEAR___'
EOD;

for ($i = 2020; $i <= $thisYear; $i++) {
  $rawFile = $basePath . '/raw/direct_supply/' . $i . '.json';
  if ($i == $thisYear) {
    unlink($rawFile);
  }
  if (!file_exists($rawFile)) {
    $result = shell_exec(strtr($command, [
      '___YEAR___' => $i,
    ]));
    file_put_contents($rawFile, $result);
  }
}

$command = <<<EOD
curl 'https://www.trec.org.tw/certification_trade_situation/data/___YEAR___' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; TS011cb317=017732bd29485cc7ae7561d03830eb1f93956ce4f0e4d3fc4e18a5926acfeb8b8ba878eb6a99fb9608a1c51fb9b440fb9b0c8d606c; _ga_S7KXQZEWR5=GS1.1.1711949287.10.0.1711949287.60.0.0; XSRF-TOKEN=eyJpdiI6ImR2UVptbFBRTi8wYnVac2tyR0NrSmc9PSIsInZhbHVlIjoiZFZsc05UV3pDaDlzVTZkWXdzS1M2cnFoREdiTzc1K0pkNXZJT0ZYQm1YbGdhQ2o4NFczYllKY2pxUkdzQndLSzFqTVgzcElqUC9nb1k1RnhaQnJUUTN3WXZKR1BBY0w3RnF3WUhFU1FWVmF2ejdsRlFpbUpsVlVzbVFPWXlkbnQiLCJtYWMiOiIxNTE4NmY1YzA0YjAwODkwNDVmOTg0MTE1Yjk5YWYyMTg2NTg4NzQ1YmI1YTIxZTEyMzU2MGQ5Yzg2MzNiNWZkIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6IkVvaHRlTXRiMCtrcDJUUm9NVTZ3L3c9PSIsInZhbHVlIjoiM1lrVU1KR01YYWp1Y3lxaStjRGR0UFlJWDFibmxMaUlWLzBOZkVuS0tKcUxwNGFYdm8rMCtrWWZlVFJyNzJ4NndDWmVnSXR4cGRsNndjS1N6TGNSc1NLMmRTQytsZVRaVVN4My9SdkVvTmZqU29tRUFldThnbU1hdnpxSlBoSisiLCJtYWMiOiJiNDRhNTQ2MzI2ODljOTM4OTdkZjhlMTBjNWI4ZTY5ZTg1ZTk4NDMyMjFkNTAyMzRlNDkwMWRjZjc2MDQ2NzFlIiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd29f1c8506617e7f42846d84a2239bad4a2e4d3fc4e18a5926acfeb8b8ba878eb6a3a19c2ee35c6e24716aa1664364317f1b6b870ef793f7c8ed7c1bd27bf1f10706016d7283b9a68c8aa64aeb7a710ac69' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification_trade_situation' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: g1Ug1hrqYMhkvwI9VOosMfmcwsqxc1ZhyKAReX0l' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'draw=1&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=case_id&columns%5B1%5D%5Bname%5D=case_id&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=buyer&columns%5B2%5D%5Bname%5D=buyer&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=energy&columns%5B3%5D%5Bname%5D=energy&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=amount&columns%5B4%5D%5Bname%5D=amount&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=certification_year&columns%5B5%5D%5Bname%5D=certification_year&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=created_at&columns%5B6%5D%5Bname%5D=created_at&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=true&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=6&order%5B0%5D%5Bdir%5D=desc&start=0&length=-1&search%5Bvalue%5D=&search%5Bregex%5D=false'
EOD;

for ($i = 2017; $i <= $thisYear; $i++) {
  $rawFile = $basePath . '/raw/certification_trade_situation/' . $i . '.json';
  if ($i == $thisYear) {
    unlink($rawFile);
  }
  if (!file_exists($rawFile)) {
    $result = shell_exec(strtr($command, [
      '___YEAR___' => $i,
    ]));
    file_put_contents($rawFile, $result);
  }
}

$command = <<<EOD
curl 'https://www.trec.org.tw/certification/data' \
  -H 'accept: application/json, text/javascript, */*; q=0.01' \
  -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7' \
  -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' \
  -H 'cookie: _ga=GA1.1.1063148836.1711433086; TS011cb317=017732bd29485cc7ae7561d03830eb1f93956ce4f0e4d3fc4e18a5926acfeb8b8ba878eb6a99fb9608a1c51fb9b440fb9b0c8d606c; _ga_S7KXQZEWR5=GS1.1.1711949287.10.0.1711949287.60.0.0; XSRF-TOKEN=eyJpdiI6ImR2UVptbFBRTi8wYnVac2tyR0NrSmc9PSIsInZhbHVlIjoiZFZsc05UV3pDaDlzVTZkWXdzS1M2cnFoREdiTzc1K0pkNXZJT0ZYQm1YbGdhQ2o4NFczYllKY2pxUkdzQndLSzFqTVgzcElqUC9nb1k1RnhaQnJUUTN3WXZKR1BBY0w3RnF3WUhFU1FWVmF2ejdsRlFpbUpsVlVzbVFPWXlkbnQiLCJtYWMiOiIxNTE4NmY1YzA0YjAwODkwNDVmOTg0MTE1Yjk5YWYyMTg2NTg4NzQ1YmI1YTIxZTEyMzU2MGQ5Yzg2MzNiNWZkIiwidGFnIjoiIn0%3D; new_trec_session=eyJpdiI6IkVvaHRlTXRiMCtrcDJUUm9NVTZ3L3c9PSIsInZhbHVlIjoiM1lrVU1KR01YYWp1Y3lxaStjRGR0UFlJWDFibmxMaUlWLzBOZkVuS0tKcUxwNGFYdm8rMCtrWWZlVFJyNzJ4NndDWmVnSXR4cGRsNndjS1N6TGNSc1NLMmRTQytsZVRaVVN4My9SdkVvTmZqU29tRUFldThnbU1hdnpxSlBoSisiLCJtYWMiOiJiNDRhNTQ2MzI2ODljOTM4OTdkZjhlMTBjNWI4ZTY5ZTg1ZTk4NDMyMjFkNTAyMzRlNDkwMWRjZjc2MDQ2NzFlIiwidGFnIjoiIn0%3D; TS01db6dfa=017732bd29f1c8506617e7f42846d84a2239bad4a2e4d3fc4e18a5926acfeb8b8ba878eb6a3a19c2ee35c6e24716aa1664364317f1b6b870ef793f7c8ed7c1bd27bf1f10706016d7283b9a68c8aa64aeb7a710ac69' \
  -H 'origin: https://www.trec.org.tw' \
  -H 'referer: https://www.trec.org.tw/certification?year=___YEAR___' \
  -H 'sec-ch-ua: "Google Chrome";v="123", "Not:A-Brand";v="8", "Chromium";v="123"' \
  -H 'sec-ch-ua-mobile: ?0' \
  -H 'sec-ch-ua-platform: "Linux"' \
  -H 'sec-fetch-dest: empty' \
  -H 'sec-fetch-mode: cors' \
  -H 'sec-fetch-site: same-origin' \
  -H 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36' \
  -H 'x-csrf-token: g1Ug1hrqYMhkvwI9VOosMfmcwsqxc1ZhyKAReX0l' \
  -H 'x-requested-with: XMLHttpRequest' \
  --data-raw 'draw=___PAGE___&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=name&columns%5B1%5D%5Bname%5D=name&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=false&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=energy&columns%5B2%5D%5Bname%5D=energy&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=false&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=certification_year&columns%5B3%5D%5Bname%5D=certification_year&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=false&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=traded_count&columns%5B4%5D%5Bname%5D=traded_count&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=remaining_count&columns%5B5%5D%5Bname%5D=remaining_count&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=false&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=detail&columns%5B6%5D%5Bname%5D=detail&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=0&order%5B0%5D%5Bdir%5D=asc&start=___START___&length=100&search%5Bvalue%5D=&search%5Bregex%5D=false&year=___YEAR___&date=___YEAR___-12'
EOD;

for ($i = 2017; $i <= $thisYear; $i++) {
  $rawFile = $basePath . '/raw/certification/' . $i . '_1.json';
  if ($i == $thisYear) {
    unlink($rawFile);
  }
  if (!file_exists($rawFile)) {
    $totalPages = 1000;
    $currentPage = 1;
    while ($currentPage <= $totalPages) {
      $posStart = ($currentPage - 1) * 100;
      $result = shell_exec(strtr($command, [
        '___YEAR___' => $i,
        '___PAGE___' => $currentPage,
        '___START___' => $posStart
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
