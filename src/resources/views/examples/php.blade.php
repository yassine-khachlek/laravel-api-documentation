<pre>
$url = '{{ $url }}';
$method = '{{ strtoupper($method) }}';
$headers = array(
    "content-type: application/json",
    "api-key: b1355054-c828-4f5c-a71e-fc23a8034ce5"
);
$body = '{"async":false}';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => $method,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POSTFIELDS => $body
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
</pre>