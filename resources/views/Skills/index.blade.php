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
                
                    <a href="{{ route('logout') }}">
                        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2 mt-5" src="{{ asset('assets/img/profile.jpeg') }}" alt="..." /></span>
                    </a>                    <ul class="nav flex-column">
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
                        <div class="bg-secondary">
                        <li class="nav-item hover-bg">
                            <a class="nav-link" href="#">
                            <div class=""><i class="ri-computer-line mr-2"></i>Skills</div>
                            </a>
                        </div>
                        </li>
                        <li class="nav-item hover-bg">
                            <a class="nav-link" href="{{ route('serindex') }}">
                            <div class=""><i class="ri-award-line mr-2"></i>Certification</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
                <a href="{{ route('skills.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH</a>
                <table class="table table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">SKILLS</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($skills as $skill)
                        <tr class="text-center">
                            <td>{{ $skill->skill }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                                    <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-sm btn-primary">UPDATE</a>
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
