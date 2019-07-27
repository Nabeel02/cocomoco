@extends('admin.app')
@section('content') 
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">CATEGORY FORM</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" enctype="multipart/form-data" action="{{ route('categorystore') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="box-body">
                            <div class="form-group">
                                <label>Text</label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Enter Category Name">
                            </div>
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea name="category_description" id="category_description" class="form-control" rows="3" placeholder="Enter Category Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" name="category_image" id="category_image">
                            </div>
                            {{-- <div class="checkbox">
                                <label>
                                <input type="checkbox"> Check me out
                                </label>
                            </div>--}}
                        </div> 
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
    
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div> --}}
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
@endsection 