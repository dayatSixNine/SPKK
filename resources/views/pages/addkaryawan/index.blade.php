<x-app-layout>
    <div class="container pt-3 bg-light">
        @if (session('success'))
            <div class="alert alert-success w-25 d-flex justify-content-center">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-center font-extrabold text-xl md:text-2xl">List Karyawan</h1>
        <div class="container flex justify-end items-center pt-4">
            <div class="flex justify-start items-center ml-3 mr-10">
                <form action="{{ route('search') }}" method="GET">
                <input type="hidden" name="view" value="{{ 'biokaryawan' }}">
                    <input type="text" name="query" class="rounded" placeholder="Cari Karyawan">
                    <button type="button" onclick="window.location.href='{{ route('search') }}'">
                        ✖
                    </button>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="flex items-center">
                <a href="{{ route('addkaryawan.create') }}" class="btn bg-green-600 text-white hover:bg-green-700 ">
                    <i class="bi bi-plus-circle"></i>
                    Karyawan
                </a>
            </div>
            <div class="flex items-center ml-3">
                <a href="{{ route('nilaikaryawan.index') }}" class="btn bg-blue-600 text-white hover:bg-blue-700 ">
                    <i class="bi bi-plus-circle"></i>
                    Nilai Karyawan
                </a>
            </div>
        </div>

        <div class="container pt-3 pb-5 ">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ $employee->role }}</td>
                            <td>
                                <a href="{{ route('addkaryawan.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('addkaryawan.destroy', $employee->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah kamu yakin menghapus Karyawan ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>