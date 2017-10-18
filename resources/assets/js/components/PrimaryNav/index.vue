<template>
    <div class="PrimaryNav u-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 PrimaryNav-button_nav_container text-center">
                    <button class="btn PrimaryNav-button_nav PrimaryNav-button"
                            @click="$store.dispatch('TOGGLE_SIDEBAR')">
                        <i :class=" sidebar ? 'glyphicon glyphicon-remove' : 'glyphicon glyphicon-menu-hamburger'"></i>
                    </button>
                    <!--<button v-if="onPostItem" class="btn PrimaryNav-button_nav PrimaryNav-button" @click="backToHome">-->
                    <!--<i class="glyphicon glyphicon-menu-left"></i>-->
                    <!--</button>-->
                </div>
                <div class="col-xs-6 PrimaryNav-logo_container text-center">
                    <h1 class="PrimaryNav-logo">
                        <router-link to="/">{{ appName }}</router-link>
                    </h1>
                </div>
                <div class="col-xs-3 PrimaryNav-button_search_container text-center">
                    <!--<button v-if="!onPostItem" class="btn PrimaryNav-button_search PrimaryNav-button" @click="toggleSearchbar">-->
                    <!--<i :class="searchbarOpen ? 'glyphicon glyphicon-remove' : 'glyphicon glyphicon-search'"></i>-->
                    <!--</button>-->
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    export default {
        computed: {
            sidebar() {
                return this.$store.state.ui.config.sidebar
            },
            appName() {
                return this.$store.state.ui.config.appName
            }
        },
    }

</script>