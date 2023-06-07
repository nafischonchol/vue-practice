<template>
    <!--start top header-->
    <div class="wrapper">
        <router-view name="layouts" />
        <main class="page-content">
            <router-view/>
        </main>
        
        <div class="overlay nav-toggle-icon"></div>

        <a href="javaScript:;" class="back-to-top"
        ><i class="bx bxs-up-arrow-alt"></i
        ></a>
    </div>
</template>



