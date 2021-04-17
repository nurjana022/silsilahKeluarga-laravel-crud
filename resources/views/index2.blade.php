<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Rubik', sans-serif;
            font-weight: 100;
        }

        html{
            scroll-behavior: smooth;
        }

        .warna-judul{
            color:#f53855;
            font-weight: bold;
        }

        .btn-custom{
            background-color: #f53855;
            color: white;
            border-radius: 25px;
            font-weight: 100;
        }

        .warna-bg{
            background-color: #f5f5f5;
        }
        section{
            padding-top: 25px;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->  
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container" >
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/keluarga_terdaftar">Daftar Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
        </div>
    </nav>
    </section>
    
    <!--MODAL-->

    <!--End Modal-->

    <!--End Navbar-->

    <!-- Home -->
    <section id="home">
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
        <div class="container pt-4">
            <div class="row pb-5 pt-5">
                <div class="col-lg-7 align-self-center">
                    <h1>Test Project IT Software Audy Dental <strong class="warna-judul">Laravel 8</strong></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, fugit. Deserunt veniam quasi magni ea nihil sit, impedit excepturi magnam, sequi harum, dolores maiores odio ab? Eveniet sapiente illo nulla.</p>
                    <button class="btn btn-lg btn-custom">Discover me</button>
                </div>
                <div class="col-lg-5">
                    <img src="/img/2.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Home -->

    <!-- About -->
    <section id="about">
        <div class="warna-bg">
            <div class="container ">
                <div class="text-center pt-5 pb-4">
                    <h2 class="warna-judul">About</h2>
                </div>
                <div class="row text-center pb-5">
                    <div class="col-lg-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aliquid impedit, doloribus velit repellendus vero hic. Nostrum, accusamus. Molestiae dignissimos iusto dolores qui natus ad nesciunt? Repellendus non quaerat numquam.
                    </div>
                    <div class="col-lg-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aliquid impedit, doloribus velit repellendus vero hic. Nostrum, accusamus. Molestiae dignissimos iusto dolores qui natus ad nesciunt? Repellendus non quaerat numquam.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Abotut -->

    <!-- Footer -->
    <footer class="warna-bg">
        <div class="text-center pb-2 pt-2">
            <h4>Powered By <strong class="warna-judul">Nurjana Ariffilah Idris</strong></h4>
        </div>
    </footer>
    <!-- END Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>