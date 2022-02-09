@extends('layouts.app-admin')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Daftar User</h1>
            <a href="{{ route('user.create') }}">
                <button type="button" class="btn btn-primary mb-2">Tambah</button>
            </a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <span>{{ $message }}</span>
            </div>
        @elseif ($message = Session::get('delete'))
            <div class="alert alert-danger">
                <span>{{ $message }}</span>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col" width="280px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/image/{{ $user->photo }}" width="100px"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->faculty }}</td>
                        <td>{{ $user->major }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('user.edit', $user) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $users->links() !!}
        </div>
    </main>
@endsection
