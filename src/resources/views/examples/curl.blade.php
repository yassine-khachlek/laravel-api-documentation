<pre>
curl --request {{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }} \
    --url {{ $url }} \
    --header 'content-type: application/json' \
@if(!in_array(strtoupper($method), ['GET', 'POST']))
    --header '_method: {{ strtoupper($method) }}' \,
@endif
    --header 'api-key: b1355054-c828-4f5c-a71e-fc23a8034ce5' \
    --data '{"async":false}'
</pre>