@include('frontend::layout/header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          Mystic User
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Mystic User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form class="form-horizontal" action="{{url('/mystic/edit/'.$listusers_part->id)}}" method="post">
              <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly id="inputName" name="inputName" value="{{$listusers_part->name}}" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContact" class="col-sm-2 control-label">Contact</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly id="inputContact" name="inputContact" value="{{$listusers_part->contact}}" placeholder="Contact">
                    </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" readonly id="inputEmail3" name="inputEmail3" value="{{$listusers_part->email}}" placeholder="Email">
                  </div>
                </div>
                  <!-- textarea -->
                  <div class="form-group">
                      <label for="message" class="col-sm-2 control-label">Message</label>
                      <div class="col-sm-10">
                      <div class="col-sm-10">
                          <textarea class="form-control" rows="3" readonly id="message" name="message"  placeholder="Message ...">{{$listusers_part->message}}</textarea>
                      </div>
                  </div>
                  <!-- textarea -->
                  <div class="form-group">
                      <label for="feedback" class="col-sm-2 control-label">Feedback</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" rows="3" id="feedback" name="feedback" placeholder="Feedback ...">{{$listusers_part->feedback}}</textarea>
                      </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-left">Submit</button>
                  <a href="{{route('pages.layout.data')}}"><button type="submit" class="btn btn-default pull-right">Cancel </button></a>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  @include('frontend::layout/footer')
