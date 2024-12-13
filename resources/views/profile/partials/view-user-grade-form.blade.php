<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

$user = Auth::user();  // Get the current authenticated user
$url = URL::signedRoute('user.fetchData', ['user' => $user->id]);
$id = $user->id;
$tgl = $user->dob;
$nama = $user->name;
$jabatan = $user->role;

?>
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-black dark:text-gray-100">
            {{ __('Nilai Karyawan') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Disini rangkuman nilai anda:') }}
        </p>

        <div class="container flex justify-end items-center pt-4">
    </header>

    <ul>ID: <b>{{$id}}</b></ul>
    <ul>Nama Lengkap: <b>{{$nama}}</b></ul>
    <ul>Tanggal Lahir: <b>{{$tgl->format('d-m-Y')}}</b></ul>
    <ul>Jabatan: <b>{{$jabatan}}</b></ul>

    <header>
        <h2>Nilai</h2>
    </header>

    <div class="flex-center">
        <div class="container flex-center items-center">
            <table class="table table-bordered items-center">
                <thead>
                    <tr>
                        <th>Absensi</th>
                        <th>Kebersihan</th>
                        <th>Loyalitas</th>
                        <th>perilaku</th>
                        <th>peringatan</th>
                        <th>Kinerja</th>
                    </tr>
                </thead>
                <tr>
                    <td>{{ $user->absensi }}</td>
                    <td>{{ $user->kebersihan }}</td>
                    <td>{{ $user->loyalitas }}</td>
                    <td>{{ $user->perilaku }}</td>
                    <td>{{ $user->peringatan }}</td>
                    <td>{{ $user->kinerja }}</td>
                </tr>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</section>