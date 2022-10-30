@extends("layouts.dashboard")
@section("style")

<link rel="stylesheet" href={{ url("css/dashboard-user.css") }}>
<title>KMTZ - Dashboard</title>

@endsection
@section("content")

<div class="box-name">
    <h2>Identitas:</h2>
    <div class="identitas">
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td>Nama</td>
                    <td align="right">{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>No. Bp</td>
                    <td align="right">{{ Auth::user()->nobp }}</td>
                </tr>
                <tr>
                    <td>Departemen</td>
                    <td align="right">{{ Auth::user()->department }}</td>
                </tr>
                <tr>
                    <td>Status OR</td>
                    <td align="right">{{ Auth::user()->status }}</td>
                </tr>
            </tbody>
        </table>
        <img src={{ url("img/ilustrasi.svg") }} alt="gambar">
    </div>
</div>
<div class="box-name">
    <h2 style="margin-bottom: 12px;">Tahapan yang akan dilalui:</h2>
    <div class="step">
        <ul>
            <li>
                <i class='bx bx-dice-1'></i>
                <span>Sekolah</span>
            </li>
        </ul>
        <ul>
            <li>
                <i class='bx bx-dice-2'></i>
                <span>CAZ</span>
            </li>
        </ul>
        <ul>
            <li>
                <i class='bx bx-dice-3'></i>
                <span>AMZ</span>
            </li>
        </ul>
        <ul>
            <li>
                <i class='bx bx-dice-4'></i>
                <span>ZNS</span>
            </li>
        </ul>
    </div>
</div>

@endsection
