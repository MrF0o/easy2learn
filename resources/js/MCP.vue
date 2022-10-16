<template>
  <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <nav aria-label="Main Navigation">
      <div class="content-header">
        <Navbar />
      </div>
      <nav id="sidebar">
      <Sidebar />
      </nav>
      <main class="container">
        <router-view />
      </main>
      <footer id="page-footer"></footer>
    </nav>
  </div>
</template>

<script>
import Navbar from "./Components/mcp/navbar.vue";
import Sidebar from "./Components/mcp/sidebar.vue";

export default {
  components: { Navbar, Sidebar },
};
</script>

<style>
</style>