<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>

    <div class="form-group">
        <label for="nim" class="form-control-label">NIM</label>
        {!! Form::text('nim',null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>

    <div class="form-group">
        <label for="gender" class="form-control-label">Gender</label>
        {{ Form::select('gender',['1'=>'Men','2'=>'Women'],null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    <div class="form-group">
        <label for="birth" class="form-control-label">Date of birth</label>
        {{ Form::date('birth',null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        <label for="address" class="form-control-label">Address</label>
        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'address'])}}
    </div>

    <div class="form-group">
        <label for="">Telephone Number</label>
        {{ Form::text('telp', null, ['class' => 'form-control', "onkeypress" => "if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"]) }} 
      </div>

    <div class="form-group">
        <label for="marital" class="form-control-label">Marital Status</label>
        {{ Form::select('marital',['Single'=>'Single','Married'=>'Married'], null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    <div class="form-group">
            <label for="pasport" class="form-control-label">Passport Number</label>
            {{ Form::text('passport',null, ['class' => 'form-control', 'placeholder' => 'Passport'])}}
        </div>

    <div class="form-group">
            <label for="test" class="form-control-label">Faculty</label>
            <select name="fakultas" id="fakultas" class='form-control'>
                    @foreach ($fakultas as $fakultas)
                        <option value="{{$fakultas->id}}">{{$fakultas->nama}}</option>
                    @endforeach
                </select>
        </div>
        
        {{-- jurusan --}}
        <div class="form-group">
            <label for="marital" class="form-control-label">Departement</label>
            <select name="jurusan" id="jurusan" class='form-control' disabled required>
                @foreach ($jurusan as $jurusan)
                    <option value="{{$jurusan->id}}" data-tag="{{$jurusan->fakultas_id}}">{{$jurusan->nama}}</option>
                @endforeach
            </select>
        </div>        

    <div class="form-group">
        <label for="univ" class="form-control-label">University of Destination</label>
        {{ Form::text('univ', null, ['class' => 'form-control', 'placeholder' => 'University', 'required'])}}
    </div>

    <div class="form-group">
            <label for="country" class="form-control-label">Country of Destination</label>
            {{ Form::select('country', $country, null, ['class' => 'form-control', 'placeholder' => 'Choose', 'required'])}}
    </div>

    <div class="form-group">
        <label for="prodi" class="form-control-label">Program Study</label>
        {{ Form::text('prodi',null, ['class' => 'form-control', 'placeholder' => 'Prodi'])}}
    </div>

    {{-- program dari International Office --}}
    <div class="form-group">
            <label for="education" class="form-control-label">Education Programs</label>
            {{ Form::select('program',[1=>'Credit Earning',2=>'Student Mobility'], null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
        </div>

    <div class="form-group">
        <label for="tgl_mulai" class="form-control-label">Start of the Program</label>
        {{ Form::date('tgl_mulai', null, ['class' => 'form-control', 'required']) }}
    </div>

    <div class="form-group">
        <label for="tgl_akhir" class="form-control-label">End of the Program</label>
        {{ Form::date('tgl_akhir', null, ['class' => 'form-control', 'required']) }}
    </div>

    <script>
	$('#fakultas').on('click', function() {
        $('#jurusan').prop('disabled', false);
		var selected = $(this).val();
		$("#jurusan option").each(function(item){
			console.log(selected) ;  
			var element =  $(this) ; 
			console.log(element.data("tag")) ; 
			if (element.data("tag") != selected){
				element.hide() ; 
			}else{
				element.show();
			}
		}) ; 
		
		$("#jurusan").val($("#jurusan option:visible:first").val());
});
    </script>