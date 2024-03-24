<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Informasi Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #DDECED">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center">Informasi Produk</h3>
                        <a href="{{ route('pengalamans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA PRODUK</th>
                                <th scope="col">DESKRIPSI PRODUK</th>
                                <th scope="col">HARGA PRODUK</th>
                                <th scope="col">STOK PRODUK</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($pengalamans as $pengalaman)
                                <tr>
                                    <td>{{ $pengalaman->comp }}</td>
                                    <td>{!! $pengalaman->job !!}</td>
                                    <td>{{ $pengalaman->year }}</td>
                                    <td>{{ $pengalaman->desc }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengalamans.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('pengalamans.edit', $pengalaman->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $pengalamans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>