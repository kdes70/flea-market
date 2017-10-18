<template>
    <div class="post_block">
        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 post_wrapper" v-if="adsList" v-for="adsItem in adsList">
            <div class="post_card">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div>
                            <div class="post_preview">
                                <a class="img_wrapper"
                                   :title="adsItem.title"
                                   href=""
                                   :style="{ background: 'url(' + backgroundImage + ') center center / cover', height: '214px' }">
                                </a>
                            </div>
                            <div class="post_title">
                                <a href="">{{ adsItem.title }}</a>
                            </div>
                            <div class="post_price text-left text-success">{{ adsItem.price }} &#8381;</div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="glyphicon glyphicon-eye-open">56+7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                backgroundImage: 'http://via.placeholder.com/180x180'
            }
        },

        mounted() {
            this.getAdsList()
        },
        methods: {
            getAdsList() {
                this.$store.dispatch('getAdsList')
            }
        },
        computed: {
            adsList() {
                return this.$store.state.ads.adsList
            }
        }

    }
</script>
