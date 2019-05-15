<script src="{{url('js/jquery-1.8.2.js')}}"></script>

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    </div>

    <div class="form-group">
        <label for="gender" class="form-control-label">Gender</label>
        {{ Form::select('gender',['1'=>'Men','2'=>'Women'],null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    <div class="form-group">
        <label for="birth" class="form-control-label">Date of birth</label>
        {{ Form::date('birth',null, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>

    <div class="form-group">
        <label for="address" class="form-control-label">Address</label>
        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => ''])}}
    </div>
    
    <div class="form-group">
        <label for="marital" class="form-control-label">Marital Status</label>
        {{ Form::select('marital',['Single'=>'Single','Married'=>'Married'], null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    <div class="form-group">
        <label for="">Telephone Number</label>
        {{ Form::text('telp', null, ['class' => 'form-control', "onkeypress" => "if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"]) }} 
    </div>

    <div class="form-group">
        <label for="country" class="form-control-label">Country of Origin</label>
        {{ Form::select('country',$country,null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>
    
    <div class="form-group">
        <label for="pasport" class="form-control-label">Passport Number</label>
        {{ Form::text('passport',null, ['class' => 'form-control', 'placeholder' =>''])}}
    </div>

    {{-- program dari International Office --}}
    <div class="form-group">
        <label for="education" class="form-control-label">Education Programs</label>
        {{ Form::select('program',[1=>'Reguler',2=>'Dharma Siswa', 3=>'Credit Earning',4=>'BIPA',5=>'Student Exchange'], null, ['class' => 'form-control', 'placeholder' => 'Choose'])}}
    </div>

    {{-- fakultas --}}
    <div class="form-group">
            <label for="test" class="form-control-label">Faculty of Destination</label>
            {{Form::select('fakultas',$fakultas,null,['class' => 'form-control', 'placeholder' => 'Choose','id'=>'fakultas'])}}
        </div>
        
        {{-- jurusan --}}
        <div class="form-group">
            <label for="marital" class="form-control-label">Study Field</label> 
            <select name="jurusan" id="jurusan" class='form-control' disabled required>
                <option value="math-dj">Select Study Field
                @foreach ($jurusan as $jurusan)
                    <option value="{{$jurusan->id}}" data-tag="{{$jurusan->fakultas_id}}">{{$jurusan->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <label for="cv" class="form-control-label">CV</label>
        <input type="file" name="file_cv" class="form-control"/>
        </div>
        <div class="form-group">
        <label for="cv" class="form-control-label">Passport</label>
        <input type="file" name="file_passport" class="form-control"/>
        </div>
        <div class="form-group">
        <label for="cv" class="form-control-label">Statement Letter</label>
        <input type="file" name="file_surat_pernyataan" class="form-control"/>
        </div>
        <div class="form-group">
        <label for="cv" class="form-control-label">Photo</label>
        <input type="file" name="file_photo" class="form-control"/>
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