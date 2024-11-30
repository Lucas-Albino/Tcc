@extends('main')

@section('content')
    <div class="container-xxl vh-100 d-flex align-items-center justify-content-center">
        <div class="w-100 h-100">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Vaga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    @forelse ($freeParking as $vaga)
                        <tr class={{ $vaga['_value'] ? 'bg-success' : 'bg-danger' }}>
                            <td><b>{{ $vaga['sensor'] }}</b></td>
                            <td><b>{{ $vaga['_value'] ? 'Disponível' : 'Indisponível' }}</b></td>
                        </tr>
                    @empty
                        <tr class="text-dark">
                            <td colspan="2" class="text-stroke"><b>Nenhuma vaga disponivel no momento</b></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
