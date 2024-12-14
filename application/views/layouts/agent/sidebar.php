<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column mt-lg-4 ps-2 pe-2 ps-lg-7 pe-lg-4" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<div class="app-sidebar-logo flex-shrink-0 d-md-flex flex-center align-items-center" id="kt_app_sidebar_logo">
		<!--begin::Logo-->
		<a href="<?=site_url('dashboard')?>">
			<img alt="Logo" src="<?=base_url('assets/logo.png')?>" class="h-100px d-none d-sm-inline app-sidebar-logo-default theme-light-show" />
			<img alt="Logo" src="<?=base_url('assets/logo.png')?>" class="h-100px theme-dark-show" />
		</a>
		<!--end::Logo-->
		<!--begin::Aside toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
			<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
				<i class="ki-outline ki-abstract-14 fs-1"></i>
			</div>
		</div>
		<!--end::Aside toggle-->
	</div>
	<!--begin::sidebar menu-->
	<div class="app-sidebar-menu flex-column-fluid">
		<div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
			<div class="menu menu-column menu-rounded menu-sub-indention fw-bold px-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<!--begin:Menu item-->
				<div class="menu-item">
				    <a class="menu-link" href="<?=site_url('agent/dashboard')?>" data-activeurl="dashboard">
				        <span class="menu-icon">
				            <i class="ki-solid ki-home fs-2"></i>
				        </span>
				        <span class="menu-title">Dashboard</span>
				    </a>
				</div>
				<!--end:Menu item-->

				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				    <span class="menu-link">
				        <span class="menu-icon">
				            <i class="ki-solid ki-profile-user fs-2"></i>
				        </span>
				        <span class="menu-title">Players</span>
				        <span class="menu-arrow"></span>
				    </span>
				    <div class="menu-sub menu-sub-accordion">
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/player/list')?>" data-activeurl="player/list">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Players List</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/player/top')?>" data-activeurl="player/top">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Top Players</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/player/referal_list')?>" data-activeurl="player/referal_list">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Referral List</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/player/blacklist')?>" data-activeurl="player/blacklist">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Blacklisted Players</span>
				            </a>
				        </div>

				    </div>
				</div>
				<!--end:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				    <span class="menu-link">
				        <span class="menu-icon">
				            <i class="ki-solid ki-rocket fs-2"></i>
				        </span>
				        <span class="menu-title">Transaction</span>
				        <span class="menu-arrow"></span>
				    </span>
				    <div class="menu-sub menu-sub-accordion">
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/transaction/deposit')?>" data-activeurl="transaction/deposit">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Deposit</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/transaction/wd')?>" data-activeurl="transaction/wd">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">WD</span>
				            </a>
				        </div>
				    </div>
				</div>

				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				    <span class="menu-link">
				        <span class="menu-icon">
				            <i class="ki-solid ki-chart fs-2"></i>
				        </span>
				        <span class="menu-title">Reports</span>
				        <span class="menu-arrow"></span>
				    </span>
				    <div class="menu-sub menu-sub-accordion">
				    	<div class="menu-item d-none">
				            <a class="menu-link" href="<?=site_url('agent/report/referal_bonus')?>" data-activeurl="report/referal_bonus">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Referal Bonus Report</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/report/agent_daily')?>" data-activeurl="report/agent_daily">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Agent Daily Report</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/report/agent_win_lose')?>" data-activeurl="report/agent_win_lose">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Agent Win Lose Report</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/report/game_win_lose')?>" data-activeurl="report/game_win_lose">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Game Win Lose Report</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/report/player_win_lose')?>" data-activeurl="report/player_win_lose">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Player Win Lose Report</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/report/agent_invoice')?>" data-activeurl="report/agent_invoice">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Agent Invoice</span>
				            </a>
				        </div>
				    </div>
				</div>
				<!--end:Menu item-->

				<!--begin:Menu item-->
				<div class="menu-item">
				    <a class="menu-link" href="<?=site_url('agent/setting/games')?>" data-activeurl="setting/games">
				        <span class="menu-icon">
				            <i class="ki-solid ki-simcard-2 fs-2"></i> <!-- Game Icon -->
				        </span>
				        <span class="menu-title">Game Setting</span>
				    </a>
				</div>
				<!--end:Menu item-->

				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
				    <span class="menu-link">
				        <span class="menu-icon">
				            <i class="ki-solid ki-lock fs-2"></i>
				        </span>
				        <span class="menu-title">Security & Logs</span>
				        <span class="menu-arrow"></span>
				    </span>
				    <div class="menu-sub menu-sub-accordion">
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/security/ip')?>" data-activeurl="security/ip">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Whitelist/Blacklist IP</span>
				            </a>
				        </div>
				        <div class="menu-item">
				            <a class="menu-link" href="<?=site_url('agent/security/activitylogs')?>" data-activeurl="security/activitylogs">
				                <span class="menu-bullet">
				                    <span class="bullet bullet-dot"></span>
				                </span>
				                <span class="menu-title">Activity Logs</span>
				            </a>
				        </div>
				    </div>
				</div>
				<!--end:Menu item-->

				<!--begin:Menu item-->
				<div class="menu-item">
				    <a class="menu-link" href="<?=site_url('agent/account/mybalance')?>" data-activeurl="account/mybalance">
				        <span class="menu-icon">
				            <i class="ki-solid ki-wallet fs-2"></i> <!-- Money Icon -->
				        </span>
				        <span class="menu-title">My Balance</span>
				    </a>
				</div>
				<!--end:Menu item-->

				<!--begin:Menu item-->
				<div class="menu-item">
				    <a class="menu-link" href="<?=site_url('agent/staff/list')?>" data-activeurl="staff/list">
				        <span class="menu-icon">
				            <i class="ki-solid ki-people fs-2"></i> <!-- Staff Icon -->
				        </span>
				        <span class="menu-title">My Staffs</span>
				    </a>
				</div>
				<!--end:Menu item-->

				
			</div>
		</div>
	</div>
	<div class="app-sidebar-footer d-flex align-items-center px-8 pb-10" id="kt_app_sidebar_footer">
		<!--begin::User-->
		<div class="">
			<!--begin::User info-->
			<div class="d-flex align-items-center" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
				<div class="d-flex flex-center cursor-pointer symbol symbol-circle symbol-40px">
					<!-- <img src="assets/media/avatars/300-1.jpg" alt="image" /> -->
				</div>
				<!--begin::Name-->
				<div class="d-flex flex-column align-items-start justify-content-center ms-3">
					<span class="text-gray-500 fs-8 fw-semibold">Hello</span>
					<a href="#" class="text-gray-800 fs-7 fw-bold text-hover-primary"><?=$this->session->login->name?></a>
					<span class="badge badge-primary">AGENT</span>
				</div>
				<!--end::Name-->
			</div>
			<!--end::User info-->
			<!--begin::User account menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 w-275px" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content d-flex align-items-center px-3">
						<!--begin::Avatar-->
						<!-- <div class="symbol symbol-50px me-5">
							<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
						</div> -->
						<!--end::Avatar-->
						<!--begin::Username-->
						<div class="d-flex flex-column">
							<div class="fw-bold d-flex align-items-center fs-5"><?=$this->session->login->name?></div>
							<!-- <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">jeroen@kt.com</a> -->
						</div>
						<!--end::Username-->
					</div>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator my-2"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="<?=site_url('profile/view')?>" class="menu-link px-5">View Profile</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator my-2"></div>
				<!--end::Menu separator-->
				
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="<?=site_url('auth/signout')?>" class="menu-link px-5">Sign Out</a>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::User account menu-->
		</div>
		<!--end::User-->
	</div>
	<!--end::Footer-->
</div>
<!--end::Sidebar-->
<script>
	$(document).ready(function(){
		<?php if(isset($activeurl)){?>
			var activeUrl = "<?= $activeurl ?>"; // Ensure $activeurl is passed from the controller

	        // Find the active menu link
	        var $activeLink = $('.menu-link[data-activeurl="' + activeUrl + '"]');
	        if ($activeLink.length) {
	            // Add active class to the current menu link
	            $activeLink.addClass('active');

	            // Check if it is a submenu and open the parent menu
	            var $parentMenuAccordion = $activeLink.closest('.menu-accordion');
	            if ($parentMenuAccordion.length) {
	                $parentMenuAccordion.addClass('hover show here');
	            }
	            else{
	            	$activeLink.closest('.menu-item').addClass('here');
	            	$activeLink.children().css('color','white');
	            	$activeLink.find('i').css('color','white');
	            }
	        }
		<?php } ?>
	});
</script>