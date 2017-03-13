<template>
    <div>
        <div class="columns is-marginless">
            <div class="column is-3" v-for="team in teams">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img :src="team.avatar" alt="Image" class="circle">
                            </figure>
                        </div>
                        <div class="media-content">
                        <div class="content">
                            <p>
                                <strong><a href="">{{ team.fullname }}</a></strong> <small>{{ team.email }}</small>
                            </p>
                        </div>
                        <nav class="level">
                            <div class="level-left">
                                <a class="level-item">
                                    <span class="tag is-dark">{{ team.role }}</span>
                                </a>
                                <a class="level-item">
                                    <small><span>Quick Edit</span></small>
                                </a>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                teams: [
                    {
                        fullname: 'John Smith',
                        email: 'johnsmith@gmail.com',
                        avatar: 'http://bulma.io/images/placeholders/128x128.png',
                        role: 'Staff'
                    },
                    {
                        fullname: 'John Smith',
                        email: 'johnsmith@gmail.com',
                        avatar: 'http://bulma.io/images/placeholders/128x128.png',
                        role: 'Staff'
                    },
                ]
            }
        }
    }
</script>