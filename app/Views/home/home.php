<?= $this->extend('templates/templates'); ?>

<?= $this->section('custom_style') ?>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div id="kt_content_container">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <div class="card bg-success card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com012.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Terjawab</div>
                        <div class="fs-5 fw-bold text-white"><?= $answered ?> Pertanyaan</div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <div class="card bg-warning card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com003.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
                                <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Belum Terjawab</div>
                        <div class="fs-5 fw-bold text-white"><?= $unanswered ?> Pertanyaan</div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-4">
                <!--begin::Statistics Widget 5-->
                <div class="card bg-primary card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com007.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="black" />
                                <path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="black" />
                            </svg></span>
                        <!--end::Svg Icon-->
                        <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total
                            Pertanyaan</div>
                        <div class="fs-5 fw-bold text-white"><?= $all ?> Pertanyaan</div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Statistics Widget 5-->
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <!--begin::List widget 16-->
                <div class="card shadow-lg">
                    <!--begin::Header-->
                    <div class="card-header rounde-top ribbon ribbon-end ribbon-clip bg-info">
                        <div class="ribbon-label">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/communication/com009.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="black" />
                                    <path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="black" />
                                </svg></span>
                            <!--end::Svg Icon-->
                            <span class="ribbon-inner bg-black"></span>
                        </div>
                        <div class="card-title text-light fs-3 fw-bolder">Informasi / Pengumuman
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-4 px-0 border ">

                        <!--begin::Tab Content-->
                        <div class="tab-content px-0 hover-scroll-overlay-y mb-2" style="height: 450px">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
                                <div class="m-0">
                                    <!--begin::Accordion-->
                                    <div class="accordion m-0 " id="accordionExample">
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button fw-bolder bg-secondary rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    PEMBERITAHUAN UPDATE DATA PEKERJAAN SETIAP
                                                    MINGGUNYA
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="wraptext px-20">
                                                        <p style="text-align: left;">Yth.
                                                            <strong>Pengguna SIMPRAJA</strong>,
                                                        </p>
                                                        <p style="text-align: left;">Dalam
                                                            pelaksanaan Taat Administrasi,
                                                            dimohon untuk melakukan update data
                                                            terkait, data Kontrak dan data
                                                            Realisasi Fisik setiap minggunya.
                                                            Supaya data menjadi aktual dan
                                                            realtime, sehingga pembina dapat
                                                            melakukan monitoring progress
                                                            pekerjaan.
                                                        </p>
                                                        <p style="text-align: justify;">Hormat
                                                            Kami,</p>
                                                        <p style="text-align: justify;">
                                                            <strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-bolder rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 21 MARET
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Senin, 21 Maret 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-bolder bg-secondary rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 10 MARET
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Kamis, 10 Maret 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingFourth">
                                                <button class="accordion-button collapsed fw-bolder rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 25 FEBRUARI
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Jum'at, 25 Februari 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingFifth">
                                                <button class="accordion-button collapsed fw-bolder bg-secondary rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 15 FEBRUARI
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Selasa, 15 Februari 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingSixth">
                                                <button class="accordion-button collapsed fw-bolder rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 28 JANUARI
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseSixth" class="accordion-collapse collapse" aria-labelledby="headingSixth" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Jum'at, 28 Januari 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded-0">
                                            <h2 class="accordion-header" id="headingSeventh">
                                                <button class="accordion-button collapsed fw-bolder bg-secondary rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventh" aria-expanded="false" aria-controls="collapseSeventh">
                                                    [MAINTENANCE] PEMELIHARAAN RUTIN 12 JANUARI
                                                    2022
                                                </button>
                                            </h2>
                                            <div id="collapseSeventh" class="accordion-collapse collapse" aria-labelledby="headingSeventh" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ps-20">
                                                        <p>Yth. <strong>Pengguna
                                                                SIMPRAJA</strong>,
                                                        </p>
                                                        <p>Kami akan melakukan pemeliharaan
                                                            rutin pada:</p>
                                                        <table style="text-align: inherit; border-width: 1px; border-style: solid; border-color: rgb(215, 215, 216); margin-top: 6px; width: 64%; margin-right: calc(36%);">
                                                            <tbody>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Tanggal</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Rabu, 12 Januari 2022
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Durasi</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        2 Jam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Pemeliharaan Rutin</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        20:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Server UP</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        22:00 WIB</td>
                                                                </tr>
                                                                <tr>
                                                                    <td bgcolor="#F2F2F2" class="td-gray" style="width: 20%;">
                                                                        Alasan</td>
                                                                    <td bgcolor="#FFFFFF" class="td-white" style="width: 80%;">
                                                                        Database</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Bantuan lebih lanjut bisa menghubungi
                                                            Whatsapp Helpdesk SIMPRAJA di <a href="https://wa.me/628999958686?text=Nama%20%3A%20%0ANIP%20%3A%20%0ASatker%20%3A%20%0AMasalah%20%3A%20%0ALampiran%20%3A%20" target="_blank">08138882828</a>.
                                                        </p>
                                                        <p>Terima kasih atas dukungan dan
                                                            kerjasamanya.</p>
                                                        <p>Hormat Kami,</p>
                                                        <p><strong>Tim Pengembang
                                                                SIMPRAJA</strong>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Accordion-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Tap pane-->

                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List widget 16-->
            </div>
        </div>


    </div>
    <!--end::Container-->
</div>
<?php $this->endSection(); ?>

<?php $this->section('custom_script') ?>

<?php $this->endSection(); ?>