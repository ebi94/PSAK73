<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data list</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Contract No</th>
              <th>Vendor</th>
              <th>Criteria</th>
              <th>Created at</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
          		<tr>
          			<td>{{ $d->id }}</td>
          			<td>{{ $d->title }}</td>
          			<td>{{ $d->contract_no }}</td>
          			<td>{{ $d->vendor }}</td>
          			<td>{{ $d->criteria }}</td>
                <th>{{ $d->created_at }}</th>
          		</tr>
          		@endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Title</th>
              <th>Contract No</th>
              <th>Vendor</th>
              <th>Criteria</th>
              <th>Created at</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div  class="col-md-2">
      <a href="data/export_excel" target="_blank">
        <button class="btn btn-block btn-primary">Export to Excel</button>
      </a>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
