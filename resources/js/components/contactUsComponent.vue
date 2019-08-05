<template>
    <div class="container">
        <div class="contact-form d-flex">
            <div class="left">
                <div class="header">
                    <div class="main">
                        Let's get in touch
                    </div>
                    <div class="sub">
                        We're open for any suggestions or just to have a chat.
                    </div>
                </div>

                <div class="content d-flex flex-column">
                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/phone.png" alt="phone icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                1.800.851.7910
                            </div>
                            <div>
                                512.595.1473
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/mail.png" alt="mail icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                info@esterlab.org
                            </div>  <div>
                                sales@esterlab.org
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/adress.svg" alt="adress icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                600 Congress Ave
                            </div>
                            <div>
                                Floor 14
                            </div>
                            <div>
                                Austin,TX 78701
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <input type="text" placeholder="Name" class="input">
                    <input type="tel" placeholder="Mobile number" class="input">
                    <a href="javascript:void(0)">Call me back</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "contactUsComponent"
    }
</script>

<style lang="scss" scoped>
    .contact-form{
        width: 725px;
        height:400px;
        margin: 100px;
        border-radius: 4px;
        .left{
            width:50%;
            padding: 30px;

            background-image: url("/images/adress_map_white.png"); /* The image used */
            background-color: #cccccc; /* Used if the image is unavailable */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */

            border-bottom-left-radius: 15px;
            border-top-left-radius: 15px;
            .header{
                color: black;
                .main{
                    font-size: 18px;
                    font-weight: 600;
                }
                .sub{
                    font-size: 14px;
                }
            }

            .content{
                padding-top: 30px;
                color:black ;
                .data{
                    padding-bottom:20px;
                    padding-left: 10px;
                }
            }

        }
        .right{
            background: #38c172;
            padding: 30px;
            width:50%;

            border-bottom-right-radius: 15px;
            border-top-right-radius: 15px;

        }

    }
</style>