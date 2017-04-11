<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('layouts.head')
  <body class="b-index-page fixed-buttons lang-ru">
    <div class="b-container">
      @include('pages._left-sidebar')
      <div class="b-main">
        <div class="b-header">
          <a class="m-phone">{{ config('app.phone') }}</a>
        </div>
        <div class="b-text-content">
          <h1>О Компании</h1>
          <div class="markdown-content">
            nothing
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
