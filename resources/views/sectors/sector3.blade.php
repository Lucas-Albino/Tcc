@extends('main')

@section('content')
    <div class="container-xxl">
        <div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Vaga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($setor3 as $vaga)
                        <tr class={{ $vaga['_value'] ? 'bg-success' : 'bg-danger' }}>
                            <td>{{ $vaga['sensor'] }}</td>
                            <td>{{ $vaga['_value'] ? 'Disponível' : 'Indisponível' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Setor indisponivel no momento</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
