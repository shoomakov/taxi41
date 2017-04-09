<div class="b-main">
  <div class="b-header">
    <div id="location-drop-down">
      <ul>
        <li>
          <a class="city-list-button js-modal-open" href="#" data-id="city-choose">
            {{ config('app.city') }}
          </a>
        </li>
      </ul>
    </div>
    <div class="b-phones-changed">
      <a class="m-phone" href="#">{{ config('app.phone') }}</a>
    </div>
  </div>
  <div id="frame-order" class="b-order-block"></div>

  <div class="m-disclaimer">
    Сервис заказа такси "{{ config('app.name') }}" не оказывает услуг по перевозке легковым такси,
    заказы передаются исполнителям.
    (<a
      class="js-modal-open"
      href="#"
      data-id="offer-modal"
      data-url="#">
      Публичная оферта
    </a>)
    <iframe
      src="{{ config('app.iframe') }}"
      height="100%"
      style="min-height: 1060px; width: 100%;">
    </iframe>
  </div>

  <div class="b-app-download">
    <div class="m-call">Скачай приложение</div>
    <div class="m-name">«{{ config('app.name') }}: заказ такси»</div>
    <ul>
      <li class="m-ios-ru">
        <a href="{{ config('app.app_store') }}" target="_blank"></a>
      </li>
      <li class="m-wp-ru">
        <a href="{{ config('app.microsoft') }}" target="_blank"></a>
      </li>
      <li class="m-android-ru">
        <a href="{{ config('app.google_play') }}" target="_blank"></a>
      </li>
    </ul>
  </div>
  <div class="b-modal" data-id="feedback-form">
    <div class="m-overlay js-modal-close"></div>
    <div class="m-body">
      <button type="button" class="m-close js-modal-close"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="b-footer">
    Есть что сказать?
    <button type="button" class="b-footer-link js-modal-open" data-id="feedback-form">
      напиши в администрацию
    </button>
  </div>
  @include('layouts.social')
</div>
