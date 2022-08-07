<?php

// Lấy thành phần của URL

$url = 'https://ap.fpt.edu.vn/login?page=1';
$url_parsed = parse_url($url);

echo 'Original URL: ' . $url . '<br>';
echo 'Scheme: ' . $url_parsed['scheme'] . '<br>';
echo 'Host: ' . $url_parsed['host'] . '<br>';
echo 'Path: ' . $url_parsed['path'] . '<br>';
echo 'Query: ' . $url_parsed['query'] . '<br>';