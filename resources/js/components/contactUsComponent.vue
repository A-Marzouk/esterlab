<template>
    <div class="">
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
                                +38 068 192 92 92
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
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/adress.svg" alt="adress icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                60 Sichovych Striltsiv St.
                            </div>
                            <div>
                                Kiev
                            </div>
                            <div>
                                Ukraine, 04050
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="form-inputs w-100">
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <img src="/images/name.png" alt="" class="input-image">
                        <input type="text" placeholder="Name">
                    </div>
                    <div  class="w-100  d-flex justify-content-center align-items-center">
                        <img src="/images/mail-white.png" alt="" class="input-image">
                        <input type="tel" placeholder="Mobile number">
                    </div>
                    <a href="javascript:void(0)" class="callMeBtn">Call me back</a>
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
        border-radius: 4px;
        background-image: url("/images/background_all.png"); /* The image used */
        background-color: #cccccc; /* Used if the image is unavailable */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */

        @media (max-width: 991px) {
            width: 100%;
            height: auto;
            flex-wrap: wrap;
            flex-direction: column-reverse !important;

            background-image: url("/images/adress_map_white.png"); /* The image used */
            background-color: #cccccc; /* Used if the image is unavailable */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }


        .left{
            width:50%;
            padding: 40px 30px 30px 30px;
            border-bottom-left-radius: 15px;
            border-top-left-radius: 15px;
            @media (max-width: 991px) {
                width: 100%;
            }
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

            @media (max-width: 991px) {
                width: 100%;
                background-color:#002594;
                border-bottom-right-radius: 15px;
                border-bottom-left-radius: 15px;
                border-top-right-radius: 0;
            }

            padding: 40px 30px 30px 30px;
            width:50%;

            border-bottom-right-radius: 15px;
            border-top-right-radius: 15px;

            display: flex;
            align-items: center;
            justify-content: center;

            .form-inputs{
                padding-left: 12px;
                input{
                    width: 100%;
                    height: 50px;
                    border:1px solid white;
                    border-radius: 10px;
                    margin-bottom: 12px;
                    background:none;
                    color:white;
                    padding-left: 50px;
                }

                .input-image{
                    width: 40px;
                    margin-right: -42px;
                    margin-bottom: 15px;
                    padding-left: 17px;
                }

                .callMeBtn{
                    width: 100%;
                    height: 50px;
                    border-radius: 50px;
                    border: solid 1px white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color:white;
                    font-size:18px;
                }

                ::placeholder { /* Firefox, Chrome, Opera */
                    color: white;
                }

                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: white;
                }

                ::-ms-input-placeholder { /* Microsoft Edge */
                    color: white;
                }
            }

        }

    }
</style>