<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Enable CORS

$html = <<<EOD
<!DOCTYPE html>
<html lang="zh">
<head>
    <title>JSHS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { width: 100%; height: 100%; overflow: hidden; }
        body { display: flex; flex-direction: column; }
        #infrm { flex: 1; width: 100%; border: none; display: block; }
    </style>
</head>
<body>
    <iframe id="infrm" name="infrm" src="http://128.241.238.132:85" frameborder="0" target="_parent"></iframe>
</body>
</html>
EOD;

echo json_encode([
    'code' => 0,
    'msg' => 'success',
    'html' => $html
]);
?>