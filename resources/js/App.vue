<template>
    <!--start top header-->
    <div class="wrapper">
        <Header />
        <Aside />
        <main class="page-content">
            <router-view></router-view>
        </main>
        
        <div class="overlay nav-toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"
        ><i class="bx bxs-up-arrow-alt"></i
        ></a>
    </div>
</template>
<script>
import Aside from "./layouts/aside.vue";
import Header from "./layouts/header.vue";

export default {
    components: {Aside,Header}
}

</script>


