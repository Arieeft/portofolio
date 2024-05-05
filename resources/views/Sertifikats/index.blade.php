<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> EXPERIENCE ADMIN PAGE</title>
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
        hr.new4 {
            border: 1px solid white;
        }
        .hover-bg:hover {
            background-color: #828282;
        }
    </style>
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
                            <hr class="new4">
                            <div class="hover-bg">
                            <a class="nav-link active mt-2" href="{{ route('pengindex') }}">
                            <div class=""><i class="ri-article-line mr-2"></i>Experience</div>
                            </a>
                            </div>
                        </li>
                        <li class="nav-item hover-bg">
                            <a class="nav-link" href="{{ route('eduindex') }}">
                            <div class=""><i class="ri-graduation-cap-line mr-2"></i>Education</div>
                            </a>
                        </li>
                        <li class="nav-item hover-bg">
                            <a class="nav-link" href="{{ route('skindex') }}">
                            <div class=""><i class="ri-computer-line mr-2"></i>Skills</div>
                            </a>
                        </li>
                        <div class="bg-secondary">
                        <li class="nav-item hover-bg">
                            <a class="nav-link" href="{{ route('serindex') }}">
                            <div class=""><i class="ri-award-line mr-2"></i>Certification</div>
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
                <a href="{{ route('sertifikats.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH</a>
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">CERTIFICATION</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($sertifikats as $sertifikat)
                        <tr class="text-center">
                            <td>{{ $sertifikat->sertifikat }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('sertifikats.destroy', $sertifikat->id) }}" method="POST">
                                    <a href="{{ route('sertifikats.edit', $sertifikat->id) }}" class="btn btn-sm btn-primary">UPDATE</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
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
