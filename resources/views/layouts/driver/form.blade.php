{{-- <div class="container"> --}}
<div class="row">

  <div class="col-md-12">

    <div class="row">
      <div id="before_form">
        <div class="col-md-12">
          <h1 class="animated slideInUp">Зарабатывай с Taxi41</h1>
          <p class="animated slideInUp">
            Процесс выполнения заказов прост и автомотизирован.
            Для сотрудничества необходим автомобиль в исправном состоянии,
            водительский стаж от 3-х лет, знание города и смартфон.
            Заполните анкету или приезжайте в офис, где менеджер поможет скачать
            приложение и проинструктирует регламент работы. График работы определяете сами.
          </p>

          <div id="success-message" class='alert alert-success'>
            Спасибо, в ближайшее время мы с вами свяжемся!
          </div>
        </div>
      </div>

    </div>

    <div id="driver_line"></div>

    {!! Form::open(['route'=>'contactus.store', 'id' => 'contact_form3', 'class' => 'animated slideInRight']) !!}

      <div class="row">

        <div class="col-md-6">
          <div id="name" class="form-group">
            {!! Form::label('Имя:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите Имя']) !!}
            <span id="error-name" class="text-danger">{{ $errors->first('name') }}</span>
          </div>
        </div>

        <div class="col-md-6">
          <div id="email" class="form-group">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Введите Email']) !!}
            <span id="error-email" class="text-danger">{{ $errors->first('email') }}</span>
          </div>
        </div>

      </div>


      <div id="message" class="form-group">
        {!! Form::label('Сообщение:') !!}
        {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Введите сообщение', 'rows'=>'7']) !!}
        <span id="error-message" class="text-danger">{{ $errors->first('message') }}</span>
      </div>

      <div class="form-group">
        <input id="button_submit" type="submit" class="btn btn-success" value="Отправить"/>
      </div>

    {!! Form::close() !!}
  </div>

</div>
{{-- </div> --}}
