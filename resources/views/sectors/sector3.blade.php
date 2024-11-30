@extends('main')

@section('content')
    <div class="container-xxl vh-100 d-flex align-items-center justify-content-center">
        <div class="w-100 h-100">
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Vaga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    @forelse ($setor3 as $vaga)
                        <tr class={{ $vaga['_value'] ? 'bg-success' : 'bg-danger' }}>
                            <td><span class="text-stroke"><b>{{ $vaga['sensor'] }}</b></span></td>
                            <td><span class="text-stroke"><b>{{ $vaga['_value'] ? 'Disponível' : 'Indisponível' }}</b></span>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-dark">
                            <td colspan="2"><b>Setor indisponível no momento</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
