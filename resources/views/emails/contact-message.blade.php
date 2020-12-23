{{-- Header --}}
   @slot('header')
       @component('mail::header', ['url' => config('app.url')])
           Guess who has a new mail!
       @endcomponent
   @endslot

{{-- Introduction --}}
@component('mail::message')
# You got a new email from your website. **How?!?**  Yes I am **equally as SURPRISED** as you!

{{-- Body --}}
@component('mail::table')

| Sender              | Email               | Subject              |
| -------------       |:-------------:      | --------:            |
|  {{ $data['name'] }}  | {{ $data['email'] }}  | {{ $data['subject'] }} |

@endcomponent

@component('mail::panel', ['url' => ''])
{{ $data['bodyMessage'] }}
@endcomponent


@component('mail::button', ['url' => 'inthemaking.tech'])
Take me to my website
@endcomponent

Thanks,<br>
Your **PAST SELF**

{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot

@endcomponent
