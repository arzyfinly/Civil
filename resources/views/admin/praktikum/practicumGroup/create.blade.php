<div style="text-align: center;">
    <h4>Kelompok Praktikum</h4>
</div>
<form action="{{ route('kelompok.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.praktikum.practicumGroup.formCreate')
    <button type="submit" class="btn btn-primary">Tambah</button>
    &nbsp;
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>