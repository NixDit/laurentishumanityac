@include('templatenix.head') {{-- HTML HEAD TAG --}}

@include('templatenix.header') {{-- HTML HEADER INCLUDE NAVBAR --}}

@yield('content') {{-- DYNAMIC CONTENT HERE - HERE GOES DIV WITH ROLE AND CLASS MAIN --}}

@include('templatenix.footer') {{-- HTML FOOTER TAG --}}

@include('templatenix.footer-end') {{-- HTML FOOTER TAG --}}
