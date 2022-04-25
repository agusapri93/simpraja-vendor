<?= $this->extend('templates/templates'); ?>

<?= $this->section('content'); ?>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card Transparan-->
        <div class="card shadow-none bg-light">
            <!--begin::Card-->
            <div class="card col-6 align-self-center shadow-lg">
                <!--begin::Card Header-->
                <div class="card-header ribbon ribbon-top ribbon-vertical bg-warning rounded-top-2">
                    <div class="ribbon-label shadow-sm bg-white">
                        <i class="bi bi-pencil-square fs-2x text-dark"></i>
                    </div>
                    <div class="card-title text-dark fw-bolder">Edit Profile</div>
                </div>
                <!--end::Card header-->
                <!--Begin :: Card Body-->
                <div class="card-body">
                    <!--Begin :: Form-->
                    <form class="form" action="update_profile" method="post" enctype="multipart/form-data">
                        <!--begin::Layout-->
                        <div class="row p-2">
                            <!--begin::Col-->
                            <div class="col"></div>
                            <div class="col d-flex justify-content-center p-8">

                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?= base_url() ?>/upload/display_picture/<?= user()->image ?>)">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Ganti Foto Profil">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Hapus Foto Profil">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <!--end::Image input-->
                            </div>
                            <div class="col"></div>
                            <!--end::Col-->

                            <!--begin::Input group-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="col-lg-3 col-form-label text-lg-right text-dark fw-bolder">Nama</label>
                                <!--end::Label-->
                                <label class="col-lg-1 col-form-label text-lg-right">:</label>
                                <!--begin::Col-->
                                <div class="col-lg-8 Px-2">
                                    <input name="nama" type="text" class="form-control form-control-solid" placeholder="Nama Satuan Kerja" value="<?= user()->nama ?>" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="col-lg-3 col-form-label text-lg-right text-dark fw-bolder">No.
                                    Telepon</label>
                                <!--end::Label-->
                                <label class="col-lg-1 col-form-label text-lg-right">:</label>
                                <!--begin::Col-->
                                <div class="col-lg-8 Px-2">
                                    <input name="nomor-telepon" type="text" class="form-control form-control-solid" placeholder="No. Telephone" value="<?= user()->nomor_telepon ?>" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="col-lg-3 col-form-label text-lg-right text-dark fw-bolder">Email</label>
                                <!--end::Label-->
                                <label class="col-lg-1 col-form-label text-lg-right">:</label>
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <input name="email" type="text" class="form-control form-control-solid" placeholder="Email" value="<?= user()->email ?>" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <div class="row p-2">
                                <!--begin::Label-->
                                <label class="col-lg-3 col-form-label text-lg-right text-dark fw-bolder">Alamat</label>
                                <!--end::Label-->
                                <label class="col-lg-1 col-form-label text-lg-right">:</label>
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <textarea name="alamat" class="form-control form-control-solid" aria-label="With textarea" placeholder="Alamat"><?= user()->alamat ?></textarea>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <div class="row">


                            </div>
                            <!--end::Input group-->

                            <div class="text-center py-10">
                                <a href="<?= base_url() ?>/profile" type="button" class="btn btn-light me-3">Batal</a>

                                <button type="submit" class="btn btn-primary">Simpan
                                </button>
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