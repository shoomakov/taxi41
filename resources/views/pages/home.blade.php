<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('pages._head')
  <body class="b-index-page fixed-buttons lang-ru">
    <div class="b-container">

        @include('pages._left-sidebar')
        @include('pages._main-screen')

    </div>

    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
