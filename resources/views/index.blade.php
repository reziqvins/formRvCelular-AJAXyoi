<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Rv-Celular</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
<style>
    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
	padding:0;
	margin:0;
}
/*header*/


.navbar h3 span{
	color:  #e0ac1c;
}
.navbar h3{
	color: #ffffff;
}

.navbar{
	background-color: #2c292f;
	
}



/* The footer is fixed to the bottom of the page */

body{
    background-color:#969399;
}

/*footer*/
footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:900px){
	footer { position: static; }
	header { padding-top:20px; }
}


.footer-distributed{
    position: relative;
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: center;
	font: bold 16px sans-serif;
	padding: 20px 20px 60px 50px;
	margin-top: 80px;
    margin-bottom: 0px;
}


.footer-distributed .footer-center{
	width: auto;
    height:auto;
    text-align: center;
    vertical-align: middle;
	margin: 1px,31px;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}



.footer-distributed h3 span{
	color:  #e0ac1c;
}

.company{


}

.company .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
	margin-top: 30px;
	background-color: #000000;
}
</style>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <h3>Rv<span>Celular</span></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-5">
        <div class="row">
            <div class="col-12">
<div class="card">
  <div class="card-body">
                <Center><h1 class="judul">Data Hp</h1></Center>
                <button class="btn btn-success" onClick="create()">Tambah Data</button>
                <div id="read" class="mt-3"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/jquery.js"></script>
    

    <script>
$(document).ready(function(){
read();

});

  //Membaca data
  function read(){
    $.get("{{url('read')}}",{}, function(data,status){
        $("#read").html(data);
    })
  }

// Menampilkan halaman modal create
function create(){
        $.get("{{url('create')}}",{}, function(data,status){
            $("#exampleModalLabel").html('Tambah Data')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }
// Menampilkan halaman modal edit
function show(id){
        $.get("{{url('show')}}/"+id,{}, function(data,status){
            $("#exampleModalLabel").html('Edit Data')
            $("#page").html(data);
            $("#exampleModal").modal('show');
        });
    }

// Proses create data
function store(){
        var nama = $("#nama").val();
        var tipe = $("#tipe").val();
        var tahun = $("#tahun").val();
        $.ajax({
            type:"get",
            url:"{{ url('store') }}",
            data:{nama,tipe,tahun},
            success:function(data){
                $(".btn-close").click();
                read();
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil',
                    text: 'Ditambahkan'});
            }
        });
    }

// Untuk proses Update data
function update(id){
        var nama = $("#nama").val();
        var tipe = $("#tipe").val();
        var tahun = $("#tahun").val();
        $.ajax({
            type:"get",
            url:"{{ url('update') }}/"+id,
            data:{nama,tipe,tahun},
            success:function(data){
                $(".btn-close").click();
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil',
                    text: 'Diupdate'});
                read();
            }
        });
    }
// proses destroy/hapus data
function destroy(id){
   $.ajax({
            type:"get",
            url:"{{ url('destroy') }}/"+id,
            success:function(data){
                read();
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil',
                    text: 'Dihapus'});

            }
        });
  }

</script>

<footer class="footer-distributed">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
			            <div class="footer-center">
				            <div>
				                <h3>Rv<span>Celular</span></h3>
				             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company">
        <p class="footer-company-name">© 2021 RV-Celular</p>
            </div>  
		</footer>
</body>
</html>
