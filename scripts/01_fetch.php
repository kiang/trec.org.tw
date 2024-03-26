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
  --data-raw 'draw=1&columns%5B0%5D%5Bdata%5D=DT_RowIndex&columns%5B0%5D%5Bname%5D=DT_RowIndex&columns%5B0%5D%5Bsearchable%5D=false&columns%5B0%5D%5Borderable%5D=false&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=seller_name&columns%5B1%5D%5Bname%5D=seller_name&columns%5B1%5D%5Bsearchable%5D=false&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=buyer_name&columns%5B2%5D%5Bname%5D=buyer_name&columns%5B2%5D%5Bsearchable%5D=false&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=energy&columns%5B3%5D%5Bname%5D=energy&columns%5B3%5D%5Bsearchable%5D=false&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=type&columns%5B4%5D%5Bname%5D=type&columns%5B4%5D%5Bsearchable%5D=false&columns%5B4%5D%5Borderable%5D=false&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=amount&columns%5B5%5D%5Bname%5D=amount&columns%5B5%5D%5Bsearchable%5D=false&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=detail&columns%5B6%5D%5Bname%5D=detail&columns%5B6%5D%5Bsearchable%5D=false&columns%5B6%5D%5Borderable%5D=false&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=1&order%5B0%5D%5Bdir%5D=asc&start=0&length=-1&search%5Bvalue%5D=&search%5Bregex%5D=false&year='
EOD;

for ($i = 2020; $i <= 2024; $i++) {
    $rawFile = $basePath . '/raw/direct_supply/' . $i . '.json';
    if (!file_exists($rawFile)) {
        $result = shell_exec($command . $i);
        file_put_contents($rawFile, $result);
    }
}
