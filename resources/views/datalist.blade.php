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
              <th>Nama PT</th>
              <th>Nomor Kontrak</th>
              <th>Vendor</th>
              <th>Jenis Sewa</th>
              <!-- <th>Apakah terdapat modifikasi ?</th>
              <th>Apakah kontrak dinegosiasikan dengan kontrak lain ?</th>
              <th>Apakah kontrak mengandung opsi perpanjangan ?</th>
              <th>Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</th>
              <th>Apakah kontrak mengandung Opsi terminasi ?</th>
              <th>Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</th>
              <th>Certain Asset ?</th>
              <th>Right to Operate ?</th>
              <th>Control of the Output or other utility ?</th>
              <th>Control Physical Asset ?</th>
              <th>Contract Price ?</th>
              <th>Output used by third party ?</th>
              <th>Right to control the use of Asset ?</th>
              <th>Apakah kontrak Sewa terdiri dari beberapa komponen ?</th> -->
              <th>Lokasi sewa ?</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Besar nilai kontrak ?</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $d)
          		<tr>
          			<td>{{ $d->id }}</td>
          			<td>{{ $d->nama_pt }}</td>
          			<td>{{ $d->nomor_kontrak }}</td>
          			<td>{{ $d->vendor }}</td>
          			<!-- <td>{{ $d->jenis_sewa }}</td>
                <td>{{ $d->ns_a }}</td>
                <td>{{ $d->ns_b }}</td>
                <td>{{ $d->ns_c1 }}</td>
                <td>{{ $d->ns_c2 }}</td>
                <td>{{ $d->ns_d1 }}</td>
                <td>{{ $d->ns_d2 }}</td>
                <td>{{ $d->is_1 }}</td>
                <td>{{ $d->is_2 }}</td>
                <td>{{ $d->is_3 }}</td>
                <td>{{ $d->is_4 }}</td>
                <td>{{ $d->is_5 }}</td>
                <td>{{ $d->is_6 }}</td>
                <td>{{ $d->is_7 }}</td> -->
                <td>{{ $d->komponen }}</td>
                <td>{{ $d->lokasi }}</td>
                <td>{{ $d->start_date }}</td>
                <td>{{ $d->end_date }}</td>
                <td>{{ $d->nilai_kontrak }}</td>
                <td>
                  <button type="button" class="btn btn-block btn-outline-primary btn-xs"  data-toggle="modal" data-target="#modal-lihat">Lihat</button>
                  <button type="button" class="btn btn-block btn-outline-info btn-xs" data-toggle="modal" data-target="#modal-edit">Ubah</button>
                  <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-hapus">Hapus</button>
                </td>
          		</tr>
          		@endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Nama PT</th>
              <th>Nomor Kontrak</th>
              <th>Vendor</th>
              <th>Jenis Sewa</th>
              <!-- <th>Apakah terdapat modifikasi ?</th>
              <th>Apakah kontrak dinegosiasikan dengan kontrak lain ?</th>
              <th>Apakah kontrak mengandung opsi perpanjangan ?</th>
              <th>Penyewa cukup pasti untuk mengeksekusi Opsi tersebut ?</th>
              <th>Apakah kontrak mengandung Opsi terminasi ?</th>
              <th>Penyewa cukup pasti untuk tidak mengeksekusi Opsi tersebut ?</th>
              <th>Certain Asset ?</th>
              <th>Right to Operate ?</th>
              <th>Control of the Output or other utility ?</th>
              <th>Control Physical Asset ?</th>
              <th>Contract Price ?</th>
              <th>Output used by third party ?</th>
              <th>Right to control the use of Asset ?</th>
              <th>Apakah kontrak Sewa terdiri dari beberapa komponen ?</th> -->
              <th>Lokasi sewa ?</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Besar nilai kontrak ?</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- <div  class="col-md-2">
      <a href="data/export_excel" target="_blank">
        <button class="btn btn-block btn-primary">Export to Excel</button>
      </a>
    </div> -->
    <div  class="col-md-2">
      <a href="export/export_excel" target="_blank">
        <button class="btn btn-block btn-success">Export to Excel</button>
      </a>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- Modal Edit -->
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ubah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @include('editdetail')
            </div>
            <div class="modal-footer justify-content-between">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Simpan</button> -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- Modal Edit -->

<!-- Modal Lihat -->
<div class="modal fade" id="modal-lihat">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Lihat Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @include('showdetail', ['myValue' => "test", 'mySecondValue' => "Test2"])
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- Modal Lihat -->

<!-- Modal Hapus -->
<div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data !</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah anda yakin untuk menghapus data ini ?</p>
              <button type="button" class="btn btn-primary">Iya</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
            <div class="modal-footer justify-content-between">
            * 
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- Modal Hapus -->
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
