<table class="table table-borderless">
    <tbody>
        <input type="text" name="college_student_id" id="collegeId" hidden>
        <tr>
            <td align="left">Pilih Mahasiswa</td>
            <td class="col-xs">:</td>
            <td class="col-md-10">
                <select name="college_student_id" class="form-control" id="mahasiswa">
                    <option hidden>Pilih Mahasiswa</option>
                    @foreach ($collegestudents as $row)
                    <option value="{{ $row->id }}">{{ $row->first_name }} {{ $row->last_name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">NPM</td>
            <td class="col-xs">:</td>
            <td class="col-xs" align="left"><input class="form-control" type="text" id="npm" disabled></td>
        </tr>
        <tr>
            <td align="left">Nama</td>
            <td class="col-xs">:</td>
            <td class="col-xs" align="left"><input class="form-control" type="text" id="name" disabled></td>
        </tr>
        <tr>
            <td align="left">Praktikum</td>
            <td class="col-xs">:</td>
            <td class="col-xs" align="left"> 
                <select class="form-control " name="" id="praktikum">
                    <option hidden>Pilih Praktikum</option>
                    @foreach ($practicums as $row)
                    <option value="{{$row->id}},{{$row->price}}">{{ $row->name }}</option>
                    @endforeach
                    <input type="text" name="practicum_id" hidden id="practicum_id">
                </select>
            </td>
        </tr>
        <tr>
            <td align="left">Harga</td>
            <td class="col-xs">:</td>
            <td class="col-xs" align="left"><input class="form-control" type="text" name="price" id="price" disabled></td>
        </tr>
    </tbody>
</table>