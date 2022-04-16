                    <form action="{{ route('praktikum.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-borderless">
                            <tbody>
                                 @foreach ($collegestudent as $row)
                                <tr>
                                    <td class="col-sm-2" align="left">NPM</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $row->nim }}</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Nama</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">{{ $row->first_name. " " .$row->last_name  }}</td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Praktikum</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left">
                                        <select class="form-control praktikum" name="practicum" id="practicum">
                                            <option value="0" disabled="true" selected="true">Select Practicum</option>
                                            @foreach ($practicums as $p)
                                                <option value="{{ $p->price }}">{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Harga</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left"><input class="form-control price" type="text"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>