<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rents Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/role.png')}}" alt="Bootstrap" width="30" height="30">
              </a>
              <a class="nav-link active text-light">RentBooks</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Horror</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Comedy</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary text-light " href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Akhir Navbar-->


    <!--Carousel-->
      <div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-widht: 100%" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://p4.wallpaperbetter.com/wallpaper/383/565/222/the-sky-grey-the-building-ferrari-wallpaper-preview.jpg" class="d-block w-100" alt="..." 
            style="max-height: 400px">
          </div>
          <div class="carousel-item" data-bs-interval="1000">
            <img src="https://www.purina.co.uk/sites/default/files/2020-11/7-Grey-Cat-BreedsTEASER.jpg" class="d-block w-100" alt="..." 
            style="max-height: 400px">
          </div>
          <div class="carousel-item">
            <img src="https://media.suara.com/pictures/970x544/2020/08/25/88170-air-jordan-x-dior.jpg" class="d-block w-100" alt="..." 
            style="max-height: 400px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!--Akhir Carousel-->


    <!--Jumbotron-->
    <div class="container mt-4">
       <div class="row">
        <div class="col-4">
            <h4>Test_</h4>
            <a href="{{ route('register')}}" class="btn btn-outline-secondary">Register</a>
        </div>
        <div class="col-8">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perspiciatis alias ducimus facilis nam iure quo doloribus 
                perferendis ab provident rerum voluptatibus, labore possimus
                deleniti neque mollitia saepe, molestias debitis aspernatur.</p>
        </div>
       </div>
    </div>
    <!--Akhir Jumbotron-->


    <!--Card Populer Books-->
    <section style="background-color:">
        <div class="container my-5">
            <div class="row text-center">
                <h2>Popular Books</h2>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">HYPOCRITE WORLD</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-secondary w-100">Read</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">MY BOOK COVER</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-secondary w-100">Read</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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   " class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">LUNAR STORM</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-secondary w-100">Read</a>
                        </div>
                      </div>
                </div>
            </div>
    
            </div>
          </section>
          </div>
    
    <!--Akhir Card Populer Books-->



    <!--Message-->
      <div class="container">
          <div class="row text-center">
              <h2>Message</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <form action="{{ route('storeMessage') }}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea name="message" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-secondary">Send</button>
              </form>
            </div>
          </div>
      </div>
    <!--Akhir Message-->

    <br>

    <!--Footer-->
        <footer class="bg-secondary text-center" style="height: 30px;">
          <p>
            Created by <a href="#" style="text-decoration: : none; color: white;">ppp</a></p>
        </footer>
    <!--Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>