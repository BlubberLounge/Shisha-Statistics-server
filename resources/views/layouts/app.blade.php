<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body>
    <div id="app" style="width:100%;">

        @include('includes.nav')


        <main class="container p-4 pe-0">
            {{ Breadcrumbs::render() }}
            
            @yield('content')
        </main>

    </div>
</body>
</html>