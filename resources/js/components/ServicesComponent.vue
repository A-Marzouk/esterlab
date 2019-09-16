<template>
    <div>
        <div class="solution-box-wrapper justify-content-center">
            <div class="solution-box">
                <div class="box-header">
                   {{ languageData.services }}
                </div>
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

        <div class="solution-box-wrapper justify-content-center">
            <div class="solution-box">
                <div class="box-header">
                    {{ languageData.services }}
                </div>
                <div class="solution-title">
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


        <div class="solution-box-wrapper justify-content-center">
            <div class="solution-box">
                <div class="box-header">
                    {{ languageData.services }}
                </div>
                <div class="solution-title">
                    {{ languageData.expertise }}
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
                <div class="solution-description" v-html="languageData.development_technical_explain">

                </div>

                <div class="discover-btn">
                    <a href="/technical-development">{{languageData.read_more_btn}}</a>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    import translations from '../lang/en/index'
    
    export default {
        props:['lang'],
        name: "ServicesComponent",
        data(){
            return{
                languageData:{}
            }
        },
        methods:{

        },
        mounted() {
            this.languageData = translations[this.lang] ;
        }
    }
</script>

<style lang="scss" scoped>
.development{
    font-size: 26px !important;
    @media (max-width: 600px) {
        font-size: 20px !important;
        padding-bottom: 12px;
    }
}
</style>