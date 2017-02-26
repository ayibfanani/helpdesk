<template>
    <nav class="nav">
        <div class="nav-left">
            <a class="nav-item">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
            </a>
        </div>

        <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
        <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
        <span class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </span>

        <div class="nav-right nav-menu">
            <a class="nav-item">
            <span class="icon">
                <i class="fa fa-github"></i>
            </span>
            </a>
            <a class="nav-item">
            <span class="icon">
                <i class="fa fa-twitter"></i>
            </span>
            </a>
        </div>
    </nav>
</template>

<style>
    .nav {
        border-bottom: 1px solid #dbdbdb;
    }
</style>

<script>
    export default {
        
    }
</script>