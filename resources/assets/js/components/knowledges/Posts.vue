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
                                        <strong>{{ post.fullname }}</strong> <small>{{ post.email }}</small> <small>31m</small>
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
                                            <span class="tag is-primary">{{ post.category }}</span>
                                        </a>
                                    </div>
                                    <div class="level-right">
                                        <a class="level-item" v-for="tag in post.tags">
                                            <span class="tag">{{ tag.name }}</span>
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