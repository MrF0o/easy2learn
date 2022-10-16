<template>
  <div class="js-sidebar-scroll">
    <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Easy2<span class="fw-normal">Learn</span></span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <li class="nav-main-item">
          <a class="nav-main-link active" href="#">
            <i class="nav-main-link-icon si si-speedometer"></i>
            <span class="nav-main-link-name">Dashboard</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a
            class="nav-main-link"
            data-toggle="submenu"
            aria-haspopup="true"
            aria-expanded="false"
            href="#"
          >
            <i class="nav-main-link-icon si si-layers"></i>
            <span class="nav-main-link-name">Students Free</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a
            class="nav-main-link"
            data-toggle="submenu"
            aria-haspopup="true"
            aria-expanded="false"
            href="#"
          >
            <i class="nav-main-link-icon si si-layers"></i>
            <span class="nav-main-link-name">Students +</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a
            class="nav-main-link"
            data-toggle="submenu"
            aria-haspopup="true"
            aria-expanded="false"
            href="#"
          >
            <i class="nav-main-link-icon si si-layers"></i>
            <span class="nav-main-link-name">Students ++</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>