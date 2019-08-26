<template>
    <div class="">
        <div class="contact-form d-flex">
            <div class="left">
                <div class="header">
                    <div class="main">
                        {{getTrans('get_in_touch')}}
                    </div>
                    <div class="sub">
                        {{getTrans('more_details')}}
                    </div>
                </div>

                <div class="content d-flex flex-column">
                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/phone.png" alt="phone icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                <a href="tel:+38 068 192 92 92">+38 068 192 92 92</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/mail.png" alt="mail icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                <a href="mailto:info@esterlab.org">info@esterlab.org</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="icon">
                            <img src="/images/adress.svg" alt="adress icon" style="width: 26px;">
                        </div>
                        <div class="data d-flex flex-column">
                            <div>
                                <a href="https://www.google.com/maps/place/ул.+Сечевых+Стрельцов,+60,+Киев,+04050/@50.4565667,30.4894762,17z/data=!4m5!3m4!1s0x40d4ce63673bc087:0xb0a3a2c1274c970!8m2!3d50.4569751!4d30.4899461/" target="_blank">{{getTrans('address')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <button type="button" class="close" id='closeModal' data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white; outline:none">&times;</span>
                    </button>
                </div>
                <div class="form-inputs w-100">
                    <span class="error" v-show="errors.name.length > 0">{{errors.name}}</span>
                    <div class="w-100 d-flex justify-content-center align-items-center">
                        <input type="text" :placeholder="getTrans('name')" v-model="contactUsData.name" autocomplete="off">
                        <img src="/images/person.png" alt="" class="input-image" style="    height: 19px;
    width: 38px;">
                    </div>

                    <span class="error"  v-show="errors.mobile_number.length > 0">{{errors.mobile_number}}</span>
                    <div  class="w-100  d-flex justify-content-center align-items-center">
                        <div class="d-flex w-100">
                            <select name="countryCode" v-model="contactUsData.countryCode" class="selectionOptions">
                                <option data-countryCode="DZ" style="color:black;" value="213" :selected="true">Algeria (+213)</option>
                                <option data-countryCode="AD" style="color:black;" value="376">Andorra (+376)</option>
                                <option data-countryCode="AO" style="color:black;" value="244">Angola (+244)</option>
                                <option data-countryCode="AI" style="color:black;" value="1264">Anguilla (+1264)</option>
                                <option data-countryCode="AG" style="color:black;" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                <option data-countryCode="AR" style="color:black;" value="54">Argentina (+54)</option>
                                <option data-countryCode="AM" style="color:black;" value="374">Armenia (+374)</option>
                                <option data-countryCode="AW" style="color:black;" value="297">Aruba (+297)</option>
                                <option data-countryCode="AU" style="color:black;" value="61">Australia (+61)</option>
                                <option data-countryCode="AT" style="color:black;" value="43">Austria (+43)</option>
                                <option data-countryCode="AZ" style="color:black;" value="994">Azerbaijan (+994)</option>
                                <option data-countryCode="BS" style="color:black;" value="1242">Bahamas (+1242)</option>
                                <option data-countryCode="BH" style="color:black;" value="973">Bahrain (+973)</option>
                                <option data-countryCode="BD" style="color:black;" value="880">Bangladesh (+880)</option>
                                <option data-countryCode="BB" style="color:black;" value="1246">Barbados (+1246)</option>
                                <option data-countryCode="BY" style="color:black;" value="375">Belarus (+375)</option>
                                <option data-countryCode="BE" style="color:black;" value="32">Belgium (+32)</option>
                                <option data-countryCode="BZ" style="color:black;" value="501">Belize (+501)</option>
                                <option data-countryCode="BJ" style="color:black;" value="229">Benin (+229)</option>
                                <option data-countryCode="BM" style="color:black;" value="1441">Bermuda (+1441)</option>
                                <option data-countryCode="BT" style="color:black;" value="975">Bhutan (+975)</option>
                                <option data-countryCode="BO" style="color:black;" value="591">Bolivia (+591)</option>
                                <option data-countryCode="BA" style="color:black;" value="387">Bosnia Herzegovina (+387)</option>
                                <option data-countryCode="BW" style="color:black;" value="267">Botswana (+267)</option>
                                <option data-countryCode="BR" style="color:black;" value="55">Brazil (+55)</option>
                                <option data-countryCode="BN" style="color:black;" value="673">Brunei (+673)</option>
                                <option data-countryCode="BG" style="color:black;" value="359">Bulgaria (+359)</option>
                                <option data-countryCode="BF" style="color:black;" value="226">Burkina Faso (+226)</option>
                                <option data-countryCode="BI" style="color:black;" value="257">Burundi (+257)</option>
                                <option data-countryCode="KH" style="color:black;" value="855">Cambodia (+855)</option>
                                <option data-countryCode="CM" style="color:black;" value="237">Cameroon (+237)</option>
                                <option data-countryCode="CA" style="color:black;" value="1">Canada (+1)</option>
                                <option data-countryCode="CV" style="color:black;" value="238">Cape Verde Islands (+238)</option>
                                <option data-countryCode="KY" style="color:black;" value="1345">Cayman Islands (+1345)</option>
                                <option data-countryCode="CF" style="color:black;" value="236">Central African Republic (+236)</option>
                                <option data-countryCode="CL" style="color:black;" value="56">Chile (+56)</option>
                                <option data-countryCode="CN" style="color:black;" value="86">China (+86)</option>
                                <option data-countryCode="CO" style="color:black;" value="57">Colombia (+57)</option>
                                <option data-countryCode="KM" style="color:black;" value="269">Comoros (+269)</option>
                                <option data-countryCode="CG" style="color:black;" value="242">Congo (+242)</option>
                                <option data-countryCode="CK" style="color:black;" value="682">Cook Islands (+682)</option>
                                <option data-countryCode="CR" style="color:black;" value="506">Costa Rica (+506)</option>
                                <option data-countryCode="HR" style="color:black;" value="385">Croatia (+385)</option>
                                <option data-countryCode="CU" style="color:black;" value="53">Cuba (+53)</option>
                                <option data-countryCode="CY" style="color:black;" value="90392">Cyprus North (+90392)</option>
                                <option data-countryCode="CY" style="color:black;" value="357">Cyprus South (+357)</option>
                                <option data-countryCode="CZ" style="color:black;" value="42">Czech Republic (+42)</option>
                                <option data-countryCode="DK" style="color:black;" value="45">Denmark (+45)</option>
                                <option data-countryCode="DJ" style="color:black;" value="253">Djibouti (+253)</option>
                                <option data-countryCode="DM" style="color:black;" value="1809">Dominica (+1809)</option>
                                <option data-countryCode="DO" style="color:black;" value="1809">Dominican Republic (+1809)</option>
                                <option data-countryCode="EC" style="color:black;" value="593">Ecuador (+593)</option>
                                <option data-countryCode="EG" style="color:black;" value="20">Egypt (+20)</option>
                                <option data-countryCode="SV" style="color:black;" value="503">El Salvador (+503)</option>
                                <option data-countryCode="GQ" style="color:black;" value="240">Equatorial Guinea (+240)</option>
                                <option data-countryCode="ER" style="color:black;" value="291">Eritrea (+291)</option>
                                <option data-countryCode="EE" style="color:black;" value="372">Estonia (+372)</option>
                                <option data-countryCode="ET" style="color:black;" value="251">Ethiopia (+251)</option>
                                <option data-countryCode="FK" style="color:black;" value="500">Falkland Islands (+500)</option>
                                <option data-countryCode="FO" style="color:black;" value="298">Faroe Islands (+298)</option>
                                <option data-countryCode="FJ" style="color:black;" value="679">Fiji (+679)</option>
                                <option data-countryCode="FI" style="color:black;" value="358">Finland (+358)</option>
                                <option data-countryCode="FR" style="color:black;" value="33">France (+33)</option>
                                <option data-countryCode="GF" style="color:black;" value="594">French Guiana (+594)</option>
                                <option data-countryCode="PF" style="color:black;" value="689">French Polynesia (+689)</option>
                                <option data-countryCode="GA" style="color:black;" value="241">Gabon (+241)</option>
                                <option data-countryCode="GM" style="color:black;" value="220">Gambia (+220)</option>
                                <option data-countryCode="GE" style="color:black;" value="7880">Georgia (+7880)</option>
                                <option data-countryCode="DE" style="color:black;" value="49">Germany (+49)</option>
                                <option data-countryCode="GH" style="color:black;" value="233">Ghana (+233)</option>
                                <option data-countryCode="GI" style="color:black;" value="350">Gibraltar (+350)</option>
                                <option data-countryCode="GR" style="color:black;" value="30">Greece (+30)</option>
                                <option data-countryCode="GL" style="color:black;" value="299">Greenland (+299)</option>
                                <option data-countryCode="GD" style="color:black;" value="1473">Grenada (+1473)</option>
                                <option data-countryCode="GP" style="color:black;" value="590">Guadeloupe (+590)</option>
                                <option data-countryCode="GU" style="color:black;" value="671">Guam (+671)</option>
                                <option data-countryCode="GT" style="color:black;" value="502">Guatemala (+502)</option>
                                <option data-countryCode="GN" style="color:black;" value="224">Guinea (+224)</option>
                                <option data-countryCode="GW" style="color:black;" value="245">Guinea - Bissau (+245)</option>
                                <option data-countryCode="GY" style="color:black;" value="592">Guyana (+592)</option>
                                <option data-countryCode="HT" style="color:black;" value="509">Haiti (+509)</option>
                                <option data-countryCode="HN" style="color:black;" value="504">Honduras (+504)</option>
                                <option data-countryCode="HK" style="color:black;" value="852">Hong Kong (+852)</option>
                                <option data-countryCode="HU" style="color:black;" value="36">Hungary (+36)</option>
                                <option data-countryCode="IS" style="color:black;" value="354">Iceland (+354)</option>
                                <option data-countryCode="IN" style="color:black;" value="91">India (+91)</option>
                                <option data-countryCode="ID" style="color:black;" value="62">Indonesia (+62)</option>
                                <option data-countryCode="IR" style="color:black;" value="98">Iran (+98)</option>
                                <option data-countryCode="IQ" style="color:black;" value="964">Iraq (+964)</option>
                                <option data-countryCode="IE" style="color:black;" value="353">Ireland (+353)</option>
                                <option data-countryCode="IL" style="color:black;" value="972">Israel (+972)</option>
                                <option data-countryCode="IT" style="color:black;" value="39">Italy (+39)</option>
                                <option data-countryCode="JM" style="color:black;" value="1876">Jamaica (+1876)</option>
                                <option data-countryCode="JP" style="color:black;" value="81">Japan (+81)</option>
                                <option data-countryCode="JO" style="color:black;" value="962">Jordan (+962)</option>
                                <option data-countryCode="KZ" style="color:black;" value="7">Kazakhstan (+7)</option>
                                <option data-countryCode="KE" style="color:black;" value="254">Kenya (+254)</option>
                                <option data-countryCode="KI" style="color:black;" value="686">Kiribati (+686)</option>
                                <option data-countryCode="KP" style="color:black;" value="850">Korea North (+850)</option>
                                <option data-countryCode="KR" style="color:black;" value="82">Korea South (+82)</option>
                                <option data-countryCode="KW" style="color:black;" value="965">Kuwait (+965)</option>
                                <option data-countryCode="KG" style="color:black;" value="996">Kyrgyzstan (+996)</option>
                                <option data-countryCode="LA" style="color:black;" value="856">Laos (+856)</option>
                                <option data-countryCode="LV" style="color:black;" value="371">Latvia (+371)</option>
                                <option data-countryCode="LB" style="color:black;" value="961">Lebanon (+961)</option>
                                <option data-countryCode="LS" style="color:black;" value="266">Lesotho (+266)</option>
                                <option data-countryCode="LR" style="color:black;" value="231">Liberia (+231)</option>
                                <option data-countryCode="LY" style="color:black;" value="218">Libya (+218)</option>
                                <option data-countryCode="LI" style="color:black;" value="417">Liechtenstein (+417)</option>
                                <option data-countryCode="LT" style="color:black;" value="370">Lithuania (+370)</option>
                                <option data-countryCode="LU" style="color:black;" value="352">Luxembourg (+352)</option>
                                <option data-countryCode="MO" style="color:black;" value="853">Macao (+853)</option>
                                <option data-countryCode="MK" style="color:black;" value="389">Macedonia (+389)</option>
                                <option data-countryCode="MG" style="color:black;" value="261">Madagascar (+261)</option>
                                <option data-countryCode="MW" style="color:black;" value="265">Malawi (+265)</option>
                                <option data-countryCode="MY" style="color:black;" value="60">Malaysia (+60)</option>
                                <option data-countryCode="MV" style="color:black;" value="960">Maldives (+960)</option>
                                <option data-countryCode="ML" style="color:black;" value="223">Mali (+223)</option>
                                <option data-countryCode="MT" style="color:black;" value="356">Malta (+356)</option>
                                <option data-countryCode="MH" style="color:black;" value="692">Marshall Islands (+692)</option>
                                <option data-countryCode="MQ" style="color:black;" value="596">Martinique (+596)</option>
                                <option data-countryCode="MR" style="color:black;" value="222">Mauritania (+222)</option>
                                <option data-countryCode="YT" style="color:black;" value="269">Mayotte (+269)</option>
                                <option data-countryCode="MX" style="color:black;" value="52">Mexico (+52)</option>
                                <option data-countryCode="FM" style="color:black;" value="691">Micronesia (+691)</option>
                                <option data-countryCode="MD" style="color:black;" value="373">Moldova (+373)</option>
                                <option data-countryCode="MC" style="color:black;" value="377">Monaco (+377)</option>
                                <option data-countryCode="MN" style="color:black;" value="976">Mongolia (+976)</option>
                                <option data-countryCode="MS" style="color:black;" value="1664">Montserrat (+1664)</option>
                                <option data-countryCode="MA" style="color:black;" value="212">Morocco (+212)</option>
                                <option data-countryCode="MZ" style="color:black;" value="258">Mozambique (+258)</option>
                                <option data-countryCode="MN" style="color:black;" value="95">Myanmar (+95)</option>
                                <option data-countryCode="NA" style="color:black;" value="264">Namibia (+264)</option>
                                <option data-countryCode="NR" style="color:black;" value="674">Nauru (+674)</option>
                                <option data-countryCode="NP" style="color:black;" value="977">Nepal (+977)</option>
                                <option data-countryCode="NL" style="color:black;" value="31">Netherlands (+31)</option>
                                <option data-countryCode="NC" style="color:black;" value="687">New Caledonia (+687)</option>
                                <option data-countryCode="NZ" style="color:black;" value="64">New Zealand (+64)</option>
                                <option data-countryCode="NI" style="color:black;" value="505">Nicaragua (+505)</option>
                                <option data-countryCode="NE" style="color:black;" value="227">Niger (+227)</option>
                                <option data-countryCode="NG" style="color:black;" value="234">Nigeria (+234)</option>
                                <option data-countryCode="NU" style="color:black;" value="683">Niue (+683)</option>
                                <option data-countryCode="NF" style="color:black;" value="672">Norfolk Islands (+672)</option>
                                <option data-countryCode="NP" style="color:black;" value="670">Northern Marianas (+670)</option>
                                <option data-countryCode="NO" style="color:black;" value="47">Norway (+47)</option>
                                <option data-countryCode="OM" style="color:black;" value="968">Oman (+968)</option>
                                <option data-countryCode="PW" style="color:black;" value="680">Palau (+680)</option>
                                <option data-countryCode="PA" style="color:black;" value="507">Panama (+507)</option>
                                <option data-countryCode="PG" style="color:black;" value="675">Papua New Guinea (+675)</option>
                                <option data-countryCode="PY" style="color:black;" value="595">Paraguay (+595)</option>
                                <option data-countryCode="PE" style="color:black;" value="51">Peru (+51)</option>
                                <option data-countryCode="PH" style="color:black;" value="63">Philippines (+63)</option>
                                <option data-countryCode="PL" style="color:black;" value="48">Poland (+48)</option>
                                <option data-countryCode="PT" style="color:black;" value="351">Portugal (+351)</option>
                                <option data-countryCode="PR" style="color:black;" value="1787">Puerto Rico (+1787)</option>
                                <option data-countryCode="QA" style="color:black;" value="974">Qatar (+974)</option>
                                <option data-countryCode="RE" style="color:black;" value="262">Reunion (+262)</option>
                                <option data-countryCode="RO" style="color:black;" value="40">Romania (+40)</option>
                                <option data-countryCode="RU" style="color:black;" value="7">Russia (+7)</option>
                                <option data-countryCode="RW" style="color:black;" value="250">Rwanda (+250)</option>
                                <option data-countryCode="SM" style="color:black;" value="378">San Marino (+378)</option>
                                <option data-countryCode="ST" style="color:black;" value="239">Sao Tome &amp; Principe (+239)</option>
                                <option data-countryCode="SA" style="color:black;" value="966">Saudi Arabia (+966)</option>
                                <option data-countryCode="SN" style="color:black;" value="221">Senegal (+221)</option>
                                <option data-countryCode="CS" style="color:black;" value="381">Serbia (+381)</option>
                                <option data-countryCode="SC" style="color:black;" value="248">Seychelles (+248)</option>
                                <option data-countryCode="SL" style="color:black;" value="232">Sierra Leone (+232)</option>
                                <option data-countryCode="SG" style="color:black;" value="65">Singapore (+65)</option>
                                <option data-countryCode="SK" style="color:black;" value="421">Slovak Republic (+421)</option>
                                <option data-countryCode="SI" style="color:black;" value="386">Slovenia (+386)</option>
                                <option data-countryCode="SB" style="color:black;" value="677">Solomon Islands (+677)</option>
                                <option data-countryCode="SO" style="color:black;" value="252">Somalia (+252)</option>
                                <option data-countryCode="ZA" style="color:black;" value="27">South Africa (+27)</option>
                                <option data-countryCode="ES" style="color:black;" value="34">Spain (+34)</option>
                                <option data-countryCode="LK" style="color:black;" value="94">Sri Lanka (+94)</option>
                                <option data-countryCode="SH" style="color:black;" value="290">St. Helena (+290)</option>
                                <option data-countryCode="KN" style="color:black;" value="1869">St. Kitts (+1869)</option>
                                <option data-countryCode="SC" style="color:black;" value="1758">St. Lucia (+1758)</option>
                                <option data-countryCode="SD" style="color:black;" value="249">Sudan (+249)</option>
                                <option data-countryCode="SR" style="color:black;" value="597">Suriname (+597)</option>
                                <option data-countryCode="SZ" style="color:black;" value="268">Swaziland (+268)</option>
                                <option data-countryCode="SE" style="color:black;" value="46">Sweden (+46)</option>
                                <option data-countryCode="CH" style="color:black;" value="41">Switzerland (+41)</option>
                                <option data-countryCode="SI" style="color:black;" value="963">Syria (+963)</option>
                                <option data-countryCode="TW" style="color:black;" value="886">Taiwan (+886)</option>
                                <option data-countryCode="TJ" style="color:black;" value="7">Tajikstan (+7)</option>
                                <option data-countryCode="TH" style="color:black;" value="66">Thailand (+66)</option>
                                <option data-countryCode="TG" style="color:black;" value="228">Togo (+228)</option>
                                <option data-countryCode="TO" style="color:black;" value="676">Tonga (+676)</option>
                                <option data-countryCode="TT" style="color:black;" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                <option data-countryCode="TN" style="color:black;" value="216">Tunisia (+216)</option>
                                <option data-countryCode="TR" style="color:black;" value="90">Turkey (+90)</option>
                                <option data-countryCode="TM" style="color:black;" value="7">Turkmenistan (+7)</option>
                                <option data-countryCode="TM" style="color:black;" value="993">Turkmenistan (+993)</option>
                                <option data-countryCode="TC" style="color:black;" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                <option data-countryCode="TV" style="color:black;" value="688">Tuvalu (+688)</option>
                                <option data-countryCode="UG" style="color:black;" value="256">Uganda (+256)</option>
                                 <option data-countryCode="GB" style="color:black;" value="44">UK (+44)</option>
                                <option data-countryCode="UA" style="color:black;" value="380">Ukraine (+380)</option>
                                <option data-countryCode="AE" style="color:black;" value="971">United Arab Emirates (+971)</option>
                                <option data-countryCode="UY" style="color:black;" value="598">Uruguay (+598)</option>
                                 <option data-countryCode="US" style="color:black;" value="1">USA (+1)</option>
                                <option data-countryCode="UZ" style="color:black;" value="7">Uzbekistan (+7)</option>
                                <option data-countryCode="VU" style="color:black;" value="678">Vanuatu (+678)</option>
                                <option data-countryCode="VA" style="color:black;" value="379">Vatican City (+379)</option>
                                <option data-countryCode="VE" style="color:black;" value="58">Venezuela (+58)</option>
                                <option data-countryCode="VN" style="color:black;" value="84">Vietnam (+84)</option>
                                <option data-countryCode="VG" style="color:black;" value="84">Virgin Islands - British (+1284)</option>
                                <option data-countryCode="VI" style="color:black;" value="84">Virgin Islands - US (+1340)</option>
                                <option data-countryCode="WF" style="color:black;" value="681">Wallis &amp; Futuna (+681)</option>
                                <option data-countryCode="YE" style="color:black;" value="969">Yemen (North)(+969)</option>
                                <option data-countryCode="YE" style="color:black;" value="967">Yemen (South)(+967)</option>
                                <option data-countryCode="ZM" style="color:black;" value="260">Zambia (+260)</option>
                                <option data-countryCode="ZW" style="color:black;" value="263">Zimbabwe (+263)</option>
                            </select>
                            <input class="mobile-number" required type="tel" :placeholder="getTrans('phone')" v-model="contactUsData.mobile_number" autocomplete="off">
                        </div>
                        <img src="/images/phone-white.png" alt="" class="input-image">
                    </div>
                    <a href="javascript:void(0)" @click="callMeBack" class="callMeBtn">{{getTrans('call_me_back')}}</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "contactUsComponent",
        props: ['language'],
        data(){
            return{
                contactUsData:{
                    name:'',
                    mobile_number:'',
                    countryCode:'213',
                },
                errors:{
                    'name':'',
                    'mobile_number':'',
                },
                lang:'',
                countryName:'',
                trans:{
                    en:{
                        'get_in_touch': 'GET IN TOUCH',
                        'call_me_back': 'Call me back',
                        'contact_us': 'Contact Us',
                        'name': 'Name',
                        'phone': 'Mobile number',

                        'more_details': 'Need to know more on details ?',

                        'address_title': 'Address: ',
                        'address': '60 Sichovych Striltsiv St., Kiev, Ukraine, 04050 ',

                        'tel_title': 'Tel./Fax :',
                        'email_title': 'Email :'
                    },
                    de:{
                        'get_in_touch': 'In Kontakt  kommen',
                        'call_me_back': 'Rufen Sie mich zurück',
                        'contact_us': 'Kontaktdaten',

                        'name': 'Vorname',
                        'phone': 'Handynummer',

                        'more_details': 'Wünschen Sie weitere Informationen?',

                        'address_title': 'Adresse ',
                        'address': 'ul. Setschevich Strelzov, 60,  St. Kiew, Ukraine, 04050',

                        'tel_title': 'Tel:',
                        'email_title': 'Email :',
                    }
                }
            }
        },
        methods:{
            callMeBack(){
                if(!this.checkForm()){
                    return;
                }

                axios.post('/contact-us/submit',this.contactUsData)
                    .then( (response) => {
                        console.log(response.data);
                        this.successfulSubmission();
                    })
                    .catch( (error) => {
                        this.failSubmission();
                    });

            },
            successfulSubmission(){
                $('#closeModal').click();
                $('.successMessage').removeClass('d-none');

                setTimeout(()=>{
                    $('.successMessage').addClass('d-none');
                },2500);

                this.contactUsData = {
                    'name':'',
                    'mobile_number':'',
                };
                this.errors = {
                    'name':'',
                    'mobile_number':'',
                };
            },
            failSubmission(){
                $('#closeModal').click();
                $('.errorMessage').removeClass('d-none');

                setTimeout(()=>{
                    $('.errorMessage').addClass('d-none');
                },2500);
            },
            checkForm () {
                let validated = true ;

                this.errors = {
                    'name':'',
                    'mobile_number':'',
                };

                if (!this.contactUsData.name) {
                    this.errors.name = 'Name required.';
                    validated = false;
                }
                if (!this.contactUsData.mobile_number) {
                    this.errors.mobile_number = 'Mobile number required.';
                    validated = false;
                }

                let isNum = /^\d+$/.test(this.contactUsData.mobile_number);
                if(this.contactUsData.mobile_number && !isNum){
                    this.errors.mobile_number = 'Phone can not contain any chars.';
                    validated = false;
                }


                return validated ;
            },
            getTrans(text){
                if(this.lang === 'en'){
                    return this.trans['en'][text] ;
                }
                else if(this.lang === 'de')
                {
                    return this.trans['de'][text] ;
                }
            },
            getGEOInfo(){
                axios.get('/client/geo')
                    .then( (response) => {
                        this.countryName = response.data.country_name ;

                        $('.selectionOptions').children('option').each( (i,option) => {
                            let countryCode = $(option).attr('data-countryCode');

                            if(countryCode === this.countryName){
                                this.contactUsData.countryCode = $(option).attr('value');
                            }
                        });

                    })
                    .catch( (error) => {
                        console.log('Error getting geo data, ' + error);
                    });

            }
        },
        mounted() {
            this.lang = this.language;
            this.getGEOInfo();
        }
    }
</script>

<style lang="scss" scoped>
    .error{
        color: red;
        font-weight: 600;
    }
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
                padding: 20px 30px 30px 30px;
            }

            padding: 40px 30px 30px 30px;
            width:50%;

            border-bottom-right-radius: 15px;
            border-top-right-radius: 15px;


            .form-inputs{
                padding-left: 12px;
                display: flex;
                justify-content: center;
                flex-direction: column;
                margin-top: 25%;
                margin-left: -10px;
                @media (max-width: 991px) {
                    margin-top: 15%;
                    margin-left: -15px;
                }
                input,select{
                    width: 100%;
                    height: 50px;
                    border:1px solid white;
                    border-radius: 10px;
                    margin-bottom: 12px;
                    background:none;
                    color:white;
                    padding-left: 15px;
                }
                select{
                   width:30%;
                    border-bottom-right-radius: 0;
                    border-top-right-radius: 0;
                    padding-left : 6px ;
                    border-right: 0;
                }

                input.mobile-number{
                    padding-left:5px;
                    border-bottom-left-radius: 0;
                    border-top-left-radius: 0;
                    border-left: 0;
                }

                .input-image{
                    width: 40px;
                    margin-left: -55px;
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
                    margin-left: 6px;
                }

                ::placeholder { /* Firefox, Chrome, Opera */
                    color: white;
                    opacity:.5;
                }

                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: white;
                    opacity:.5;
                }

                ::-ms-input-placeholder { /* Microsoft Edge */
                    color: white;
                    opacity:.5;
                }
            }

        }

    }
</style>