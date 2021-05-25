<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPayTickets</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href={{ URL::asset('asset/style.css') }}>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script type="text/javascript" src="engine1/jquery.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  <!---------------------------------Nav Bar & Banner------------------------>
  <section class="h-bgimage">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">iPayTickets</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search a Ticket
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="payTickets">Pay Tickets</a>
                <a class="dropdown-item" href="reminder">Reminder</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq">How it Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            @isset($userName)
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="img/login.png">
                  {{$userName}}
                  </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="logout">Log Out</a>
                </div>
              </div>
            @endisset
        @isset($signin)
        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="img/login.png">
              Account
              </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="login">Sign In</a>
              <a class="dropdown-item" href="signup">Sign Up</a>
            </div>
          </div>

        @endisset

          </ul>

        </div>
      </nav>
<!------------------------------------Body------------------------------------------------------>

      @yield('body')

<!------------------------------------footer------------------------------------------------------>
<section>
  <div class="mt-5 pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12">
        <h2 class="text-white">iPayTickets</h2>
        <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
        </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3 text-white">Important Links</h4>
          <ul class="m-0 p-0">
            <li> <a href="#">How iPayTickets Works</a></li>
            <li> <a href="#">FAQ</a></li>
            <li> <a href="#">Term And Condition</a></li>
            <li> <a href="#">Taxes</a></li>
            <li> <a href="#">My Profile</a></li>
          </ul>
      </div>
      <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3 text-white">Important Links</h4>
            <ul class="m-0 p-0">
                  <p>Address:10 Street Name,str.</p>
                 <p> Zip:45678</p>
                  <p> United State</p>
             <p> Phone: +12345678912</p>
             <p> Email:info@ipaytickets.com</p>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row mt-6">
      <div class="col copyright">
        <p class="text-white-50 text-center">© 2020. All Rights Reserved | Design by IceBerg Developers</p>
      </div>
    </div>
  </div>
  </div>
</section>
      </body>
</html>
