<x-app-layout>
    <div class="container pt-3 bg-light">
        @if (session('success'))
            <div class="alert alert-success w-25 d-flex justify-content-center">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-center font-extrabold text-xl md:text-2xl">Penilaian Karyawan</h1>

        <div class="container flex justify-end items-center pt-4">
            <div class="flex justify-start items-center ml-3 mr-10">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" class="rounded" placeholder="Cari Karyawan">
                    <!-- <button type="button" onclick="window.location.href='{{ route('search') }}'">
                        ✖
                    </button> -->
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="flex items-center">
                <a href="{{ route('addkaryawan.index') }}" class="btn bg-green-600 text-white hover:bg-green-700 ">
                    <i class="bi bi-arrow-left-circle"></i>
                    List Karyawan
                </a>
            </div>
            <div class="flex items-center ml-3">
                <a href="{{ route('hasil.index') }}" class="btn bg-red-600 text-white hover:bg-red-700 ">
                    <i class="bi bi-bar-chart-fill"></i>
                    Hasil Akhir
                </a>
            </div>
        </div>

        <h1> @if(empty($query))
        @else
            Hasil pencarian untuk "{{ $query }}"
        @endif
        </h1>
        <div class="container pt-3 pb-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <!-- <th>Tanggal Lahir</th> -->
                        <!-- <th>Jabatan</th> -->
                        <th>Absensi</th>
                        <th>Kebersihan</th>
                        <th>Loyalitas</th>
                        <th>perilaku</th>
                        <th>peringatan</th>
                        <th>Kinerja</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($results->isEmpty())
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employee->name }}</td>
                                <!-- <td>{{ $employee->dob }}</td> -->
                                <!-- <td>{{ $employee->role }}</td> -->
                                <td>{{ $employee->absensi }}</td>
                                <td>{{ $employee->kebersihan }}</td>
                                <td>{{ $employee->loyalitas }}</td>
                                <td>{{ $employee->perilaku }}</td>
                                <td>{{ $employee->peringatan }}</td>
                                <td>{{ $employee->kinerja }}</td>
                                <td>
                                    <button>Hello</button>
                                    <div href="{{ route('employees.showAddGradeForm', $employee->id) }}" class="btn btn-primary"
                                        class="btn btn-primary">Tambah Nilai</a>
                                        <!-- <a href="{{ route('employees.showAddGradeForm', $employee->id) }}" -->
                                        <!-- class="btn btn-primary">Tambah Nilai</a> -->
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result->name }}</td>
                                <!-- <td>{{ $result->dob }}</td> -->
                                <!-- <td>{{ $result->role }}</td> -->
                                <td>{{ $result->absensi }}</td>
                                <td>{{ $result->kebersihan }}</td>
                                <td>{{ $result->loyalitas }}</td>
                                <td>{{ $result->perilaku }}</td>
                                <td>{{ $result->peringatan }}</td>
                                <td>{{ $result->kinerja }}</td>
                                <td> <a href="{{ route('employees.showAddGradeForm', $result->id) }}"
                                        class="btn btn-primary">Tambah Nilai</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>