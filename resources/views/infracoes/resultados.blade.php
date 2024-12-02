<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Consulta</title>
</head>
<body>
    <h1>Resultados para a placa {{ $placa }}</h1>

    @if (empty($resultados))
        <p>Nenhuma infração encontrada para esta placa.</p>
    @else
        <ul>
            @foreach ($resultados as $infracoes)
                @foreach ($infracoes as $infracao)
                    <li>
                        <strong>Infração:</strong> {{ $infracao['dados_infracao']['infracao'] }}<br>
                        <strong>Valor:</strong> {{ $infracao['dados_infracao']['valor_aplicado'] }}<br>
                        <strong>Local:</strong> {{ $infracao['dados_infracao']['local_infracao'] }}<br>
                    </li>
                @endforeach
            @endforeach
        </ul>
    @endif

    <a href="{{ url('/') }}">Fazer outra consulta</a>
</body>
</html>
