<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Informasi Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100vh; /* Set tinggi sidebar sesuai dengan tinggi viewport */
        }
        .nav-link {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #f8f9fa !important;
        }
        img {
            border-radius: 100%;
        }
    </style>
    <!-- Favicon -->
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <!-- Foto Profil -->
                
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR__2IIAULCR-xberpmuxf-9Jx3cJZLJgLm4tSb9cDwRQ&s" height="200px" alt="Profile Picture" class="mt-4 ml-2 mr-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <br><center><h5>Admin Profile</h5></center>
                            --------------------------------
                            <a class="nav-link active mt-2" href="#">
                            <i class="ri-article-line mr-2"></i>Experience
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="ri-graduation-cap-line mr-2"></i>Education
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="ri-computer-line mr-2"></i>Skills
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <i class="ri-award-line mr-2"></i>Certification
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
                <a href="{{ route('pengalamans.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH</a>
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">PERUSAHAAN</th>
                        <th scope="col">PEKERJAAN</th>
                        <th scope="col">TAHUN</th>
                        <th scope="col">DESKRIPSI</th>
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
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengalamans.destroy', $pengalaman->id) }}" method="POST">
                                    <a href="{{ route('pengalamans.edit', $pengalaman->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                      @empty
                          <tr>
                              <td colspan="5" class="text-center">
                                  <div class="alert alert-dark">
                                      Data belum Tersedia.
                                  </div>
                              </td>
                          </tr>
                      @endforelse
                    </tbody>
                  </table>
            </main>
        </div>
    </div>
</body>
</html>
