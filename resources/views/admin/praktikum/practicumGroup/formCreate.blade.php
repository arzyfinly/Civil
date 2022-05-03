<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-sm-1" align="left"><label> Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="practicum" id="practicum" class="form-control practicum">
                    <option value="0" disabled="true" selected="true">Select Practicum</option>
                    @foreach ($practicums as $prac)
                        <option value="{{ $prac->id }}">{{ $prac->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Nama Mahasiswa </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="nama" id="nama" class="form-control nama">
                    <option value="">

                    </option>
                </select>
            </td>
        </tr>
    </tbody>
</table>
