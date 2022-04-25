<?= $this->extend('templates/templates'); ?>

<?= $this->section('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Container-->
      <div id="kt_content_container">


            <!--begin::row-->
            <div class="row">
                  <!--begin::card-->
                  <div class="card shadow-sm px-0 mb-6 mb-xl-4">
                        <!--begin::card header-->
                        <div class="card-header ribbon ribbon-end rounde-top-2 bg-dark">
                              <div class="ribbon-label bg-primary"><i class="bi bi-list-ul text-light fs-2x"></i>
                              </div>
                              <div class="card-title text-light">Daftar Laporan</div>
                        </div>
                        <!--end::card header-->
                        <!--begin::card body-->

                        <div class="card-body ">

                              <div class="row border-1 rounded  py-4" style="padding:10px;">
                                    <div class="col-2 align-items-end">
                                          <button type="button" class="btn btn-success btn-hover-rise bg-dark" data-bs-toggle="modal" data-bs-target="#modalclearing" title="Tambah Laporan" name="laporan">
                                                <i class=" bi bi-plus-circle-dotted"></i>
                                                Tambah Laporan
                                          </button>
                                    </div>
                                    <div class="table-responsive rounded">
                                          <table id="daftar-clearing" class="table table-rounded  border gy-6 gs-6 dataTable  table-hover table-row-dashed ">
                                                <thead>
                                                      <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0 bg-light-dark" style="vertical-align: middle;">
                                                            <th width="5%">No</th>
                                                            <th width="40%">Judul Laporan</th>
                                                            <th width="20%">Kategori</th>
                                                            <th width="10%">Tanggal Pelaporan</th>
                                                            <th width="10%">Status Laporan</th>
                                                            <th width="15%">Actions</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php foreach ($clearing as $index => $clearings) : ?>
                                                            <tr>
                                                                  <td width="5%"><?= ++$index; ?>.</td>
                                                                  <td width="40%">
                                                                        <?= $clearings['judul']; ?>
                                                                  </td>
                                                                  <td width="20%">
                                                                        <?= $clearings['kategori']; ?>
                                                                  </td>
                                                                  <td width="10%">
                                                                        <?= formatIndonesia(date("Y-m-d", strtotime($clearings['created_at']))); ?>
                                                                  </td>
                                                                  <td width="10%" class="text-center">
                                                                        <?php if ($clearings['status'] == 'Terjawab') : ?>
                                                                              <span class="badge badge-light-success">Terjawab</span>
                                                                              <br>
                                                                              <span class="badge badge-light-success">
                                                                                    <?= formatIndonesia(date("Y-m-d", strtotime($clearings['updated_at']))); ?>
                                                                              </span>
                                                                        <?php else : ?>
                                                                              <span class="badge badge-light-primary">Belum Dijawab</span>
                                                                        <?php endif; ?>
                                                                  </td>
                                                                  <td width="15%">
                                                                        <a href="/clearinghouse/detail/<?= $clearings['slug'] ?>" class="btn btn-sm btn-primary btn-hover-rise bg-dark"><i class="bi bi-eye-fill"></i>Detail
                                                                        </a>
                                                                  </td>
                                                            </tr>
                                                      <?php endforeach; ?>
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                        <!--end::end card body-->
                  </div>
                  <!--end::row-->
            </div>
            <!--end::row-->

            <!--Begin Modal Tambah Laporan -->
            <div class=" modal fade" id="modalclearing" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">
                                          Tambah Laporan
                                    </h5>
                              </div>

                              <div class="modal-body">
                                    <form action="/clearinghouse/save" id="clearinghouse">
                                          <div class="form-group my-2">
                                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                      <span class="required">Judul Laporan</span>
                                                </label>
                                                <!--end::Label-->
                                                <input type="text" class="form-control" placeholder="Masukan Judul Laporan" name="judul" required />
                                                <input type="hidden" name="nama-pengirim" value="<?= user()->nama ?>">
                                                <input type="hidden" name="email-pengirim" value="<?= user()->email ?>">
                                                <input type="hidden" name="telepon-pengirim" value="<?= user()->nomor_telepon ?>">
                                                <input type="hidden" name="alamat-pengirim" value="<?= user()->alamat ?>">
                                                <input type="hidden" id="id_pengirim" name="id-pengirim" value="<?= user()->kode_vendor ?>">
                                                <input type="hidden" id="reference" name="reference" value="<?= random_string('crypto') ?>">
                                                <input type="hidden" id="identifier" name="identifier" value="<?= random_string('crypto', 12) ?>">
                                          </div>
                                          <div class="form-group my-2">
                                                <label class="required fs-6 fw-bold mb-2">Terlapor</label>
                                                <select class="form-select" name="terlapor" required>
                                                      <option hidden value="">Pilih kategori laporan...</option>
                                                      <option value="Pejabat Pembuat Komitmen">Pejabat Pembuat Komitmen</option>
                                                      <option value="Kuasa Pengguna Anggaran">Kuasa Pengguna Anggaran</option>
                                                      <option value="Unit Kerja Penyedia Barang & Jasa">Unit Kerja Penyedia Barang & Jasa</option>
                                                      <option value="lainnya">Lainnya</option>
                                                </select>
                                          </div>
                                          <div class="form-group my-2">
                                                <label class="required fs-6 fw-bold mb-2">Satuan Kerja Terlapor</label>
                                                <input type="text" class="form-control" name="satker-terlapor">
                                          </div>
                                          <div class="form-group my-2">
                                                <label class="required fs-6 fw-bold mb-2">Kategori Laporan</label>
                                                <select class="form-select" name="kategori" required>
                                                      <option hidden value="">Pilih kategori laporan...</option>
                                                      <option value="Perencanaan Pengadaan">Perencanaan Pengadaan</option>
                                                      <option value="Pemilihan Penyedia Barang & Jasa">Pemilihan Penyedia Barang & Jasa</option>
                                                      <option value="Pelaksanaan Kontrak">Pelaksanaan Kontrak</option>
                                                      <option value="lainnya">Lainnya</option>
                                                </select>
                                          </div>
                                          <div class="form-group my-2">
                                                <label for="name" class="required form-label">Deskripsi
                                                      Laporan</label>
                                                <textarea class="form-control" aria-label="With textarea" placeholder="Masukan Deskripsi" name="uraian" required></textarea>
                                          </div>
                                          <div class="form-group my-2">
                                                <label for="formFile" class="form-label">Unggah Dokumen Pendukung</label>
                                                <div class="row p-3">
                                                      <div class="dropzone" id="dropzone-input">
                                                            <div class="dz-message needsclick">
                                                                  <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                  <div class="ms-4">
                                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="simpanfisik" form="clearinghouse">Simpan</button>
                              </div>
                        </div>
                  </div>
            </div>
            <!--End Modal Tambah Laporan -->

      </div>
      <!--end::Container-->
</div>
<?php $this->endSection(); ?>

<?php $this->section('custom_script') ?>
<script>
      $(document).ready(function() {
            $('#daftar-clearing').DataTable({
                  "columnDefs": []
            });
      });


      // $('.fisik').click(function() {
      //       let identifier = $(this).data('fisik').identifier;
      // });

      let reference = $('#reference').val();
      let identifier = $('#identifier').val();

      Dropzone.autoDiscover = false;
      var myDropzone = new Dropzone("#dropzone-input", {
            url: "/uploadclearing/unggah_clearing",
            maxFilesize: 2000,
            method: "post",
            acceptedFiles: "image/*, .mp4, .ts, .mkv, .pdf",
            paramName: "file-clearing",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
      });

      myDropzone.on("sending", function(a, b, c) {
            console.log(reference);
            a.token = Math.random();
            c.append("token", a.token);
            c.append("reference", reference);
            c.append("identifier", identifier);
      });

      myDropzone.on("removedfile", function(a) {
            var token = a.token;
            console.log(token);
            $.ajax({
                  url: '/uploadclearing/hapus_clearing',
                  type: 'POST',
                  data: {
                        'token': a.token
                  },
                  dataType: 'json',
                  success: function(data) {
                        console.log('Data: ' + data);
                  },
                  error: function(request, error) {
                        console.log("Request: " + JSON.stringify(request));
                  }
            });
      });
</script>
<?php $this->endSection(); ?>