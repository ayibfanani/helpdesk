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