<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MENAMBAHKAN DATA</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #f8f9fa">

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <form action="{{ route('edukasis.store') }}" method="POST" enctype="multipart/form-data">
              
              @csrf

              <div class="form-group">
                <label class="font-weight-bold">SEKOLAH</label>
                <input type="text" class="form-control 
                  @error('sch') is-invalid @enderror" name="sch" 
                  value="{{ old('sch') }}" placeholder="Masukkan Nama Sekolah">
                
                @error('sch')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label class="font-weight-bold">JURUSAN</label>
                <input type="text" class="form-control 
                  @error('jur') is-invalid @enderror" name="jur" 
                  value="{{ old('jur') }}" placeholder="Masukkan Jurusan">
                
                @error('jur')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-group">
                <label class="font-weight-bold">TAHUN</label>
                <input type="text" class="form-control 
                  @error('year') is-invalid @enderror" name="year" 
                  value="{{ old('year') }}" placeholder="Masukkan Tahun">
                
                @error('year')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>