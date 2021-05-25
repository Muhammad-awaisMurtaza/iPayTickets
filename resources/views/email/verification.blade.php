@component('mail::message')
# Verification

 <b class="text-info"> Click this link to Verify Your Account: </b>

<br>
<a href="http://127.0.0.1:8000/verify/{{$code}}/{{$email}}">
<button class="btn btn-primary"> Click Here </button>
</a>
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
