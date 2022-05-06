<div style="text-align: center;">
    <h4>Waktu Praktikum</h4>
</div>
<form action="{{ route('practicumTime.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.praktikum.practicumTime.formCreate')
    <button type="submit" class="btn btn-primary">Tambah</button>
    &nbsp;
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
