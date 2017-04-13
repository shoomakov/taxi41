<div class="b-main">
  <div class="b-header">
    @include('partials.city')
    @include('partials.phone')
  </div>
  <div id="frame-order" class="b-order-block"></div>

  <!-- template for the modal component -->
  {{-- <script type="text/x-template" id="modal-template">
    <transition name="modal">
      <div class="modal-mask">
        <div class="modal-wrapper">
          <div class="modal-container">

            <div class="modal-header">
              <slot name="header">
                default header
              </slot>
            </div>

            <div class="modal-body">
              <slot name="body">
                default body
              </slot>
            </div>

            <div class="modal-footer">
              <slot name="footer">
                default footer
                <button class="modal-default-button" @click="$emit('close')">
                  OK
                </button>
              </slot>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </script>
  <div id="app">
    <button id="show-modal" @click="showModal = true">Show Modal</button>
    <!-- use the modal component, pass in the prop -->
    <modal v-if="showModal" @close="showModal = false">
      <!--
        you can use custom content here to overwrite
        default content
      -->
      <h3 slot="header">custom header</h3>
    </modal>
  </div> --}}

  <div class="m-disclaimer">
    Сервис заказа такси "{{ config('app.name') }}" не оказывает услуг по перевозке легковым такси,
    заказы передаются исполнителям.

    <div id="taxsee-form" style="margin: 0 auto"></div>

  </div>

  <div id="home-app-download" class="b-app-download animated slideInRight">
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
  @include('pages._social')
</div>
