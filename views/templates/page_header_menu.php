<!-- DOC: This file contain 
		1- Menue
  -->	

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
            <div class="kt-header-mobile__logo">
				<a href="<?php echo base_url(); ?>index.php/dashboard/dashboard_vw">
					<img alt="Logo" width="30px" src="<?php echo base_url("assets/img/logoTH2.png"); ?>" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>
		<!-- end:: Header Mobile -->
					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-header__top">
							<div class="kt-container">

								<!-- begin:: Brand -->
								<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
									<div class="kt-header__brand-logo">
										<a href="<?php echo base_url(); ?>index.php/dashboard/dashboard_vw">
											<img alt="Logo" src="<?php echo base_url("assets/img/logoTH.png"); ?>" class="kt-header__brand-logo-default" />
											<img alt="Logo" src="<?php echo base_url("assets/img/logoTH2.png"); ?>" class="kt-header__brand-logo-sticky" />
										</a>
									</div>
								</div>

								<!-- end:: Brand -->

								<!-- begin:: Header Topbar -->
								<div class="kt-header__topbar">

									<!--begin: Search -->
									<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop" id="kt_quick_search_toggle">
										<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
											<span class="kt-header__topbar-icon">

												<!--<i class="flaticon2-search-1"></i>-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect id="bound" x="0" y="0" width="24" height="24" />
														<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg> </span>
										</div>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
											<div class="kt-quick-search kt-quick-search--inline" id="kt_quick_search_inline">
												<form method="get" class="kt-quick-search__form">
													<div class="input-group">
														<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
														<input type="text" class="form-control kt-quick-search__input" placeholder="بحث...">
														<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
													</div>
												</form>
												<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
												</div>
											</div>
										</div>
									</div>

									<!--end: Search -->

									<!--begin: Notifications -->
									<div class="kt-header__topbar-item dropdown">
										<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
											<span class="kt-header__topbar-icon  kt-pulse kt-pulse--warning">

												<!--<i class="flaticon2-bell-alarm-symbol"></i>-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect id="bound" x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000" />
													</g>
												</svg> <span class="kt-pulse__ring"></span>
											</span>
										</div>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
											<form>

												<!--begin: Head -->
												<div class="kt-head kt-head--skin-dark kt-head--fit-x kt-head--fit-b" style="background:#374afb;">
													<h3 class="kt-head__title">
														التنبيهات
														&nbsp;
														<span class="btn btn-success btn-sm btn-bold btn-font-md">23 جديد</span>
													</h3>
													<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-success kt-notification-item-padding-x" role="tablist">
														<li class="nav-item">
															<a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications" role="tab" aria-selected="true">هام</a>
														</li>
													</ul>
												</div>

												<!--end: Head -->
												<div class="tab-content">
													<!--<div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
														<div class="kt-notification kt-margin-t-10 kt-margin-b-10 kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-line-chart kt-font-success"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		دخول 3 حالات جديدة لمركز الحجر
																	</div>
																	<div class="kt-notification__item-time">
																		2 hrs ago
																	</div>
																</div>
															</a>
															<a href="#" class="kt-notification__item">
																<div class="kt-notification__item-icon">
																	<i class="flaticon2-box-1 kt-font-brand"></i>
																</div>
																<div class="kt-notification__item-details">
																	<div class="kt-notification__item-title">
																		مغادرة 200 حالة من مركز حجر الشمال
																	</div>
																	<div class="kt-notification__item-time">
																		3 hrs ago
																	</div>
																</div>
															</a>
														</div>
													</div>//-->
											</div>
											</form>
										</div>
									</div>

									<!--end: Notifications -->

									<!--begin: User bar -->
									<div class="kt-header__topbar-item kt-header__topbar-item--user">
										<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px" aria-expanded="false">
											<span class="kt-header__topbar-welcome"><?php echo $_SESSION['my_USERNAME']; ?></span>
											<span class="kt-header__topbar-username"></span>
<!--											<img class="kt-hidden" alt="Pic" src="./assets/media/users/300_21.jpg">//-->

											<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
											<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden-"><i class="flaticon2-user"></i></span>
										</div>
										<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">


											<!--begin: Navigation -->
											<div class="kt-notification">
												<div class="kt-notification__custom kt-space-between">
													<a href="<?php echo base_url(); ?>index.php/Logout_cont/logout_view" class="btn btn-label btn-label-brand btn-sm btn-bold">تسجيل الخروج</a>
												</div>
											</div>

											<!--end: Navigation -->
										</div>
									</div>

									<!--end: User bar -->
								</div>

								<!-- end:: Header Topbar -->
							</div>
						</div>
						<div class="kt-header__bottom">
							<div class="kt-container">

								<!-- begin: Header Menu -->
								<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
								<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
									<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
										<ul class="kt-menu__nav ">
                                            	<li class="kt-menu__item  kt-menu__item--open kt-menu__item--here "><a href="<?php echo base_url(); ?>index.php/dashboard/dashboard_vw" class="kt-menu__link"><span class="kt-menu__link-text">الرئيسية</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>

											</li>
                                    <?php
                                        foreach ($_SESSION["my_menu"] as $menu_iteam) {
                                    ?>
                                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text"><?php echo $menu_iteam['MENU_NAME']; ?></span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
												<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
													<ul class="kt-menu__subnav">
                                                        <?php foreach ($menu_iteam["screen"] as $screen) { ?>
                                              <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url().$screen['SCREEN_URL']; ?>" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text"><?php echo $screen['SCREEN_NAME']; ?></span></a></li>
                                                <?php } ?>
													</ul>
												</div>

                                        </li>
                                        <?php } ?>
                                    </ul>
									</div>
									<div class="kt-header-toolbar">
										<div class="kt-quick-search" id="kt_quick_search_default">
											<form method="get" class="kt-quick-search__form">
												<div class="input-group">
													<div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
													<input type="text" class="form-control kt-quick-search__input" placeholder="بحث...">
													<div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
												</div>
											</form>
											<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px"></div>
											<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
												<div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="300" data-mobile-height="200">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- end: Header Menu -->
							</div>
						</div>
					</div>
					<!-- end:: Header -->
