<template>
  <main class="authentication-content">
    <div class="container-fluid">
      <div class="authentication-card">
        <div class="card shadow rounded-0 overflow-hidden">
          <div class="row g-0">
            <div
              class="col-lg-6 bg-login d-flex align-items-center justify-content-center"
            >
              <img
                src="/theme/images/error/login-img.jpg"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="col-lg-6">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title">Sign In</h5>
                <p class="card-text mb-5">
                  See your growth and get consulting support!
                </p>
                <form class="form-body" action="#" method="POST" @keydown="allErrors.clear($event.target.name)"
                  @submit.prevent="submitForm">
                  <div class="row g-3">
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label"
                        >Email Address</label
                      >
                      <div class="ms-auto position-relative">
                        <div
                          class="position-absolute top-50 translate-middle-y search-icon px-3"
                        >
                          <i class="bi bi-envelope-fill"></i>
                        </div>
                        <input
                          v-model="form.email"
                          type="email"
                          class="form-control radius-30 ps-5"
                          id="email"
                          name="email"
                          placeholder="Email Address"
                        />
                      </div>
                      <span v-if="this.allErrors.has('email')"
                          class="error text-danger text-bold ms-2 mt-2"
                          v-text="this.allErrors.get('email')">
                    </span>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label"
                        >Enter Password</label
                      >
                      <div class="ms-auto position-relative">
                        <div
                          class="position-absolute top-50 translate-middle-y search-icon px-3"
                        >
                          <i class="bi bi-lock-fill"></i>
                        </div>
                        <input
                          v-model="form.password"
                          type="password"
                          class="form-control radius-30 ps-5"
                          id="password"
                          name="password"
                          placeholder="Enter Password"
                        />
                      </div>
                      <span v-if="this.allErrors.has('password')"
                          class="error text-danger text-bold ms-2 mt-2"
                          v-text="this.allErrors.get('password')">
                    </span>
                    </div>
                    <div class="col-6 text-end">
                      <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary radius-30">
                          Sign In
                        </button>
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="mb-0">
                        Don't have an account yet?
                        <span @click="userData">Sign up here</span>
                        </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>
  
<script>
import axios from "@/axios-config";
import Errors from "@/errors/errors.js";

export default {
  data() {
    return {
      allErrors: new Errors(),
      form: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    userData() {
      axios
        .get("/api/user")
        .then((response) => {
          console.log(response.data);
        })
        .catch((error) => {
          console.error(error);
        });
    },
    submitForm() {
      axios
        .post("/api/v1/login", this.form)
        .then((response) => {
          if (response.data.status == 200) {
            console.log(response.data);
            let token = response.data.data.token;
            localStorage.setItem("scantumToken", token); // Store the token in local storage
           
            this.form = {};
            this.toast.success(response.data.message);
            // this.$inertia.visit('/');
          } else {
            console.log(response.data.message);
          }
        })
        .catch((error) => {
          if (error && error.response.status === 422) {
            this.allErrors.record(error.response.data.errors);
          } else {
            console.log("Login failded!");
          }
        });
    },
  },
};
</script>