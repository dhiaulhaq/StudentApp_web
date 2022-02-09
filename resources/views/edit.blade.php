@extends('layouts.app')

@section('content')
    <main role="main" class="ml-sm-auto px-md-4">
        <div class="container">

            <div class="row">
                <div>
                    <h1 class="mb-3">Edit User</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ups!</strong> Ada yang salah dengan inputan anda.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('update_user', $user) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ $user->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="faculty">Jurusan</label>
                            <input type="text" class="form-control" id="faculty" name="faculty"
                                   value="{{ $user->faculty }}">
                        </div>

                        <div class="mb-3">
                            <label for="major">Fakultas</label>
                            <input type="text" class="form-control" id="major" name="major"
                                   value="{{ $user->major }}">
                        </div>

                        <div class="mb-3">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address"
                                      rows="3">{{ $user->address }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="photo">Gambar</label>
                            <input type="file" class="form-control" id="photo" name="photo"/>
                        </div>

                        <div class="mb-3">
                            @if (is_null($user->photo))
                                <td><img src="/image/as.png" width="200px"></td>
                            @else
                                <td><img src="/image/{{ $user->photo }}" width="200px"></td>
                            @endif
                        </div>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </main>

@endsection
