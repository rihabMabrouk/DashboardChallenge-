
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

        <div>
            <a style="margin: 19px;" href="{{ route('admin-new-challenge')}}" class="btn btn-primary">New Challenge</a>
        </div>

        <table class="table table-hover">

            <thead>
              <th>Title</th>
              <th>Deadline</th>
              <th>Status</th>
              <th colspan = 2>Action</th>

            </thead

            <tbody>
        @foreach(App\Challenge::all() as $challenge)
                <tr>
                  <td>{{$challenge->title}} </td>
                  <td>{{$challenge->deadline}} </td>
                  <td>{{$challenge->status}} </td>
                   <td><a href="{{route('challenges.edit',['id'=>$challenge->id])}}" class = "btn btn-info">Edit</a>
                   
                         <a onclick="return confirm('Are you sure?')" href="{{route('challenges.destroy',['id'=>$challenge->id])}}" class = "btn btn-danger">Delete</a>
                    </td>
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
