                        <table class="table table-borderless">
                            <tbody>
                                @foreach ($collegestudent as $row)
                                <tr>
                                    <td class="col-sm-2" align="left">NPM</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $row->nim }}</td>
                                    <input type="text" hidden name="college_student_id" value="{{ $row->id }}">
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Nama</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $row->first_name. " " .$row->last_name  }}</td>
                                @endforeach
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Praktikum</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">
                                        <select class="form-control praktikum" id="practicum">
                                            <option value="0" disabled="true" selected="true">Select Practicum</option>
                                            @foreach ($practicums as $p)
                                                <option value="{{$p->id}},{{$p->price}}">{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                        <input class="practicum" hidden name="practicum_id" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Harga</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left"><input disabled class="form-control price" type="text"></td>
                                </tr>
                            </tbody>
                        </table>