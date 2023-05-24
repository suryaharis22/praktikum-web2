@include('Admin.layout.top')
@include('Admin.layout.menu')

<main>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
            @yield('table')
        </div>
    </main>
</div>
</div>
</main>

@include('Admin.layout.bottom')
