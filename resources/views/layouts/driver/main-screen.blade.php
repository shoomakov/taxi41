<div class="b-main">
  <div class="b-header">
    @include('partials.city')
    @include('partials.phone')
  </div>
  <div id="frame-order" class="b-order-block"></div>

  <div class="m-disclaimer">

    @include('layouts.driver.form')

  </div>

  {{-- <div class="b-app-download">



  </div> --}}
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
