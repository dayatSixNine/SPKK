<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Grade</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambahkan Grade untuk {{ $employee->name }}</h1>
        <form action="{{ route('employees.addgrade') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $employee->id }}">
            <div class="form-group">
                <label for="absensi">Absensi :</label>
                <select name="absensi" id="absensi" class="form-control">
                    <option value="">Pilih Nilai</option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kebersihan">Kebersihan :</label>
                <select name="kebersihan" id="kebersihan" class="form-control">
                    <option value="">Pilih Nilai </option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="loyalitas">Loyalitas :</label>
                <select name="loyalitas" id="loyalitas" class="form-control">
                    <option value="">Pilih Nilai</option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="loyalitas">Perilaku :</label>
                <select name="perilaku" id="perilaku" class="form-control">
                    <option value="">Pilih Nilai</option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="peringatan">Peringatan :</label>
                <select name="peringatan" id="peringatan" class="form-control">
                    <option value="">Pilih Nilai</option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kinerja">Kinerja :</label>
                <select name="kinerja" id="kinerja" class="form-control">
                    <option value="">Pilih Nilai</option>
                    @foreach(['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D'] as $grade)
                        <option value="{{ $grade }}">{{ $grade }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>
