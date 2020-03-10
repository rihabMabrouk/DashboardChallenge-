<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Challenges list
      <small>You can check challenges and details</small>
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <table class="table table-hover">

            <thead>
              <th>Title</th>
              <th>Deadline</th>
              <th>Status</th>

            </thead>

            <tbody>
        @foreach($challenges as $challenge)
                <tr>
                  <td>{{$challenge->title}} </td>
                  <td>{{$challenge->deadline}} </td>
                  <td>{{$challenge->status}} </td>
                </tr>
        @endforeach

            </tbody>

        </table>

      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
