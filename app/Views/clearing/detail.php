<?= $this->extend('templates/templates'); ?>

<?= $this->section('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Container-->
      <div id="kt_content_container">
            <!--begin::row-->
            <div class="row">
                  <!--begin::card-->
                  <div class="card card shadow-sm px-0 mb-6 mb-xl-4">
                        <!--begin::card header-->
                        <div class="card-header ribbon ribbon-end rounde-top-2 bg-danger">
                              <div class="ribbon-label bg-dark">Pelapor</div>
                              <div class="card-title text-light">Laporan Permasalahan</div>
                        </div>
                        <!--end::card header-->
                        <!--begin::card body-->
                        <div class="card-body ">
                              <div class="row border-1 rounded bg-light-dark py-4" style="padding:10px;">
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6 ">

                                          <div class="flex-grow-1">
                                                <!--begin::Details-->
                                                <div class="row">
                                                      <!--begin::Status-->
                                                      <div class="col-12 px-3 bd-highlight">
                                                            <a href="#" class="text-dark fs-1 fw-bolder me-3"><?= $detail['nama_pengirim']; ?></a>
                                                      </div>
                                                      <!--end::Status-->

                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Details-->
                                                <div class="row">
                                                      <!--begin::Description-->
                                                      <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                            Nomor Telepon
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-1 col-sm-auto col-md-auto">
                                                            :
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-7 col-sm-auto col-md-auto">
                                                            <?= $detail['telepon_pengirim']; ?>
                                                      </div>
                                                      <!--end::Description-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Details-->
                                                <div class="row">
                                                      <!--begin::Description-->
                                                      <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                            Email
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-1 col-sm-auto col-md-auto">
                                                            :
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-7 col-sm-auto col-md-auto">
                                                            <?= $detail['email_pengirim']; ?>
                                                      </div>
                                                      <!--end::Description-->
                                                </div>
                                                <!--end::Details-->
                                                <!--begin::Details-->
                                                <div class="row">
                                                      <!--begin::Description-->
                                                      <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                                                            Alamat
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-1 col-sm-auto col-md-auto">
                                                            :
                                                      </div>
                                                      <!--end::Description-->
                                                      <!--begin::Description-->
                                                      <div class="col-7 col-sm-7 col-md-8 col-lg-9" style="text-align: justify;">
                                                            <?= $detail['alamat_pengirim']; ?>
                                                      </div>
                                                      <!--end::Description-->
                                                </div>
                                                <!--end::Details-->
                                          </div>
                                    </div>
                              </div>
                              <div class="row  py-10">
                                    <p class="fs-1 text-start text-dark ">
                                          <b>
                                                <?= $detail['judul']; ?>
                                          </b>
                                    </p>
                                    <div class="date-text text-primary ps-3">
                                          <table>
                                                <tr>
                                                      <td width="34%">Tanggal Laporan</td>
                                                      <td width="5%">:</td>
                                                      <td><?= formatIndonesia(date("Y-m-d", strtotime($detail['created_at']))); ?></td>
                                                </tr>
                                                <tr>
                                                      <td>Terlapor</td>
                                                      <td>:</td>
                                                      <td><?= $detail['terlapor']; ?></td>
                                                </tr>
                                                <tr>
                                                      <td>Satker Terlapor</td>
                                                      <td>:</td>
                                                      <td><?= $detail['satker_terlapor']; ?></td>
                                                </tr>
                                                <tr>
                                                      <td>Kategori Laporan</td>
                                                      <td>:</td>
                                                      <td><?= $detail['kategori']; ?></td>
                                                </tr>
                                          </table>
                                    </div>
                                    <div class="separator border-2 "></div>
                                    <p class="py-4 fs-2" style="text-align: justify; text-justify: inter-word;">
                                          <?= $detail['uraian']; ?>
                                    </p>
                              </div>
                              <div class="row border-1 border-dashed border-primary rounded-2">
                                    <span class="text-start h3 py-3">Daftar File Attachment</span>
                                    <?php foreach ($attachment_clearing as $index => $clearings) : ?>
                                          <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 px-15">
                                                <div class="file-man-box">
                                                      <a href="<?= base_url() ?>/upload/attachment_clearing/<?= $clearings['nama_file'] ?>" class="view-doc" data-bs-toggle="modal" data-bs-target="#modalviewdokumen" data-bs-custom-class="tooltip-dark" data-bs-placement="left" title="Klik Untuk Preview">
                                                            <div class="file-img-box">
                                                                  <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil003.svg-->
                                                                  <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                              <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                                                              <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                                        </svg>
                                                                  </span>
                                                                  <!--end::Svg Icon-->
                                                                  <div class="file-man-title">
                                                                        <p class="text-overflow"><?= $clearings['nama_file'] ?></p>
                                                                  </div>
                                                            </div>
                                                      </a>
                                                </div>
                                          </div>
                                    <?php endforeach; ?>
                              </div>
                        </div>
                        <!--end::end card body-->
                  </div>
                  <!--end::row-->
            </div>
            <!--end::row-->
            <!--begin::row-->
            <?php if ($detail['jawaban'] !== NULL) : ?>
                  <div class="row py-5">
                        <!--begin::card-->
                        <div class="card card shadow-sm px-0 mb-6 mb-xl-4">
                              <!--begin::card header-->
                              <div class="card-header ribbon ribbon-end rounde-top-2 bg-success">
                                    <div class="ribbon-label bg-dark">Customer Service</div>
                                    <div class="card-title text-light">Respon Permasalahan</div>
                              </div>
                              <!--end::card header-->
                              <!--begin::card body-->
                              <div class="card-body">
                                    <div class="row">
                                          <div class="row">
                                                <div class="col-sm-12 col-md-11 col-lg-11 text-start">
                                                      <div class="row">
                                                            <span class="user-profile fs-2 text-start text-dark"><b><?= $detail['nama_cs']; ?></b>
                                                            </span>
                                                      </div>
                                                      <div class="row">
                                                            <span class="date-text text-primary">
                                                                  <?= formatIndonesia(date("Y-m-d", strtotime($detail['updated_at']))); ?>
                                                            </span>
                                                      </div>
                                                </div>

                                          </div>
                                          <div class="separator border-2 "></div>
                                          <p class="py-4  fs-2" style="text-align: justify;text-justify: inter-word;">
                                                <?= $detail['jawaban']; ?>
                                          </p>
                                    </div>
                                    <div class="row border-1 border-dashed border-primary rounded-2">
                                          <span class="text-start h3 py-3">Daftar File Attachment</span>
                                          <?php foreach ($attachment_jawaban as $index => $clearings) : ?>
                                                <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 px-15">
                                                      <div class="file-man-box">
                                                            <a href="http://localhost:8080/upload/attachment_cs/<?= $clearings['nama_file'] ?>" download>
                                                                  <div class="file-img-box">
                                                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil003.svg-->
                                                                        <span class="svg-icon svg-icon-primary svg-icon-2hx">
                                                                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22Z" fill="currentColor" />
                                                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                                              </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                        <div class="file-man-title">
                                                                              <p class="text-overflow"><?= $clearings['nama_file'] ?></p>
                                                                        </div>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                </div>
                                          <?php endforeach; ?>

                                    </div>

                              </div>

                              <!--end::end card body-->
                        </div>
                        <!--end::row-->
                  </div>
            <?php endif; ?>

            <!--Begin View Modal-->
            <div class="modal fade" tabindex="-1" id="modalviewdokumen">
                  <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                              <div class="modal-header">
                                    <h5 class="modal-title">Preview
                                          Dokumen</h5>
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                          <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                              </div>
                              <div id="modal-body-document" class="modal-body">
                                    <embed src="" width="100%" height="600px" />
                              </div>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button class="btn bg-primary text-light"><i class="fa fa-download text-light"></i>
                                          Download</button>
                              </div>
                        </div>
                  </div>
            </div>
            <!--End modal-->
            <div class="row">
                  <div class="text-center">
                        <br>
                        <a class="accs btn btn-success btn-hover-rise bg-dark" href="/clearinghouse">
                              <i class="bi bi-arrow-left-square"></i>Kembali
                        </a>
                  </div>
            </div>
            <!--end::row-->
      </div>
      <!--end::Container-->
</div>
<?php $this->endSection(); ?>

<?php $this->section('custom_script') ?>
<script>
      $('.view-doc').click(function() {
            let href = $(this).attr('href');
            $("#modal-body-document").html('<embed src="' + href + '" width="100%" height="600px" />');
      });
</script>
<?php $this->endSection(); ?>