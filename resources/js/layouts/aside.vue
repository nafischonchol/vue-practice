<template>
  <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img
            src="/theme/images/logo-icon.png"
            class="logo-icon"
            alt="logo"
          />
        </div>
        <div>
          <h4 class="logo-text">Flat Mng.</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-list"></i></div>
      </div>
      <!--navigation-->
      <SideBar />
      <!--end navigation-->
    </aside>
</template>

<script>
import SideBar from "@/layouts/sideBar.vue";
export default {
    components: { SideBar},
}
</script>
