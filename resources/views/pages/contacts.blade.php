<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @include('pages._head')

  <body class="b-text-page lang-ru">
    <div class="b-container">
      @include('pages._left-sidebar')
      <div class="b-main">
        <div class="b-header">
          @include('partials.city')
          @include('partials.phone')
        </div>
        <div class="b-text-content">
          <div class="b-contacts">
            <h2><span>Заказ такси</span></h2>
              <div class="m-row">
                <div class="m-col">
                  <p><a>{{ config('app.phone') }}</a></p>
                </div>
                <div class="m-col"></div>
              </div>
              <h2><span>Офис</span></h2>
              <div class="m-row">
                <div class="m-col">
                  <h3>Адрес офиса:</h3>
                  <p>{{ config('custom.location') }}</p>
                </div>
                <div class="m-col">
                  <h3>Телефон:</h3>
                  <p><a>{{ config('custom.secondary_phone') }} (для связи с Администрацией)</a></p>
                  <h3>Электронная почта:</h3>
                  <p><a href="mailto:{{ config('custom.mailto') }}">{{ config('custom.mailto') }}</a></p>
                </div>
              </div>
              <div class="m-row">
                <div class="m-col">
                  <h3>Режим работы офиса:</h3>
                  <p>Пн-Пт - с 9:00 до 19:00</p>
                  <p>Сб-Вс - с 9:00 до 17:00</p>
                </div>
                  {{-- <div class="m-col">
                      <h3>Контактное лицо:</h3>
                      <p>Петриди Дмитрий Иванович</p>
                  </div> --}}
              </div>

              <div class="city_map">
                <div>
                  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0e9a830548d1056b392af2a989bbf56834279bf00d2ba9d153d418396962eadd&amp;width=650&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
              </div>
              <div class="b-modal" data-id="feedback-form">
                <div class="m-overlay js-modal-close"></div>
                <div class="m-body">
                  <button type="button" class="m-close js-modal-close"><i class="fa fa-times"></i></button>
                  <div class="m-body-wrapper">
                    <iframe id="frame-feedback" name="frame-claim" class="b-feedback-block" src="http://client.taxsee.com/claim/ru/ru/6" frameborder="0" style="min-height: 660px;width: 100%;display: block;"></iframe>
                  </div>
                </div>
              </div>
              {{-- <h2><span>Служба качества</span></h2>
              <div class="m-row">
                <div class="m-col">
                    <div class='text'>Есть что сказать?</div>
                </div>
                <div class="m-col">
                  <button type="button" class="js-modal-open btn-yellow" data-id="feedback-form">
                  Напиши в администрацию </button>
                </div>
              </div> --}}
              </div>
            </div>
        @include('layouts.social')
      </div>
    </div>
</body>
</html>
