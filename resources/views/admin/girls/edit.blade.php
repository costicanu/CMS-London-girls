@extends('layouts.backend')
@section('content')

    <meta name="_token" content="{!! csrf_token() !!}"/>

    <form method="post" action="{{action('AdminGirlsController@update',$girl->id)}}" enctype="multipart/form-data"
          accept-charset="UTF-8">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT"/>
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

        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ old('name',$girl->name) }}" class="form-control"/>
            </div>
            <div class="form-group col-md-4">
                <label for="url">URL</label>
                <input type="text" name="url" value="{{ old('url',$girl->url) }}" class="form-control"/>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label for="images">Images</label>
                <input type="file" name="images[]" accept="image/*" multiple>
            </div>

            @if($girl->images)

                <div class="other-images">
                    <meta name="csrf-token" content="{{ csrf_token() }}"/>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Images</th>
                            <th>Featured</th>
                            <th>Order</th>
                            <th>Delete?</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($girl->images as $image)
                            <tr>
                                <td>
                                    <?php #var_dump($image->url)?>
                                    <a href="{{URL::to('/media/original/'.$image->name)}}" data-lightbox="gallery"><img
                                                src="/media/thumbnails/100x100/{{$image->name}}" class="thumbnail"/></a>

                                </td>
                                <td>
                                    <input type="checkbox" name="main_image" value="{{$image->id}}"/>
                                </td>
                                <td>
                                    <input type="hidden" name="images_order_id[]" value="{{$image->id}}" />
                                    <input type="textfield" name="order_{{$image->id}}" value="{{old('order',$image->order)}}"/>
                                </td>
                                <td>

                                    <span class="btn btn-danger delete-picture" id="{{$image->id}}"
                                          data-value="{{action('AdminGirlsController@deleteimage',$image->id)}}"
                                          onclick="return ConfirmDelete(' this image');">Delete Picture</span>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif

        </div>


        <div class="form-group col-md-12">
            <label for="own_words">Own Words</label>
            <textarea name="own_words" class="form-control">{{ old('own_words',$girl->own_words) }}</textarea>
        </div>

        <div class="form-group col-md-12">
            <label for="active">Activate post on website?</label>
            <input type="checkbox" name="is_active" value="1" {{ old('is_active',$girl->is_active)?"checked":"" }} />
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
            subfolder: "",
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


    <script type="text/javascript">

        function ConfirmDelete(name) {
            var x = confirm('Are you sure you want to delete ' + name + '?');
            if (x)
                return true;
            else
                return false;
        }

    </script>