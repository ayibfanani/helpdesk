<template>
    <div>
        <table class="table">
            <tbody>
                <tr v-for="category in categories">
                    <td>
                        <h4 class="title">{{ category.alphabet }}</h4>
                        <ul>
                            <li v-for="category in category.data"><a href="#">{{ category.name }}</a></li>
                        </ul>
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
        }
    }
</script>