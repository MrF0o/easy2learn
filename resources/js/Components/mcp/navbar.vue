<template>
  <!-- Header -->
  <header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
      <!-- Left Section -->
      <div class="d-flex align-items-center">
        <button
          type="button"
          class="btn btn-sm btn-alt-secondary me-2 d-lg-none"
          data-toggle="layout"
          data-action="sidebar_toggle"
        >
          <i class="fa fa-fw fa-bars"></i>
        </button>
      </div>
      <!-- END Left Section -->

      <!-- Right Section -->
      <div class="d-flex align-items-center">
        <!-- User Dropdown -->
        <div class="dropdown d-inline-block ms-2">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary d-flex align-items-center"
            id="page-header-user-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <span class="d-none d-sm-inline-block ms-2">{{ "admin" }}</span>
            <i
              class="
                fa fa-fw fa-angle-down
                d-none d-sm-inline-block
                opacity-50
                ms-1
                mt-1
              "
            ></i>
          </button>
          <div
            class="
              dropdown-menu dropdown-menu-md dropdown-menu-end
              p-0
              border-0
            "
            aria-labelledby="page-header-user-dropdown"
          >
            <div
              class="p-3 text-center bg-body-light border-bottom rounded-top"
            >
              <p class="mt-2 mb-0 fw-medium">Admin</p>
            </div>
            <div class="p-2">
              <a
                class="
                  dropdown-item
                  d-flex
                  align-items-center
                  justify-content-between
                "
                href="javascript:void(0)"
              >
                <span class="fs-sm fw-medium">Settings</span>
              </a>
            </div>
            <div role="separator" class="dropdown-divider m-0"></div>
            <div class="p-2">
              <a
                class="
                  dropdown-item
                  d-flex
                  align-items-center
                  justify-content-between
                "
                href="/logout"
              >
                <span class="fs-sm fw-medium">Log Out</span>
              </a>
            </div>
          </div>
        </div>
        <!-- END User Dropdown -->

        <!-- Notifications Dropdown -->
        <div class="dropdown d-inline-block ms-2">
          <button
            type="button"
            class="btn btn-sm btn-alt-secondary"
            id="page-header-notifications-dropdown"
            data-bs-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="fa fa-fw fa-bell"></i>
            <span class="text-primary">•</span>
          </button>
          <div
            class="
              dropdown-menu dropdown-menu-lg dropdown-menu-end
              p-0
              border-0
              fs-sm
            "
            aria-labelledby="page-header-notifications-dropdown"
          >
            <div
              class="p-2 bg-body-light border-bottom text-center rounded-top"
            >
              <h5 class="dropdown-header text-uppercase">Notifications</h5>
            </div>
            <ul class="nav-items mb-0"></ul>
          </div>
        </div>
        <!-- END Notifications Dropdown -->

        <!-- Toggle Side Overlay -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <!-- END Toggle Side Overlay -->
      </div>
      <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-body-extra-light">
      <div class="content-header">
        <form class="w-100" action="be_pages_generic_search.html" method="POST">
          <div class="input-group">
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button
              type="button"
              class="btn btn-alt-danger"
              data-toggle="layout"
              data-action="header_search_off"
            >
              <i class="fa fa-fw fa-times-circle"></i>
            </button>
            <input
              type="text"
              class="form-control"
              placeholder="Search or hit ESC.."
              id="page-header-search-input"
              name="page-header-search-input"
            />
          </div>
        </form>
      </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-body-extra-light">
      <div class="content-header">
        <div class="w-100 text-center">
          <i class="fa fa-fw fa-circle-notch fa-spin"></i>
        </div>
      </div>
    </div>
    <!-- END Header Loader -->
  </header>
  <!-- END Header -->
</template>

<script>
export default {};
</script>

<style>
</style>