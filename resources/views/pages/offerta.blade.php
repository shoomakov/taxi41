<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('layouts.head')
  <body class="b-index-page fixed-buttons lang-ru">
    <div class="b-container">
      @include('pages._left-sidebar')
      <div class="b-main">
        <div class="b-header">
          @include('partials.phone')
        </div>
        <div class="b-text-content">
          <h1>Публичная оферта</h1>
          <div class="markdown-content animated slideInUp">
            @markdown
              {{ $doc }}
            @endmarkdown
          </div>
        </div>
      </div>
      {{-- @include('layouts.driver-screen') --}}
    </div>
    <script src="/js/offerta.js" charset="utf-8"></script>
  </body>
</html>
