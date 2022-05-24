<table class="table table-borderless">
    <tbody>
        <tr>
            <td class="col-sm-1" align="left"><label> NIM </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">{{ $practicumGroup->collegeStudent->user->nim }}</td>
        </tr>
        <tr>
            <td class="col-sm-2" align="left"><label> Nama Mahasiswa </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">{{ $practicumGroup->collegeStudent->first_name }} {{ $practicumGroup->collegeStudent->last_name }}</td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Nama Praktikum </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">{{ $practicumGroup->practicum->name }}</td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Kelompok </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                <input type="text" class="form-control" name="group" value="{{ $practicumGroup->group }}">
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Status Pembayaran </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                @if($practicumGroup->status_pembayaran == 1)
                    Lunas
                @else
                    Belum Lunas
                @endif
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Status Acc </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">
                @if($practicumGroup->status_pembayaran == 1)
                    Di Acc
                @else
                    Belum Di Acc
                @endif
            </td>
        </tr>
        <tr>
            <td class="col-sm-1" align="left"><label> Kelas </label></td>
            <td class="col-sm-1">:</td>
            <td class="col-sm-0" align="left">{{ $practicumGroup->collegeStudent->kelas }}</td>
        </tr>
    </tbody>
</table>
