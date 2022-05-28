<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-flush" id="myTable">
    <thead class="thead-light">
        <tr>
            <th>{{ __('No') }}</th>
            <th>{{ __('Nama Praktikum') }}</th>
            <th>{{ __('Harga') }}</th>
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
                <td>{{ $p->name }}</td>
                <td>{{ idr($p->price) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
