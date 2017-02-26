<template>
    <aside class="menu">
        <br>
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <!-- <li><a :class="menu == 'dashboard' ? 'is-active' : ''">Dashboard</a></li> -->
            <li><a href="/tickets" :class="menu == 'ticket' ? 'is-active' : ''">Tickets</a></li>
            <li><a href="/knowledges" :class="menu == 'kbase' ? 'is-active' : ''">Knowledge Base</a></li>
        </ul>

        <p class="menu-label">
            Taxonomies
        </p>
        <ul class="menu-list">
            <li><a href="/categories" :class="menu == 'category' ? 'is-active' : ''">Categories</a></li>
            <li><a href="/tags" :class="menu == 'tag' ? 'is-active' : ''">Tags</a></li>
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a :class="menu == 'teamsetting' ? 'is-active' : ''">Team Settings</a></li>
            <li>
                <a :class="menu == 'manageteam' ? 'is-active' : ''">Manage Your Team</a>
                <ul>
                    <li><a :class="menu == 'member' ? 'is-active' : ''">Members</a></li>
                </ul>
            </li>
        </ul>

        <p class="menu-label">
            Tools
        </p>
        <ul class="menu-list">
            <li><a :class="menu == 'setting' ? 'is-active' : ''">Settings</a></li>
        </ul>
    </aside>
</template>

<style>
</style>

<script>
    export default {
        props: ['menu'],
        mounted() {}
    }
</script>