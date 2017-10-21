<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="page-registration main-center">
                    <h1>Sign up.</h1>
                    <form @submit.prevent="register(user)">
                        <div class="form-group" :class="{ 'has-error':errors.username.length }">
                            <!--<label for="name" class="cols-sm-2 control-label">Username</label>-->
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" v-model="user.username" id="username"
                                           placeholder="Enter your Username" />
                                </div>
                                <span class="help-block" v-if="errors.username.length">
                                    <strong v-for="error in errors.username">{{ error }}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-error':errors.email.length }">
                            <!--<label for="email" class="cols-sm-2 control-label">Your Email</label>-->
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fglyphicon glyphicon-envelope" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" v-model="user.email" id="email"
                                           placeholder="Enter your Email" />
                                </div>
                                <span class="help-block" v-if="errors.email.length">
                                    <strong v-for="error in errors.email">{{ error }}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-error':errors.password.length }">
                            <!--<label for="password" class="cols-sm-2 control-label">Password</label>-->
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" class="form-control" v-model="user.password" id="password"
                                           placeholder="Enter your Password" />
                                </div>
                                <span class="help-block" v-if="errors.password.length">
                                    <strong v-for="error in errors.password">{{ error }}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="form-group" :class="{ 'has-error':errors.password_confirmation.length }">
                            <!--<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>-->
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" class="form-control" v-model="user.password_confirmation"
                                           id="confirm"
                                           placeholder="Confirm your Password" />
                                </div>
                                <span class="help-block" v-if="errors.password_confirmation.length">
                                    <strong v-for="error in errors.password_confirmation">{{ error }}</strong>
                                </span>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary btn-lg btn-block login-button">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    export default {
        data() {
            return {
                user: {
                    username: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                },
                errors: {
                    username: [],
                    email: [],
                    password: [],
                    password_confirmation: [],
                },
            }
        },
        methods: {
            resetUser() {
                this.user = {
                    username: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                }
            },
            register(user) {
                axios.post(API.register(), user)
                    .then(response => {
                        this.resetUser()


                        // TODO allert message
                       // alert(response.data.message)
                        console.log('response', response)
                    })
                    .catch(error => {
                        console.log('error', error)
                        let data = error.response.data.errors
                        console.log(data);
                        for (let key in this.errors) {
                            // reset all errors
                            this.errors[key] = []

                            if (data[key]) {
                                this.errors[key] = data[key]
                            }
                        }
                    })
            }
        }
    }
</script>