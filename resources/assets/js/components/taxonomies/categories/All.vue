<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="category in categories">
                    <td>
                        <h4 class="title">{{ category.alphabet }}</h4>
                        <ul>
                            <li v-for="category in category.data">
                                <a href="#" @click="edit($event)">{{ category.name }}</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Modal -->
        <modal action="https://www.google.com/" method="POST">
            <span slot="title">Create new Category</span>

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
                categories: [
                    {
                        alphabet: 'a',
                        data: [
                            { name: 'Aku', slug: 'aku' },
                            { name: 'Anda', slug: 'anda' }
                        ]
                    },
                    {
                        alphabet: 'b',
                        data: [
                            { name: 'Bold', slug: 'bold' },
                            { name: 'Botak', slug: 'botak' }
                        ]
                    },
                ]
            }
        },
        methods: {
            edit(event) {
                this.showModal()
            }
        }
    }
</script>