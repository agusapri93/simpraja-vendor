<?php if (in_array('pihak-ketiga', user()->getRoles())) : ?>
      <!--begin::Aside menu-->
      <div class="aside-menu flex-column-fluid px-5">
            <div class="hover-scroll-overlay-y my-5 pe-4 me-n4" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="{lg: '75px'}">
                  <!--begin::Menu-->
                  <div class="menu menu-column menu-rounded fw-bold fs-6" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                              <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps Menu
                                    </span>
                              </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item">
                              <span class="menu-link">
                                    <span class="menu-icon">
                                          <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                          <img src="<?= base_url() ?>/assets/media/icons/duotune/abstract/abs026.svg" />
                                          <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title" onclick="window.location.href='/';">Home</span>
                              </span>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                              <span class="menu-link">
                                    <span class="menu-icon">
                                          <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                          <img src="<?= base_url() ?>/assets/media/icons/duotune/general/gen002.svg" />
                                          <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Clearing House</span>
                                    <span class="menu-arrow"></span>
                              </span>
                              <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                          <a class="menu-link" href="/clearinghouse">
                                                <span class="menu-bullet ">
                                                      <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title ">Daftar Laporan</span>
                                          </a>
                                    </div>
                              </div>
                        </div>

                  </div>
                  <!--end::Menu-->
            </div>

      </div>
      <!--end::Aside menu-->
      <!--begin::Footer-->
      <div class="aside-footer flex-column-auto pt-2 pb-5 px-5 rounded-bottom" style="background-color: black;" id="kt_aside_footer">
            <!--begin::Menu-->
            <div class="d-flex justify-content-center">
                  <button type="button" class="btn btm-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Log Out" onclick="window.location.href='/logout';">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                        <i class="bi bi-box-arrow-right bolder fs-2tx"></i>
                        <!--end::Svg Icon-->
                  </button>
            </div>
            <!--end::Menu-->
      </div>
      <!--end::Footer-->
<?php endif; ?>