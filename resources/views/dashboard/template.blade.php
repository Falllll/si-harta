@include('layouts.header')
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">

            @include('layouts.navbar')
                <div class="flex flex-1">

                    @include('layouts.sidebar')

                    @yield('content')
                </div>
            @include('layouts.footer')
        </div>
    </div>
</body>

</html>
