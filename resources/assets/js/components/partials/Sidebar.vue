<template>
    <aside class="menu">
        <br>
        <template v-for="parent in sidebar">
            <p class="menu-label">{{ parent.label }}</p>
            <ul class="menu-list">
                <li v-for="menu in parent.menus">
                    <a :href="menu.url" :class="menu.slug == menu_choosed ? 'is-active' : ''">{{ menu.name }}</a>
                    <transition name="slide-fade" v-if="menu.submenus">
                        <ul>
                            <li v-for="submenu in menu.submenus">
                                <a :href="submenu.url" :class="submenu.slug == menu_choosed ? 'is-active' : ''">{{ submenu.name }}</a>
                            </li>
                        </ul>
                    </transition>
                </li>
            </ul>
        </template>
    </aside>
</template>

<style>
    /* Enter and leave animations can use different */
    /* durations and timing functions.              */
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .3s ease;
    }
    .slide-fade-enter, .slide-fade-leave-to
    /* .slide-fade-leave-active for <2.1.8 */ {
        transform: translateY(-10px);
        opacity: 0;
    }
</style>

<script>
    export default {
        props: ['menu_choosed'],
        data() {
            return {
                is_submenu: false,
                sidebar: [
                    {
                        label: 'General',
                        menus: [
                            { slug: 'ticket', name: 'Tickets', url: '/tickets' },
                            { slug: 'kbase', name: 'Knowledge Base', url: '/knowledges' },
                        ]
                    },
                    {
                        label: 'Taxonomies',
                        menus: [
                            { slug: 'category', name: 'Categories', url: '/categories' },
                            { slug: 'tag', name: 'Tags', url: '/tags' },
                        ]
                    },
                    {
                        label: 'Administration',
                        menus: [
                            { slug: 'teamsetting', name: 'Team Settings', url: '/teams/settings' },
                            { 
                                name: 'Manage Your Team',
                                submenus: [
                                    { slug: 'team', name: 'Teams', url: '/teams' }
                                ]
                            },
                        ]
                    },
                    {
                        label: 'Tools',
                        menus: [
                            { slug: 'setting', name: 'Settings', url: '/settings' }
                        ]
                    }
                ]
            }
        }
    }
</script>