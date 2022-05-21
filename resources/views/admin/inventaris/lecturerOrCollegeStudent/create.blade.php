<div style="text-align: center;">
    <h4>Inventaris Dosen / Mahasiswa</h4>
</div>
<form action="{{ route('lecturerInventaris.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.inventaris.lecturerOrCollegeStudent.formCreate')
    <button type="submit" class="btn btn-primary">Tambah</button>
    &nbsp;
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>
