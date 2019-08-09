<template>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark p-1">
    <router-link class="navbar-brand mx-auto bold text-dark" to="/" style="font-size: 3rem;">coco nube.</router-link>
  </nav>
   <div class="d-flex justify-content-around mb-5" style="max-width: 900px; margin: auto;" >
    <router-link class="text-dark h6 text-center p-1" to="/">
        <font-awesome-icon icon="home" /> HOME</router-link>
    <router-link class="text-dark h6 text-center p-1" to="/menu">
        <font-awesome-icon icon="cut" /> MENU</router-link>
    <router-link class="text-dark h6 text-center p-1" to="/staff">
        <font-awesome-icon icon="user" /> STAFF</router-link>
    <router-link class="text-dark h6 text-center p-1" to="/reservation">
        <font-awesome-icon icon="calendar-alt" /> RESERVE</router-link>
    <router-link class="text-dark h6 text-center p-1" to="/">
        <font-awesome-icon icon="running" /> ACCESS</router-link>
    </div>
    <div class="bg"/>
    <router-view></router-view>
  </header>
</template>

<script>
    export default{
    }
</script>
