@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/profile-user.css") }}>
<title>KMTZ - Profile</title>

@endsection
@section("content")

<h2 align="center">My Profile</h2>
<div class="profile-img">
    @if (!Auth::user()->foto)
    <img src={{ url("img/logo.png") }} alt="">
    @else
    <img src={{ url("img/".Auth::user()->foto) }} alt="">
    @endif
</div>
<table class="profile-table">
    <thead></thead>
    <tbody>
        <tr>
            <td>Nama</td>
            <td align="right">{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td align="right">{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td>No. Bp</td>
            <td align="right">{{ Auth::user()->nobp }}</td>
        </tr>
        <tr>
            <td>Deparment</td>
            <td align="right">{{ Auth::user()->department }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td align="right">{{ Auth::user()->placeBirth }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td align="right">{{ Auth::user()->dateBirth }}</td>
        </tr>
    </tbody>
</table>
<div class="profile-a">
    <a href={{ route("dashboard-user") }} class="profile-btn-edit">Dashboard</a>
    <a href={{ route("edit-profile-user") }} class="profile-btn-edit">Edit Profile</a>
</div>

@endsection
