<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="post in posts">
                    <td>
                        <article class="media">
                            <figure class="media-left">
                            </figure>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>
                                            <a href="#">{{ post.fullname }}</a>
                                        </strong> 
                                        <small>{{ post.email }}</small> <small>31m</small>
                                        <br>
                                        {{ post.excerpt }}
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
                                        <a class="level-item" @click="showModal()">
                                            <span><small>Quick Edit</small></span>
                                        </a>
                                    </div>
                                    <div class="level-right">
                                        <a class="level-item" v-for="tag in post.tags">
                                            <span class="tag">{{ tag.name }}</span>
                                        </a>
                                        <a class="level-item text-danger">
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
        
        <modal action="https://www.google.com/" method="POST">
            <span slot="title">Quick Edit</span>

            <span slot="content">
                <label class="label">Status</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                        </select>
                    </span>
                </p>
                
                <label class="label">Category</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select>
                            <option>Select category</option>
                            <option>Programming</option>
                            <option>Networking</option>
                        </select>
                    </span>
                </p>

                <label class="label">Tags</label>
                <p class="control">
                    <span class="select is-fullwidth">
                        <select multiple>
                            <option>PHP</option>
                            <option>Laravel</option>
                        </select>
                    </span>
                </p>
            </span>

            <span slot="footer">
                <button type="submit" class="button is-primary">Save changes</button>
                <a class="button">Cancel</a>
            </span>
        </modal>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                modalContent: {},
                posts: [
                    { 
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        excerpt: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        category: 'Helpdesk',
                        status: 'draft',
                        tags: [
                            { name: 'PHP', slug: 'php' },
                            { name: 'Laravel', slug: 'laravel' },
                        ]
                    },
                    { 
                        fullname: 'Ayib Fanani', 
                        email: 'ayibfanani@gmail.com', 
                        excerpt: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ',
                        content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius libero minus sint nihil distinctio obcaecati, reiciendis, enim harum ab voluptate debitis ea nesciunt illum blanditiis asperiores. Ex facere, earum maiores!',
                        category: 'Helpdesk',
                        status: 'publish',
                        tags: [
                            { name: 'PHP', slug: 'php' },
                            { name: 'Laravel', slug: 'laravel' },
                        ]
                    },
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