<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPDATE DATA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #DDECED">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pengalamans.update', $pengalaman->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">PERUSAHAAN</label>
                                <input type="text" class="form-control @error('comp') is-invalid 
                                @enderror" name="comp" value="{{ old('comp', $pengalaman->perusahaan) }}" 
                                placeholder="Masukkan Nama Perusahaan">
                            
                                @error('comp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">PEKERJAAN</label>
                                <input type="text" class="form-control @error('job') is-invalid 
                                @enderror" name="job" value="{{ old('job', $pengalaman->pekerjaan) }}" 
                                placeholder="Masukkan Pekerjaan">
                            
                                @error('job')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TAHUN</label>
                                <input type="text" class="form-control @error('year') is-invalid 
                                @enderror" name="year" value="{{ old('year', $pengalaman->tahun) }}" 
                                placeholder="Masukkan Tahun">
                            
                                @error('year')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DESKRIPSI</label>
                                <input type="text" class="form-control @error('desc') is-invalid 
                                @enderror" name="desc" value="{{ old('desc', $pengalaman->deskripsi) }}" 
                                placeholder="Masukkan Deskripsi Pekerjaan">
                            
                                @error('desc')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>