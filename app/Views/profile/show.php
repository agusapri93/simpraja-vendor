<?= $this->extend('templates/templates'); ?>

<?= $this->section('content'); ?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card Transparan-->
        <div class="card shadow-none bg-light">
            <!--begin::Card-->
            <div class="card col-8 align-self-center shadow-lg">
                <!--begin::Card Header-->
                <div class="card-header ribbon ribbon-top ribbon-vertical bg-dark rounded-top-2">
                    <div class="ribbon-label shadow-sm bg-primary">
                        <i class="bi bi-person-badge fa-2x text-light"></i>
                    </div>
                    <div class="card-title text-light fw-bolder">Profil Satuan Kerja</div>
                </div>
                <!--end::Card header-->
                <!--Begin :: Card Body-->
                <div class="card-body">
                    <!--begin:alert-->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <script>
                            let timerInterval
                            Swal.fire({
                                text: '<?= session()->getFlashdata('pesan') ?>',
                                icon: 'success',
                                timer: 2000,
                                timerProgressBar: false,
                                confirmButtonText: 'Oke',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                },

                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                                }
                            })
                        </script>
                    <?php endif; ?>
                    <!--end:alert-->
                    <!--Begin :: Form-->
                    <form class=" form" action="#" method="post">
                        <!--begin::Layout-->
                        <div class="row p">
                            <!--begin::Col-->
                            <div class="col"></div>
                            <div class="col-6 d-flex justify-content-center p-8">

                                <!--begin::Image input-->
                                <div class="text-center">
                                    <img src="<?= base_url() ?>/upload/display_picture/<?= user()->image ?>" alt="" class="img-thumbnail" style="height:auto; width:200px">
                                </div>
                                <!--end::Image input-->
                            </div>
                            <div class="col"></div>
                            <!--end::Col-->

                            <!--begin::Row Profile-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="text-lg-right text-dark fw-bolder">Nama</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col col-form-label text-lg-right " style="text-align: justify; ">
                                    <span><?= user()->nama ?></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row Profile-->
                            <div class="separator border-2 my-2"></div>

                            <!--begin::Row Profile-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="text-lg-right text-dark fw-bolder">Nomor Telepon</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col col-form-label text-lg-right " style="text-align: justify; ">
                                    <span><?= user()->nomor_telepon ?></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row Profile-->
                            <div class="separator border-2 my-2"></div>

                            <!--begin::Row Profile-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="text-lg-right text-dark fw-bolder">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col col-form-label text-lg-right " style="text-align: justify; ">
                                    <span><?= user()->email ?></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row Profile-->
                            <div class="separator border-2 my-2"></div>

                            <!--begin::Row Profile-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="text-lg-right text-dark fw-bolder">Alamat</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col col-form-label text-lg-right " style="text-align: justify; ">
                                    <span><?= user()->alamat ?></span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row Profile-->
                            <div class="separator border-2 my-2"></div>
                            <div class="text-center py-10">
                                <a href="<?= base_url() ?>/profile/edit" class="btn btn-warning">Edit Profile
                                </a>
                                <a href="<?= base_url() ?>/profile/change_password" class="btn btn-primary">Ubah Password
                                </a>
                            </div>
                        </div>
                        <!--end::Layout-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--End :: Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Card Transparan-->
    </div>
    <!--end::Container-->
</div>

<!--end::Content-->
<?= $this->endSection(); ?>