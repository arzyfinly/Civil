<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table table-flush" id="myTable">
    <thead class="thead-light">
        <tr>
            <th>{{ __('No') }}</th>
            <th>{{ __('Golongan') }}</th>
            <th>{{ __('Nama Penyewa') }}</th>
            <th>{{ __('Menyewa') }}</th>
            <th>{{ __('Sebanyak') }}</th>
            <th>{{ __('Selama') }}</th>
            <th>{{ __('Total Harga Sewa') }}</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ToolRental as $tool)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $tool->type }}</td>
                <td>{{ $tool->tenant }}</td>
                <td>{{ $tool->inventaris->tool_name }}</td>
                <td>{{ $tool->number_of_loan }}</td>
                <td>{{ $tool->rent_of_day }}</td>
                <td>{{ $tool->total_price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
