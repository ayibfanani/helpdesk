<template>
    <div class="box">
        <form method="POST" @submit.prevent="register">
            <div class="control is-grouped">
                <p class="control is-expanded">
                    <label class="label">First Name</label>
                    <input name="first_name" class="input" type="text" placeholder="John" v-model="data.first_name">
                    <span class="help is-danger" v-if="errors['first_name']" v-text="errors['first_name'][0]"></span>
                </p>
                <p class="control is-expanded">
                    <label class="label">Last Name</label>
                    <input name="last_name" class="input" type="text" placeholder="Smith" v-model="data.last_name">
                    <span class="help is-danger" v-if="errors['last_name']" v-text="errors['last_name'][0]"></span>
                </p>
            </div>

            <p class="control">
                <label class="label">Username</label>
                <input name="username" class="input" type="text" placeholder="jsmith" v-model="data.username">
                <span class="help is-danger" v-if="errors['username']" v-text="errors['username'][0]"></span>
            </p>
            <p class="control">
                <label class="label">Email</label>
                <input name="email" class="input" type="email" placeholder="jsmith@example.org" v-model="data.email">
                <span class="help is-danger" v-if="errors['email']" v-text="errors['email'][0]"></span>
            </p>
            <hr>
            <p class="control">
                <label class="label">Password</label>
                <input name="password" class="input" type="password" placeholder="●●●●●●●" v-model="data.password">
                <span class="help is-danger" v-if="errors['password']" v-text="errors['password'][0]"></span>
            </p>
            <p class="control">
                <label class="label">Confirm Password</label>
                <input name="password_confirmation" class="input" type="password" placeholder="●●●●●●●" v-model="data.password_confirmation">
                <span class="help is-danger" v-if="errors['password_confirmation']" v-text="errors['password_confirmation'][0]"></span>
            </p>
            <hr>
            <p class="control">
                <button class="button is-primary is-loading" v-if="loading">Register</button>
                <button class="button is-primary" v-else>Register</button>
                <button class="button is-default" @click.stop.prevent="cancel">Cancel</button>
            </p>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loading: false,
                errors: {},
                data: {
                    first_name: '', last_name: '', username: '', email: '', password: '', password_confirmation: ''
                }
            }
        },
        mounted() {},
        methods: {
            register(e) {
                this.loading = true
                axios.post('/register', this.data)
                    .then(response => {
                        this.loading = false
                        window.location = '/home'
                    })
                    .catch(error => {
                        this.errors = error.response.data
                        this.loading = false
                    });
            },
            cancel() {
                window.location = '/';
            }
        }
    }
</script>
