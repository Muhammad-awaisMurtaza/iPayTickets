@extends('layout.master')
@section('body')

    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header">
                <h2>Find and Track Your Ticket</h2>
                <h5>Do Not Worry About Your Ticket!Find and Track all information <br> in one place and pay it in one second</h5>

              </div>
          </div>
        </div>
        <section class="search-sec float-right">
  <div class="container">
                <form action="searchTicket" method="post" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="">
                                    <input type="text" class="form-control " name="licencePlate" required placeholder="Search By Plate">
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" name="state" required placeholder="Search by Number">
                                  </div>
                                  <input class="btn btn-info" type="submit" value="search">
                            </div></div></div></form></div></section>
        </section>


        <div class="container">
          <h1 class="text-lg-center">What Ticket You Can Find</h1>
        </div>
        <p class="container text-center text-dark">Here you are able to find and track all posible ticket. <br>In our system you can check speed ticket, parking ticket and may more.</p>

<!----------------------------------------Image Slider---------------------------------->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner container">
    <div class="carousel-item active">
     <img class="d-block" style="height: 60vh;width: 100%; border-radius: 5%;" src="img/t1.jpg" alt="First slide">
    <h6 class="text-center">Type of Tickets</h6>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="height: 60vh;width: 100%; border-radius: 5%;" src="img/t2.jpg" alt="Second slide">
      <h6 class="text-center">Type of Tickets</h6>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="height: 60vh;width: 100%; border-radius: 5%;" src="img/t3.jpg" alt="Third slide">
      <h6 class="text-center">Type of Tickets</h6>
    </div>
    <div class="carousel-item">
      <img class="d-block" style="height: 60vh;width: 100%; border-radius: 5%;" src="img/t4.jpg" alt="Forth slide">
      <h6 class="text-center">Type of Tickets</h6>
    </div>
  </div>

<!----------------------------------------Find & Pay & Scan---------------------------------->


  <section class="scan">
    <div class="container">
      <h1 class="text-lg-center text-white">Find & Pay All Ticket Now</h1>
      <p class="text-center text-white">Be in touch with everything that happen with your car! Find all your tickets in one place <br> and pay them all them with one click.</p>
    </div>
    <div class="container">
    <div class="row">
    <div class="form-group col-lg-4 float-center">
      <input type="text" placeholder="First Name" class="form-control" id="usr">
    </div>
    <div class="form-group col-lg-4 float-center">
      <input type="text" placeholder="Last Name"  class="form-control" id="usr">
    </div>
    <div class="form-group col-lg-4 float-center">
      <input type="text" placeholder="Date"  class="form-control" id="usr">
    </div>
    <div class="form-group col-lg-7 float-left">
      <input type="number" placeholder="Ticket Number"  class="form-control" id="num">
    </div>
    <button class="subscribe" type="button" id="Button" aria-haspopup="true" aria-expanded="false">
      <img src="img/bell.png"> Subscribe
      </button>
      <button class="pay-now" type="button" id="Button" aria-haspopup="true" aria-expanded="false">
       Pay Now
        </button>
        <div class="block">
          <div class="row">
            <div class="span4 container">
              <img class="img-left" src="img/QRcode.PNG"/>
              <div class="text-white"><h1>Or Scan Your Ticket</h1></div>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse suscipit libero voluptatem saepe quas voluptas, modi placeat, vitae ad beatae, accusantium officiis amet! Odio, libero harum. Pariatur quaerat facere ut. Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
              Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
              Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>  </div>
</div>
  </section>


<!-------------------------------------Ticket History----------------------------------------------->

<section>
    <div class="container">
      <h1 class="text-lg-center history-heading">History Of Your Tickets</h1>
      <p class="text-center history-h-para">If you have new or old ticket, you are going to find them here<br>Take a fast look of all you ticket and track them easily with iPayTickets.</p>
    </div>
    <div class="container">
      <table class="table table-bordered text-center">
          @isset($user)
          @foreach ($data as $item)

        <thead class="bg-primary text-white">
          <tr>
            <th>Ticket Number:{{$item['ticketNumber']}} | Serial Number: {{$item['serialNumber']}} | From: {{$item['startDate']}} | Cost: {{$item['cost']}}</th>
            <th><button class="subscribe" type="button" id="Button" aria-haspopup="true" aria-expanded="false">
              <img src="img/bell.png"> Subscribe
              </button></th>
              <th>
                <form action="/payNow" method="post">
                    @csrf
                    <input type="hidden" name="ticketNumber" value="{{$item['ticketNumber']}}">
                    <input type="hidden" name="cost" value="{{$item['cost']}}">
                    <input class="t-pay-now" type="submit" value="Pay Now" id="Button" aria-haspopup="true" aria-expanded="false">
                </form>
            </th>
          </tr>
        </thead>

        @endforeach
        @endisset
      </table>
    </div>
  </section>
<!-------------------------------------How TO Pay----------------------------------------------->
<section>
  <div class="container">
    <h1 class="text-lg-center history-heading">How To Pay YourTickets</h1>
    <p class="text-center history-h-para">Do not worry! paying your Tickets as Simple! Find the ticket you want to pay and click on Pay Now button.<br>Choose a Payment method and Pay.</p>
    <img src="img/visa.png">
    <img src="img/mastercard.png">
    <img src="img/P.png">
    <img src="img/paypal.PNG">
    <img src="img/american-express.PNG">
    </div>
    <div class="row">
      <div class="span5">
        <img class="img-right" src="img/Capture.PNG">
        <p class="h-to-pay container col-lg-6">Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
           Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
           Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
   </div>
  </section>

  @stop
