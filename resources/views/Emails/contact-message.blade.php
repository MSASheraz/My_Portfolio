@component('mail::message')

# New Contact Message

You have received a new contact message. Details are below:

- **Name:** {{ $message->name }}
- **Email:** {{ $message->email }}
- **Phone:** {{ $message->phone ?? 'N/A' }}
- **Subject:** {{ $message->subject }}

**Message**

{{ $message->message }}

Regards,

{{ config('app.name') }}

@endcomponent
<h2>New Contact Message</h2>

<p><strong>Name:</strong> {{ $message->name }}</p>

<p><strong>Email:</strong> {{ $message->email }}</p>

<p><strong>Phone:</strong> {{ $message->phone }}</p>

<p><strong>Subject:</strong> {{ $message->subject }}</p>

<p><strong>Message:</strong></p>

<p>{{ $message->message }}</p>