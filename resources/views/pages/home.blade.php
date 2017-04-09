<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('pages._head')
  <body class="b-index-page fixed-buttons lang-ru">
    <div class="b-container">
      @include('pages._left-sidebar')
      @include('pages._main-screen')
    </div>
    <div class="b-modal" data-id="offer-modal">
      <div class="m-body"></div>
    </div>
    <div class="b-modal" data-id="tariff-modal">
      <div class="m-body"></div>
    </div>
    <div class="b-modal" data-id="reglament">
      <div class="m-body"></div>
    </div>
    <div class="b-modal" data-id="video-lessons">
      <div class="m-body"></div>
    </div>
  </body>
</html>
