<template>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div>Hello laravel 3 Nafisss</div>
        <router-link class="navbar-brand" :to="{name: 'Home'}">Home</router-link>
        <ul class="navbar-nav">
            <li class="nav-item">
                <router-link class="text-white navbar-brand" to="/login">Login</router-link>
            </li>
            <li class="nav-item">
                <router-link class="text-white m-2 navbar-brand" to="/register">Register</router-link>
            </li>
        </ul>
    </nav>
    <router-view></router-view>
    
</template>