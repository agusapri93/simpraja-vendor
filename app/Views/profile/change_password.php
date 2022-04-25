<?= $this->extend('templates/templates'); ?>


<?= $this->section('content'); ?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card Transparan-->
        <div class="card shadow-none bg-light">
            <!--Begin :: Card-->
            <div class="card col-6 align-self-center shadow-lg">
                <!--begin::Card Header-->
                <div class="card-header ribbon ribbon-top ribbon-vertical bg-warning rounded-top-2">
                    <div class="ribbon-label shadow-sm bg-white">
                        <i class="bi bi-pencil-square fs-2x text-dark"></i>
                    </div>
                    <div class="card-title text-dark fw-bolder">Ubah Password</div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body ">
                    <!--begin:alert-->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <script>
                            let timerInterval
                            Swal.fire({
                                text: '<?= session()->getFlashdata('pesan') ?>',
                                icon: 'error',
                                timer: 2000,
                                timerProgressBar: false,
                                confirmButtonText: 'Oke',
                                customClass: {
                                    confirmButton: 'btn btn-danger'
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
                    <!--begin::Layout-->
                    <div class="row  rounded p-10">

                        <!--begin::Form-->
                        <form class="form" action="update_password" enctype="multipart/form-data" method="POST">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6">Masukan Password
                                    Lama</label>
                                <input class="form-control form-control-solid" type="password" placeholder="" name="password-lama" autocomplete="off" required />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-7 fv-row">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6">Masukan Password
                                        Baru</label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input class="form-control form-control-solid" type="password" placeholder="" name="password-baru" onchange="onChange()" id="kata-sandi" required />
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Input group=-->

                            <!--begin::Row-->
                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-dark fs-6">Masukan Ulang
                                    Password
                                    Baru</label>
                                <input class="form-control form-control-solid" type="password" placeholder="" name="konfirmasi-password-baru" onchange="onChange()" id="konfirmasi-kata-sandi" required />
                                <span id="message"></span>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="text-center pb-lg-0 pb-8">
                                <a href="/profile" class="btn btn-lg btn-secondary fw-bolder">
                                    <span class="indicator-label">Cancel</span>
                                </a>
                                <button type="submit" class="btn btn-lg btn-primary fw-bolder">
                                    <span class="indicator-label">Ubah Password</span>
                                </button>
                            </div>
                            <!--end::Row-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Card body-->
            </div>
            <!--End :: Card-->
        </div>
        <!--end::Card Transpara-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->
<?= $this->endSection(); ?>

<?php $this->section('custom_script') ?>
<script>
    $('#kata-sandi, #konfirmasi-kata-sandi').on('keyup', function() {


        if (($('#kata-sandi').val() == $('#konfirmasi-kata-sandi').val()) && $('#kata-sandi').val().length > 0) {
            $('#message').html('Password Benar').css('color', 'green');
        } else
            $('#message').html('Password Salah').css('color', 'red');
    });
</script>
<script>
    function onChange() {
        let password = document.querySelector('input[name=password-baru]');
        let confirm = document.querySelector('input[name=konfirmasi-password-baru]');
        if (confirm.value === password.value) {
            confirm.setCustomValidity('');
        } else {
            confirm.setCustomValidity('Password Masih Salah');
        }
    }
</script>

<?php $this->endSection(); ?>