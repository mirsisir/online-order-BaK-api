@component('mail::message')
# Introduction

Your Service Request has been placed. Wait for the confirmation.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
