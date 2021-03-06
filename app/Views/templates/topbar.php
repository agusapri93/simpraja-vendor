<div id="kt_header" class="header" style="background-color: black;">
      <!--begin::Container-->
      <div class="container-fluid d-flex flex-stack">
            <!--begin::Brand-->
            <div class="d-flex align-items-center me-5">
                  <!--begin::Aside toggle-->
                  <div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3" id="kt_aside_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                        <span class="svg-icon svg-icon-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                              </svg>
                        </span>
                        <!--end::Svg Icon-->
                  </div>
                  <!--end::Aside  toggle-->
                  <!--begin::Logo EProcurement-->
                  <a href="<?= base_url() ?>">
                        <img alt="Logo" src="<?= base_url() ?>/assets/media/logos/logo-2.svg" class="h-25px h-lg-30px" />
                  </a>
                  <!--end::Logo EProcurement-->
            </div>
            <!--end::Brand-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">
                  <div class="d-flex align-items-stretch flex-shrink-0">
                        <!--begin::Date time-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                              <!--begin::Daterangepicker-->
                              <span class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2" id="kt_dashboard_daterangepicker_title">Today : <?php echo date('l, j F Y') ?></span>
                              <!--end::Daterangepicker-->
                        </div>
                        <!--end::Date Time-->

                        <!--begin::User menu-->
                        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                              <!--begin::Menu wrapper-->
                              <!--begin::User info-->
                              <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin::Name-->
                                    <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                          <span class="text-white fs-8 fw-bolder lh-1"><?= user()->nama ?></span>
                                          <span class="text-muted fs-8 fw-bold lh-1 mb-1"><?= user()->kode_vendor ?></span>

                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-md-40px">
                                          <img src="<?= base_url() ?>/upload/display_picture/<?= user()->image ?>" alt="image" />
                                    </div>
                                    <!--end::Symbol-->
                              </div>
                              <!--end::User info-->
                              <!--begin::User account menu-->
                              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                          <a href="/profile/edit" class="menu-link px-5">
                                                Edit Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                          <a href="/profile/change_password" class="menu-link px-5">
                                                Ubah Password</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                          <a href="/logout" class="menu-link px-5">Sign Out</a>
                                    </div>
                                    <!--end::Menu item-->
                              </div>
                              <!--end::User account menu-->
                              <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                  </div>
            </div>
            <!--end::Topbar-->
      </div>
      <!--end::Container-->
</div>