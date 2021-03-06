<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/style.css">

    <title>Help</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
      <div class="collapse column" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Driver Profile</h5>
          <p><a class="text-white my-2 my-sm-0" href="driver-profile.php">Profile</a></p>
          <!-- Trigger the modal with a button -->
          <p><a class="text-white my-2 my-sm-0 deleteModal" data-toggle="modal" data-target="#deleteModal">Delete account</a></p>
                
          <!-- Modal -->
          <div id="deleteModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-body">
                  <form action="includes/driverdeleteaccount.inc.php" method="post">
                    <p class="text-center h4">Do you want to delete your account?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="col btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="delete-account" class="col btn btn-primary">Delete</button>
                </div>
                  </form> <!-- End of form-->
              </div>
            </div>
          </div>
          <p><a class="text-white my-2 my-sm-0" href="help.php">Help</a></p>
          <p><a class="text-white my-2 my-sm-0" href="includes/logout.inc.php">Logout</a></p>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon my-2 my-sm-0"></span>
      </button>
      <a class="navbar-brand h3 text-white"><i class="fas fa-car ml-lg-2"></i> GottaGo</a>
    </nav>
    
    <div class="container mr-auto mt-lg-0">
      <h1 class="text-dark display-5 font-weight-bold">What is GottaGo:</h1>
      <div class="jumbotron about">
        <div class="media">
          <div class="media-body">
            <p><b>GottaGo</b> is a ridesharing platform with a twist.</p> 
            <p>With us, not only can you set up your trip ahead of time, providing a stress-free trip, but you can also see driver’s trips and where they plan to go.</p>
            <p><b>GottaGo</b> is not only revolutionizing the ridesharing industry for its customers but for its drivers in a unique way. <br> For example, when some is planning on driving to work they would post it on our website and someone that would work at the same building or close by might want to be added to that trip, therefor the driver gets to work and also make money while doing it, which he can use to pay for his parking or tolls, which he would have paid ether way.</p>
          </div>
        </div>
        <p class="mt-2 font-weight-bold">GottaGo Rewards:</p>
        <p>Call us at: 1-800-got-tago for our Loyalty Program.</p>
        <p>Have trouble getting a ride, speak to a representative at: 1-800-888-1234</p>
        <p>Tell us about your recent experience at: 1-800-808-1122</p>
        <p class="mt-3 mb-0 text-center">
          <a href="contact.html" class="btn btn-dark mr-5">Contact Us</a>
          <a href="direction.html" class="btn btn-dark">Direction</a>
        </p>
      </div>
    </div>
    
    <div>
      <p class="bg-dark py-4 text-white text-center m-0">Copyright 2020</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>