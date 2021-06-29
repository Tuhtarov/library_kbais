<!-- Подключение плагина Select2 для тегов -->
<script src="{{asset('public/assets/js/scripts.js')}}"></script>
<link rel="stylesheet" href="{{asset('public/assets/css/select2.css')}}">
<!-- Инициализация Select2 -->
<script>
    $(function () {
        $('.select2').select2()

        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>
