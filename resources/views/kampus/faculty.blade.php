<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        {{-- Set specific title for this page --}}
        <title>Faculty of the University</title> 

        <link rel="icon" type="image/x-xicon" href="{{ asset('assets/favicon.ico') }}" /> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> 
        
        {{-- Custom CSS for Search form and general styling adjustments --}}
        <style>
            .example form {
                display: flex; 
                align-items: center; 
            }
            .example input[type=text] {
                padding: 8px;
                border: 1px solid #ccc;
                font-size: 17px;
                flex-grow: 1; 
            }
            .example button {
                padding: 8px 10px;
                background: #fff; 
                color: #0d6efd; 
                border: 1px solid #0d6efd; 
                border-left: none; 
                cursor: pointer;
                font-size: 17px;
            }
            .example button:hover {
                background: #e2e6ea; 
            }
            /* Adjust navbar items */
            .navbar-nav .btn {
                margin-right: 10px; 
            }
            .navbar-nav .dropdown-menu {
                border: none; 
                box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15); 
            }
            .navbar-nav .dropdown-item {
                padding: 0.5rem 1rem;
            }
            /* Styling for the Masthead section */
            .masthead {
                position: relative;
                padding-top: 8rem;
                padding-bottom: 8rem;
                background: url('{{ asset('assets/img/bg-masthead.jpg') }}') no-repeat center center; /* Ensure this path is correct for your masthead background */
                background-size: cover;
            }
            .masthead:before {
                content: '';
                position: absolute;
                background-color: rgba(0, 0, 0, 0.5); /* Overlay for readability */
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
            }

            /* Added style for card image to ensure consistent height and proper cropping */
            .card-img-top.rounded-top {
                height: 200px;
                object-fit: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm"> 
            <div class="container px-4"> 
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">University</a> 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('/') }}" role="button">Home</a> 
                    </li>
                    <li class="nav-item dropdown"> 
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Academic</button>
                        <ul class="dropdown-menu"> 
                            <li><a href="{{ url('Faculty') }}" class="dropdown-item">Faculty</a></li> 
                            {{-- Add other academic links here if needed --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('News') }}" role="button">News</a> 
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('Announcement') }}" role="button">Announcement</a> 
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ url('About') }}" role="button">About University</a> 
                    </li>
                  </ul>
                  {{-- Search form --}}
                  <form class="example ms-3" action="#"> 
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="mb-5">Educated generation is a great generation!</h1>
                            {{-- Signup form (if it's a static part of the layout) --}}
                            <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                </div>
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        ---

        {{--- Main Content: Faculty of the University Section (Dynamically Loaded) ---}}
        <section class="faculty-section py-5">
            <div class="container">
                {{-- Header Section --}}
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold mb-3">Faculty of the University</h1>
                        <p class="lead text-muted">Jelajahi program studi yang tersedia di universitas kami.</p>
                    </div>
                </div>

                {{-- Program Studi Cards Section --}}
                {{-- This section dynamically renders data from the 'prodis' table --}}
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> 
                    @forelse ($prodis as $prodi)
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0"> 
                                @if($prodi->gambar)
                                    {{-- Image from storage. Ensure 'php artisan storage:link' is run. --}}
                                    <img src="{{ asset('storage/prodi_images/' . $prodi->gambar) }}" class="card-img-top img-fluid rounded-top" alt="{{ $prodi->nama_prodi }}">
                                @else
                                    {{-- Placeholder if no image is available --}}
                                    <img src="https://placehold.co/600x400/CCCCCC/333333?text=No+Image" class="card-img-top img-fluid rounded-top" alt="No Image">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title text-primary">{{ $prodi->nama_prodi }}</h5>
                                    <p class="card-text text-muted mb-2"><strong>Kode:</strong> {{ $prodi->kode_prodi }}</p>
                                    <p class="card-text text-muted mb-2"><strong>Kampus:</strong> {{ $prodi->nama_kampus }}</p>
                                    <p class="card-text text-muted">{{ $prodi->alamat }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    {{-- Link to individual prodi detail page (uses Laravel's named route) --}}
                                    <a href="{{ route('prodis.show', $prodi->id) }}" class="btn btn-outline-primary btn-sm stretched-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <div class="alert alert-info" role="alert">
                                Tidak ada program studi yang tersedia saat ini.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        ---

        {{-- Showcase Section (static content) --}}
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('assets/img/ii.jpg') }}')"></div> 
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>President University Students and Alumni</h2>
                        <p class="lead mb-0">In addition to improving academic abilities and broadening academic horizons, it can also hone foreign language skills</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('assets/img/org.jpg') }}')"></div> 
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>President University is one of the best private universities in Indonesia (accredited A)</h2>
                        <p class="lead mb-0">President University offers strong international learning and research environment</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('assets/img/se.jpg') }}')"></div> 
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>President University students won 1st place at the Padjadjaran Financial Festival</h2>
                        <p class="lead mb-0">President University (PresUniv) students won first place in The 4th Padjadjaran Financial Festival. Meanwhile, the 2nd and 3rd places were occupied by teams from the University of Indonesia and Prasetiya Mulya University</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Image after showcase (static content) --}}
        <img src="https://globalrancangselaras.com/wp-content/uploads/2019/02/porto_rsppresidentuni.jpg" class="img-fluid w-100" alt="University Campus"> 

        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="{{ url('About') }}">About</a></li> 
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ url('contact') }}">Contact</a></li> 
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ url('Terms of Use') }}">Terms of Use</a></li> 
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{ url('Privacy Policy') }}">Privacy Policy</a></li> 
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">© Your Website 2023. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/president.university/?locale=id_ID"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://twitter.com/PRESUNIV"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://www.instagram.com/IULIndonesia/"><i class="bi-instagram fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/school/president-university/"><i class="bi-linkedin fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@presidentuniversity6255/videos"><i class="bi-youtube fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script> 
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        {{-- Font Awesome (if you're using it for the search icon) --}}
        <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script> {{-- Replace with your actual Font Awesome Kit ID --}}
    </body>
</html>