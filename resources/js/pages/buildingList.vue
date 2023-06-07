<template>
  <main class="page-content">
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <div class="card">
          <div class="card-header py-3 bg-transparent">
            <div class="d-sm-flex align-items-center">
              <h5 class="mb-2 mb-sm-0">Add New Building</h5>
              <div class="ms-auto">
                <router-link to="/building/add" class="btn btn-secondary m-1">
                  Building Add
                </router-link>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row g-3">
              <div class="col-12 col-lg-12">
                <div class="card shadow-none bg-light border">
                  <div class="card-body">
                    <form class="row g-3" @submit.prevent="submitForm">
                      <div class="col-12">
                        <label class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Name"
                          v-model="buildingData.name"
                        />
                      </div>
                      <div class="col-6">
                        <label class="form-label">Contact Name</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Contact Name"
                          v-model="buildingData.contact_name"
                        />
                      </div>
                      <div class="col-6">
                        <label class="form-label">Contact Number</label>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Contact Number"
                          v-model="buildingData.contact_number"
                        />
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="form-label">Floor</label>
                        <input
                          type="number"
                          class="form-control"
                          placeholder="Floor"
                          v-model="buildingData.floor"
                        />
                      </div>
                      <div class="col-12 col-lg-4">
                        <label class="form-label">Lift</label>
                        <select class="form-control" v-model="buildingData.lift">
                          <option value="1">Yes</option>
                          <option value="0">No</option>
                        </select>
                      </div>
                      <div class="col-12">
                        <label class="form-label">Full Address</label>
                        <textarea
                          class="form-control"
                          placeholder="Full Address"
                          rows="4"
                          cols="4"
                          v-model="buildingData.full_address"
                        ></textarea>
                      </div>
                      <div class="col-12">
                        <label class="form-label">Details Info</label>
                        <textarea
                          class="form-control"
                          placeholder="Details Info"
                          rows="4"
                          cols="4"
                          v-model="buildingData.details_info"
                        ></textarea>
                      </div>
                      <div class="col-12">
                        <button
                          class="form-control btn btn-primary"
                          type="submit"
                        >
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
        </div>
      </div>
    </div>
  </main>
  
    <!--end row-->
  </template>
  
  <script>
  import axios from "axios";
  
  export default {
    data() {
      return {
        buildingData: {
          name: "",
          contact_name: "",
          contact_number: "",
          floor: "",
          lift: "",
          full_address: "",
          details_info: "",
        },
      };
    },
    methods: {
      submitForm() 
      {
        axios
          .post("/api/building", this.buildingData)
          .then((response) => {
            this.buildingData = {};
            console.log(response.data.message);
          })
          .catch((error) => {
            if (error.response.status === 422) {
              const validationErrors = error.response.data.errors;
              console.log(validationErrors);
            } else {
              console.error(error);
            }
          });
      },
    },
  };
  </script>
  