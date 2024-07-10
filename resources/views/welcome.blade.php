<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Plataforma de pago facil de membresias, mantenimientos y cuotas por cobrar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        

        <!-- Fonts -->
        

        <!-- Scripts -->

        {{-- If use only tailwind css --}}
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}
        {{-- <link rel="stylesheet" href="resources/css/bootstrap.css">
        <link rel="stylesheet" href="resources/css/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="resources/css/themes/prism-okaidia.css">
        <link rel="stylesheet" href="resources/css/custom.min.css"> --}}

        <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.css">
        <link rel="stylesheet" href="https://bootswatch.com/_vendor/bootstrap-icons/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
        <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    </head>
    <body>
        <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
            <div class="container">
              <a href="../" class="navbar-brand">Sistema de cobros</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown" data-bs-theme="light">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes">Themes</a>
                    <div class="dropdown-menu" aria-labelledby="themes">
                      <a class="dropdown-item" href="../default/">Default</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../cerulean/">Cerulean</a>
                      <a class="dropdown-item" href="../cosmo/">Cosmo</a>
                      <a class="dropdown-item" href="../cyborg/">Cyborg</a>
                      <a class="dropdown-item" href="../darkly/">Darkly</a>
                      <a class="dropdown-item" href="../flatly/">Flatly</a>

                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../help/">Help</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://blog.bootswatch.com/">Blog</a>
                  </li>
                  <li class="nav-item dropdown" data-bs-theme="light">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Sketchy</a>
                    <div class="dropdown-menu" aria-labelledby="download">
                      <a class="dropdown-item" rel="noopener" target="_blank" href="https://jsfiddle.net/bootswatch/qmLdbwyk/">Open in JSFiddle</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="../5/sketchy/bootstrap.css" download>bootstrap.css</a>
                      <a class="dropdown-item" href="../5/sketchy/bootstrap.min.css" download>bootstrap.min.css</a>
                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav ms-md-auto">
                  <li class="nav-item">
                    <a target="_blank" rel="noopener" class="nav-link" href="https://github.com/thomaspark/bootswatch/"><i class="bi bi-github"></i><span class="d-lg-none ms-2">GitHub</span></a>
                  </li>
                  <li class="nav-item">
                    <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/bootswatch"><i class="bi bi-twitter"></i><span class="d-lg-none ms-2">Twitter</span></a>
                  </li>
                  <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                  </li>
                  <li class="nav-item dropdown" data-bs-theme="light">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="version-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                      <span class="d-lg-none me-2">Bootstrap </span>
                      <span>v5.3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a href="https://bootswatch.com/" class="dropdown-item d-flex align-items-center justify-content-between" aria-current="true">
                          <span class="ms-2">v5.3.x</span><i class="bi bi-check"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://bootswatch.com/4/" class="dropdown-item d-flex align-items-center justify-content-between">
                          <span class="ms-2">v4.6.2</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://bootswatch.com/3/" class="dropdown-item d-flex align-items-center justify-content-between">
                          <span class="ms-2">v3.4.1</span>
                        </a>
                      </li>
                      <li>
                        <a href="https://bootswatch.com/2/" class="dropdown-item d-flex align-items-center justify-content-between">
                          <span class="ms-2">v2.3.2</span>
                        </a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <a href="https://github.com/thomaspark/bootswatch/tags" class="dropdown-item d-flex align-items-center justify-content-between">
                          <span class="ms-2">All versions</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                    <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                    <hr class="d-lg-none my-2 text-white-50">
                  </li>
                  <li class="nav-item dropdown" data-bs-theme="light">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="theme-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                      <i class="bi bi-circle-half"></i>
                      <span class="d-lg-none ms-2">Toggle theme</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                          <i class="bi bi-sun-fill"></i><span class="ms-2">Light</span>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                          <i class="bi bi-moon-stars-fill"></i><span class="ms-2">Dark</span>
                        </button>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      
          <div class="container">
            <div class="page-header" id="banner">
              <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                  <h1>Sistema de pagos</h1>
                  <p class="lead">Bienvenidos al sistema de pagos para membresias, mantenimientos, cuotas, etc.</p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                  <div class="sponsor">
                    
                  </div>
                </div>
              </div>
            </div>
    
            
    <footer id="footer">
        <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled">
                <li class="float-end"><a href="#top">Back to top</a></li>
                <li><a href="https://blog.bootswatch.com/">Blog</a></li>
                <li><a href="https://blog.bootswatch.com/rss/">RSS</a></li>
                <li><a href="https://twitter.com/bootswatch">Twitter</a></li>
                <li><a href="https://github.com/thomaspark/bootswatch">GitHub</a></li>
                <li><a href="../help/#api">API</a></li>
                <li><a href="../help/#donate">Donate</a></li>
              </ul>
              <p>Made by <a href="https://thomaspark.co/">Thomas Park</a>.</p>
              <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT License</a>.</p>
              <p>Based on <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>. Icons from <a href="https://icons.getbootstrap.com/" rel="nofollow">Bootstrap Icons</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>
  
            </div>
          </div>
    </footer> 
</div>
    {{-- <script src="resources/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script src="resources/js/prism.js" data-manual></script>
    <script src="resources/js/custom.js"></script> --}}

    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://bootswatch.com/_vendor/prismjs/prism.js" data-manual></script>
    <script src="https://bootswatch.com/_assets/js/custom.js"></script>

    </body>

</html>
