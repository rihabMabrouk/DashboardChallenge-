








  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Challenges | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="hold-transition skin-purple sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

  @include('header')
  @include('sidebar')


  <div class="content-wrapper">


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
            <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">
                  <form action="{{route('challenges.details', $challenge->id )}}" method = "get">
                    @csrf
                    <div class="form-group">
                      {{$challenge}}
                      <label for="title">Title:</label>
                      <input type="text" name = "title" id = "title" class="form-control" required value = "{{$challenge->title}}">
                    </div>
                    <div class="form-group">
                      <label for="c">Description:</label>
                      <output type="text" name = "description" id = "description" class="form-control" required value = "{{$challenge->description}}">
                    </div>
                    <div class="form-group">
                      <label for="status">Status:</label>
                      <select name="status" id="status" class="form-control" required value = "{{$challenge->status}}">

                    </select>
                    <div id="divwinner"></div>
                    </div>
                    <div class="form-group">
                      <label for="deadline">Deadline:</label>
                      <output type="date" name = "deadline" id = "deadline" class="form-control" required value = "{{$challenge->deadline}}">
                    </div>
                    <button type = "submit" class = "btn btn-success">Submit Your Code</button>
                  </form>
                </div>
              </div>
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





  @include('footer')


  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/dist/js/demo.js"></script>


  </body>
  </html>
