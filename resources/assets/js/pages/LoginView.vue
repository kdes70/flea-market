<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="page-login main-center">
                    <h1>Login</h1>
                    <form @submit.prevent="login(user)">

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


                        <div class="text-center">

                            <!--<bounce-loader :loading="loading"></bounce-loader>-->

                            <button class="btn btn-primary btn-lg btn-block login-button">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import {mapState} from 'vuex'

    //import BounceLoader from './../components/Spinner/BounceLoader.vue'

    export default {
//        componets: {
//            BounceLoader
//        },
        computed: {
            ...mapState({
                auth: state => state.authUser
            })
        },

        data() {
            return {
                user: {
                    email: 'kdes70@mail.ru',
                    password: '111111',
                },
                errors: {
                    email: [],
                    password: [],
                },
                // loading: true

            }
        },
        methods: {
            login(user) {
                //this.loading = true
                this.$store.dispatch('login', user)
                    .then(response => {
                        console.log('login success form', response);
                        this.$store.dispatch('getAuthUser', response.data)
                        this.$router.push({name: 'Home'})
                    })
                    .catch(error => {
                        // alert(error.response.data.message)
                        console.log('response failed form', error);
                    })
            }
        },

    }
</script>