<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-flush" id="myTable">
    <thead class="thead-light">
        <tr>
            <th>{{ __('No') }}</th>
            <th>{{ __('Nama Mahasiswa') }}</th>
            <th>{{ __('Nama Praktikum') }}</th>
            <th>{{ __('Status Pembayaran') }}</th>
            <th>{{ __('Status Acc') }}</th>
        </tr>
    </thead>
    <tbody>
        @php
            function idr($pembayaran)
            {
                $result = 'Rp. ' . number_format($pembayaran, 2, ',', '.');
                return $result;
            }
        @endphp
        @foreach ($practicum as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->collegeStudent->first_name }} {{ $p->collegeStudent->last_name }}</td>
                <td>{{ $p->collegeStudent->user->nim }}</td>
                <td>{{ $p->practicum->name }}</td>
                <td>{{ idr($p->practicum->price) }}</td>
                @if($p->status_pembayaran == 1)
                <td>Lunas</td>
                @else
                <td>Belum Lunas</td>
                @endif
                @if($p->status == 1)
                <td>Acc</td>
                @else
                <td>Belum Acc</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
