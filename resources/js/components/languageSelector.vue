<template>
    <div>
        <select class="custom-select" @change="switchLanguage" v-model="language" data-width="fit">
            <option value="en">EN</option>
            <option value="de">DE</option>
        </select>
    </div>
</template>

<script>
    export default {
        data(){
          return{
            language : ''
          }
        },
        methods:{
            switchLanguage(){
                window.location.href ="/language/switch/" + this.language ;
            },

            getCurrentLanguage(){
                axios.get('/language/get/current').then( (response) => {
                    this.language = response.data ;
                });
            },
        },
        mounted() {
            this.getCurrentLanguage() ;
        }
    }
</script>
