        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Jurusan</li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">Data Jurusan / Program Studi</div>
                    <div class="card-body">
                        <style type="text/css">
                            tr th,
                            tr td {
                                text-align: center;
                            }
                        </style>

                        <?= $this->session->flashdata('msg') ?>
                        <?= form_open('admin/jurusan') ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Nama Jurusan / Program Studi</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nama Jurusan"
                                        name="nama" required />
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="simpan" value="Tambah" class="btn btn-success">
                        <?= form_close() ?>
                        <hr>
                        <table class="table table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; foreach ($data as $key): ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $key->nama ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/jurusan') . '?delete=true&id=' . $key->id ?> " class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->