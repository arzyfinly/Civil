<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-sm-1" align="left"><label> Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select id="practicum select-state" class="form-control practicum">
                    <option value="0" disabled="true" selected="true">Select Practicum</option>
                    @foreach ($practicum as $prac)
                        <option value="{{ $prac->id }}">{{ $prac->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Nama Mahasiswa </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="pracreg_id" id="nama" class="form-control nama">
                    <option value="0" disabled="true" selected="true">Select College</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Kelompok </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="group" class="form-control">
                    <option value="0" disabled="true" selected="true">Select Group</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
        </tr>
    </tbody>
</table>
