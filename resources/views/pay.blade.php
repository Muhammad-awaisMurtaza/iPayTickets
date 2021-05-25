@extends('layout.master')
@section('body')

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header">
                  <p>Yes, You have a Ticket</p>
                  <a href="#">Home</a>
                  <div class="vl"></div>
                  <a href="#">Pay Your Ticket</a>
                </div>
            </div>
          </div>
        </section>

        <div class="container text-center">
            <h4>We Found Your Ticket.!</h4>
            </div>
            <p class="container-fluid">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, incidunt corporis. Magni eos impedit numquam tempore exercitationem deleniti excepturi hic, nesciunt beatae neque deserunt? Corrupti esse possimus debitis ex dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem voluptatibus omnis, inventore autem illo commodi esse, non dolorum praesentium sint? Nobis, repudiandae ab obcaecati nulla a ullam eius iure.</p>
          </section>
<!-----------------------------------------------Step Bar------------------------------>
<img class="progress-bar" src="img/progressbar.PNG" alt="">

<!-----------------------------------------------Table 1------------------------------>
<div class="container">
    <table class="table table-bordered text-center">
      <thead class="bg-dark text-white">
        <tr>
          <th>Ticket No</th>
          <th>Ticket Date</th>
          <th>Ticket Amount</th>
          <th>DeadLine</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

        @isset($user)
          @foreach ($data as $item)

        <tr class="bg-light">
          <td>{{$item['ticketNumber']}}</td>
          <td>{{$item['startDate']}}</td>
          <td>{{$item['cost']}}$</td>
          <td>{{$item['startDate']}}</td>
         <td> <form action="/action_page.php">
            <div class="form-check">
              <label class="form-check-label" for="check1">
                  <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked >Pay It
                </label>
            </td>
            </tr>

            @endforeach
            @endisset
      </tbody>
    </table>
  </div>
@isset($user)
  <div class="container">
    <table class="table table-bordered text-center col-lg-12">
      <thead class="bg-dark text-white">
        <tr>
          <th>You have selected 2 tickets to pay with total amount of: $300</th>
            <th class="bg-light"><button class=" btn btn-danger" type="button" id="button" data-toggle="button" aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                Pay the Tickets Now!
              </button></th>
        </tr>
      </thead>
      </table>
  </div>
@endisset
      <div class="container">
        <h4 class=" text-center">Payment Details.!</h4>
        </div>
        <p class="container float-left  col-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio culpa laudantium ea, libero iste autem magnam, hic qui dignissimos et officiis corrupti molestiae, consequatur quo aliquam voluptas corporis sunt maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem voluptatibus omnis, inventore autem illo commodi esse, non dolorum praesentium sint? Nobis, repudiandae ab obcaecati nulla a ullam eius iure.</p>
        <div class="container-fluid">
       <img class="col-lg-2" src="img/visa.png">
       <img class="col-lg-2" src="img/mastercard.png">
       <img class="col-lg-2" src="img/P.png">
        </div>
<br>
<!--------------------------------------Payment Form-------------------------------------------------->

<div class="container">
  <div class="card-body1">
    <form action="/action_page.php">
      <div class="row">
        <div class="col-lg-6 f-n">
            <label for="first-name">Your First Name*</label>
          <input type="text" class="form-control"  placeholder="Your First Name" name="f-name">
        </div>
        <div class="col-lg-6 l-n">
            <label for="last-name">Your Last Name*</label>
          <input type="text" class="form-control" placeholder="Your Last Name" name="L-name">
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-3 t-a">
            <label for="total-amount" class="h-25">Total Amount*</label>
          <input type="number" class="form-control" placeholder="Amount" name="T-amount">
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-3 c-n">
            <label for="Card-no" class="h-25">Card No*</label>
          <input type="number" class="form-control" placeholder="Card Number" name="card-num">
        </div>
        <div class="col-lg-3 e-d">
            <label for="expiry-date" class="h-25">Expiry Date*</label>
          <input type="number" class="form-control" placeholder="Expiry-date" name="Ex-date">
        </div>
        <div class="col-lg-3 c-v-c">
            <label for="cvc" class="h-25">CVC*</label>
          <input type="number" class="form-control" placeholder="CVC" name="cvc">
        </div>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary mt-3 col-lg-2">Pay Now</button>
    </div>
    </form>
</div>
  </div>

  <!----------------------------------------Support---------------------------------------------->

  <div class="container text-center">
    <h4>Do You Need Some Help.!</h4>
    </div>
    <h4 class="container font-italic text-left ">iPayTickets offers you <b class="text-danger"> 24/7 Support</b> about all question and issues.
        Do Not Hesitate to contact us when you need more information.</h4>
       <div class="container text-right">
        <h3>    <img src="img/phone.png"> mob. 0722 123 456789</h3>
</div>
</section>

@stop
