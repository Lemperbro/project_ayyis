<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/auth.js') }}"></script>
<script src="{{ asset('js/PrintToExcel.js') }}"></script>
<script src="{{ asset('src/dark-mode.js') }}"></script>
<script src="{{ asset('src/charts.js') }}"></script>
<script src="{{ asset('src/constants.js') }}"></script>
<script src="{{ asset('src/index.js') }}"></script>
<script src="{{ asset('src/sidebar.js') }}"></script>
<script src="{{ asset('js/ViewEditKta.js') }}"></script>
@include('sweetalert::alert')
@stack('searchRantingAdmin')
@stack('searchRantingRegister')
@stack('editAnggota')




</body>
</html>