@extends('admin/app')

@section('main-content')

<div class="content-wrapper">
        <section class="content">
        	<div class="row">
        		<div class="col-lg-12">
                @include('includes.message')
              <form action="{{ route('post.store') }}" method="post" role="form" class="myform2">  
              {{ csrf_field() }} 
                      <div class="row">
                        <div class="col-lg-6">
                              <div class="form-group">
                                <label for="title">Post Title</label>
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
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label for="image">Upload Post Image</label>
                              <input name="image" type="file" id="image">
                          </div>                          
                          <div class="checkbox">
                              <label>
                                <input name="status" type="checkbox">Publish
                              </label>
                          </div>
                        </div>                      
                      </div> 
                   <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Write Post Body here
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fa fa-minus"></i></button>
                     </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                    
                        <textarea class="textarea" name="body" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                         </textarea>
                    </div>
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