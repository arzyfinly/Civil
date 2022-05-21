<div style="text-align: center;">
    <h4>Inventaris Umum</h4>
</div>
<form action="{{ route('generalInventaris.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.inventaris.general.formCreate')
    <button type="submit" class="btn btn-primary">Tambah</button>
    &nbsp;
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
