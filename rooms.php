<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <b> SD HotelsHotels - Rooms </b> </title>  
<?php require('include/links.php') ?> 
</head>
<body class="bg-light">

<?php require('include/header.php'); ?>


<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">Our Rooms</h2>
  <div class="h-line bg-dark"></div>
  
</div>

<div class="container"> 
  <div class="row"> 

    <div class="col-lg-3 col-mb-12 mb-lg-0 mb-4 px-lg-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class=mt-2">Filters</h4>
          <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="FiltersDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-column aligen-iltes-stretch mt-2" id="FiltersDropdown">
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Check Avilability</h5>
              <div class="mb-2">
                <lable class="form-label">Chech-out</label>
                <input type="date" class="form-control shadow-none mb-3">                
              </div>
              <lable class="form-label">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <div class="border bg-light p-5 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
              <div class="mb-2">
                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">                
                <lable class="form-check-label" for="f1">Facility One</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">                
                <lable class="form-check-label" for="f2">Facility Two</label>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">                
                <lable class="form-check-label" for="f3">Facility Three</label>
              </div>
            </div>

            <div class="border bg-light p-2 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
              <div class="d-flex">
                <div class="mb-3 me-3">
                  <lable class="form-label">Adults</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div>
                  <lable class="form-label">Children</label>
                  <input type="number" class="form-control shadow-none">
                </div>
              </div>
            </div>
        </div>
      </nav>
    </div>

    <div class="col-lg-9 col-md-12 px-4">
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/2.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>

      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/3.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>

      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/4.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>

      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/5.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>

      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/6.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>

      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="imgs/rooms/7.jpg" class="img-fluid rounded">
          </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-o">
            <h5 class="mb-3">Simple Room Name </h5>
            <div class="features mb-3">
             <h6 class="mb-1"> Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                3 sofe
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1"> Facilities </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  WIFI
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  Room Heater
                </span>
                </div>
                <div class="Guests">
                  <h6 class="mb-1"> Guests </h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                  4 Children
                </span>
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4"> ₹200 per night</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
        </div>
      </div>
    </div>
</div>
    </div>

  </div>
</div>

<?php require('include/footer.php'); ?>

</body>
</html>

