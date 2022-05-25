<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-flush" id="myTable">
    <thead class="thead-light">
        <tr>
            <th>{{ __('No') }}</th>
            <th>{{ __('Nama Praktikum') }}</th>
            <th>{{ __('Waktu Mulai') }}</th>
            <th>{{ __('Waktu Berakhir') }}</th>
            <th>{{ __('Tanggal Mulai') }}</th>
            <th>{{ __('Tanggal Berakhir') }}</th>
            <th>{{ __('Kelas') }}</th>
            <th>{{ __('Tahun') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($practicum as $pTime)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pTime->practicum->name }}</td>
                <td>{{ $pTime->start_time_in_day }}</td>
                <td>{{ $pTime->end_time_in_day }}</td>
                <td>{{ $pTime->start_date }}</td>
                <td>{{ $pTime->end_date }}</td>
                <td>{{ $pTime->kelas }}</td>
                <td>{{ $pTime->tahun }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
