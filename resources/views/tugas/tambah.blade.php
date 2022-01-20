<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah Data(by.idad)</title>
</head>
<body>    
    <div class="card-body col-sm-3" >
        <div class="card-header bg-primary text-white">Silahkan Masukkan Buat Tugas Baru</div>
        <div class="card-body">
        <form method="POST" action="/tugas/simpan"> 
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label>Nama Tugas</label>
                <input type="text" class="form-control" name="nama_tugas" placeholder="nama_tugas">
                
            </div>
            <div class="form-group">
                <label>Waktu Terakhir</label>
                <input type="date" class="form-control col-sm-7" name="end_date" placeholder="mm/dd/yyyy">    
            </div>

            <div class="form-group">
                    <button class="btn btn-ptimary">
                        Simpan
                    </button>                
            </div>
        </form>
        </div> 
        <div class="card-footer bg-info text-white">Kita Bisa...</div>        
    </div>
</body>
</html>