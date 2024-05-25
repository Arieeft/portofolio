<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('login') }}">
                <span class="d-block d-lg-none">Arie Wardhana</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('assets/img/profile.jpeg') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Certifications</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Arie
                        <span class="text-primary">Wardhana</span>
                    </h1>
                    <div class="subheading mb-5">
                        West Jakarta, Indonesia · +62 822 9946 1218·
                        <a href="mailto:ariwardhana90@gmail.com">ariwardhana90@gmail.com</a>
                    </div>
                    <p class="lead mb-5">I was student at SMK Telkom Jakarta, specializing in Software Engineering, which equips me with skills in programming and software design. I have a particular interest in working in the field of front-end development and UI/UX design.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/arie-wardhana-a552a4262/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/Arieeft"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.instagram.com/arieew_/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @forelse ($pengalaman as $pengalamans)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-2">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $pengalamans->pekerjaan }}</h3>
                            <div class="subheading mb-3">{{ $pengalamans->perusahaan }}</div>
                            <p>{{ $pengalamans->deskripsi }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $pengalamans->tahun }}</span></div>
                    </div>
                    @empty
                                <div class="alert alert-danger">
                                    Data not available.
                                </div>
                    @endforelse
            </section>
            <hr class="m-0" />

            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @forelse ($edukasi as $edukasis)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $edukasis->sekolah }}</h3>
                            <div class="subheading mb-3">{{ $edukasis->jurusan }}</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{ $edukasis->tahun}}</span></div>
                    </div>
                    @empty
                                <div class="alert alert-danger">
                                    Data not available.
                                </div>
                    @endforelse
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-3">Skills</h2>
                    @forelse ($skill as $skills)
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{ $skills->skill}}
                        </li>
                    </ul>
                    @empty
                                <div class="alert alert-danger">
                                    Data not available.
                                </div>
                    @endforelse
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Certifications</h2>
                    @forelse ($sertifikat as $sertifikats)
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            {{ $sertifikats->sertifikat}}
                        </li>
                    </ul>
                    @empty
                                <div class="alert alert-danger">
                                    Data not available.
                                </div>
                    @endforelse
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
