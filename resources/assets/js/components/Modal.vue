<template>
    <transition name="modal">
        <div class="modal-mask" v-if="modal">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <a class="delete is-pulled-right" @click="closeModal"></a>
                    <form :action="action" :method="method">

                        <div class="modal-header">
                            <h1 class="title">
                                <slot name="title"></slot>
                            </h1>
                        </div>
                        <hr>

                        <div class="modal-body">
                            <slot name="content"></slot>
                        </div>

                        <hr>
                        <div class="modal-footer">
                            <slot name="footer"></slot>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </transition>
</template>

<style>
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }

    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }

    .modal-container {
        width: 640px;
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
        font-family: Helvetica, Arial, sans-serif;
    }

    .modal-header h3 {
        margin-top: 0;
        color: #42b983;
    }

    .modal-body {
        margin: 20px 0;
    }

    .modal-default-button {
        float: right;
    }

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

 .modal-enter {
    opacity: 0;
}

.modal-leave-active {
    opacity: 0;
}

.modal-enter .modal-container,
.modal-leave-active .modal-container {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}
</style>

<script>
    export default {
        props: ['action', 'method'],
        computed: {
            modal() {
                return this.$root.modal
            }
        },
    }
</script>