@include('frontend::layout/header')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users Table
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Users table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mystic Users Table</h3>
                <div class="pull-right" >
                    <a href="{{route('excel_report_user_list')}}" class="btn btn-success" title="Download Excel"><i class="fa fa-download"></i></a>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <table id="btable" class="table table-bordered" data-toggle="table" data-url="{{\URL::route('mystic_list')}}"
                       data-side-pagination="server" data-pagination="true"
                       data-response-handler="responseHandler" data-sort-name="id" data-sort-order="desc"
                       data-click-to-select="true" data-select-item-name="id" data-search="true">
                    <thead>
                    <tr>

                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="name" data-sortable="true" data-halign="center" data-align="center">Name</th>
                        <th data-field="contact" data-sortable="true" data-halign="center" data-align="center">Contact</th>
                        <th data-field="email" data-sortable="true" data-halign="center" data-align="center">Email</th>
                        <th data-field="message"  data-sortable="true" data-halign="center" data-align="center">Message</th>

                        <th data-field="operate" data-formatter="operateFormatter" data-align="center">Actions</th>

                    </tr>
                    </thead>
                </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<script>
//

  function responseHandler(res) {
      return {
          rows: res.data,
          total: res.total
      }

  }

  function operateFormatter(value, row, index) {


      return '<a href="{{url('mystic/edit')}}/'+ row.id + '" title="Edit" alt="Edit" class="btn btn-link"><i class="fa fa-edit"></i></a> <a class="btn btn-link"  href="javascript:showDeletePopup(' + row.id + ',\'' + row.title + '\')" title="alert" alt="alert"><i class="fa fa-bell-o"></i></a>';
  }
</script>
   @include('frontend::layout/footer')
