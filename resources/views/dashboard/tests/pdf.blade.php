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

    *{
        font-family: 'Poppins', sans-serif;
    }
    table {
       width: 100%;
   }

    td {
       text-align: left;
   }

    .title {
       margin: 0 0 1em 0;
   }

   .title th {
       text-align: left;
   }
</style>
<div class="pdf">

    <table class="title">
        <tr>
            <th>Nombre: {{ $name }}</th>
            <th>Fecha: {{$date}}</th>
        </tr>
        <tr>
            <th>Medico: Tratante</th>
            <td></td>
        </tr>
    </table>

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