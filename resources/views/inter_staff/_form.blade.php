
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>

    <div class="form-group">
        <label for="country" class="form-control-label">Country of Origin</label>
        {{ Form::select('country',$country,null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    <div class="form-group">
        <label for="prodi" class="form-control-label">Bidang Ilmu</label>
        {{ Form::text('bdg_ilmu', null, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>

    <div class="form-group">
        <label for="address" class="form-control-label">Address</label>
        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>
