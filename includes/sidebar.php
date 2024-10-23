<nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
          <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="fw-semibold text-white tracking-wide" href="index.html">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
              <span class="smini-hidden">
                Smart<span class="opacity-75">coop</span>
              </span>
            </a>
            <!-- END Logo -->

            <!-- Options -->
            <div>
              <!-- Toggle Sidebar Style -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
              </button>
              <!-- END Toggle Sidebar Style -->

              <!-- Dark Mode -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                <i class="far fa-moon" id="dark-mode-toggler"></i>
              </button>
              <!-- END Dark Mode -->

              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
              <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times-circle"></i>
              </button>
              <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
          </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon fa fa-location-arrow"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>
              <li class="nav-main-heading">PENTADBIRAN</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-border-all"></i>
                  <span class="nav-main-link-name">Keanggotaan</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_styles.html">
                      <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Permohonan Baru</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_options.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Kelulusan Permohonan</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_forms.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Kemaskini Anggota</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_themed.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Potongan Anggota</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Laporan Anggota</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                        <span style="position: absolute; left: -15px; font-size: 14px;">></span>
                          <span class="nav-main-link-name">Laporan Permohonan</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                        <span style="position: absolute; left: -15px; font-size: 14px;">></span>
                          <span class="nav-main-link-name">Laporan Kelulusan</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Anggota Berhenti</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                        <span style="position: absolute; left: -15px; font-size: 14px;">></span>
                          <span class="nav-main-link-name">Rekod Berhenti</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                        <span style="position: absolute; left: -15px; font-size: 14px;">></span>
                          <span class="nav-main-link-name">Senarai Berhenti</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                        <span style="position: absolute; left: -15px; font-size: 14px;">></span>
                          <span class="nav-main-link-name">Laporan Berhenti</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-boxes"></i>
                  <span class="nav-main-link-name">Transaksi</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_tiles.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Bayaran Anggota</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_stats.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Bayaran Pelbagai</span>
                    </a>
                  </li>
                  <hr>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_media.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Terimaan Anggota</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_users.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Terimaan Pelbagai</span>
                    </a>
                  </li>
                  <hr>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_blog.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Jernal Anggota</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_various.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Daftar Jernal Pelbagai</span>
                    </a>
                  </li>
                  <hr>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_various.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Buku Tunai</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_various.html">
                    <span style="content: '•'; position: absolute; left: -12px; font-size: 14px;">•</span>
                      <span class="nav-main-link-name">Proses Transaksi</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-vector-square"></i>
                  <span class="nav-main-link-name">Layout</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Page</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_default.html">
                          <span class="nav-main-link-name">Default</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_flipped.html">
                          <span class="nav-main-link-name">Flipped</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                          <span class="nav-main-link-name">Native Scrolling</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Main Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                          <span class="nav-main-link-name">Full Width</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                          <span class="nav-main-link-name">Narrow</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                          <span class="nav-main-link-name">Boxed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Content</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_side_left.html">
                          <span class="nav-main-link-name">Left</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_content_side_right.html">
                          <span class="nav-main-link-name">Right</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Hero</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Color</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_color_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_color_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Image</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_image_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_image_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Video</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_video_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_hero_video_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Header</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_fixed_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_light.html">
                              <span class="nav-main-link-name">Light</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_light_glass.html">
                              <span class="nav-main-link-name">Light Glass</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_dark.html">
                              <span class="nav-main-link-name">Dark</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_header_static_dark_glass.html">
                              <span class="nav-main-link-name">Dark Glass</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Footer</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_footer_static.html">
                          <span class="nav-main-link-name">Static</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_footer_fixed.html">
                          <span class="nav-main-link-name">Fixed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sidebar</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                          <span class="nav-main-link-name">Mini</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_light.html">
                          <span class="nav-main-link-name">Light</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                          <span class="nav-main-link-name">Dark</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                          <span class="nav-main-link-name">Hidden</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Side Overlay</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                          <span class="nav-main-link-name">Visible</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                          <span class="nav-main-link-name">Hover Mode</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                          <span class="nav-main-link-name">No Page Overlay</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_layout_api.html">
                      <span class="nav-main-link-name">API</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Interface</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-flask"></i>
                  <span class="nav-main-link-name">Elements</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_icons.html">
                      <span class="nav-main-link-name">Icon Packs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_grid.html">
                      <span class="nav-main-link-name">Grid</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_typography.html">
                      <span class="nav-main-link-name">Typography</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation.html">
                      <span class="nav-main-link-name">Navigation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_navigation_horizontal.html">
                      <span class="nav-main-link-name">Horizontal Nav</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_mega_menu.html">
                      <span class="nav-main-link-name">Mega Menu</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tabs.html">
                      <span class="nav-main-link-name">Tabs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons.html">
                      <span class="nav-main-link-name">Buttons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_buttons_groups.html">
                      <span class="nav-main-link-name">Button Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_dropdowns.html">
                      <span class="nav-main-link-name">Dropdowns</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_progress.html">
                      <span class="nav-main-link-name">Progress</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_alerts.html">
                      <span class="nav-main-link-name">Alerts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_tooltips.html">
                      <span class="nav-main-link-name">Tooltips</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_popovers.html">
                      <span class="nav-main-link-name">Popovers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_accordion.html">
                      <span class="nav-main-link-name">Accordion</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_modals.html">
                      <span class="nav-main-link-name">Modals</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_images.html">
                      <span class="nav-main-link-name">Images Overlay</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_timeline.html">
                      <span class="nav-main-link-name">Timeline</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_ribbons.html">
                      <span class="nav-main-link-name">Ribbons</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_animations.html">
                      <span class="nav-main-link-name">Animations</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_backgrounds.html">
                      <span class="nav-main-link-name">Backgrounds</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_color_themes.html">
                      <span class="nav-main-link-name">Color Themes</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-grip-horizontal"></i>
                  <span class="nav-main-link-name">Tables</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_styles.html">
                      <span class="nav-main-link-name">Styles</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_responsive.html">
                      <span class="nav-main-link-name">Responsive</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_helpers.html">
                      <span class="nav-main-link-name">Helpers</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_pricing.html">
                      <span class="nav-main-link-name">Pricing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_datatables.html">
                      <span class="nav-main-link-name">DataTables</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-sticky-note"></i>
                  <span class="nav-main-link-name">Forms</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_elements.html">
                      <span class="nav-main-link-name">Elements</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_layouts.html">
                      <span class="nav-main-link-name">Layouts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_input_groups.html">
                      <span class="nav-main-link-name">Input Groups</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_plugins.html">
                      <span class="nav-main-link-name">Plugins</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_editors.html">
                      <span class="nav-main-link-name">Editors</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">CKEditor 5</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_forms_ckeditor5_inline.html">
                          <span class="nav-main-link-name">Inline</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_forms_validation.html">
                      <span class="nav-main-link-name">Validation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Extend</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-wrench"></i>
                  <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_onboarding.html">
                      <span class="nav-main-link-name">Onboarding</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_nestable.html">
                      <span class="nav-main-link-name">Nestable</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_dialogs.html">
                      <span class="nav-main-link-name">Dialogs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_notifications.html">
                      <span class="nav-main-link-name">Notifications</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_loaders.html">
                      <span class="nav-main-link-name">Loaders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_charts.html">
                      <span class="nav-main-link-name">Charts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_gallery.html">
                      <span class="nav-main-link-name">Gallery</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_sliders.html">
                      <span class="nav-main-link-name">Sliders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_carousel.html">
                      <span class="nav-main-link-name">Carousel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_offcanvas.html">
                      <span class="nav-main-link-name">Offcanvas</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_rating.html">
                      <span class="nav-main-link-name">Rating</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_appear.html">
                      <span class="nav-main-link-name">Appear</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_calendar.html">
                      <span class="nav-main-link-name">Calendar</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                      <span class="nav-main-link-name">Image Cropper</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                      <span class="nav-main-link-name">Vector Maps</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                      <span class="nav-main-link-name">Syntax Highlighting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-cog"></i>
                  <span class="nav-main-link-name">Main Menu</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-inbox"></i>
                      <span class="nav-main-link-name">1.1 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-fire"></i>
                      <span class="nav-main-link-name">1.2 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="#">
                      <i class="nav-main-link-icon fa fa-share-alt"></i>
                      <span class="nav-main-link-name">1.3 Item</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <span class="nav-main-link-name">Sub Level 2</span>
                      <span class="nav-main-link-badge badge rounded-pill bg-primary">3</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-tag"></i>
                          <span class="nav-main-link-name">2.1 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-info">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-chart-pie"></i>
                          <span class="nav-main-link-name">2.2 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-danger">2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="#">
                          <i class="nav-main-link-icon fa fa-sticky-note"></i>
                          <span class="nav-main-link-name">2.3 Item</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-warning">3</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                          <span class="nav-main-link-name">Sub Level 3</span>
                        </a>
                        <ul class="nav-main-submenu">
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-map"></i>
                              <span class="nav-main-link-name">3.1 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-coffee"></i>
                              <span class="nav-main-link-name">3.2 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                              <i class="nav-main-link-icon fa fa-user-astronaut"></i>
                              <span class="nav-main-link-name">3.3 Item</span>
                            </a>
                          </li>
                          <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                              <span class="nav-main-link-name">Sub Level 4</span>
                            </a>
                            <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-heart"></i>
                                  <span class="nav-main-link-name">4.1 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-search"></i>
                                  <span class="nav-main-link-name">4.2 Item</span>
                                </a>
                              </li>
                              <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                  <i class="nav-main-link-icon fa fa-microphone"></i>
                                  <span class="nav-main-link-name">4.3 Item</span>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Pages</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-rocket"></i>
                  <span class="nav-main-link-name">Dashboards</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                      <span class="nav-main-link-name">Corporate v1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_social.html">
                      <span class="nav-main-link-name">Social</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_messages.html">
                      <span class="nav-main-link-name">Messages</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_dark.html">
                      <span class="nav-main-link-name">Dark</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_minimal.html">
                      <span class="nav-main-link-name">Minimal</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_modern.html">
                      <span class="nav-main-link-name">Modern</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_classic_boxed.html">
                      <span class="nav-main-link-name">Classic Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_banking.html">
                      <span class="nav-main-link-name">Banking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_crypto.html">
                      <span class="nav-main-link-name">Crypto</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_hosting.html">
                      <span class="nav-main-link-name">Hosting</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_booking.html">
                      <span class="nav-main-link-name">Booking</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_gaming.html">
                      <span class="nav-main-link-name">Gaming</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_tasks.html">
                      <span class="nav-main-link-name">Tasks</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_medical.html">
                      <span class="nav-main-link-name">Medical</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_travel.html">
                      <span class="nav-main-link-name">Travel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_social_compact.html">
                      <span class="nav-main-link-name">Social Compact</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_chat.html">
                      <span class="nav-main-link-name">Chat</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_analytics.html">
                      <span class="nav-main-link-name">Analytics</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_corporate_slim.html">
                      <span class="nav-main-link-name">Corporate Slim</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_wp_post.html">
                      <span class="nav-main-link-name">WP Post</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="db_file_hosting.html">
                      <span class="nav-main-link-name">File Hosting</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-user-friends"></i>
                  <span class="nav-main-link-name">Auth</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_auth_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin.html">
                      <span class="nav-main-link-name">Sign In</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin_box.html">
                      <span class="nav-main-link-name">Sign In Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signin_box_alt.html">
                      <span class="nav-main-link-name">Sign In Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup.html">
                      <span class="nav-main-link-name">Sign Up</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup_box.html">
                      <span class="nav-main-link-name">Sign Up Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_signup_box_alt.html">
                      <span class="nav-main-link-name">Sign Up Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock.html">
                      <span class="nav-main-link-name">Lock Screen</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock_box.html">
                      <span class="nav-main-link-name">Lock Screen Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_lock_box_alt.html">
                      <span class="nav-main-link-name">Lock Screen Box Alt</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder.html">
                      <span class="nav-main-link-name">Pass Reminder</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder_box.html">
                      <span class="nav-main-link-name">Pass Reminder Box</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_auth_reminder_box_alt.html">
                      <span class="nav-main-link-name">Pass Reminder Box Alt</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-ghost"></i>
                  <span class="nav-main-link-name">Error</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_error_all.html">
                      <span class="nav-main-link-name">All</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_400.html">
                      <span class="nav-main-link-name">400</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_401.html">
                      <span class="nav-main-link-name">401</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_403.html">
                      <span class="nav-main-link-name">403</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_404.html">
                      <span class="nav-main-link-name">404</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_500.html">
                      <span class="nav-main-link-name">500</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_error_503.html">
                      <span class="nav-main-link-name">503</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon fa fa-coffee"></i>
                  <span class="nav-main-link-name">Get Started</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend.html">
                      <span class="nav-main-link-name">Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_backend_boxed.html">
                      <span class="nav-main-link-name">Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_landing.html">
                      <span class="nav-main-link-name">Landing</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend.html">
                      <span class="nav-main-link-name">RTL Backend</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_backend_boxed.html">
                      <span class="nav-main-link-name">RTL Backend Boxed</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="gs_rtl_landing.html">
                      <span class="nav-main-link-name">RTL Landing</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>