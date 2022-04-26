<table class="table table-borderless">
    <tbody>
        @foreach ($practicum as $row)
        <tr>
            <td class="col-sm-1" align="left"><label> Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left"><input class="form-control price" type="text" name="name">{{ $row->name }} </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Harga </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left"><input class="form-control price" type="text" name="price">{{ $row->price }} </td>
        </tr>
        @endforeach
    </tbody>
</table>