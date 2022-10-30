@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/event-user.css") }}>
<title>KMTZ - Events</title>

@endsection
@section("content")

<h2 align="center">Events Open Recruitment</h2>
<div class="events">
    @foreach ($event as $even)
    <div class="event">
        <div class="even">
            <p>{{ $even->title }}</p>
            <table>
                <thead></thead>
                <tbody>
                    <tr>
                        <td>Kategori</td>
                        <td>{{ $even->author }}</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>{{ $even->time }}</td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>{{ $even->location }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
</div>
@endsection
