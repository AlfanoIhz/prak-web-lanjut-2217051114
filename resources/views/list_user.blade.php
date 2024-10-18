@extends('layouts.app')

@section ('content')
<div class="d-flex justify-content-center align-items-center bg-cover bg-center backdrop-blur-sm" style="height: 100vh; background-image: url('{{ asset('assets/img/bg-city.jpg') }}')">

    <div class="bg-light mb-3 mt-2 p-4 rounded" style="max-width: 950px; width: 100%;">
        <div class="mb-3 mt-2 text-center">
            <a href="{{ route('user.create') }}" class="btn btn-success">Add New User</a>
            <button class="btn btn-primary">Export to Excel</button>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Class</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}"class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
