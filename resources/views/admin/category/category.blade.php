@extends('admin/app')

@section('main-content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
       @include('includes.message')
			<form action="{{ route('category.store')}}" method="post" role="form" class="myform">
          {{ csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="category">Category Title</label>
                  <input type="text" name="category" class="form-control" id="category" placeholder="Enter category">
                </div>
                <div class="form-group">
                  <label for="slug">Slug title</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug">
                </div>  
              </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
		</div>
	</div>
@endsection