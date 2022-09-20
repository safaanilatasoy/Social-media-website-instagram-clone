<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titan || Social Media Template</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- General CSS File -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg border-bottom" style="background-color:#FFF;">
  <div class="container-fluid">
    <a class="nav-link mx-5" href="#"><img class="navbar-main-logo" src="images/instagram_hand writing-logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="d-flex navbar-search-div" role="search">
        <input class="form-control me-2 navbar-search" type="search" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
      <ul class="navbar-nav navbar-main-icons">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><img src="images/homepage.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="images/messenger.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="images/more.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="images/compass.png"></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"><img src="images/heart.png"></a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div class="container ">
<div class="container text-center" >
  <div class="row justify-content-center" >
    <div class="col-4 border justify-content-center my-5 color-white d-none d-sm-block" style="border-radius: 5px !important;">
      <div class="row" >
    <div class="container">
        <div class="col-12  justify-content-center mb-4">
          <div class="bordered">
            <div class="row h-100">
              <div
                id="carousel-1"
                class="carousel slide w-100"
                data-ride="carousel"
              >
                <div class="carousel-inner h-100">
                  <div class="carousel-item active h-100">
                    <div class="col-4 h-100" id="pad">
                      <div class="card h-100">
                        <div class="profile-pic">p </div>
                        <div class="profile-sec1-text">Anıl Atasoy</div>

                      </div>
                    </div>
                  </div>
                  <div class="carousel-item h-100">
                    <div class="col-4 h-100" id="pad">
                      <div class="card h-100 "><div class="profile-pic">p </div>
                      <div class="profile-sec1-text">Anıl Atasoy</div>
                    </div>
                      
                    </div>
                  </div>
                  <div class="carousel-item h-100">
                    <div class="col-4 h-100" id="pad">
                      <div class="card h-100 "><div class="profile-pic">p </div>
                      <div class="profile-sec1-text">Anıl Atasoy</div></div>
                    </div>
                  </div>
                  <div class="carousel-item h-100">
                    <div class="col-4 h-100" id="pad">
                      <div class="card h-100 "><div class="profile-pic">p </div>
                      <div class="profile-sec1-text">Anıl Atasoy</div></div>
                      
                    </div>
                  </div>
                  <div class="carousel-item h-100">
                    <div class="col-4 h-100" id="pad">
                      <div class="card h-100 "><div class="profile-pic">p </div>
                      <div class="profile-sec1-text">Anıl Atasoy</div></div>
                    </div>
                  </div>
                </div>
                <a
                  class="carousel-control-prev"
                  href="#carousel-1"
                  role="button"
                  data-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon bg-dark rounded-circle"
                    aria-hidden="true"
                  ></span>
                </a>
                <a
                  class="carousel-control-next"
                  href="#carousel-1"
                  role="button"
                  data-slide="next"
                >
                  <span
                    class="carousel-control-next-icon bg-dark rounded-circle"
                    id="bordered-2"
                    aria-hidden="true"
                  ></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    </div>
    <div class="col-6">
      Column
    </div>
    
  </div>
</div>
</div>

  


</div>



<!-- Bootstrap JS -->
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>$("#carousel-1").carousel({
  interval: 3000
});

$("#carousel-1.carousel .carousel-item").each(function () {
  const total = 3;
  let next = $(this).next();

  for (var i = 0; i < total - 1; i++) {
    if (!next.length) {
      next = $(this).siblings(":first");
    }
    next.children(":first-child").clone().appendTo($(this));
    next = next.next();
  }
});
</script>


</body>
</html>