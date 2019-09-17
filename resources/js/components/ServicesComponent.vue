<template>
    <div class="wrapper">
        <slick ref="slick" :options="slickOptions" class="w-100">
            <div class="solution-box-wrapper justify-content-center">
                <div class="solution-box">
                    <div class="box-header">
                        {{ languageData.services }}
                    </div>

                    <div>
                        <div class="solution-title">
                            {{ languageData.math_modeling }}
                        </div>
                        <div class="solution-sub-title">
                            {{ languageData.math_modeling_sub_head}}
                        </div>
                        <div class="solution-description">
                            {{ languageData.math_modeling_explain}}
                        </div>

                        <div class="discover-btn">
                            <a href="/math-modeling">{{languageData.read_more_btn}}</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="solution-box-wrapper justify-content-center">
                <div class="solution-box">
                    <div class="box-header">
                        {{ languageData.services }}
                    </div>

                    <div>
                        <div class="solution-title development">
                            {{ languageData.designing }}
                        </div>
                        <div class="solution-sub-title">
                            {{ languageData.development_mechanisms}}
                        </div>
                        <div class="solution-description" v-html="languageData.designing_explain">

                        </div>

                        <div class="discover-btn">
                            <a href="/designing-mechanisms">{{languageData.read_more_btn}}</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="solution-box-wrapper justify-content-center">
                <div class="solution-box">
                    <div class="box-header">
                        {{ languageData.services }}
                    </div>
                    <div class="solution-title development">
                        {{ languageData.expertise }}
                    </div>
                    <div class="solution-sub-title">
                        {{ languageData.expertise_sub_head }}
                    </div>
                    <div class="solution-description" v-html="languageData.expertise_explain">

                    </div>

                    <div class="discover-btn">
                        <a href="/expertise-of-mechanisms">{{languageData.read_more_btn}}</a>
                    </div>
                </div>
            </div>
            <div class="solution-box-wrapper justify-content-center">
                <div class="solution-box">
                    <div class="box-header">
                        {{ languageData.services }}
                    </div>
                    <div class="solution-title development">
                        {{ languageData.development_technical }}
                    </div>
                    <div class="solution-sub-title">
                        {{languageData.development_technical_sub}}
                    </div>
                    <div class="solution-description" v-html="languageData.development_technical_explain">

                    </div>

                    <div class="discover-btn">
                        <a href="/technical-development">{{languageData.read_more_btn}}</a>
                    </div>
                </div>
            </div>
        </slick>

    </div>
</template>

<script>
    import translations from '../lang/en/index';
    import Slick from 'vue-slick';

    export default {
        props: ['lang'],
        components: {Slick},
        name: "ServicesComponent",
        data() {
            return {
                languageData: {},
                slickOptions: {
                    slidesToShow: 2,
                    autoplay:true,
                    arrows:true,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows:false,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows:false,
                                dots: true
                            }
                        }
                    ]
                },
            }
        },
        methods: {
            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            },
        },
        mounted() {
            this.languageData = translations[this.lang];
            this.reInit();
        }
    }
</script>

<style lang="scss" scoped>
    .development {
        font-size: 26px !important;
        @media (max-width: 600px) {
            font-size: 20px !important;
            padding-bottom: 12px;
        }
    }

    .wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .solution-box-wrapper {
        .solution-box {
            width: 520px !important;
            height: 445px !important;
            @media (max-width: 600px) {
                width: 100% !important;
                height: 450px !important;
            }
            @media (max-width: 400px) {
                width: 100% !important;
                height: 530px !important;
            }
        }
    }

</style>