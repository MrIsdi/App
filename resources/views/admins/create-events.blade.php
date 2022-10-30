@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/dashboard-admin.css") }}>
<title>KMTZ - Status&Role</title>

@endsection
@section("content")


<div class="admin-form">
    <h4 align="center">Tambah Event</h4>
    <form action={{ route("store-event-admin") }} method="POST">
        @csrf
        <div class="admin-input">
            <label for="title">Judul</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="admin-input">
            <label for="location">Lokasi</label>
            <input type="text" name="location" id="location" required>
        </div>
        <div class="admin-input">
            <label for="time">Waktu</label>
            <input type="text" name="time" id="time" required>
        </div>
        <div class="admin-input">
            <label for="author">Kategori</label>
            <select name="author" id="author" required>
                <option selected>Silahkan pilih kategori</option>
                <option value="sekolah">Sekolah</option>
                <option value="caz">CAZ</option>
                <option value="amz">AMZ</option>
                <option value="zns">ZNS</option>
            </select>
        </div>
        <div class="admin-button">
            <a href={{ route("event-admin") }}>Kembali</a>
            <button type="submit">Tambah</button>
        </div>
    </form>
</div>

@endsection
