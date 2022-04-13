 
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
                                        <select class="form-control" name="practicum" id="practicum">
                                            <option value="0">{{__('Bahan')}}</option>
                                            <option value="1">{{__('Ilmu Ukur Tanah')}}</option>
                                            <option value="2">{{__('Perpetaan')}}</option>
                                            <option value="3">{{__('Hidrolika')}}</option>
                                            <option value="4">{{__('Perkerasan Jalan Raya')}}</option>
                                            <option value="5">{{__('Mekanika Tanah')}}</option>
                                            <option value="6">{{__('Beton')}}</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1" align="left">Harga</td>
                                    <td class="col-sm-1">:</td>
                                    <td class="col-sm-0" align="left"><input class="form-control" type="text"></td>
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