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
    <div class="b-modal" data-id="city-choose">
      <div class="m-body m-city-modal-body">
        <button type="button" class="m-close js-modal-close">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </div>
    <div class="b-phones-changed">
      <a class="m-phone" href="">{{ config('app.phone') }}</a>
      <a class="m-phone" href="">{{ config('app.phone') }}</a>
    </div>
  </div>
  
  <h1 class="h1">Зарабатывай с {{ config('app.name') }}</h1>
  {{-- <div class="b-driver-form-link-container">
    <a class="m-link" href="#" target="_blank">
      <i class="glyphicon glyphicon-new-window"></i>
      Посчитай прямо сейчас, сколько ты заработаешь в своем городе
    </a>
  </div> --}}
  <div class="b-driver-form-button-container">
    <a class="b-driver-form-button btn-yellow" href="/driver/anketa">
      Заполни анкету водителя
    </a>
  </div>

  <ul class="b-features">
    <li class="m-advice"><img src="/images/colective.svg" alt="">
      <span>Общение с людьми <br>и новые знакомства</span>
    </li>
    <li class="m-any-time"><img src="/images/clock.svg" alt="">
      <span>Работа в любое <br> время</span>
    </li>
    <li class="m-24-7"><img src="/images/wallet.svg" alt="">
      <span>Работаешь в такси &mdash; <br>работаешь на себя</span>
    </li>
  </ul>

  <div class="b-footer">
    Смотри также
    <a
      class="b-footer-link btn-white-transparent"
      href="/driver/faq">
        часто задаваемые вопросы
    </a>
    <a
      class="b-footer-link btn-white-transparent"
      href="/driver/materials">
        материалы для водителей
    </a>
  </div>

  @include('layouts.social')
</div>
