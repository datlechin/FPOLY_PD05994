<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sata.code.pro.vn/api/posts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "data": {
        "type": "posts",
        "attributes": {
            "content": "This is a post"
        },
        "relationships": {
            "discussion": {
                "data": {
                    "type": "discussions",
                    "id": "507"
                }
            }
        }
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Token rnywzrdynFX2w7L3tgzrWMkqrHlORi3Oy6XCsNgj',
    'Content-Type: application/json',
    'Cookie: flarum_session=TZ7wt89zyEYJtvwNBPVw0p3MJErbUSrBLPX7fnNd'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;