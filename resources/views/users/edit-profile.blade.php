@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/edit-profile-user.css") }}>
<title>KMTZ - Profile</title>

@endsection
@section("content")

<h2 align="center">Update Profile</h2>
<form action={{ route("update-profile-user") }} class="edit-form" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="id" value={{ Auth::user()->id }} hidden>
    <div class="edit-input">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" required value={{ Auth::user()->name }}>
    </div>
    <div class="edit-input">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value={{ Auth::user()->email }} disabled>
    </div>
    <div class="edit-input">
        <label for="nobp">No. Bp</label>
        <input type="number" id="nobp" name="nobp" required value={{ Auth::user()->nobp }}>
    </div>
    <div class="edit-input">
        <label for="department">Department</label>
        <input type="text" id="department" name="department" required value={{ Auth::user()->department }}>
    </div>
    <div class="edit-input">
        <label for="placeBirth">Tempat Lahir</label>
        <input type="text" id="placeBirth" name="placeBirth" required value={{ Auth::user()->placeBirth }}>
    </div>
    <div class="edit-input">
        <label for="dateBirth">Tanggal Lahir</label>
        <input type="date" id="dateBirth" name="dateBirth" required value={{ Auth::user()->dateBirth }}>
    </div>
    <div class="edit-input">
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto" required>
    </div>
    <div class="edit-submit">
        <a href={{ route("profile-user") }}>Kembali</a>
        <button type="submit">Update Profile</button>
    </div>
</form>

@endsection
