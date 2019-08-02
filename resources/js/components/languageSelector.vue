<template>
    <div>
        <div>
            <div @click="languageSelection" v-click-outside="hide" >
                <a href="javascript:void(0)" class="languageBox d-flex align-items-center">
                    <img src="/images/sorting.svg" alt="">
                    <div>
                        <span v-if="language === 'en' ">EN</span>
                        <span v-if="language === 'de' ">DE</span>
                    </div>
                </a>
            </div>
            <div class="select-popup" v-show="showLanguageSelection">
                <ul class="select-popup-list">
                    <li @click="switchLanguage('en')">
                        EN
                    </li>
                    <li @click="switchLanguage('de')">
                        DE
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
            language : 'en',
            showLanguageSelection:''
          }
        },
        methods:{
            languageSelection(){
                this.showLanguageSelection = true ;
            },
            switchLanguage(lang){
                this.language = lang ;
                window.location.href ="/language/switch/" + lang ;
            },

            getCurrentLanguage(){
                axios.get('/language/get/current').then( (response) => {
                    this.language = response.data ;
                });
            },
            hide(){
                this.showLanguageSelection = false ;
            }
        },
        mounted() {
            this.getCurrentLanguage() ;
        }
    }
</script>

<style lang="scss">
    .languageBox{
        border: 1px solid #DADADA;
        border-radius: 20px;
        width: 75px;
        height: 30px;

        @media (max-width: 991px) {
            margin-top: 7px;
        }

        div{
            letter-spacing: -0.1px;
            font-size: 13px;
            color: #4A5464;
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            line-height: 13px;
        }

        img{
            margin-right:10px;
            margin-left:16px;
        }
    }
</style>
