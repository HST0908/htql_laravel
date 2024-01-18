@include('layouts.header')

    <!-- Nội dung của trang -->
    <main>
        @yield('main_content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <script  type ="module"  src ="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" ></script> 
    <script  nomodule  src ="https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" ></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>