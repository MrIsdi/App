@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/dashboard-admin.css") }}>
<title>KMTZ - Status&Role</title>

@endsection
@section("content")

<div class="admin-header">
    <h3 align="center">Data Peserta {{ $data->name }}</h3>
</div>

<div class="admin-form">
    <h4 align="center">Update Role dan Status</h4>
    <form action={{ route("update-status-role", $data->id) }} method="POST">
        @csrf
        <input type="text" value={{ $data->id }} name="id" hidden>
        <div class="admin-input">
            <label for="status">Status</label>
            <select name="status" id="status" required>
                <option selected>Silahkan pilih status</option>
                <option value="sekolah">Sekolah</option>
                <option value="caz">CAZ</option>
                <option value="amz">AMZ</option>
                <option value="zns">ZNS</option>
            </select>
        </div>
        <div class="admin-input">
            <label for="role">Role</label>
            <select name="role" id="role" required>
                <option selected>Silahkan pilih role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="admin-button">
            <a href={{ route("dashboard-admin") }}>Kembali</a>
            <button type="submit">Update</button>
        </div>
    </form>
</div>

@endsection
