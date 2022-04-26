<div style="text-align: center;">
    <h4>Harga Praktikum</h4>
</div>
<form action="{{ route('hargaPraktikum.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.praktikum.practicumPrice.formEdit')
    <button type="submit" class="btn btn-primary">Create</button>
    &nbsp;
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>