<?php

$CHANNEL_MAP = [
    245991 => ['primary' => ['type' => 'HLS-Daion', 'streamType' => 'daion'], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245949 => ['primary' => ['type' => 'HLS-Daion', 'streamType' => 'daion'], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245931 => ['primary' => ['type' => 'HLS-Daion', 'streamType' => 'daion'], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245994 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246030 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245943 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246132 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245997 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 20]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245940 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246120 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246024 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246027 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246066 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246108 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    394506 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246135 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    245946 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246177 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246240 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
    246096 => ['primary' => ['type' => 'HLS-Auto', 'streamType' => 'hasinitialdvr', 'dvrQueryParam' => ['dvr' => 10]], 'secondary' => ['type' => 'HLS-Auto', 'streamType' => 'hasdvr', 'dvrQueryParam' => ['dvr' => 240]]],
];

$API_KEY   = '6c10410adc92702ab8128577684a62bb';
$userAgent = 'com.dsmart.go.android/4.0.07';

$proxyParam = isset($_GET['proxy']) ? $_GET['proxy'] : null;

if ($proxyParam) {
    $targetUrl = $proxyParam;

    if (!str_starts_with($targetUrl, 'http://') && !str_starts_with($targetUrl, 'https://')) {
        http_response_code(400);
        exit('Gecersiz URL');
    }

    $ch = curl_init($targetUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT        => 15,
        CURLOPT_HTTPHEADER     => [
            "User-Agent: $userAgent",
            'Accept: */*',
        ],
    ]);
    $body     = curl_exec($ch);
    $mime     = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200 || $body === false) {
        http_response_code(502);
        exit('Upstream error: ' . $httpCode . ' URL: ' . $targetUrl);
    }

    $urlPathOnly = preg_replace('/\?.*/', '', $targetUrl);
    $isM3u8 = str_contains($mime, 'mpegurl')
           || str_contains($mime, 'x-mpegurl')
           || str_ends_with($urlPathOnly, '.m3u8');

    if ($isM3u8) {
        $baseUrl = dirname($urlPathOnly) . '/';
        $body    = rewriteM3u8($body, $baseUrl);
        header('Content-Type: application/vnd.apple.mpegurl; charset=utf-8');
    } else {
        header('Content-Type: ' . ($mime ?: 'application/octet-stream'));
    }

    header('Access-Control-Allow-Origin: *');
    header('Cache-Control: no-cache');
    echo $body;
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 246030;

if (!isset($CHANNEL_MAP[$id])) {
    http_response_code(400);
    exit('Bilinmeyen kanal ID: ' . $id);
}

$channelConfig = $CHANNEL_MAP[$id];

$postData = json_encode([
    'id'        => $id,
    'primary'   => $channelConfig['primary'],
    'secondary' => $channelConfig['secondary'],
]);

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => 'https://m9zgxauuw7mb.merlincdn.net/content?key=' . $API_KEY,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $postData,
    CURLOPT_HTTPHEADER     => [
        'Host: m9zgxauuw7mb.merlincdn.net',
        'Origin: com.dsmart.go.android',
        'sec: t9dgpCJQTt0LQGaRreVghvfg5Qc0BnMc7VnxibX540615afa',
        'langcode: tr',
        'apikey: 78545da6e0eb4b41abaf2c8c2ec657cc',
        "User-Agent: $userAgent",
        'Accept: application/json',
        'Accept-Charset: UTF-8',
        'Content-Type: application/json',
    ],
]);

$contentRes = json_decode(curl_exec($ch), true);
curl_close($ch);

$primaryUrl  = $contentRes['result']['primary']['url'] ?? null;
$primaryOk   = $contentRes['result']['primary']['success'] ?? false;
$secondaryUrl = $contentRes['result']['secondary']['url'] ?? null;
$secondaryOk  = $contentRes['result']['secondary']['success'] ?? false;

$m3u8Url = null;
if ($primaryOk && $primaryUrl) {
    $m3u8Url = $primaryUrl;
} elseif ($secondaryOk && $secondaryUrl) {
    $m3u8Url = $secondaryUrl;
}

if (!$m3u8Url) {
    http_response_code(502);
    exit('Hata: Stream URL alinamadi.');
}

if (str_contains($m3u8Url, 'daioncdn.net')) {
    $separator = str_contains($m3u8Url, '?') ? '&' : '?';
    $m3u8Url  .= $separator . 'app=dsmart_android&ce=2';
}

header('Location: ' . proxyUrl($m3u8Url));
exit;

function proxyUrl(string $url): string
{
    $scheme = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $base   = $scheme . '://' . $_SERVER['HTTP_HOST'] . '/t.php';
    return $base . '?proxy=' . rawurlencode($url);
}

function resolveUrl(string $uri, string $baseUrl): string
{
    $uri = trim($uri);
    if (str_starts_with($uri, 'http://') || str_starts_with($uri, 'https://')) {
        return $uri;
    }
    if (str_starts_with($uri, '/')) {
        $p = parse_url($baseUrl);
        return $p['scheme'] . '://' . $p['host'] . $uri;
    }
    return $baseUrl . $uri;
}

function rewriteM3u8(string $content, string $baseUrl): string
{
    $lines  = explode("\n", $content);
    $output = [];

    foreach ($lines as $line) {
        $line = rtrim($line);

        if ($line === '') {
            $output[] = $line;
            continue;
        }

        if (str_starts_with($line, '#')) {
            if (preg_match('/URI="([^"]+)"/i', $line, $m, PREG_OFFSET_CAPTURE)) {
                $absUrl = resolveUrl($m[1][0], $baseUrl);
                $before = substr($line, 0, $m[1][1]);
                $after  = substr($line, $m[1][1] + strlen($m[1][0]));
                $line   = $before . proxyUrl($absUrl) . $after;
            }
        } else {
            $absUrl = resolveUrl($line, $baseUrl);
            $line   = proxyUrl($absUrl);
        }

        $output[] = $line;
    }

    return implode("\n", $output);
}
