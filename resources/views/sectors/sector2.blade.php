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
                    @foreach ($vagas as $key => $value)
                        <tr class="{{ $value ? 'bg-success' : 'bg-danger' }}">
                            <td>{{ $key }}</td>
                            <td>{{ $value ? 'Disponível' : 'Indisponível' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
