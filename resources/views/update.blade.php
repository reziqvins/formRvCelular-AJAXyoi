<div class="p2">
    <div class="form-group mb-3">
        <input type="text" name="nama" id="nama" class="form-control "placeholder="nama" required value="{{ $datahp->nama }}" autocomplete="off">
    </div>
    <div class="form-group mb-3">
        <input type="text" name="tipe" id="tipe" class="form-control " placeholder="tipe" required value="{{ $datahp->tipe }}" autocomplete="off" >
    </div>
    <div class="form-group mb-3">
        <input type="text" name="tahun" id="tahun" class="form-control " placeholder="tahun" required value="{{ $datahp->tahun }}" autocomplete="off" >
    </div>
    <div class="form-group mt-1">
    <button class="btn btn-info" onClick="update({{ $datahp->id }})">Update Data</button>
    </div>
</div>
