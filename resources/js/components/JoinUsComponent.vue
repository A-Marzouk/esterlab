<template>
    <div class="contact-form d-flex justify-content-center flex-column align-items-center">
        <div class="mt-4 text-center">
            <h1 style="color: white;">Oversee your project in real time</h1>
        </div>
        <div class="right pt-0">
            <div class="form-inputs w-100">
                <span class="error" v-show="errors.name.length > 0">{{errors.name}}</span>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <input type="text" placeholder="Name" v-model="registerData.name"
                           autocomplete="off">
                    <img src="/images/person.png" alt="" class="input-image" style="    height: 19px;
    width: 38px;">
                </div>

                <span class="error" v-show="errors.email.length > 0">{{errors.email}}</span>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <input type="email" placeholder="Email" v-model="registerData.email"
                           autocomplete="off">
                    <img src="/images/icons/email.webp" alt="" class="input-image" style="    height: 15px;
    width: 38px;">
                </div>

                <span class="error" v-show="errors.company.length > 0">{{errors.company}}</span>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <input type="text" placeholder="Company" v-model="registerData.company"
                           autocomplete="off">
                    <img src="/images/icons/company.webp" alt="" class="input-image" style="    height: 19px;
    width: 38px;">
                </div>

                <span class="error" v-show="errors.password.length > 0">{{errors.password}}</span>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <input type="password" placeholder="Password" v-model="registerData.password"
                           autocomplete="off">
                    <img src="/images/icons/password.webp" alt="" class="input-image" style="    height: 23px;
    width: 38px;">
                </div>

                <div style="margin-left: 10px; margin-bottom:8px;">
                    You agree to the Esterlab <a href="/user-agreement" target="_blank">User Agreement</a>, <a target="_blank" href="/privacy-policy">Privacy Policy</a>, and <a
                        href="/cookie-policy" target="_blank">Cookie Policy</a>.
                </div>

                <a href="javascript:void(0)" @click="register" class="callMeBtn">Agree & Join</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "JoinUsComponent",
        data(){
            return {
                registerData:{
                    name:'',
                    email:'',
                    company:'',
                    password:'',
                },
                errors:{
                    name:'',
                    email:'',
                    company:'',
                    password:'',
                }
            }
        },
        methods: {
            register() {
                if (!this.checkForm()) {
                    return;
                }

                axios.post('/contact-us/submit', this.contactUsData)
                    .then((response) => {
                        this.successfulSubmission();
                    })
                    .catch((error) => {
                        this.failSubmission();
                    });

            },
            successfulSubmission() {
                $('.successMessage').removeClass('d-none');
                setTimeout(() => {
                    $('.successMessage').addClass('d-none');
                }, 2500);

                this.errors = {
                    name:'',
                    email:'',
                    company:'',
                    password:'',
                };

            },
            failSubmission() {
                $('.errorMessage').removeClass('d-none');
                setTimeout(() => {
                    $('.errorMessage').addClass('d-none');
                }, 2500);
            },
            checkForm() {
                let validated = true;

                this.errors = {
                    name:'',
                    email:'',
                    company:'',
                    password:'',
                };

                if (!this.registerData.name) {
                    this.errors.name = 'Name required.';
                    validated = false;
                }

                if (!this.registerData.email) {
                    this.errors.email = 'Email required.';
                    validated = false;
                }

                if (!this.registerData.company) {
                    this.errors.company = 'Company required.';
                    validated = false;
                }

                if (!this.registerData.password) {
                    this.errors.password = 'Password required.';
                    validated = false;
                }


                return validated;
            },
            getTrans(text) {
                if (this.lang === 'en') {
                    return this.trans['en'][text];
                } else if (this.lang === 'de') {
                    return this.trans['de'][text];
                }
            },
            getGEOInfo() {
                axios.get('/client/geo')
                    .then((response) => {
                        this.countryName = response.data.country_name;

                        $('.selectionOptions').children('option').each((i, option) => {
                            let countryCode = $(option).attr('data-countryCode');

                            if (countryCode === this.countryName) {
                                this.contactUsData.countryCode = $(option).attr('value');
                            }
                        });

                    })
                    .catch((error) => {
                        console.log('Error getting geo data, ' + error);
                    });

            }
        },
        mounted() {
            this.lang = this.language;
        }
    }
</script>

<style scoped lang="scss">

    .error {
        color: red;
        font-weight: 600;
        margin-left:10px;
    }

    .contact-form {
        border-radius: 4px;
        background-color: #002594;
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */

        @media (max-width: 991px) {
            width: 100%;
            height: auto;
            flex-wrap: wrap;
            background-color: #002594;
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover; /* Resize the background image to cover the entire container */
        }

        .right {

            @media (max-width: 991px) {
                width: 100%;
                background-color: #002594;
                border-bottom-right-radius: 15px;
                border-bottom-left-radius: 15px;
                border-top-right-radius: 0;
                padding: 20px 30px 30px 30px;
            }

            padding: 40px 30px 30px 30px;
            width: 50%;

            border-bottom-right-radius: 15px;
            border-top-right-radius: 15px;


            .form-inputs {
                padding-left: 12px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin-top: 2%;
                margin-left: -10px;
                @media (max-width: 991px) {
                    margin-top: 15%;
                    margin-left: -15px;
                }

                input, select {
                    width: 100%;
                    height: 50px;
                    border: 1px solid white;
                    border-radius: 10px;
                    margin-bottom: 12px;
                    background: none;
                    color: white;
                    padding-left: 15px;
                }

                select {
                    width: 30%;
                    border-bottom-right-radius: 0;
                    border-top-right-radius: 0;
                    padding-left: 6px;
                    border-right: 0;
                }

                input.mobile-number {
                    padding-left: 5px;
                    border-bottom-left-radius: 0;
                    border-top-left-radius: 0;
                    border-left: 0;
                }

                .input-image {
                    width: 40px;
                    margin-left: -55px;
                    margin-bottom: 15px;
                    padding-left: 17px;
                }

                .callMeBtn {
                    width: 100%;
                    height: 50px;
                    border-radius: 50px;
                    border: solid 1px white;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: white;
                    font-size: 18px;
                    margin-left: 6px;
                    font-weight: bold;
                }

                ::placeholder { /* Firefox, Chrome, Opera */
                    color: white;
                    opacity: .5;
                }

                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: white;
                    opacity: .5;
                }

                ::-ms-input-placeholder { /* Microsoft Edge */
                    color: white;
                    opacity: .5;
                }
            }

        }

    }

</style>
