@extends('admin/app')

@section('main-content')

<div class="content-wrapper">
        <section class="content">
        	<div class="row">
        		<div class="col-lg-12">
              
              <form role="form" class="myform2">   
                    <h2>User Form</h2>                     
                              <div class="form-group">
                                <label for="title">User Name</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter post title">
                              </div>
                              <div class="form-group">
                                <label for="subtitle">Post Sub Title</label>
                                <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter post sub-title">
                              </div>
                              <div class="form-group">
                                <label for="slug">Post Slug</label>
                                <input name="slug" type="text" class="form-control" id="slug" placeholder="Enter post slug">
                              </div>                       
                                     
                    <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        		</div>
        	</div>
      </section>
  </div>
@endsection