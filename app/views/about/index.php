  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $data['title']; ?></h1>

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title']; ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

          <div class="row">
            <div class="col-md-2 text-right">
              Nama :
            </div>
            <div class="col-md-10 text-left">
              <?= $data['nama']; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 text-right">
              Nim :
            </div>
            <div class="col-md-10 text-left">
              <?= $data['nim']; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 text-right">
              Fakultas :
            </div>
            <div class="col-md-10 text-left">
              <?= $data['fakultas']; ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 text-right">
              Alamat :
            </div>
            <div class="col-md-10 text-left">
              <?= $data['alamat']; ?>
            </div>
</div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->