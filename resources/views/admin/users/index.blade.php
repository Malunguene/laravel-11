@extends('admin.layouts.app2')

@section('title', 'Listagem dos Usuários')
@section('seccao', 'Usuários')

@section('content')


    <a href="{{ route('users.create') }}">Novo</a>

    <x-alert/>

    <table id="example5" class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no banco</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </tfoot>
    </table>


@endsection
