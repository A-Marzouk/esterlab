<template>
    <div class="w-100">
        <slick ref="slick" :options="slickOptions" class="logos d-flex pt-0 flex-wrap justify-content-center align-items-center w-100">
            <div  v-for="(image,index) in images" :key="index">
                <a class="d-flex justify-content-center mb-4"><img :src="image.src" alt="Image" class="img-fluid p-2"  style="width: 200px;height: auto;" ></a>
                <div class="w-100 d-flex justify-content-center pl-3 pr-3">
                    {{image.caption}}
                </div>
            </div>
        </slick>
    </div>

</template>

<script>

    import Slick from 'vue-slick';

    export default {
        components: {Slick},
        props:['images'],
        data(){
            return{
                slickOptions: {
                    slidesToShow: 4,
                    autoplay:false,
                    arrows:false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
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
    .logos{
        .slick-slide{
            min-height: 220px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

            @media (max-width: 600px) {

            }
        }

        .slick-dots {
            bottom: 0 !important;
        }
    }



</style>
