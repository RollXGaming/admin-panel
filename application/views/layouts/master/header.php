<?php $recentViews=getRecentViews(getLoginSession('id'));?>
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-animation="false" data-kt-sticky-offset="{default: '0px', lg: '0px'}">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-center justify-content-between" id="kt_app_header_container">
        <!--begin::Left Section-->
        <div class="d-flex align-items-center d-none">
            <!-- Sidebar Toggle for Mobile -->
            <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-1" id="kt_app_sidebar_mobile_toggle">
                    <i class="ki-outline ki-abstract-14 fs-2"></i>
                </div>
            </div>
            <!-- Logo -->
            <a href="<?= site_url('dashboard') ?>" class="d-flex align-items-center">
                <img alt="Logo" src="<?= base_url('assets/logo.png') ?>" class="h-30px theme-light-show" />
                <img alt="Logo" src="<?= base_url('assets/logo.png') ?>" class="h-30px theme-dark-show" />
            </a>
        </div>
        <!--end::Left Section-->

        <!--begin::Center Section-->
        <div class="d-none d-lg-flex align-items-center">
            <span class="text-gray-500 fs-7 fw-semibold me-4">
                <?= date('l, M d Y') ?> | <?= date('h:i A') ?> | GMT+07:00
            </span>
        </div>
        <!--end::Center Section-->

        <!--begin::Right Section-->
        <div class="d-flex align-items-center">
            <!-- Balance -->
            <div class="me-4">
                <div class="d-flex align-items-center">
                	<button class="btn btn-light-success">
	                    <i class="ki-outline ki-wallet fs-2 text-success me-2"></i>
	                    <span class="fw-semibold text-gray-800 fs-6">Rp 1,450,345,871</span>
	                </button>
                </div>
            </div>

            
        </div>
        <!--end::Right Section-->
    </div>
    <!--end::Header container-->
</div>
