<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/yoraui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 14:53:11 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>YoraUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="http://www.urbanui.com/yoraui/template/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://www.urbanui.com/yoraui/template/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search for anything..." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-outline mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell-outline mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face5.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings "></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-logout"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="mdi mdi-dots-horizontal"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles secondary"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-primary badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="mdi mdi-airplay menu-icon"></i>
              <span class="menu-title">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-invert-colors menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/popups.html">Popups</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/notifications.html">Notifications</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-flask-outline menu-icon"></i>
              <span class="menu-title">Advanced UI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-clipboard-text-outline menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>                
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-chart-donut menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-emoticon-outline menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="mdi mdi-map-outline menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="mdi mdi-file-outline menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Error 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> Error 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
              <i class="mdi mdi-cube-outline menu-icon"></i>
              <span class="menu-title">Apps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/apps/email.html"> Email </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/apps/calendar.html"> Calendar </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/apps/todo.html"> Todo List </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/apps/gallery.html"> Gallery </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
              <div class="d-flex align-items-center">
                <h4 class="mb-0 font-weight-bold">Sales Trends</h4>
                <button class="btn btn-inverse-info tx-12 btn-sm btn-rounded mx-3">Enterprise</button>
                <div class="d-none d-md-flex">
                  <p class="text-muted mb-0 tx-13 cursor-pointer">Home</p>
                  <i class="mdi mdi-chevron-right text-muted"></i>
                  <p class="text-muted mb-0 tx-13 cursor-pointer">Dashboard</p>
                </div>
              </div>
              <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0">
                <div class="dropdown mr-3 d-none d-md-block">
                  <button class="btn btn-sm text-muted border-0 dropdown-toggle px-0" type="button" id="dropdownMenuSizeButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UTC time zone </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                    <h6 class="dropdown-header">Filter</h6>
                    <a class="dropdown-item" href="#">Sales</a>
                    <a class="dropdown-item" href="#">Purchases</a>
                    <a class="dropdown-item" href="#">Returns</a>
                  </div>
                </div>
                <div class="dropdown mr-3 d-none d-md-block">
                  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                    <h6 class="dropdown-header">Filter</h6>
                    <a class="dropdown-item" href="#">Sales</a>
                    <a class="dropdown-item" href="#">Purchases</a>
                    <a class="dropdown-item" href="#">Returns</a>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm mr-3 d-none d-md-block">Download Report</button>
                <button class="btn btn-outline-primary btn-sm  d-none d-md-block">Data Export</button>
              </div>
            </div>
            <div class="d-md-flex align-items-center justify-content-between flex-wrap">
              <div class="d-flex align-items-center">
                <p class="mb-0 font-weight-medium mr-2 d-none d-md-block">Categories :</p>
                <div class="p-1 bg-danger mr-1"></div>
                <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Sales</p>
                <div class="p-1 bg-success mr-1"></div>
                <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Purchases</p>
                <div class="p-1 bg-info mr-1"></div>
                <p class="mb-0 font-weight-medium cursor-pointer mr-3">#Returns</p>
              </div>
              <div class="d-flex mt-3 mt-lg-0">
                <div class="d-none d-md-flex">
                  <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-square-edit-outline icon-sm text-primary"></i>
                    <p class="mb-0 ml-1 text-dark cursor-pointer">Edit</p>
                  </div>
                  <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-cash-usd icon-sm text-danger"></i>
                    <p class="mb-0 ml-1 text-dark cursor-pointer">Plans & billing</p>
                  </div>
                  <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-progress-upload icon-sm text-success"></i>
                    <p class="mb-0 ml-1 text-dark cursor-pointer">Archive</p>
                  </div>
                  <div class="d-flex align-items-center mr-3">
                    <i class="mdi mdi-logout-variant icon-sm text-info"></i>
                    <p class="mb-0 ml-1 text-dark cursor-pointer">Leave</p>
                  </div>
                </div>
                <div class="btn-group mt-3 mt-md-0" role="group" aria-label="Button group">
                  <button type="button" class="btn btn-outline-secondary border">
                    <i class="mdi mdi-magnify text-body"></i>
                  </button>
                  <button type="button" class="btn btn-outline-secondary border">
                    <i class="mdi mdi-reload text-body"></i>
                  </button>
                  <button type="button" class="btn btn-outline-secondary border">
                    <i class="mdi mdi-chart-line text-body"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-8 grid-margin stretch-card">
              <div class="card recent-revenue-card">
                <div class="card-body">
                  <h6 class="card-title">Recent Revenue Board</h6>
                  <p class="mb-4 text-muted">Thes are your most revenue generating customers in the given period. engage them with a special campaign.</p>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="flot-wrapper"><div id="recentRevenueChart" class="flot-chart"></div></div>
                      <div class="more-info">
                        <div><span>Change</span><span>$6.52</span></div>
                        <div><span>Market Cap</span><span>$0.11T</span></div>
                        <div><span>Supply</span><span>17,355,513</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="d-flex align-items-center justify-content-md-center mb-2 mb-md-0">
                        <i class="mdi mdi-flag-variant-outline icon-md mr-3 text-info"></i>
                        <div>
                          <p class="mb-1">Average Order Value</p>
                          <div class="d-flex align-items-center">
                            <h4 class="mb-0 mr-2 font-weight-bold">7234</h4>
                            <p class="tx-12 mb-0 text-info">42.70%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex align-items-center justify-content-md-center mb-2 mb-md-0 mt-2 mt-md-0">
                        <i class="mdi mdi-target icon-md mr-3 text-danger"></i>
                        <div>
                          <p class="mb-1">Coversion Rate</p>
                          <div class="d-flex align-items-center">
                            <h4 class="mb-0 mr-2 font-weight-bold">65.8%</h4>
                            <p class="tx-12 mb-0 text-danger">-32%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="d-flex align-items-center justify-content-md-center mt-2 mt-md-0">
                        <i class="mdi mdi-account-outline icon-md mr-3 text-success"></i>
                        <div>
                          <p class="mb-1">Number of Customers</p>
                          <div class="d-flex align-items-center">
                            <h4 class="mb-0 mr-2 font-weight-bold">24534</h4>
                            <p class="tx-12 mb-0 text-success">41.81%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card">
              <div class="row flex-grow w-100">
                <div class="col-md-6 col-xl-12 grid-margin-md-0 grid-margin-xl grid-margin stretch-card">
                  <div class="card dashboard-special-card">
                    <img src="http://www.urbanui.com/yoraui/template/images/dashboard/oval.svg" class="oval" alt="oval">
                    <img src="http://www.urbanui.com/yoraui/template/images/dashboard/rectangle.svg" class="rectangle" alt="rectangle">
                    <div class="card-body text-white">
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <!-- <h4 class="text-white font-weight-bold">Your business</h4> -->
                          <h4 class="text-white font-weight-bold mb-3">Your business in our hands</h4>
                          <button class="btn btn-sm text-white">Upgrade Trail</button>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                          <img src="http://www.urbanui.com/yoraui/template/images/dashboard/card-img.svg" alt="">
                        </div>
                      </div>
                      <div class="mt-2 mb-5 mb-md-2 card-bottom">
                        <p class="tx-13 mb-0">Best for small business</p>
                        <p class="tx-13 mb-0">Accessible on mobile & esktop devices</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <p class="card-title mb-0">Store Visitors</p>
                        <p class="mb-0 tx-13">This Week</p>
                      </div>
                      <div class="d-flex flex-wrap mb-2">
                        <div class="mr-4">
                          <h4 class="mb-1 font-weight-medium">297,506</h4>
                          <p class="text-muted mb-0 tx-11">Total Visitors</p>
                        </div>
                        <div class="mr-4">
                          <h4 class="mb-1 font-weight-medium">38,130</h4>
                          <p class="text-muted mb-0 tx-11">Visits per Day</p>
                        </div>
                        <div>
                          <h4 class="mb-1 font-weight-medium">35.07%</h4>
                          <p class="text-muted mb-0 tx-11">Bounce Rate</p>
                        </div>
                      </div>
                      <div class="visitors-chart-wrapper">
                        <div id="visitorsFlotChart" class="visitors-flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Sessions by Channel</h6>
                  <p class="mb-3 text-muted">Measures your user's sessions and page views metrics to your website.</p>
                  <div class="row align-items-center">
                    <div class="col-sm-8 col-md-7">
                      <div id="flotPieChart" class="flot-pie-chart w-100"></div>
                    </div>
                    <div class="col-sm-4 col-md-5 mg-t-30 mg-sm-t-0">
                      <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-purple mr-3"></span> Very Satisfied (26%)</li>
                        <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-primary mr-3"></span> Satisfied (39%)</li>
                        <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-teal mr-3"></span> Not Satisfied (20%)</li>
                        <li class="d-flex align-items-center"><span class="d-inline-block p-1 bg-gray mr-3"></span> Satisfied (15%)</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Traffic Sources</h6>
                  <p class="mb-0 text-muted">Measures your user's sessions and page views metrics to your website for this month.</p>
                  <div class="d-flex flex-wrap mb-4">
                    <div class="mt-3">
                      <h4 class="font-weight-bold mb-1">86,376</h4>
                      <label class="mb-0 d-flex align-items-center"><span class="p-1 bg-primary rounded-circle mr-1"></span>Organic</label>
                    </div>
                    <div class="pl-3 ml-3 mt-3 border-left">
                      <h4 class="font-weight-bold mb-1">25,001</h4>
                      <label class="mb-0 d-flex align-items-center"><span class="p-1 bg-info rounded-circle mr-1"></span>Direct</label>
                    </div>
                    <div class="pl-3 ml-3 mt-3 border-left d-none d-md-block">
                      <h4 class="font-weight-bold mb-1">12,909</h4>
                      <label class="mb-0 d-flex align-items-center"><span class="p-1 bg-danger rounded-circle mr-1"></span>Refferal</label>
                    </div>
                  </div>
                  <div class="traffic-chart-wrapper">
                    <div id="trafficFlotChart" class="traffic-flot-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-9 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-4 stretch-card">
                    <div class="card-body">
                      <p class="card-title">Users By Country</p>
                      <p class="mb-3 text-muted">The top locations where users of your product are located for this month</p>
                      <div>
                        <div class="d-flex justify-content-between mt-2">
                          <span>United States</span>
                          <span class="tx-12 font-weight-bold">3,564</span>
                        </div>
                        <div class="progress progress-sm mt-2">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <span>United Kingdom</span>
                          <span class="tx-12 font-weight-bold">7,567</span>
                        </div>
                        <div class="progress progress-sm mt-2">
                          <div class="progress-bar bg-purple" role="progressbar" style="width: 88%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <span>Russia</span>
                          <span class="tx-12 font-weight-bold">6,466</span>
                        </div>
                        <div class="progress progress-sm mt-2">
                          <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <span>China</span>
                          <span class="tx-12 font-weight-bold">5,234</span>
                        </div>
                        <div class="progress progress-sm mt-2">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                          <span>Australia</span>
                          <span class="tx-12 font-weight-bold">4,865</span>
                        </div>
                        <div class="progress progress-sm mt-2">
                          <div class="progress-bar bg-teal" role="progressbar" style="width: 55%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 stretch-card">
                    <div class="card-body overflow-hidden">
                      <div id="vmap2" class="vmap-wrapper"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Mobile Sessions</p>
                  <p class="mb-3 text-muted">The percentage of users who uses mobile devices compare to other devices.</p>
                  <div class="d-flex flex-column align-items-center mg-b-25">
                    <div>
                      <div class="donut-chart chart1">
                        <div class="slice one"></div>
                        <div class="slice two"></div>
                        <div class="chart-center">
                          <span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-6 d-flex justify-content-end">
                      <div>
                        <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-indigo"></span> Mobile</label>
                        <h3 class="font-weight-bold mb-0">6,098</h3>
                      </div>
                    </div>
                    <div class="col-6">
                      <div>
                        <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-gray-light"></span> Desktop</label>
                        <h3 class="font-weight-bold mb-0">3,902</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-xl-4 grid-margin grid-margin-md-0 stretch-card">
              <div class="row">
                <div class="col-md-6 col-xl-12 stretch-card grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Acquisition</h6>
                      <p class="tx-12 mb-3 text-muted">Tells you where your visitors originated from, such as search engines, social networks or website referrals.</p>
                      <div class="row">
                        <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                          <div class="card-chart mr-2 bg-primary">
                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 20, &quot;height&quot;: 20 }">6,4,7,5,7</span>
                          </div>
                          <div>
                            <label class="tx-12 mb-1">Bounce Rate</label>
                            <h4 class="font-weight-bold mb-0">33.50%</h4>
                          </div>
                        </div>
                        <div class="col-6 col-xl-6 d-sm-flex align-items-center">
                          <div class="card-chart mr-2 bg-purple">
                            <span class="peity-bar" data-peity="{&quot;fill&quot;: [&quot;#fff&quot;], &quot;width&quot;: 21, &quot;height&quot;: 20 }">7,4,5,7,2</span>
                          </div>
                          <div>
                            <label class="tx-12 mb-1">Sessions</label>
                            <h4 class="font-weight-bold mb-0">965</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xl-12 grid-margin-md grid-margin-xl-0 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Sessions</h6>
                      <p class="tx-12 mb-3 text-muted">A session is the period time a user is actively engaged with your website, app, etc.</p>
                      <div class="row">
                        <div class="col-6 d-sm-flex align-items-center">
                          <div class="card-chart mr-2">
                            <span class="peity-donut" data-peity='{ "fill": ["#7571f9", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>4/7</span>
                          </div>
                          <div>
                            <label class="tx-12 mb-1 mt-2 mt-md-0">New Sessions</label>
                            <h4 class="font-weight-bold mb-0">26.80%</h4>
                          </div>
                        </div>
                        <div class="col-6 d-sm-flex align-items-center">
                          <div class="card-chart mr-2">
                            <span class="peity-donut" data-peity='{ "fill": ["#00BBE0", "#cad0e8"],  "innerRadius": 14, "radius": 20 }'>2/7</span>
                          </div>
                          <div>
                            <label class="tx-12 mb-1 mt-2 mt-md-0">Pages/Session</label>
                            <h4 class="font-weight-bold mb-0">105</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">What pages do your users visit</h6>
                  <p class="mb-2 text-muted">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
                  <div class="table-responsive">
                    <table class="table card-table-one">
                      <thead>
                        <tr>
                          <th class="px-0">Country</th>
                          <th>Entrances</th>
                          <th>Bounce Rate</th>
                          <th>Exits</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-us flag-icon-squared mr-3"></i>
                              <strong>United States</strong>
                            </div>
                          </td>
                          <td><strong>134</strong> (1.51%)</td>
                          <td>33.58%</td>
                          <td>15.47%</td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-gb flag-icon-squared mr-3"></i>
                              <strong>United Kingdom</strong>
                            </div>
                          </td>
                          <td><strong>290</strong> (3.30%)</td>
                          <td>9.22%</td>
                          <td>7.99%</td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-in flag-icon-squared mr-3"></i>
                              <strong>India</strong>
                            </div>
                          </td>
                          <td><strong>250</strong> (3.00%)</td>
                          <td>20.75%</td>
                          <td>2.40%</td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-ca flag-icon-squared mr-3"></i>
                              <strong>Canada</strong>
                            </div>
                          </td>
                          <td><strong>216</strong> (2.79%)</td>
                          <td>32.07%</td>
                          <td>15.09%</td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-fr flag-icon-squared mr-3"></i>
                              <strong>France</strong>
                            </div>
                          </td>
                          <td><strong>216</strong> (2.79%)</td>
                          <td>32.07%</td>
                          <td>15.09%</td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex">
                              <i class="flag-icon flag-icon-ph flag-icon-squared mr-3"></i>
                              <strong>Philippines</strong>
                            </div>
                          </td>
                          <td><strong>197</strong> (2.12%)</td>
                          <td>32.07%</td>
                          <td>15.09%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.urbanui.com/" target="_blank" class="text-muted">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart-outline text-primary"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/jquery.flot/jquery.flot.js"></script>
  <script src="../../vendors/jquery.flot/jquery.flot.pie.js"></script>
  <script src="../../vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../../vendors/jqvmap/jquery.vmap.min.js"></script>
  <script src="../../vendors/jqvmap/maps/jquery.vmap.world.js"></script>
  <script src="../../vendors/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="../../vendors/peity/jquery.peity.min.js"></script>
  <script src="../../js/jquery.flot.dashes.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/yoraui/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 14:53:49 GMT -->
</html>

