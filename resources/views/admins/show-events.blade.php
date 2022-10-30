@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/dashboard-admin.css") }}>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<title>KMTZ - Events</title>

@endsection
@section("content")

<div class="admin-header">
    <h3 align="center">Daftar Kegiatan OR9 KMT Zenerics</h3>
</div>

<div class="events-link">
    <a href={{ route("create-event-admin") }}>Tambah Event</a>
</div>

<div class="admin-table">
    <table id="myTable">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->time }}</td>
                <td>{{ $event->author }}</td>
                <td>
                    <form action={{ route("destroy-event-admin", $event->id) }} method="POST">
                        @csrf
                        <button type="submit" class="admin-btn">Delete</button>
                    </form>
                    <a class="admin-btn" href={{ route("edit-event-admin", $event->id) }}>Update</a>
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
