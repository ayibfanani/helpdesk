<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="(post, index) in posts">
                    <td>
                        <article class="media">
                            <figure class="media-left"></figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>
                                            {{ post.fullname }}
                                        </strong> 
                                        <small>{{ post.email }}</small> <small>31m</small>
                                        <br>
                                        <a :href="post.links.edit">{{ post.excerpt }}</a>
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
                                            <span class="tag is-success" v-if="post.status == 'publish'">Publish</span>
                                            <span class="tag is-warning" v-else-if="post.status == 'draft'">Draft</span>
                                            <span class="tag is-danger" v-else>Trash</span>
                                        </a>
                                        <a class="level-item">
                                            <span class="tag is-dark">{{ post.category }}</span>
                                        </a>
                                        <a class="level-item" @click.prevent="showModal('quick_edit', index)">
                                            <span><small>Quick Edit</small></span>
                                        </a>
                                    </div>
                                    <div class="level-right">
                                        <a class="level-item" v-for="tag in post.tags">
                                            <span class="tag">{{ tag.name }}</span>
                                        </a>
                                        <a href="" class="level-item text-danger" @click.prevent="destroy(post.id)">
                                            <i class="fa fa-trash"></i>
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
        
        <!-- Quick Edit Modal -->
        <modal action="https://www.google.com/" method="POST" v-if="modal == 'quick_edit'">
            <span slot="title">Quick Edit</span>

            <span slot="content">
                <label class="label">Status</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="status">
                            <option v-for="status in statuses" 
                                :value="status.value" 
                                v-text="status.name"
                                :selected="dataQuickEdit.status == status.value"
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

                <label class="label">Tags</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select name="tags" multiple>
                            <option>Select Tags</option>
                            <option v-for="tag in tags" 
                                :value="tag.id" 
                                v-text="tag.name"
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
        <!-- End Quick Edit Modal -->
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
            modal() {
                return this.$root.modal
            },
            posts() {
                return [
                    { 
                        id: 1,
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        excerpt: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        category: 'Helpdesk',
                        status: 'draft',
                        tags: [
                            { name: 'PHP', slug: 'php' },
                            { name: 'Laravel', slug: 'laravel' },
                        ],
                        links: { 
                            edit: '/knowledges/posts/1/edit/1',
                        }
                    },
                    { 
                        id: 2,
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        excerpt: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        category: 'Helpdesk',
                        status: 'publish',
                        tags: [
                            { name: 'PHP', slug: 'php' },
                            { name: 'Laravel', slug: 'laravel' },
                        ],
                        links: { 
                            edit: '/knowledges/posts/1/edit/2',
                        }
                    },
                ]
            },
            statuses() {
                return [
                    { value: 0, name: 'Draft' },
                    { value: 1, name: 'Publish' },
                ]
            },
            categories() {
                return [
                    { id: 1, name: 'Laravel', slug: 'laravel' },
                    { id: 2, name: 'PHP', slug: 'php' },
                    { id: 3, name: 'HTML', slug: 'html' },
                ]
            },
            tags() {
                return [
                    { id: 1, name: 'Skills', slug: 'skills' },
                    { id: 2, name: 'Test', slug: 'test' },
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
                            status: 0,
                            category: 1,
                            tags: [0]
                        }

                        this.dataQuickEdit = data
                        break;
                }

                this.$root.modal = type
            },
            destroy(id) {
                alert(id)
            }
        }
    }
</script>