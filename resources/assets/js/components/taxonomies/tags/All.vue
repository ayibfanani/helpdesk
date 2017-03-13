<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="tag in tags">
                    <td>
                        <h4 class="title">{{ tag.alphabet }}</h4>
                        <ul>
                            <li v-for="tag in tag.data">
                                <a href="#">{{ tag.name }}</a> <small>({{ tag.count }})</small>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Modal -->
        <modal action="https://www.google.com/" method="POST">
            <span slot="title">Create new Tag</span>

            <span slot="content">
                <label class="label">Name</label>
                <p class="control">
                    <input type="text" name="name" placeholder="Name" class="input">
                </p>
                
                <label class="label">Slug</label>
                <p class="control">
                    <input type="text" name="slug" placeholder="Slug" class="input  ">
                </p>
            </span>

            <span slot="footer">
                <button type="submit" class="button is-primary">Save changes</button>
                <a class="button">Cancel</a>
            </span>
        </modal>
        <!-- End Modal -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tags: [
                    {
                        alphabet: 'a',
                        data: [
                            { name: 'Aku', slug: 'aku', count: 20 },
                            { name: 'Anda', slug: 'anda', count: 20 }
                        ]
                    },
                    {
                        alphabet: 'b',
                        data: [
                            { name: 'Bold', slug: 'bold', count: 20 },
                            { name: 'Botak', slug: 'botak', count: 20 }
                        ]
                    },
                ]
            }
        }
    }
</script>