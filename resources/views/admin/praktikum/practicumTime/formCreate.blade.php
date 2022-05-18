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
                <input type="date" name="start" class="form-control">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Waktu Akhir Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="date" name="end" class="form-control">
            </td>
        </tr>
        <input type="text" hidden name="periode" value="<?= date('Y') ?>">
    </tbody>
</table>
