@component('mail::message')
# Verification

 <b class="text-info"> A new Ticket is Found of {{$cost}} in {{$date}} due to {{$voliation}} </b>

<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
