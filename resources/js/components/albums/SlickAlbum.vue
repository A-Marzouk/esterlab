<template>
    <slick ref="slick" :options="slickOptions" class="designingMechanisms d-flex pt-0 flex-wrap justify-content-center align-items-center w-100">
        <div v-for="(image,index) in images" :key="index" class="d-flex justify-content-center"><img :src="image" alt="Image" class="img-fluid p-2"  style="width: 450px;" ></div>
    </slick>
</template>

<script>

    import Slick from 'vue-slick';

    export default {
        name: "designingMechanismsAlbum",
        components: {Slick},
        props:['images'],
        data(){
            return{
                slickOptions: {
                    slidesToShow: 1,
                    autoplay:false,
                    arrows:false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
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
        methods:{
            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$nextTick(() => {
                    this.$refs.slick.reSlick();
                });
            },
        },
        mounted() {
            this.reInit();
        }
    }
</script>

<style lang="scss">
    .designingMechanisms{
        .slick-slide{
            min-height: 430px !important;
            display: flex !important;;
            align-items: center !important;;
            justify-content: center !important;
            @media (max-width: 600px) {
                min-height: 325px !important;
            }
        }
    }

</style>