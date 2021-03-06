@extends('layouts.app')

@section('title', 'Exámenes')


@section('content')
    <div class="metrics">
        <div class="metric">
            <div class="text">
                <div class="title">Exámenes del mes</div>
                <div class="number">
                    {{ $count }}
                </div>
            </div>

            <div class="icon"><i class="fa-solid fa-vial"></i></div>
        </div>
    </div>

    <div class="table_list box">
        <div class="title title-with-btn">Exámenes <a href="{{ route('test.new') }}" class="button">Nuevo examen</a></div>

        <table class="table">
            <!-- Table title -->
            <tr>
                <th>Cliente</th>
                <th>Examen</th>
                <th>Ingreso</th>
                <th>Estado</th>
                <th></th>
            </tr>

            <!-- Table body -->

            @foreach($tests as $test)
                <tr>
                    <td class="small_text">{{ $test->CLIName }}</td>
                    <td class="small_text">{{ $test->TESTName }}</td>
                    <td class="small_text">{{ $test->created_at }}</td>
                    <td class="small_text">
                        @if ($test->state === 0)
                            Finalizado
                        @elseif($test->state == 1)
                            Proceso
                        @endif
                    </td>
                    <td>
                        @if($test->state == 1)
                            <a class="action" href="{{ route('test.edit', ['id' => $test->id]) }}">
                                <i class="fa-solid fa-vial"></i>
                            </a>
                        @else
                            <a class="action" href="{{ route('test.show', ['id' => $test->id]) }}">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach

        </table>
        <div class="pagination">
            @if ($tests->links()->paginator->hasPages())
                {{ $tests->links() }}
            @endif
        </div>
    </div>
@endsection