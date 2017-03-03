<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="ticket in tickets">
                    <td>
                        <article class="media">
                            <figure class="media-left">
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>{{ ticket.fullname }}</strong> <small>{{ ticket.email }}</small> <small>31m</small>
                                        <br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut
                                    </p>
                                </div>
                                <nav class="level">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <figure class="image is-32x32">
                                                <img src="http://bulma.io/images/placeholders/128x128.png" class="circle">
                                            </figure>
                                        </div>
                                        <a class="level-item">
                                            <span class="tag is-primary">{{ ticket.staff }}</span>
                                        </a>
                                        <a class="level-item">
                                            <span class="tag is-dark">{{ ticket.about }}</span>
                                        </a>
                                        <a class="level-item">
                                            <span class="tag">{{ ticket.category }}</span>
                                        </a>
                                        <a class="level-item">
                                            <span class="tag is-danger" v-if="ticket.priority == 'urgent'">Urgent</span>
                                            <span class="tag is-warning" v-else-if="ticket.priority == 'high'">High</span>
                                            <span class="tag is-info" v-else-if="ticket.priority == 'medium'">Medium</span>
                                            <span class="tag is-success" v-else>Low</span>
                                        </a>
                                        <a class="level-item" @click="showModal()">
                                            <span><small>Quick Edit</small></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </article>
                    </td>
                    <td>
                        <nav class="level">
                            <div class="level-item has-text-centered">
                                <div class="box">
                                    <p class="heading">Comments</p>
                                    <p class="title">2</p>
                                </div>
                            </div>
                        </nav>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Modal Quick Edit -->
        <modal action="https://www.google.com/" method="POST">
            <span slot="title">Quick Edit</span>

            <span slot="content">
                <label class="label">Staff</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option>Select staff</option>
                            <option>Ayib Fanani</option>
                        </select>
                    </span>
                </p>

                <label class="label">What's this about?</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option>What's this about?</option>
                            <option>Problem</option>
                            <option>Feature</option>
                            <option>Sales</option>
                        </select>
                    </span>
                </p>

                <label class="label">Category</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option>Select category</option>
                            <option>Helpdesk</option>
                        </select>
                    </span>
                </p>

                <label class="label">Priority</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option>Select priority</option>
                            <option value="urgent">Urgent</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </span>
                </p>
            </span>

            <span slot="footer">
                <button type="submit" class="button is-primary">Save changes</button>
                <a class="button">Cancel</a>
            </span>
        </modal>
        <!-- End Quick Edit -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                modalContent: {},
                tickets: [
                    { 
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Aul',
                        about: 'Problem',
                        category: 'Helpdesk',
                        priority: 'urgent'
                    },
                    { 
                        fullname: 'Affan', 
                        email: 'affan@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Lia',
                        about: 'Features',
                        category: 'Helpdesk',
                        priority: 'low'
                    },
                    { 
                        fullname: 'Ilmi', 
                        email: 'ilmi@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Ilm',
                        about: 'Sales',
                        category: 'Helpdesk',
                        priority: 'high'
                    }
                ]
            }
        },
        computed: {
            modal() {
                return this.$store.state.modal
            }
        },
        methods: {
            showModal() {
                // this.modalContent = {
                //     staff: e.target.innerText
                // }
                return this.$store.commit('modal', true)
            }
        }
    }
</script>