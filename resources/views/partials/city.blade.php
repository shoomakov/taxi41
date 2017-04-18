<div id="city_description" style="display: none;">
  @markdown
    {{ $city }}
  @endmarkdown
  <button id="button_description" class="btn btn-danger button_description" onclick="hideHtml()" type="button" name="button">Закрыть</button>
</div>

<div id="location-drop-down">
  <ul>
    <li>
      <a id="city_block" class="city-list-button js-modal-open" title="test" href="#" data-id="city-choose">
        {{ config('app.city') }}
      </a>
    </li>
  </ul>
</div>
