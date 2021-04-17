<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6"> 
                <h1>Masukan Data Keluarga</h1>
                </div>
                <div class="col-6 pt-2">
                <a href="/keluarga_terdaftar" class="btn btn-primary btn-sm active float-right" role="button" aria-pressed="true">Kembali</a>
                </div>
                </div>
                <form method="post" action="/keluarga_terdaftar">
                  @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Nama</label>
                      <input name="nama_keluarga" type="text" class="form-control @error('nama_keluarga') is-invalid @enderror" id="nama" placeholder="Masukan Nama" value="{{ old('nama_keluarga') }}">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Tanggal Lahir</label>
                      <input name="tanggal_lahir" type="date" class="form-control form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal" placeholder="Masukan Tanggal Lahir" value="{{old('tanggal_lahir')}}">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Jenis Kelamin</label>
                      <select name="jenis_kelamin" class="form-control form-control @error('jenis_kelamin') is-invalid @enderror"  id="exampleFormControlSelect1" value="{{old('jenis_kelamin')}}">
                        <option Value = "L">Laki - Laki</option>
                        <option Value = "P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" placeholder="Masukan Pekerjaan" value="{{old('pekerjaan')}}">
                    </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
            </div>
        </div>  
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>