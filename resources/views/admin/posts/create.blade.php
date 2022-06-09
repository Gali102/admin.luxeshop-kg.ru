@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить статью
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=> 'posts.store',
		'files'	=>	true
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем статью</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Название</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{old('name')}}">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Лицевая картинка</label>
              <input type="text" id="exampleInputFile" name="image" value="{{old('image')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Артикул</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="articul" value="{{old('articul')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Тип</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="type" value="{{old('type')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Рейтинг</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="rating" value="{{old('rating')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Отзывы</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="reviews" value="{{old('reviews')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Размер</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="size" value="{{old('size')}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Цена</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="price" value="{{old('price')}}">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <input name="desc" cols="30" rows="10" class="form-control" value="{{old('desc')}}">
            </div>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-default">Назад</button>
          <button class="btn btn-success pull-right">Добавить</button>
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