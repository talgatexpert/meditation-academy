@if (!empty(session('popup')))
    <script>
        $(document).ready(function () {
            $('.popup-bg, #popup-message').addClass('open');
            fixHeaderPopup();
        });
    </script>
@endif
