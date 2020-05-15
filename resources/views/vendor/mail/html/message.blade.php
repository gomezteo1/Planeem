@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        <center>
        <img src="https://drive.google.com/file/d/1movCwXajkQsWIL6Dq2PSqXGqdp9M9HLD/view" alt="">
        </center>
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos los derechos reservados.')
        @endcomponent
    @endslot
@endcomponent
