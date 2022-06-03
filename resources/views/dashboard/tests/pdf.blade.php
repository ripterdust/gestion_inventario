<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');
</style>
<style>
.blueBg{
    background: rgba(52, 152, 219, .3);
}

* {
    color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
}

td {
  text-align: left;
}

.title {
  margin: 0 0 3em 0;
  font-size: 14px;
}
.title th {
  text-align: left;

}

.title {
    border: 1px solid rgba(0,0,0,.8);
}

.title tr > * {
    padding: 5px;
}

.title tr td:first-child, .title tr th:first-child {
    border-right: 1px solid rgba(0,0,0,.8);

}

.testName{
    width: 100%;
    text-align: center;
}

</style>
<div class="pdf">

    <table class="title">
        <tr>
            <th>Nombre: {{ $name }}</th>
            <th>Fecha: {{$date}}</th>
        </tr>
        <tr>
            <th class="blueBg">Medico: Tratante</th>
            <td class="blueBg"></td>
        </tr>
    </table>

    <div class="testName">
        {{ $test }}
    </div>
    <table class="results">
        @foreach($keys as $key)
            @if($results[$key] != '')
                <tr>
                    <td>{{ str_replace("_", "  ", $key) }}</td>
                    <td>
                        {{ $results[$key] }}
                    </td>
                </tr>
            @else
                no hay
            @endif
        @endforeach
    </table>

</div>
</body>
</html>