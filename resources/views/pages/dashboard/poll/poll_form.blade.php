
	    <div class="form-group">
	        {!! Form::label('question', 'Ingresa la pregunta.') !!}
	        {!! Form::text('question', null, ['class' => 'form-control', 'required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('question') }}</small>
	    </div>
		
		<div class="form-group">
	    	@include('includes.option')
		</div>

	    <div class="form-group">
            {!! Form::label('majors', 'Selecciona las carreras que verán este post:') !!}
            <div class="my-box columns" style="background:#D1D1D1">
                <label for="checkbox_public">
                    <input name="public" type="checkbox" id="checkbox_public" data-toggle="checkbox" checked="checked">
                    Público <em>[ Visible para cualquiera que entre a la plataforma ]</em>
                </label>
                <hr style="margin:10px 0 10px">
                <div id="major_checkboxes" class="center">
                    @foreach($majors as $major)
                        <label class="checkbox" for="checkbox{{$major->id}}">
                            <input name="majors[]" type="checkbox" value="{{$major->id}}" id="checkbox{{$major->id}}" data-toggle="checkbox">
                            {{$major->name}}
                        </label>
                    @endforeach
                </div>
                <a class="btn btn-inverse bottom-right" id="select_all">Seleccionar todas <span class="fui-check"></span></a>
            </div>
            <small class="text-danger">{{ $errors->first('Carreras') }}</small>
        </div>

