<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-sm-6" align="left"><label> Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select id="practicum select-state" name="practicum_id" class="form-control practicum">
                    <option value="0" disabled="true" selected="true">Select Practicum</option>
                    @foreach ($practicum as $prac)
                        <option value="{{ $prac->id }}">{{ $prac->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Waktu Mulai Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="time" name="start_time_in_day" class="form-control">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Waktu Berakhir Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="time" name="end_time_in_day" class="form-control">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Tanggal Mulai Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="date" name="start_date" class="form-control">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Tanggal Berakhir Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="date" name="end_date" class="form-control">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label>Kelas</label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="kelas" class="form-control">
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label>Tahun</label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="tahun" class="form-control">
                    @for($i=date("Y")-5;$i<=date("Y");$i++)
                    <option value="{{ $i }}">{{ date("Y", mktime(0, 0, 0, 0, 1, $i+1)) }}</option>
                    @endfor
                </select>
            </td>
        </tr>
        <input type="text" hidden name="periode" value="<?= date('Y') ?>">
    </tbody>
</table>
