@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить статью
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['posts.update', $post->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Обновляем статью</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$post->name}}" name="name">
            </div>                    

            <div class="form-group">
              <label for="exampleInputEmail1">Картинка</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="image" value="{{$post->image}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Артикул</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="articul" value="{{$post->articul}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Тип</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="type" value="{{$post->type}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Рейтинг</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="rating" value="{{$post->rating}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Отзывы</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="reviews" value="{{$post->reviews}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Размер</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="size" value="{{$post->size}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Цена</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{$post->price}}">
            </div>

          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <input name="desc" id="" cols="30" rows="10" class="form-control" value="{{$post->desc}}">
            </div>
          </div>
          

      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
	{{Form::close()}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection