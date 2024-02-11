<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electricians</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
  <!-- JavaScript and dependencies (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Custom CSS -->
  <style>
    /* Add your custom CSS here */
    /* Navbar */
    .navbar {
      padding: 15px;
      background-color: #b8b0b0 !important;
    }
    /* Card */
    .card {
      width: 65%;
      margin: 50px auto;
      text-align: center;
      padding: 10px;
    }
    .h5 {
      padding: 30px;
      margin: 50px auto;
    }
    body {
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url('pink.png');
    }
    #staticTextBox {
      width: 47%;
    }
    .horizontal-card {
      margin-bottom: 20px;
    }
    .card-img {
      width: 100%;
      max-width: 100px;
      height: auto;
    }
    .horizontal-card {
      border: 1px solid #ccc;
      border-radius: 8px;
    }
  </style>
 
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Logo -->
    <a class="navbar-brand" href="home1.php"><img src="logo.png" alt="Logo" height="30"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <!-- Locations Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Locations
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Vempalli</a>
            <a class="dropdown-item" href="#">Kadapa</a>
            <a class="dropdown-item" href="#">Rayachoti</a>
          </div>
        </li>
      </ul>
      <!-- Search Bar -->
      <form class="form-inline my-2 my-lg-0" id="searchForm">
  <input class="form-control mr-sm-2" type="search" placeholder="Search by location" aria-label="Search" id="searchLocationInput">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

    </div>
  </nav>

<!-- Content - Card -->

<!-- Content - Card -->
<div class="card">
  <div class="card-body text-center">
    <h5><b>Electricians near me </b></h5>
    <!-- Other content if needed -->
    <h5 class="card-title"></h5>
    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          
          <input type="text" readonly class="form-control-plaintext" id="staticTextBox1" value=" Wiring works." style="border: 1px solid #ccc;" />
        </div>
        <div class="col-md-6">
         
          <input type="text" readonly class="form-control-plaintext" id="staticTextBox2" value=" Installation and fitting ." style="border: 1px solid #ccc;" />
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-6">
         
          <input type="text" readonly class="form-control-plaintext" id="staticTextBox3" value=" Earthing." style="border: 1px solid #ccc;" />
        </div>
        <div class="col-md-6">
          
          <input type="text" readonly class="form-control-plaintext" id="staticTextBox4" value=" Electric motors and winding ." style="border: 1px solid #ccc;" />
        </div>
      </div>
    </div>
    <p class="card-text"></p>
  </div>
  
  <section>
  <div class="row justify-content-center mt-4">
      <div class="col-md-4">
        <div class="box d-flex align-items-center">
          <div class="icon">
            <i class="fas fa-smile"></i>
          </div>
          <div class="counter ml-2">520</div>
          <div class="text ml-2">Happy users</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box d-flex align-items-center">
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="counter ml-2">200</div>
          <div class="text ml-2">Verified Experts</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box d-flex align-items-center">
          <div class="icon">
            <i class="fas fa-layer-group"></i>
          </div>
          <div class="counter ml-2">3</div>
          <div class="text ml-2">Categories</div>
        </div>
      </div>
    </div>

  </section>
<br><br>

<br><br>
</div>

<!--card1-->
<div class="card horizontal-card">
  <div class="row no-gutters">
    <image src="image1.png" class="card-img rounded-circle" alt="Profile Picture">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Mahadev Galaxie</h5>
        <p class="card-text">Rating: 5.5/5</p>
        <p class="card-text card-text-location">Location:Mandy Street Cuddapah Ho,kadapa</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal1">Contact</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal1" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Electrician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Email:Mahadev@example.com</p>
        <p>Phone: +8563219689</p>
      </div>
    </div>
  </div>
</div> 
<!--card2-->
<div class="card horizontal-card">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="image2.png" class="card-img rounded-circle" alt="Profile Picture">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Srisai Electrician and Battery</h5>
        <p class="card-text">Rating: 4.5/5</p>
        <p class="card-text card-text-location">Location: Chakrayapeta,kadapa</p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal2">Contact</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal2" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Electrician</h5>
        <button type="button" class="close
  <script>
    // Function to filter electrician cards based on the entered location
    function searchElectricians() {
      var searchLocation = document.getElementById('searchLocationInput').value.toLowerCase();
      var cards = document.querySelectorAll('.horizontal-card');

      cards.forEach(function(card) {
        var locationText = card.querySelector('.card-text:last-child').textContent.toLowerCase();
        
        if (locationText.includes(searchLocation) || searchLocation === '') {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Email: Srisai@email.com</p>
        <p>Phone: +4632697120</p>
      </div>
    </div>
  </div>
</div>

<!--card3-->
<div class="card horizontal-card">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="image3.png" class="card-img rounded-circle" alt="Profile Picture">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Narasaiah Auto Electrician Work</h5>
        <p class="card-text">Rating: 6.5/5</p>
        <p class="card-text card-text-location">Location:Rayachoty Road Cuddapah Ho,Kadapa</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal3">Contact</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal3" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Electrician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Email:Narasaiah@example.com</p>
        <p>Phone: +4561244856</p>
      </div>
    </div>
  </div>
</div>
<!--card4-->
<div class="card horizontal-card">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="image4.png" class="card-img rounded-circle" alt="Profile Picture">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Prasad Electrical Works</h5>
        <p class="card-text">Rating: 4.5/5</p>
        <p class="card-text card-text-location">Location:Akkayapalli,Vempalli</p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal4">Contact</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal4" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Electrician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Email: Prasad@gmail.com</p>
      <p>Phone: +4567345876</p>
      </div>
    </div>
  </div>
</div>
<!--card5-->
<div class="card horizontal-card">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="image5.png" class="card-img rounded-circle" alt="Profile Picture">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title">Mk Electrical Rewaindining Works</h5>
        <p class="card-text">Rating: 7.5/5</p>
        <p class="card-text card-text-location">Location:Kagithala Penta,Proddattur</p>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal5">Contact</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal5" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">Contact Electrician</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <p>Email: mahadev@gmail.com</p>
        <p>Phone: +9789794304</p>
      </div>
    </div>
  </div>
</div>







<!-- Content - Card -->



    <!-- Fetch and display electrician profiles -->
    <?php
   $con=mysqli_connect("localhost","root","","data");
    $result = mysqli_query($con, "SELECT * FROM electrician");

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card horizontal-card">';
        // Display other profile information here
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $row['fname'] . ' ' . $row['lname'] . '</h5>';
        echo '<p class="card-text">Rating: ' . $row['rating'] . '/5</p>';
        echo '<p class="card-text">Location: ' . $row['workloc'] . '</p>';
        echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal' . $row['id'] . '">Contact</button>';
        echo '</div></div>';

        // Modal for contact details
        echo '<div class="modal fade" id="contactModal' . $row['id'] . '" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel' . $row['id'] . '" aria-hidden="true">';
        // Include modal content here
        echo '</div>';
    }
    ?>
 

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
  function searchElectricians() {
    var searchLocation = document.getElementById('searchLocationInput').value.toLowerCase();
    var cards = document.querySelectorAll('.horizontal-card');

    cards.forEach(function (card) {
      var locationText = card.querySelector('.card-text-location').textContent.toLowerCase();

      if (locationText.includes(searchLocation) || searchLocation === '') {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  }

  $(document).ready(function () {
    $('#contactModal').on('show.bs.modal', function (event) {
      // Any additional logic can be added here
    });
  });
// Add event listener for form submission
  document.getElementById('searchForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevents the form from submitting in the traditional way
    searchElectricians();
  });
</script>

</body>

</html>

