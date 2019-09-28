<template>
    <div>
        <slick ref="slick" :options="slickOptions" class="designingMechanisms d-flex pt-0 flex-wrap justify-content-center align-items-center w-100">
            <div  v-for="(image,index) in images" :key="index">
                <a href="javascript:void(0)" data-toggle="modal" :data-target="'#image_' + index" class="d-flex justify-content-center"><img :src="image.src" alt="Image" class="img-fluid p-2"  style="width: 340px;height: auto;" ></a>
                <div class="w-100 d-flex justify-content-center mt-4 mb-4">
                    {{image.caption}}
                </div>
            </div>

        </slick>
        <!-- Modal -->

        <div v-for="(image,index) in images" :key="index + 'A'" class="modal fade" :id="'image_' + index" tabindex="-1" role="dialog" aria-labelledby="certificate"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background: none;border:0;">
                    <div class="modal-body">
                        <img :src="image.src" alt="" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

    </div>

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
                    autoplay:true,
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
            height: 430px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            @media (max-width: 600px) {
                min-height: 325px !important;
            }
        }
    }

</style>
