<template>
    <transition name="fade">
        <div class="columns" v-if="iserror">
            <div class="column is-one-quarter is-marginless" style="position: fixed; right: 0">
                <br>
                <div class="notification is-danger">
                    <button class="delete" @click.prevent="iserror = !iserror"></button>
                    <ul>
                        <li v-for="content in contents" v-text="content[0]"></li>
                    </ul>
                </div>
            </div>
        </div>
    </transition>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
        opacity: 0
    }
</style>

<script>
    export default {
        props: ['contents', 'iserror'],
    }
</script>
