<template>
  <ul class="metismenu" id="menu">
    <li>
      <router-link to="/">
        <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
        <div class="menu-title">Dashboard</div>
      </router-link>
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
        <div class="menu-title">Building</div>
      </a>
      <ul>
        <li>
          <router-link to="/building/add"><i class="bi bi-circle"></i>Add Building</router-link>
        </li>
        <li>
          <router-link :to="{ name: 'BuildingList' }"><i class="bi bi-circle"></i>Building List</router-link>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-droplet-fill"></i></div>
        <div class="menu-title">Flats</div>
      </a>
      <ul>
        <li>
          <Link href="/toast"
            ><i class="bi bi-circle"></i>Add Flat
          </Link>
        </li>
        <li>
          <a href="widgets-data-widgets.html"
            ><i class="bi bi-circle"></i>Flat List</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-basket2-fill"></i></div>
        <div class="menu-title">Tenant</div>
      </a>
      <ul>
        <li>
          <a href="ecommerce-products-list.html"
            ><i class="bi bi-circle"></i>Tenant List</a
          >
        </li>
        <li>
          <a href="ecommerce-products-grid.html"
            ><i class="bi bi-circle"></i>Add Tenant</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon"><i class="bi bi-award-fill"></i></div>
        <div class="menu-title">Visitor</div>
      </a>
      <ul>
        <li>
          <a href="component-alerts.html"><i class="bi bi-circle"></i>Visitor List</a>
        </li>
        <li>
          <a href="component-accordions.html"
            ><i class="bi bi-circle"></i>Add Vistios</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-cloud-arrow-down-fill"></i>
        </div>
        <div class="menu-title">Cost</div>
      </a>
      <ul>
        <li>
          <a href="icons-line-icons.html"
            ><i class="bi bi-circle"></i>Cost List</a
          >
        </li>
        <li>
          <a href="icons-line-icons.html"
            ><i class="bi bi-circle"></i>Add Cost</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-file-earmark-break-fill"></i>
        </div>
        <div class="menu-title">Rent Collection</div>
      </a>
      <ul>
        <li>
          <a href="form-elements.html"
            ><i class="bi bi-circle"></i>Rent List</a
          >
        </li>
        <li>
          <a href="form-input-group.html"
            ><i class="bi bi-circle"></i>Add Rent</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-file-earmark-spreadsheet-fill"></i>
        </div>
        <div class="menu-title">Notice</div>
      </a>
      <ul>
        <li>
          <a href="table-basic-table.html"
            ><i class="bi bi-circle"></i>Notice List</a
          >
        </li>
        <li>
          <a href="table-basic-table.html"
            ><i class="bi bi-circle"></i>Add Notice</a
          >
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <i class="bi bi-file-earmark-spreadsheet-fill"></i>
        </div>
        <div class="menu-title">Complain</div>
      </a>
      <ul>
        <li>
          <a href="table-basic-table.html"
            ><i class="bi bi-circle"></i>Complain List</a
          >
        </li>
        <li>
          <a href="table-basic-table.html"
            ><i class="bi bi-circle"></i>Add Complain</a
          >
        </li>
      </ul>
    </li>
  </ul>
</template>
