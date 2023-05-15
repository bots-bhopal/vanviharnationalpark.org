@component('mail::message')
# ContactUs Feedback

<h3 class="mb-0">Hello Administrator,</h3>
<p style="font-size: 12px; font-weight: 500;">You have got an feedback email from <span style="font-size: 12px; font-weight: 500;">{{ $msg['name'] }}.</span></p>

Name: {{ $msg['name'] }} <br>
Email: {{ $msg['email'] }} <br>
Phone: {{ $msg['mobile'] }} <br>
Message: {{ $msg['message'] }} <br>

@component('mail::button', ['url' => 'https://vanviharnationalpark.org/', 'color' => 'success'])
Go To Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
