@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, {{ auth()->user()->name }}</p>

    <div class="card mt-3">
        <div class="card-header">Daftar Pengguna</div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped" id="users-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{ $loop->iteration + ($users->currentPage()-1)*$users->perPage() }}</td>
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->role }}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $u->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.users.destroy', $u->id) }}" method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
$(function(){
    $('.delete-form').on('submit', function(e){
        if(!confirm('Yakin ingin menghapus user ini?')) {
            e.preventDefault();
        }
    });
});
</script>
@endpush
