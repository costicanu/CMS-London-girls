@extends('layouts.backend')
@section('content')
    <form method="post" action="{{action('AdminGirlsController@store')}}" accept-charset="UTF-8">
        {!! csrf_field() !!}

        @if(count($errors)>0)
            <div class="alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group col-md-12">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>
        </div>
        <div class="form-group col-md-12">
            <label for="own_words">Email</label>
            <textarea name="own_words" class="form-control">{{ old('own_words') }}</textarea>
        </div>

        <div class="form-group">
            <label for="active">Activate post on website?</label>
            <input type="checkbox" name="is_active" value="1" {{ old('is_active')?"checked":"" }} />
        </div>


        <div class="form-group top10">
            <div class="col-md-6">
                <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
            </div>
            <div class="col-md-6">
                <a class="btn btn-default" href="{{action('AdminGirlsController@index')}}">Cancel</a>
            </div>
        </div>


    </form>

    <script src="{{ URL::to('js/tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({
            selector: "textarea",
            theme: "modern",
            width: 680,
            height: 300,
            subfolder:"",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor filemanager"
            ],
            image_advtab: true,
            toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"
        });
    </script>
@stop
