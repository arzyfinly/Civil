<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-sm-1" align="left"><label> Nama Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="practicum_id" class="form-control">
                    @foreach ($practicum as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Waktu Mulai </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="time" class="form-control" name="start_time_in_day" value="{{ $practicumTimes->start_time_in_day }}">
            </td>
        </tr>
        <tr>
            <td class="col-sm-3" align="left"><label> Waktu Akhir </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="time" class="form-control" name="end_time_in_day" value="{{ $practicumTimes->end_time_in_day }}">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Tanggal Mulai </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="date" class="form-control" name="start_date" value="{{ $practicumTimes->start_date }}">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Tanggal Berakhir </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="date" class="form-control" name="end_date" value="{{ $practicumTimes->end_date }}">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Kelas </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <select name="kelas" class="form-control">
                    @if($practicumTimes->kelas == 'A')
                        <option value="{{ $practicumTimes->kelas }}">Kelas {{ $practicumTimes->kelas }}</option>
                        <option value="B">Kelas B</option>
                    @elseif($practicumTimes->kelas == 'B')
                        <option value="{{ $practicumTimes->kelas }}">Kelas {{ $practicumTimes->kelas }}</option>
                        <option value="A">Kelas A</option>
                    @else
                        <option value="0" disabled="true" selected="true">Select Practicum</option>
                        <option value="A">Kelas A</option>
                        <option value="B">Kelas B</option>
                    @endif
                </select>
            </td>
        </tr>
    </tbody>
</table>
