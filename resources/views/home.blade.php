@extends('layouts.app')

@section('content')
    <main role="main" class="ml-sm-auto px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h1 class="h2">Daftar User</h1>
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
                    <th scope="col">Alamat</th>
                    <th scope="col" width="280px">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        @if (is_null($user->photo))
                            <td><img src="/image/as.png" width="100px"></td>
                        @else
                            <td><img src="/image/{{ $user->photo }}" width="100px"></td>
                        @endif
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->faculty }}</td>
                        <td>{{ $user->major }}</td>
                        @if (is_null($user->address))
                            <td>No Data</td>
                        @else
                            <td>{{ $user->address }}</td>
                        @endif
                        <td>
                            <form action="{{ route('delete_user', $user) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('edit_user', $user) }}">Edit</a>

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
