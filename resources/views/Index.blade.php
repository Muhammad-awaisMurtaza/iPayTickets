@extends('layout.master')
@section('body')

      <div class="I-banner">
      <img class="i-img float-right" alt="banner_html" src="img/I1.png">
      <div class="companys_name ">
      <h1 class="Index-banner-heading">Find And Track Your Tickets</h1>
      <p class="Index-banner-Para">Do not worry about your tickets! Find and track all inforamtion <br> in one place and pay it in a second.</p>
     </div>
    </div>
    <img class="i-img-wave" src="img/wave3.jpg">
  </section>

  <!------------------------------------Search Bar-------------------------------------------------->
  <form method="POST" action="/searchTicket">
    @csrf
  <div class="container I-search col-lg-12">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
        <div class="card-body row no-gutters align-items-center">
     <div class="col">
       <input class="form-control form-control-lg form-control-borderless" type="text" required name="licencePlate" placeholder="Licence Plate">
     </div>
     <div class="col">
      <input class="form-control form-control-lg form-control-borderless" type="text" required name="state" placeholder="State Registered">
    </div>

     <!--end of col-->
     <input type="submit" value="Search" class="btn btn-info" style="height: 7vh; width: 20%;">
       <!--end of col-->
     </div>

    </div>
      <!--end of col-->
    </div>
    </div>
</form>
     <!------------------------------------Our Ticket Service-------------------------------------------------->
     <section>
       <div class="container">
         <h1 class="text-center text-dark">Our Ticket Service</h1>
         <p class="text-center text-dark">Here you are able to find all posible tickets. <br> In our system you can check speed tickets, parking tickets and many more.</p>
       </div>

       <div class="container">
         <div class="row">
        <div class="col-lg-4">
          <div class="card-header"><img src="img/fast-payment.PNG" alt=""></div>
          <div class="card-body">Fast Payment</div>
          <div class="card-footer">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, provident.</div>
        </div>

        <div class="col-lg-4">
          <div class="card-header"><img src="img/notify.PNG" alt=""></div>
          <div class="card-body">Instant Notification</div>
          <div class="card-footer">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur adipisicing elit. Eum, provident.</div>
        </div>

        <div class="col-lg-4">
          <div class="card-header"><img src="img/tracer.PNG" alt=""></div>
          <div class="card-body">Ticket Tracer</div>
          <div class="card-footer">Lorem ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet. elit. Eum, provident.</div>
        </div>
      </div>
      </div>
     </section><br><br>

     <!------------------------------------Find and Pay All Tickets Now-------------------------------------------------->


  <section class="I-scan">
    <img class="i-img-wave2" src="img/wave2.jpg">
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
            </div>
</div></div></div>
  </section>
  <img class="i-img-wave3" src="img/wave3.jpg">

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
          <th>Ticket Number:{{$item['ticketNumber']}} | Serial Number: {{$item['serialNumber']}}| From: {{$item['startDate']}} | Cost: {{$item['cost']}}</th>
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
<br><br>
<!---------------------------------How to pay you Tickets----------------------------------------------->
<section class="I-scan">
  <img class="i-img-wave2" src="img/wave4.jpg">
  <div class="container">
    <h1 class="text-lg-center history-heading text-white">How To Pay YourTickets</h1>
    <p class="text-center history-h-para text-white">Do not worry! paying your Tickets as Simple! Find the ticket you want to pay and click on Pay Now button.<br>Choose a Payment method and Pay.</p>
    <img src="img/visa.png">
    <img src="img/mastercard.png">
    <img src="img/P.png">
    <img src="img/paypal.PNG">
    <img src="img/american-express.PNG">
    </div>
    <div class="row">
      <div class="span5">
        <img class="img-right" src="img/c1.png">
        <p class="h-to-pay container col-lg-6 text-white">Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
           Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
           Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
      </div>
   </div>
@stop
