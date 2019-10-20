<template>
   <div>
       <div class="form-inputs w-100" v-show="signInStatus !== 'completed'">
           <span class="error" v-show="signInErrors.email">{{signInErrors.email}}</span>
           <div class="w-100 d-flex justify-content-center align-items-center">
               <input type="email" placeholder="Email" v-model="signInData.email"
                      autocomplete="off">
               <img src="/images/icons/email.webp" alt="" class="input-image" style="    height: 15px;
    width: 38px;">
           </div>

           <span class="error" v-show="signInErrors.password">{{signInErrors.password}}</span>
           <div class="w-100 d-flex justify-content-center align-items-center">
               <input type="password" placeholder="Password" v-model="signInData.password"
                      autocomplete="off">
               <img src="/images/icons/password.webp" alt="" class="input-image" style="    height: 23px;
    width: 38px;">
           </div>

           <div style="margin-left: 10px; margin-bottom:8px; color: white;" class="customLink">
               Not a member? <a href="javascript:void(0)" @click="notMember">Join us now!</a>
           </div>

           <a href="javascript:void(0)" @click="signIn" class="callMeBtn" :class="{'disabled': signInStatus === 'onSigning'}">Sign in</a>
       </div>

       <div class="thanksMessage" v-show="signInStatus === 'completed'">
           <h1>
               Thank you, you will be able to login as soon as your account is activated.
           </h1>
       </div>
   </div>

</template>

<script>
    export default {
        name: "SignInComponent",
        data(){
            return{
                signInStatus: 'register', // onSigning // completed
                signInData:{
                    email:'',
                    password:'',
                },
                signInErrors:{
                    email:'',
                    password:'',
                },
            }
        },
        methods:{
            signIn() {
                // disable the button
                if( this.signInStatus === 'onSigning' ){
                    return;
                }

                this.signInStatus = 'onSigning';

                if( this.checkForm()){
                    setTimeout(()=>{
                        this.signInStatus = 'completed';
                    },1000);
                }else{
                    this.signInStatus = 'signIn' ;
                }
                
            },
            checkForm() {
                let validated = true;

                this.signInErrors = {
                    email:'',
                    password:'',
                };
                

                if (!this.signInData.email) {
                    this.signInErrors.email = 'Email required.';
                    validated = false;
                }

                if (!this.signInData.password) {
                    this.signInErrors.password = 'Password required.';
                    validated = false;
                }


                return validated;
            },
            notMember(){
                this.$emit('notMember');
            }
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

    .error {
        color: red;
        font-weight: 600;
        margin-left:10px;
    }

    .thanksMessage{
        color: white;
        text-align:center;
        padding: 20px;
    }

    .contact-form {
        height: 545px;
        border-radius: 4px;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 100%);
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */

        @media (max-width: 991px) {
            width: 100%;
            height: auto;
            flex-wrap: wrap;
            background: #002594;
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
                    margin-top: 5%;
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

                .callMeBtn.disabled{
                    background: grey;
                    cursor: not-allowed;
                    border: solid 1px darkgray;
                    background: gray;
                    color: darkgray;
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

        .customLink{
            a{
                color: lightblue;
            }
        }
    }

</style>
