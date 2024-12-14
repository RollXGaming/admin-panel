<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="#"/>
		<title>Rolex Gaming</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="<?=base_url('assets/media/logos/favicon.ico')?>" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.bootstrap5.min.css" rel="stylesheet">
		<!--begin:Bootstrap Tour-->
		<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/css/bootstrap-tour.min.css" rel="stylesheet"> -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.0.0/introjs.min.css" rel="stylesheet">


		<!--end:Bootstrap Tour-->

		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?=base_url('assets/plugins/global/plugins.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?=base_url('assets/plugins/custom/datatables/datatables.bundle.css')?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		<?php $this->load->view('layouts/custom-css')?>
		
		<!--begin::Javascript-->
		<script>var hostUrl = "<?=base_url('assets/')?>";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?=base_url('assets/plugins/global/plugins.bundle.js')?>"></script>
		<script src="<?=base_url('assets/js/scripts.bundle.js')?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.bootstrap5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.colVis.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
		<!--end::Vendors Javascript-->

		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.12.0/js/bootstrap-tour.min.js"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.0.0/intro.min.js"></script>

		<script src="<?=base_url('assets/plugins/custom/datatables/datatables.bundle.js')?>"></script>
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?=base_url('assets/js/widgets.bundle.js')?>"></script>
		<script src="<?=base_url('assets/js/custom/widgets.js')?>"></script>
		<script src="<?=base_url('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')?>"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<!-- Moment.js (Required for Date Range Picker) -->
		<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

		<!-- Date Range Picker -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
		<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<!--end::Custom Javascript-->
		<script>
			$(document).ready(function(){
				$(".menu-url").click(function(){
					window.location=$(this).data("href");
				});
				$(".select2").select2();
				$(".select2-tag").select2({
					tags: true,
					createTag: function (params) {
				    var term = $.trim(params.term);

				    if (term === '') {
				      return null;
				    }

				    return {
				      id: term,
				      text: term,
				      newTag: true // add additional parameters
				    }
				  }
				});
			});
			
		</script>
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<?php if(!isset($hideheader) || !$hideheader){?>
					<?php $this->load->view('layouts/master/header',$view)?>
				<?php } ?>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper" style="<?php if(isset($hideheader) &&$hideheader){echo 'margin-top:40px!important;';}?> <?php if(isset($hidesidebar) &&$hidesidebar){echo 'margin-left:10px!important;';}?>">
					
					<?php if(!isset($hidesidebar) || !$hidesidebar){?>
						<?php 
						$this->load->view('layouts/master/sidebar',$view);
						?>
					<?php } ?>
					<?=showFlashData()?>
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<?= $view['content']?>
					</div>
					<?php $this->load->view('layouts/master/modal',$view)?>
					<?php $this->load->view('layouts/master/footer',$view)?>
				</div>
				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
	</body>
	<!--end::Body-->
	<script>
		function startloading(loaderid){
			$("#"+loaderid).removeClass("hidden");
		}
		function stoploading(loaderid){
			$("#"+loaderid).addClass("hidden");
		}
		// startloading();
		// $(document).ready(function () {
		//     // Iterate through all <td> and <th> elements
		//     $('td, th').each(function () {
		//         // Skip the first <td> in every <tr>
		//         if ($(this).is('td') && $(this).is(':first-child')) {
		//             return; // Skip this <td> and move to the next
		//         }

		//         // Get the text content of the cell
		//         const cellText = $(this).text().trim();

		//         // Regular expression to check for valid numbers (including those starting with +, and formatted numbers)
		//         // Matches numbers with optional +/-, thousand separators, and decimals (e.g., +1,000 or -1.23)
		//         const numberRegex = /^[+-]?\d{1,3}(,\d{3})*(\.\d+)?$/;

		//         // Check if the cell content matches the number pattern
		//         if (numberRegex.test(cellText)) {
		//             // Remove thousand separators and parse as a float
		//             const value = parseFloat(cellText.replace(/,/g, ''));

		//             if (!isNaN(value)) {
		//                 if (value > 0) {
		//                     // Change the text color to green if the number is positive
		//                     $(this).css('color', 'green');
		//                 } else if (value < 0) {
		//                     // Change the text color to red if the number is negative
		//                     $(this).css('color', 'red');
		//                 }
		//             }
		//         }
		//     });
		// });




	</script>
</html>