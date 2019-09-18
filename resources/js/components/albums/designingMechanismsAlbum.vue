<template>
    <slick ref="slick" :options="slickOptions" class="designingMechanisms d-flex pt-0 flex-wrap justify-content-center align-items-center w-100">
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image4.webp" alt="Image" class="img-fluid p-2"  style="width: 450px;" ></div>
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image2.webp" alt="Image" class="img-fluid p-2"  style="width: 450px;" ></div>
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image5.webp" alt="Image" class="img-fluid p-2"  style="width: 450px;"></div>
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image6.webp" alt="Image" class="img-fluid p-2"  style="width: 450px;"></div>
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image1.webp" alt="Image" class="img-fluid p-2 mt-5"  style="width: 450px;"></div>
        <div class="d-flex justify-content-center"><img src="/images/designing-mechanisms/image3.webp" alt="Image" class="img-fluid p-2 mt-5"  style="width: 450px;"></div>
    </slick>
</template>

<script>

    import Slick from 'vue-slick';

    export default {
        name: "designingMechanismsAlbum",
        components: {Slick},
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
        }
    }
</script>

<style lang="scss">
    .designingMechanisms{
        .slick-slide{
            min-height: 430px !important;
            display: flex !important;;
            align-items: center !important;;
            justify-content: center !important;;
        }
    }

</style>