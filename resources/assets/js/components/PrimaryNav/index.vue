<template>
    <div class="PrimaryNav u-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 PrimaryNav-button_nav_container text-center">
                    <button class="btn PrimaryNav-button_nav PrimaryNav-button"
                            @click="$store.dispatch('TOGGLE_SIDEBAR')">
                        <i :class=" ui.sidebar ? 'glyphicon glyphicon-remove' : 'glyphicon glyphicon-menu-hamburger'"></i>
                    </button>

                    <router-link :to="{ name: 'Add Ads'}"
                                 class="btn PrimaryNav-button_nav PrimaryNav-button">
                        <i class="glyphicon glyphicon-plus"></i>
                    </router-link>
                    <!--<button v-if="onPostItem" class="btn PrimaryNav-button_nav PrimaryNav-button" @click="backToHome">-->
                    <!--<i class="glyphicon glyphicon-menu-left"></i>-->
                    <!--</button>-->
                </div>
                <div class="col-xs-6 PrimaryNav-logo_container text-center">
                    <h1 class="PrimaryNav-logo">
                        <router-link to="/">{{ ui.appName }}</router-link>
                    </h1>
                </div>
                <div class="col-xs-3 PrimaryNav-button_search_container text-center">

                    <router-link v-if="!authUser" :to="{ name: 'Login'}"
                                 class="btn PrimaryNav-button_nav PrimaryNav-button">
                        <i class="glyphicon glyphicon-log-in"></i>
                    </router-link>

                    <router-link v-if="!authUser" :to="{ name: 'Registration'}"
                                 class="btn PrimaryNav-button_nav PrimaryNav-button">
                        <i class="glyphicon glyphicon-user"></i>
                    </router-link>

                    <!--is auth-->

                    <router-link v-if="authUser"
                                 :to="{ name: 'Profile'}"
                                 class="btn PrimaryNav-button_nav PrimaryNav-button">
                        <i class="glyphicon glyphicon-user"></i>
                        {{ authUser.username }}
                    </router-link>

                    <button v-if="authUser"
                            @click="handleLogout()"
                            :to="{ name: 'Logout'}"
                            class="btn PrimaryNav-button_nav PrimaryNav-button">
                        <i class="glyphicon glyphicon-log-out"></i>
                    </button>


                    <!--<button v-if="!onPostItem" class="btn PrimaryNav-button_search PrimaryNav-button" @click="toggleSearchbar">-->
                    <!--<i :class="searchbarOpen ? 'glyphicon glyphicon-remove' : 'glyphicon glyphicon-search'"></i>-->
                    <!--</button>-->
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    import {mapState} from 'vuex'

    export default {
        computed: {

            ...mapState({
                authUser: state => state.auth.authUser,
                ui: state => state.ui.config
            }),

        },
        methods: {
            handleLogout() {
                this.$store.dispatch('clearAuthUser')
                //   window.localStorage.removeItem('authUser')
                this.$router.push({name: 'Home'})
            }
        }
    }

</script>