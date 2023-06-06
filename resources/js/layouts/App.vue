<template>
    <div>
        <div>Hello laravel 3 Nafisss</div>
        <router-link :to="{name: 'Home'}">Home</router-link>
        <router-link to="/login">Login</router-link>
        <router-link to="/register">Register</router-link>
        <router-view></router-view>
    </div>
    
</template>