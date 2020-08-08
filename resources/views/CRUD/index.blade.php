<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('/adminlte/plugins/fontawesome-free/css/all.min.css')}} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('adminlte.navbar')
  <!-- /.navbar -->
  <div style="margin-left: 280px; margin-top: 10px">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Post Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create New</a>
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">#</th>
              <th>Title</th>
              <th>Body</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            
            @forelse($pertanyaan as $key => $post)
                <tr>
                  <td>{{ $key + 1}}</td>
                  <td>{{ $post->title}}</td>
                  <td>{{ $post->body}}</td>
                  <td style="display: inline;">
                    <a href="/pertanyaan/{$pertanyaan_id}" class="btn btn-info btn-sm">Show</a>
                    <a href="/pertanyaan/{pertanyaan_id}/edit" class="btn btn-default btn-sm">Edit</a>
                    <form action="/pertanyaan/{pertanyaan_id}" method="post">
                    @csrf
                    @method('DELETE')
                      <input type="submit" value="delete" class="btn btn-danger btn-sm">
                    </form>
                  </td>
                </tr>
            @empty
              <tr>
                <td colspan="4" align="center">No Post</td>
              </tr>
            @endforelse
            
          </tbody>
        </table>
      </div>
              
            </div>
  </div>
  <!-- Main Sidebar Container -->
  @include('adminlte.sidebar')

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/adminlte/dist/js/demo.js')}}"></script>
</body>
</html>
