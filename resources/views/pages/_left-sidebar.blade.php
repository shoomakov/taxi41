<div class="b-top-plate">
  <div id="mobile-top-menu">
    <button type="button" class="m-menu-opener js-menu-toggle">
      <i class="fa fa-bars"></i>
    </button>
    <div id="link-to-work"><a href="/driver">Работа водителем</a></div>
    <div class="m-logo">
      <a href="/"></a>
    </div>
  </div>
</div>
<div class="b-sidebar">
  <div class="m-content">
    <a href="/">
      <div class="b-logo"></div>
    </a>
    <ul class="b-main-menu">

      <li class="{{ $morder }}">
        {{-- <router-link to="/"><i class="maxim-icon tm-order"></i>Заказ такси</router-link> --}}
        <a href="/">
          <i class="maxim-icon tm-order"></i>
          Заказ такси
        </a>
      </li>

      <li class="{{ $mdriver }}">
        <a href="/driver">
          <i class="maxim-icon tm-driver"></i>
          Работа водителем
        </a>
      </li>
      {{-- <li class="m-vacancy"><a href="http://taximaxim.ru/vacancy/"><i class="maxim-icon tm-vacancy"></i> Вакансии</a></li> --}}
      <!-- <li class="m-franchise"><a href="http://taximaxim.ru/franchise/"><i class="maxim-icon tm-franchise"></i> Франшиза</a></li> -->
    </ul>
    <ul class="b-sub-menu">
      {{-- <li><a href="http://taximaxim.ru/blog/">Блог</a></li> --}}
      <li class="{{ $about }}"><a href="/about">О компании</a></li>
      <li class="{{ $contacts }}"><a href="/contacts">Контакты</a></li>
      <li class="{{ $offerta }}"><a href="/offerta">Публичная оферта</a></li>
    </ul>
    <ul class="b-cabinet-enter-links">
      {{-- <li><a href="http://client.taximaxim.com/ru" target="_blank">Кабинет клиента <i class="maxim-icon tm-arrow"></i></a></li> --}}
      <li>
        <a href="https://driver.taxsee.com/?l=ru" target="_blank">
          Кабинет водителя
          <i class="maxim-icon tm-arrow"></i>
        </a>
      </li>
    </ul>
    <div class="b-legal-info">
      <div class="m-copyright">
        © 2014-{{ config('app.current_year') }}. Сервис заказа такси «{{ config('app.name') }}».
      </div>
    </div>
  </div>
  <div class="m-overlay js-menu-toggle"></div>
</div>
