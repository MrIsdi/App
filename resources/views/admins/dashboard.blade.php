@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/dashboard-admin.css") }}>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<title>KMTZ - Dashboard</title>

@endsection
@section("content")

<div class="admin-header">
    <h3 align="center">Data Peserta OR9 KMT Zenerics</h3>
</div>

<div class="admin-table">
    <table id="myTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>NoBp</th>
                <th>Department</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->nobp }}</td>
                <td>{{ $user->department }}</td>
                <td>{{ $user->placeBirth }}</td>
                <td>{{ $user->dateBirth }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <form action={{ route("reset-password", $user->id) }} method="POST">
                        @csrf
                        <input type="text" value={{ $user->id }} name="id" hidden>
                        <button type="submit" class="admin-btn">Reset Password</button>
                    </form>
                    <a class="admin-btn" href={{ route("edit-status-role", $user->id) }}>Update User</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>

@endsection
