<template>
    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <form :action="action" :method="method">
                <header class="modal-card-head">
                    <p class="modal-card-title" v-text="title"></p>
                    <button class="delete"></button>
                </header>
                <section class="modal-card-body">
                    <slot></slot>
                </section>
                <footer class="modal-card-foot">
                    <button type="submit" class="button is-success">Save changes</button>
                    <a class="button">Cancel</a>
                </footer>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'action', 'method'],
    }
</script>