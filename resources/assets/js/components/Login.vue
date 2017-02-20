<template>
	<section class="hero is-fullheight is-dark is-bold">
		<div class="hero-body">
			<div class="container">
				<div class="columns is-vcentered">
					<div class="column is-4 is-offset-4">
						<h1 class="title">Login</h1>
						<div class="box">
                            <form method="POST" @submit.prevent="login">
                                 <label class="label">Email</label>
                                 <p class="control">
                                    <input name="email" class="input" type="text" placeholder="jsmith@example.org" v-model="data.email">
                                    <span class="help is-danger" v-if="errors['email']" v-text="errors['email']"></span>
                                </p>
                                <label class="label">Password</label>
                                <p class="control">
                                    <input name="password" class="input" type="password" placeholder="●●●●●●●" v-model="data.password">
                                    <span class="help is-danger" v-if="errors['password']" v-text="errors['password']"></span>
                                </p>
                                <hr>
                                <p class="control">
                                    <button class="button is-primary is-loading" v-if="loading">Login</button>
                                    <button class="button is-primary" v-else>Login</button>
                                    <button class="button is-default">Cancel</button>
                                </p>
                            </form>
						</div>
						<p class="has-text-centered">
							<a href="/register">Register an Account</a>
							| 
							<a href="#">Forgot password</a>
							| 
							<a href="#">Need help?</a>
						</p>
					</div>
				</div>
			</div>
		</div>
        </section>
</template>

<script>
	export default {
        data() {
            return {
                loading: false,
                errors: {},
                data: {
                    email: '', password: ''
                }
            }
        },
        methods: {
            login(e) {
                this.loading = true
                axios.post('/login', this.data)
                    .then(response => {
                        window.location = '/home'
                    })
                    .catch(error => {
                        this.errors = error.response.data
                        this.loading = false
                    });
            },
        }
    }
</script>
