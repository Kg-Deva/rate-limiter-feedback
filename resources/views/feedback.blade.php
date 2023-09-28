<form class="mb-3" action="{{ route('simpan') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{-- {{ route('simpan-kontak') }} --}}
    <div class="card-body demo-vertical-spacing demo-only-element">
        <div>
            <label for="basicInput">Nama</label>
            <input class="form-control" aria-label="With textarea" placeholder="Nama" name="name" type="text">
        </div>
        <div>
            <label for="basicInput">Komentar</label>
            <textarea class="form-control" aria-label="With textarea" placeholder="Komentar" name="komentar" type="text"></textarea>
        </div>
</form>
<button class="btn btn-primary d-grid w-100">Add</button>
<!-- <button class="btn btn-danger d-grid w-100"><a href="/data-user"></a></button> -->
</form>


</form>
