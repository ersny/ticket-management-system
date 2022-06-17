<!doctype html>
<html lang="en">

@include('layouts.party._head')

<body>
    @include('layouts.party._navigation')


    <div class="container-fluid">
        <div class="row">
            @include('layouts.party._sidebar')
            @yield('content')
            
        </div>
    </div>

    @include('layouts.party._scripts')
</body>

</html>