<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-flush" id="myTable">
    <thead class="thead-light">
        <tr>
            <th>{{ __('NIM') }}</th>
            <th>{{ __('Nama Mahasiswa') }}</th>
            <th>{{ __('Praktikum') }}</th>
            <th>{{ __('Kelompok') }}</th>
            <th>{{ __('Kelas') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($practicum as $p)
            <tr>
                <td>{{ $p->collegeStudent->user->nim }}</td>
                <td>{{ $p->collegeStudent->first_name }} {{ $p->collegeStudent->last_name }}</td>
                <td>{{ $p->practicum->name }}</td>
                <td>{{ $p->group }}</td>
                <td>{{ $p->collegeStudent->kelas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
