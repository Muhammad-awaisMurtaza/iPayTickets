@extends('layout.master')
@section('body')

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="header">
            <p>Set Your Reminder Now</p>
            <a href="#">Home</a>
            <div class="vl"></div>
            <a href="#">FAQ</a>
          </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <h3 class="text-lg-center">Get Notification of Old Tickects</h3>
    </div>
    <div class="container">
    <div class="row justify-content-center">
                          <div class="col-12 col-md-10 col-lg-8">
                              <form class="card card-sm">
                                  <div class="card-body row no-gutters align-items-center">
                                      <div class="col-auto">
                                        <img src="img/search.png" alt="">
                                        </div>
   <!--end of col-->
   <div class="col">
     <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Find Your Old Tickets....">
   </div>
   <!--end of col-->
   <a href="#" class="btn btn-info" style="height: 7vh; width: 20%;">
    <i class="fa fa-search" aria-hidden="true"></i>
    <span class="glyphicon glyphicon-filter"></span> Search
  </a>
  <a href="#" class="btn btn-info " style="height: 7vh; width: 20%;">
    <i style="font-size:24px" class="fa">&#xf0b0;</i>
    <span class="glyphicon glyphicon-filter"></span> Filter
  </a>
     <!--end of col-->
   </div>
  </form>
  </div>
    <!--end of col-->
  </div>
  </div>

  <div class="container-fluid">
    <h4>Get Notification for any status changes of your tickets.!</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, incidunt corporis. Magni eos impedit numquam tempore exercitationem deleniti excepturi hic, nesciunt beatae neque deserunt? Corrupti esse possimus debitis ex dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem voluptatibus omnis, inventore autem illo commodi esse, non dolorum praesentium sint? Nobis, repudiandae ab obcaecati nulla a ullam eius iure.</p>
  </div>
  </section>
<!-------------------Table 1-------------------->
  <section>
    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Ticket No</th>
            <th>Ticket Type</th>
            <th>Ticket Date</th>
            <th>Send Email</th>
              <th>Notification</th>
          </tr>
        </thead>
        <tbody>

            @isset($user)
            @foreach ($data as $item)

            <tr>
            <td>{{$item['ticketNumber']}}</td>
            <td>{{$item['violation']}}</td>
            <td>{{$item['startDate']}}</td>
            <td><label class="switch">
            <input id="{{$item['id']}}-Mail" onchange="ticketNotification(this)" type="checkbox" <?php if($item['mail']==true){echo "checked";}?> >
              <span class="slider round"></span>
            </label>
            </td>
            <td><label class="switch">
              <input id="{{$item['id']}}-Notification" onchange="ticketNotification(this)" type="checkbox" <?php if($item['notification']==true){echo "checked";}?> >
              <span class="slider round"></span>
            </label>
            </td>
          </tr>


          @endforeach
          @endisset
        </tbody>
      </table>
<form action="saveTicketNotification" method="post">
    @csrf
    <div id="ticketNotify">

    </div>
      <div class="row">
        <div class="col-5"></div>
        <div class="col-2">
              <input class="btn btn-primary mb-2" type="submit" value="Save">
        </div>
        <div class="col-5"></div>
    </div>
  </form>


    </div>

  </section>

  <!-------------------Informed Banner-------------------->
  <section>
    <div class="informed">
      <h1>Be Informed</h1>
      <p>Get Notification for all new tickets.</p>
      <div class="col-md-11">
        <button type="button" class=" btn btn-outline-primary" style="width:20%;">Learn More</button>
       </div>
    </div>
  </section>

<!-------------------Table 2-------------------->

  <section>
    <div class="container">
      <h3 class="text-lg-center">Get Notofication of New Tickects</h3>
    </div>

    <div class="container-fluid">
      <h4>Get Notification for all NEW Tickets easy and fast.!</h4>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, incidunt corporis. Magni eos impedit numquam tempore exercitationem deleniti excepturi hic, nesciunt beatae neque deserunt? Corrupti esse possimus debitis ex dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere dolorem voluptatibus omnis, inventore autem illo commodi esse, non dolorum praesentium sint? Nobis, repudiandae ab obcaecati nulla a ullam eius iure.</p>
    </div>

    <div class="container">
        <form action="saveNotification" method="post">
            @csrf
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Ticket Type</th>
            <th>Send Email</th>
            <th>Notification</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)

          <tr>
            <td>{{ucfirst($item)}}</td>
            <td><label class="switch">
            <input id="{{$item}}-Mail" type="checkbox" onchange="notification(this)" <?php if($notify[$item]['mail']==true){echo "checked";}?> >
              <span class="slider round"></span>
            </label>
            </td>
            <td><label class="switch">
            <input id="{{$item}}-Notify" type="checkbox" onchange="notification(this)" <?php if($notify[$item]['notify']==true){echo "checked";}?> >
              <span class="slider round"></span>
            </label>
            </td>
          </tr>

          @endforeach
          </tbody>
      </table>
      @isset($notify)
            <div id="notificationDiv">

            </div>
      @endisset

      <div class="row">
          <div class="col-5"></div>
          <div class="col-2">
                <input class="btn btn-primary" type="submit" value="Save">
          </div>
          <div class="col-5"></div>
      </div>
    </form>
    </div>
  </section>

  <script>

      function notification(e)
      {
          var mail = document.createElement('input');
            mail.setAttribute('type','hidden');
            mail.setAttribute('name',e.id);
            if(document.getElementById(e.id).checked==true)
                mail.setAttribute('value',1);
            else
                mail.setAttribute('value',0);
            document.getElementById('notificationDiv').appendChild(mail);
      }

      function ticketNotification(e){
            var mail = document.createElement('input');
            mail.setAttribute('type','hidden');
            mail.setAttribute('name',e.id);
            if(document.getElementById(e.id).checked==true)
                mail.setAttribute('value',1);
            else
                mail.setAttribute('value',0);
            document.getElementById('ticketNotify').appendChild(mail);
      }

  </script>


@stop
