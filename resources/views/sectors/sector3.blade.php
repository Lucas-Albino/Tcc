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
                    @forelse ($vagas as $key => $value)
                        <tr class="{{ $value ? 'bg-success' : 'bg-danger' }}">
                            <td>{{ $key }}</td>
                            <td>{{ $value ? 'Disponível' : 'Indisponível' }}</td>
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
