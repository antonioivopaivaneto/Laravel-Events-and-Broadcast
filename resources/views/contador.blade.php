<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('9729ca2409ff3897d4a8', {
            cluster: 'sa1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            var novoContador = data.total_usuarios;

            $("#contador").text(novoContador);
        });
    </script>
</head>

<body>
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.

    <div id="contador-registros">Total de Cadastros: <span id="contador">{{ $totalUsuarios }}</span></div>

    </p>
</body>
