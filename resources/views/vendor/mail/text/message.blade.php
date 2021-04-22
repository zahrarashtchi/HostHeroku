@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        {{ auth()->user()->name . 'عزیز'}}
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

     
