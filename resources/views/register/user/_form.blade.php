

    <div class="form-group">
        {!! Form::label('username') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>