<pre>
curl --request {{ strtoupper($method) }} \
    --url {{ $url }} \
    --header 'content-type: application/json' \
    --header 'api-key: b1355054-c828-4f5c-a71e-fc23a8034ce5' \
    --data '{"async":false}'
</pre>