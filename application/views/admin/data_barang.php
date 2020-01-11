        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Admin</a>
            </li>
            <li class="breadcrumb-item active">Barang</li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">Data Barang</div>
                    <div class="card-body">
                        <style type="text/css">
                            tr th,
                            tr td {
                                text-align: center;
                            }
                        </style>

                        <?= $this->session->flashdata('msg') ?>
                        <?= form_open('admin/barang') ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Nomor Surat</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nomor Surat"
                                        name="no_surat" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Nama Barang</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nama Barang"
                                        name="nama" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Stok</label>
                                    <input class="form-control placeholder-no-fix" type="number"
                                        placeholder="Stok Barang" name="stok" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Sumber</label>
                                    <input class="form-control placeholder-no-fix" type="text" placeholder="Sumber"
                                        name="sumber" required />
                                </div>
                            </div>
                        </div>

                        <input type="submit" name="simpan" value="Tambah" class="btn btn-success">
                        <?= form_close() ?>
                        <hr>
                        <table class="table table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Nama</th>
                                    <th>Stok</th>
                                    <th>Sumber</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i=0; foreach ($data as $key): ?>
                                <tr>
                                    <td><?= $key->no_surat ?></td>
                                    <td><?= $key->nama ?></td>
                                    <td><?= $key->stok ?></td>
                                    <td><?= $key->sumber ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detail_barang/' . $key->id) ?>" class="btn btn-primary">Detail Barang</a>
                                        <a href="<?= base_url('admin/barang') . '?delete=true&id=' . $key->id ?> " class="btn btn-danger">Delete</a>
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