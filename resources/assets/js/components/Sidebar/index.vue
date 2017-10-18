<template>
    <div class="Sidebar-container">
        <aside :class="['Sidebar u-shadow ', show ? 'Sidebar--open' : '' ]">
            <h4 class="Sidebar-title">Categories</h4>
            <ul class="list-unstyled Sidebar-menu">
               // <li><a href="#" @click.prevent="filterPost('')">All</a></li>
                <li v-for="category in categoryList">
                     <a href="#">{{ category.name }}</a>
                </li>
            </ul>
        </aside>
        <div :class="['Sidebar-overlay', show ? 'Sidebar-overlay--open' : '']" @click="$store.dispatch('TOGGLE_SIDEBAR')"></div>
    </div>
</template>

<script>

    export default {
        props: {
            show: Boolean
        },
        mounted() {
            this.getCategoryList()
        },
        methods: {
            getCategoryList() {
                this.$store.dispatch('getCategoryList')
            }
        },
        computed: {
            overlay() {
                return this.$store.state.ui.config.overlay
            },
            categoryList() {
                return this.$store.state.category.categoryList
            }
        }
    };
</script>