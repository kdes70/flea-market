<template>
    <div>
        <nprogress-container></nprogress-container>
        <primary-nav></primary-nav>
        <!--<searchbar></searchbar>-->
        <sidebar :show="config.sidebar"></sidebar>

        <div class="main-wrapper">
            <router-view></router-view>
        </div>

        <!--<my-footer></my-footer>-->

    </div>
</template>

<script>
    import '../../sass/app.sass';

    import NprogressContainer from 'vue-nprogress/src/NprogressContainer'

    import PrimaryNav from './PrimaryNav/index.vue';
    import Sidebar from './Sidebar/index.vue';

    //    import Searchbar from './Searchbar/index.vue';

    //    import MyFooter from './MyFooter/index.vue';


    export default {
        name: 'app',

        components: {PrimaryNav, Sidebar, NprogressContainer/*Searchbar, , MyFooter*/},

//        beforeMount() {
//            const config = this.config
//            const { body } = document
//            const WIDTH = 768
//            const RATIO = 3
//            const handler = () => {
//                if (!document.hidden) {
//                    let rect = body.getBoundingClientRect()
//                    config.mobile = rect.width - RATIO < WIDTH
//                    config.sidebar = !config.mobile
//                    config.overlay = config.mobile
//                }
//            }
//            console.log(config.sidebar )
//            document.addEventListener('visibilitychange', handler)
//            window.addEventListener('DOMContentLoaded', handler)
//            window.addEventListener('resize', handler)
//        },

        computed: {
            config () {
                return this.$store.state.ui.config
            }
        }

    }
</script>
