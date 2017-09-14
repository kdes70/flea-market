{!! Form::open(['url' => '/add', 'method' => 'post', 'files' => true, 'class' => 'add_form', 'id' => 'ads_add_form']) !!}

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('city_id', 'Укажите город', ['class' => 'required']) !!}
            {!! Form::select('city_id', [1 => 'Томск', 2 => 'Кемерово', 3 => 'Новосибирск'], old('city_id'), ['class' => 'form-control', 'placeholder' => 'Город']) !!}
            @if ($errors->has('city_id'))
                <span class="error">{{ $errors->first('city_id') }}</span>
            @endIf
        </div>

        <div class="form-group">
            {!! Form::label('type_id', 'Укажите тип обьявления', ['class' => 'required']) !!}
            {!! Form::select('type_id', \App\Ad::$ads_type, old('type_id'), ['class' => 'form-control', 'placeholder' => 'спрос или предложение…']) !!}
            @if ($errors->has('type_id'))
                <span class="error">{{ $errors->first('type_id') }}</span>
            @endIf
        </div>
    </div>


    {{-- TODO сделать зависиымые категории--}}
    <div class="col-md-6">

        <div class="form-group">
            {!! Form::label('category_id', 'Рубрика', ['class' => 'required']) !!}
            {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control', 'placeholder' => 'спрос или предложение…']) !!}
            @if ($errors->has('category_id'))
                <span class="error">{{ $errors->first('category_id') }}</span>
            @endIf
        </div>

       {{-- <div class="form-group">
            <label class="required">Рубрика</label>
            <div class="form-control">
                <input type="hidden" name="category_id" id="category_id">
                <i class="dropdown icon"></i>
                <div class="default text">Рубрика</div>
                <div class="menu">
                    @foreach($categories as $item)
                        @if($item->children->count() > 0)
                            <div {{ old('category_id') == $item->id ? 'selected="selected"' : '' }} class="item select-option-label"
                                 data-value="{{$item->id}}">{{ $item->name }}</div>
                            @foreach($item->children as $submenu)
                                <div {{ old('category_id') == $submenu->id ? 'selected="selected"' : '' }} class="item"
                                     data-value="{{$submenu->id}}">- {{ $submenu->name }}</div>
                            @endforeach
                        @else
                            <div {{ old('category_id') == $item->id ? 'selected="selected"' : '' }} class="item"
                                 data-value="{{$item->id}}">{{ $item->name }}</div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>--}}
    </div>


    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('title', 'Введите заголовок объявления', ['class' => 'required']) !!}
            {!! Form::text('title', old('title'),['maxlength' => 50, 'class' => 'form-control']) !!}
            @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endIf
            <span id="title_count right">30</span>
        </div>

        <div class="form-group">
            {!! Form::label('text', 'Введите текст объявления', ['class' => 'required']) !!}
            {!! Form::textarea('text', old('text'), ['id' => 'text_editor', 'class' => 'form-control']) !!}
            @if ($errors->has('text'))
                <span class="error">{{ $errors->first('text') }}</span>
            @endIf
        </div>


        {{--photo--}}
        <h4 class="ui dividing header">Фото</h4>
        <div class="form-group">
            <div class="three wide field">
                <file-input filename="files[]" fileid="files-1" classname="hidde-new-file"></file-input>
            </div>
            <div class="three wide field">
                <file-input filename="files[]" fileid="files-2" classname="hidde-new-file"></file-input>
            </div>
            <div class="three wide field">
                <file-input filename="files[]" fileid="files-3" classname="hidde-new-file"></file-input>
            </div>
            <div class="three wide field">
                <file-input filename="files[]" fileid="files-4" classname="hidde-new-file"></file-input>
            </div>
            <div class="three wide field">
                <file-input filename="files[]" fileid="files-5" classname="hidde-new-file"></file-input>
            </div>
        </div>
        {{--photo--}}

    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('price', 'Укажите цену', ['class' => 'required']) !!}
            {!! Form::text('price', old('price'),['id' => 'price',  'class' => 'form-control']) !!}
            @if ($errors->has('price'))
                <span class="error">{{ $errors->first('price') }}</span>
            @endIf
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('phone', 'Укажите телефон', ['class' => 'required']) !!}
            {!! Form::text('phone', old('phone'),['id' => 'phone',  'class' => 'form-control']) !!}
            @if ($errors->has('phone'))
                <span class="error">{{ $errors->first('phone') }}</span>
            @endIf
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <div class="checkbox">
                <label for="terms">
                <input id="terms" name="terms" type="checkbox">
                    Я согласен с <a href="#terms" target="_blank">Условиями использования</a>
                </label>
                @if ($errors->has('terms'))
                    <span class="error">{{ $errors->first('terms') }}</span>
                @endIf
            </div>
        </div>


        <button class="btn btn-add">Submit</button>
    </div>




</div>









{!! Form::close() !!}
