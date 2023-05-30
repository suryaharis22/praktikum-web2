@include('customer.master.header')
@include('customer.master.sidebar')

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

@include('customer.master.footer')
