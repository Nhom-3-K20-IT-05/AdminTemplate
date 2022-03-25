<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('partials.header')  
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('partials.menu')       
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Extended UI /</span> Text Divider</h4>

              <div class="row">
                <!-- Basic -->
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <h5 class="card-header">Basic</h5>
                    <div class="card-body">
                      <div class="divider">
                        <div class="divider-text">Text</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Basic -->

                <!-- Text Alignment -->
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <h5 class="card-header">Alignment</h5>
                    <div class="card-body">
                      <div class="divider text-start">
                        <div class="divider-text">Start</div>
                      </div>
                      <div class="divider text-start-center">
                        <div class="divider-text">Start-Center</div>
                      </div>
                      <div class="divider">
                        <div class="divider-text">Center (Default)</div>
                      </div>
                      <div class="divider text-end-center">
                        <div class="divider-text">End-Center</div>
                      </div>
                      <div class="divider text-end">
                        <div class="divider-text">End</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Text Alignment -->

                <!-- Divider Colors -->
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <h5 class="card-header">Colors</h5>
                    <div class="card-body">
                      <div class="divider divider-primary">
                        <div class="divider-text">Primary</div>
                      </div>
                      <div class="divider divider-success">
                        <div class="divider-text">Success</div>
                      </div>
                      <div class="divider divider-danger">
                        <div class="divider-text">Danger</div>
                      </div>
                      <div class="divider divider-warning">
                        <div class="divider-text">Warning</div>
                      </div>
                      <div class="divider divider-info">
                        <div class="divider-text">Info</div>
                      </div>
                      <div class="divider divider-dark">
                        <div class="divider-text">Dark</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Divider Colors -->

                <!-- Icons -->
                <div class="col-md-12 mb-4">
                  <div class="card">
                    <h5 class="card-header">Icons</h5>
                    <div class="card-body">
                      <div class="divider text-start">
                        <div class="divider-text">
                          <i class="bx bx-sun"></i>
                        </div>
                      </div>
                      <div class="divider text-start-center">
                        <div class="divider-text">
                          <i class="bx bx-crown"></i>
                        </div>
                      </div>
                      <div class="divider">
                        <div class="divider-text">
                          <i class="bx bx-star"></i>
                        </div>
                      </div>
                      <div class="divider text-end-center">
                        <div class="divider-text">
                          <i class="bx bx-coffee-togo"></i>
                        </div>
                      </div>
                      <div class="divider text-end">
                        <div class="divider-text">
                          <i class="bx bx-cut bx-rotate-180"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Icons -->

                <!-- Icons -->
                <div class="col-md-12">
                  <div class="card">
                    <h5 class="card-header">Styles</h5>
                    <div class="card-body">
                      <div class="divider">
                        <div class="divider-text">Solid (Default)</div>
                      </div>
                      <div class="divider divider-dotted">
                        <div class="divider-text">Dotted</div>
                      </div>
                      <div class="divider divider-dashed">
                        <div class="divider-text">Dashed</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Icons -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>
<!-- Core JS -->
@include('partials.script')
  </body>
</html>
