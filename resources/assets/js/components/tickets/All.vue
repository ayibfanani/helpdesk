<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="(ticket, index) in tickets">
                    <td>
                        <article class="media">
                            <figure class="media-left">
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>{{ ticket.fullname }}</strong> <small>{{ ticket.email }}</small> <small>31m</small>
                                        <br>
                                        <a :href="ticket.links.edit">{{ ticket.content.substring(0, 150) }}...</a>
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
                                        <a class="level-item" @click="showModal('quick_edit', index)">
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
        <modal action="https://www.google.com/" method="POST" v-if="modal == 'quick_edit'">
            <span slot="title">Quick Edit</span>

            <span slot="content">
                <label class="label">Staff</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="user_id">
                            <option>Select staff</option>
                            <option v-for="(staff, index) in staff" 
                                :value="staff.id" 
                                v-text="staff.fullname"
                                :selected="dataQuickEdit.user_id == staff.id"
                            ></option>
                        </select>
                    </span>
                </p>

                <label class="label">What's this about?</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="type">
                            <option>What's this about?</option>
                            <option v-for="(type, index) in types" 
                                :value="type.value" 
                                v-text="type.name"
                                :selected="dataQuickEdit.type == type.value"
                            ></option>
                        </select>
                    </span>
                </p>

                <label class="label">Category</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="category">
                            <option>Select category</option>
                            <option v-for="(category, index) in categories" 
                                :value="category.id" 
                                v-text="category.name"
                                :selected="dataQuickEdit.category == category.id"
                            ></option>
                        </select>
                    </span>
                </p>

                <label class="label">Priority</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="priority">
                            <option>Select priority</option>
                            <option v-for="(priority, index) in priorities" 
                                :value="priority.value" 
                                v-text="priority.name"
                                :selected="dataQuickEdit.priority == priority.value"
                            ></option>
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
                dataQuickEdit: {},
            }
        },
        computed: {
            tickets() {
                return [
                    { 
                        user_id: 1,
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Aul',
                        about: 'Problem',
                        category: 'Helpdesk',
                        priority: 'urgent',
                        links: {
                            edit: '/tickets/3/edit'
                        }
                    },
                    { 
                        user_id: 2,
                        fullname: 'Affan', 
                        email: 'affan@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Lia',
                        about: 'Features',
                        category: 'Helpdesk',
                        priority: 'low',
                        links: {
                            edit: '/tickets/1/edit'
                        }
                    },
                    { 
                        user_id: 3,
                        fullname: 'Ilmi', 
                        email: 'ilmi@gmail.com', 
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        staff: 'Ilm',
                        about: 'Sales',
                        category: 'Helpdesk',
                        priority: 'high',
                        links: {
                            edit: '/tickets/2/edit'
                        }
                    }
                ]
            },
            modal() {
                return this.$root.modal
            },
            staff() {
                // get staff ajax
                return [
                    { 
                        id: 1,
                        fullname: 'Ayib Fanani',
                        first_name: 'Ayib',
                        last_name: 'Fanani',
                    },
                    { 
                        id: 2,
                        fullname: 'Aulia Ilmi',
                        first_name: 'Aulia',
                        last_name: 'Ilmi',
                    }
                ]
            },
            types() {
                return [
                    { value: 0, name: 'Problem' },
                    { value: 1, name: 'Feature' },
                    { value: 2, name: 'Sales' },
                ]
            },
            categories() {
                // Get categories ajax
                return [
                    { id: 1, name: 'Laravel', slug: 'laravel' },
                    { id: 2, name: 'PHP', slug: 'php' },
                    { id: 3, name: 'HTML', slug: 'html' },
                ]
            },
            priorities() {
                return [
                    { value: 'urgent', name: 'Urgent' },
                    { value: 'high', name: 'High' },
                    { value: 'medium', name: 'Medium' },
                    { value: 'low', name: 'Low' },
                ]
            }
        },
        methods: {
            showModal(type) {
                switch(type) {
                    case 'quick_edit':
                        // get data ajax

                        // Data temp
                        var data = {
                            user_id: 2,
                            type: 0,
                            category: 'helpdesk',
                            priority: 'high'
                        }

                        this.dataQuickEdit = data
                        break;
                }

                this.$root.modal = type
            }
        }
    }
</script>