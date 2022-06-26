<table class="table table-striped">


    <thead>
        <tr>
            <thead class="table-dark">
            <center><th >No</th></center>
            <center><th >Nama Merk</th></center>
            <center><th >Tipe Merk</th></center>
            <center><th >Tahun Produksi</th></center>
            <center><th >Action</th></center>
        </tr>
    </thead>
    <tbody>
     @foreach ($datahp as $datahp)
            <tr>
            <center><td>{{ $loop->iteration }}</td></center>
            <center><td>{{ $datahp->nama }}</td></center>
            <center><td>{{ $datahp->tipe }}</td></center>
            <center><td>{{ $datahp->tahun }}</td></center>
            <center><td>
                  <button class="btn btn-warning mr-3" onClick="show({{ $datahp->id }})">Edit</button>
                  <button class="btn btn-danger ml-3" onClick="destroy({{ $datahp->id }})">Hapus</i></button>
              </td></center>
            </tr>
     @endforeach
    </tbody>
</table>
