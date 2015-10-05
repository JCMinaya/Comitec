    
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('Title') }}</small>
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('Description') }}</small>
        </div>

        {{-- <div class="form-group">
            {!! Form::label('file', 'Adjunta un archivo') !!}
            {!! Form::file('file', ['class' => 'required']) !!}
            <p class="help-block">Help block text</p>
            <small class="text-danger">{{ $errors->first('file') }}</small>
        </div> --}}

{{--         <!-------------------------- jQUERY TEXT EDITOR -------------------------->

        <input name="input" type="text" value="<b>My contents are from <u><span style=&quot;color:rgb(0, 148, 133);&quot;>INPUT</span></u></b>" class="jqte-test">

        <script>
            $('.jqte-test').jqte();
            
            // settings of status
            var jqteStatus = true;
            $(".status").click(function()
            {
                jqteStatus = jqteStatus ? false : true;
                $('.jqte-test').jqte({"status" : jqteStatus})
            });
        </script>

        <!------------------------- jQUERY TEXT EDITOR --------------------------> --}}

        <div class="form-group">
            {!! Form::label('majors', 'Selecciona las carreras que verán este post:') !!}
            <div class="my-box columns" style="background:#D1D1D1">
                <label for="checkbox_public">
                    <input name="public" type="checkbox" id="checkbox_public" data-toggle="checkbox">
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

        <div class="form-group col-md-12">
            {!! Form::label('date', 'Fecha del evento') !!}
            <div class="form-group">
                {!! Form::label('start', 'Empieza', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('date', null, ['id' => 'datepicker', 'class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('date') }}</small>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('end', 'Termina (opcional)', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-9">
                    {!! Form::text('end_date', null, ['id' => 'datepicker2', 'class' => 'form-control']) !!}
                    <small class="text-danger">{{ $errors->first('end_date') }}</small>
                </div>
            </div>
            <small class="text-danger">{{ $errors->first('date') }}</small>
        </div>
    
        
