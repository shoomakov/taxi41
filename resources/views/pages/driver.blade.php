<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('pages._head')
  <body class="b-index-page fixed-buttons lang-ru">
    <div class="b-container">
      @include('pages._left-sidebar')
      @include('layouts.driver.main-screen')
    </div>
    <script src="/js/plugins.js" charset="utf-8"></script>
    <script src="/js/app.js"></script>
  </body>
</html>
