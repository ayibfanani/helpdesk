<template>
    <form :action="action" :method="method">
        <!-- <label for="title">Title</label> -->
        <p class="control">
            <input type="text" class="input" name="title" placeholder="Title" v-model="post.title">
        </p>

        <!-- <label for="slug">Slug</label> -->
        <p class="control">
            <input type="text" class="input" name="slug" placeholder="Slug" v-model="post.slug">
        </p>

        <!-- <label for="excerpt">Excerpt</label> -->
        <p class="control">
            <input type="text" class="input" name="excerpt" placeholder="Excerpt" v-model="post.excerpt">
        </p>

        <!-- <label for="content">Content</label> -->
        <p class="control">
            <textarea name="content" class="textarea" placeholder="Content" v-model="post.content"></textarea>
        </p>

        <button type="submit" class="button is-primary">Save changes</button>
    </form>
</template>

<script>
    export default {
        props: ['action', 'method', 'postdata'],
        // data() {
        //     return {
        //         post: {
        //             title: '', slug: '', excerpt: '', content: ''
        //         }
        //     }
        // },
        computed: {
            post() {
                if (this.postdata.length != 0) {
                    return this.postdata
                } else {
                    return { title: '', slug: '', excerpt: '', content: '' }
                }
            }
        },
    }
</script>