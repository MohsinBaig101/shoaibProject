<?php
ini_set('display_errors', 1);
require_once('vendor/autoload.php');
// ini_set('display_errors', 1);
require_once ('./StripePayment.php');
include_once('./config.php');
// $servername = $config["servername"];
// $username = $config["username"];
// $password = $config["password"];
// $dbname = $config["dbname"];

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
session_start();
// session_destroy();
 
$isExist = false;
if(isset($_SESSION["products"]) && count($_SESSION["products"]) > 0){
  $isExist = true;
}
// print_r($_POST);
if (!empty($_POST["token"])) {
  $stripePayment = new StripePayment();
  $stripeResponse = $stripePayment->chargeAmountFromCard($_POST);    
  $amount = $stripeResponse["amount"] /100;
  $param_type = 'ssdssss';
  $param_value_array = array(
      $_POST['email'],
      $_POST['item_number'],
      $amount,
      $stripeResponse["currency"],
      $stripeResponse["balance_transaction"],
      $stripeResponse["status"],
      json_encode($stripeResponse)
  );
  //$query = "INSERT INTO tbl_payment (email, item_number, amount, currency_code, txn_id, payment_status, payment_response) values (?, ?, ?, ?, ?, ?, ?)";
  // $id = $dbController->insert($query, $param_type, $param_value_array);
  
  if ($stripeResponse['amount_refunded'] == 0 && empty($stripeResponse['failure_code']) && $stripeResponse['paid'] == 1 && $stripeResponse['captured'] == 1 && $stripeResponse['status'] == 'succeeded') {
      $successMessage = "Stripe payment is completed successfully. The TXN ID is " . $stripeResponse["balance_transaction"];
      session_destroy();
      header('Location: shop.php');
    }

}

?>
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617941659e270262d26d028f" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <title>rema_v5</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/rema-v5.webflow.css" rel="stylesheet" type="text/css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
  <div data-node-type="commerce-checkout-form-container" data-wf-checkout-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercecheckoutformcontainer">
    <div class="w-commerce-commercelayoutcontainer w-container">
     
      <div class="w-commerce-commercelayoutmain">
      <form id="frmStripePayment" action="" method="post">
          <div data-node-type="commerce-cart-quick-checkout-actions">
            <a data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton">
              <div></div>
            </a>
            <a data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton"><svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewbox="0 0 16 16">
                <defs>
                  <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                  <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
                  <path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
                  <g transform="translate(0 4)">
                    <mask id="google-mark-b" fill="#fff">
                      <use xlink:href="#google-mark-a"></use>
                    </mask>
                    <path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
                  </g>
                  <mask id="google-mark-d" fill="#fff">
                    <use xlink:href="#google-mark-c"></use>
                  </mask>
                  <path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
                </g>
              </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16">
                <g fill="none" fill-rule="evenodd">
                  <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                  <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                  <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                  <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                </g>
              </svg>
              <div>Pay with browser.</div>
            </a>
          </div>
          <div class="w-commerce-commercecheckoutblockheader">
              <h4>Customer Info</h4>
              <div>* Required</div>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <label class="w-commerce-commercecheckoutlabel">Email *</label><input type="text" name="email" required="" class="w-commerce-commercecheckoutemailinput"></fieldset>
          
          <div class="w-commerce-commercecheckoutblockheader">
              <h4>Shipping Address</h4>
              <div>* Required</div>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <label class="w-commerce-commercecheckoutlabel">Full Name *

              </label>
              <input type="text" name="shipping_name" required="" class="w-commerce-commercecheckoutshippingfullname">
              <label class="w-commerce-commercecheckoutlabel">Street Address *</label>
              <input type="text" name="shipping_address_line1" required="" class="w-commerce-commercecheckoutshippingstreetaddress">
              <input type="text" name="shipping_address_line2" class="w-commerce-commercecheckoutshippingstreetaddressoptional">
              <div class="w-commerce-commercecheckoutrow">
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">
                    City *</label><input type="text" name="shipping_address_city" required="" class="w-commerce-commercecheckoutshippingcity">
                  </div>
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">State/Province</label>
                  <input type="text" name="shipping_address_state" class="w-commerce-commercecheckoutshippingstateprovince">
                </div>
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">Zip/Postal Code *</label>
                  <input type="text" name="shipping_address_zip" required="" data-node-type="commerce-checkout-shipping-zip-field" class="w-commerce-commercecheckoutshippingzippostalcode">
                </div>
              </div><label class="w-commerce-commercecheckoutlabel">Country *</label>
              <select name="shipping_address_country" class="w-commerce-commercecheckoutshippingcountryselector">
                <option value="AF">Afghanistan</option>
                <option value="AX">Aland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="VG">British Virgin Islands</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curacao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czechia</option>
                <option value="CD">Democratic Republic of the Congo</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="SZ">Eswatini</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="CI">Ivory Coast</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="XK">Kosovo</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Laos</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldova</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="KP">North Korea</option>
                <option value="MK">North Macedonia</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="CG">Republic of the Congo</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russia</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthelemy</option>
                <option value="SH">Saint Helena</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="KR">South Korea</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syria</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="VI">U.S. Virgin Islands</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VA">Vatican</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
              </select>
            </fieldset>
          <div class="w-commerce-commercecheckoutblockheader">
              <h4>Shipping Method</h4>
            </div>
            <fieldset>
              <script type="text/x-wf-template" id="wf-template-613280b9f4424d1c17c82312000000000042">%3Clabel%20class%3D%22w-commerce-commercecheckoutshippingmethoditem%22%3E%3Cinput%20type%3D%22radio%22%20required%3D%22%22%20name%3D%22shipping-method-choice%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecheckoutshippingmethoddescriptionblock%22%3E%3Cdiv%20class%3D%22w-commerce-commerceboldtextblock%22%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Flabel%3E</script>
              <div data-node-type="commerce-checkout-shipping-methods-list" class="w-commerce-commercecheckoutshippingmethodslist" data-wf-collection="database.commerceOrder.availableShippingMethods" data-wf-template-id="wf-template-613280b9f4424d1c17c82312000000000042"><label class="w-commerce-commercecheckoutshippingmethoditem">
                <input type="radio" id="html" checked name="fav_language" value="HTML">
                <label for="html">Stripe</label><br>
                  <div></div>
                </label></div>
              
            </fieldset>
      
          <div class="w-commerce-commercecheckoutpaymentinfowrapper">
            <div class="w-commerce-commercecheckoutblockheader">
              <h4>Payment Info</h4>
              <div>* Required</div>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
            <?php if(!empty($successMessage)) { ?>
          <div id="success-message"><?php echo $successMessage; ?></div>
          <?php  } ?>
          <div id="error-message"></div>
            
                  
              
          <div class="field-row">
              <label>Card Holder Name</label> <span
                  id="card-holder-name-info" class="info"></span><br>
              <input type="text" id="name" name="name"
                  class="demoInputBox">
          </div>
          <div class="field-row">
              <label>Email</label> <span id="email-info"
                  class="info"></span><br> <input type="text"
                  id="email" name="email" class="demoInputBox">
          </div>
          <div class="field-row">
              <label>Card Number</label> <span
                  id="card-number-info" class="info"></span><br> <input
                  type="text" id="card-number" name="card-number"
                  class="demoInputBox">
          </div>
          <div class="field-row">
              <div class="contact-row column-right">
                  <label>Expiry Month / Year</label> <span
                      id="userEmail-info" class="info"></span><br>
                  <select name="month" id="month"
                      class="demoSelectBox">
                      <option value="08">08</option>
                      <option value="09">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                  </select> <select name="year" id="year"
                      class="demoSelectBox">
                      <option value="18">2018</option>
                      <option value="19">2019</option>
                      <option value="20">2020</option>
                      <option value="21">2021</option>
                      <option value="22">2022</option>
                      <option value="23">2023</option>
                      <option value="24">2024</option>
                      <option value="25">2025</option>
                      <option value="26">2026</option>
                      <option value="27">2027</option>
                      <option value="28">2028</option>
                      <option value="29">2029</option>
                      <option value="30">2030</option>
                  </select>
              </div>
              <div class="contact-row cvv-box">
                  <label>CVC</label> <span id="cvv-info"
                      class="info"></span><br> <input type="text"
                      name="cvc" id="cvc"
                      class="demoInputBox cvv-input">
              </div>
          </div>
          
           <input
              type='hidden' name='currency_code' value='eur'> <input
              type='hidden' name='item_name' value='Test Product'>
          <input type='hidden' name='item_number'
              value='PHPPOTEG#1'>
              
          </fieldset>
          </div>
          <div class="w-commerce-commercecheckoutblockheader">
              <h4>Billing Address</h4>
              <div>* Required</div>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <label class="w-commerce-commercecheckoutlabel">Full Name *</label>
              <input type="text" name="billing_full_name" required="" class="w-commerce-commercecheckoutbillingfullname">
              <label class="w-commerce-commercecheckoutlabel">Street Address *</label>
              <input type="text" name="billing_address_line1" required="" class="w-commerce-commercecheckoutbillingstreetaddress">
              <input type="text" name="billing_address_line2" class="w-commerce-commercecheckoutbillingstreetaddressoptional">
              <div class="w-commerce-commercecheckoutrow">
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">City *</label>
                  <input type="text" name="billing_address_city" required="" class="w-commerce-commercecheckoutbillingcity">
                </div>
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">State/Province</label>
                  <input type="text" name="billing_address_state" class="w-commerce-commercecheckoutbillingstateprovince">
                </div>
                <div class="w-commerce-commercecheckoutcolumn">
                  <label class="w-commerce-commercecheckoutlabel">Zip/Postal Code *</label>
                  <input type="text" name="billing_address_zip" required="" data-node-type="commerce-checkout-billing-zip-field" class="w-commerce-commercecheckoutbillingzippostalcode"
                  ></div>
              </div>
              <label class="w-commerce-commercecheckoutlabel">Country *</label>
              <select name="billing_address_country" class="w-commerce-commercecheckoutbillingcountryselector">
                <option value="AF">Afghanistan</option>
                <option value="AX">Aland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="VG">British Virgin Islands</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curacao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czechia</option>
                <option value="CD">Democratic Republic of the Congo</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="SZ">Eswatini</option>
                <option value="ET">Ethiopia</option>
                <option value="FK">Falkland Islands</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="HT">Haiti</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="CI">Ivory Coast</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="XK">Kosovo</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="LA">Laos</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldova</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="KP">North Korea</option>
                <option value="MK">North Macedonia</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="OM">Oman</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="CG">Republic of the Congo</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russia</option>
                <option value="RW">Rwanda</option>
                <option value="BL">Saint Barthelemy</option>
                <option value="SH">Saint Helena</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="KR">South Korea</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syria</option>
                <option value="TW">Taiwan</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="VI">U.S. Virgin Islands</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option selected="" value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="VU">Vanuatu</option>
                <option value="VA">Vatican</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="YE">Yemen</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
              </select>
            </fieldset>
        
          <div class="w-commerce-commercecheckoutorderitemswrapper">
            <div class="w-commerce-commercecheckoutsummaryblockheader">
              <h4>Items in Order</h4>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <script type="text/x-wf-template" id="wf-template-613280b9f4424d1c17c82312000000000086"></script>
              <div class="w-commerce-commercecheckoutorderitemslist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-613280b9f4424d1c17c82312000000000086"></div>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $j=0; $pr=0; if($isExist){ 
                    $data = $_SESSION['products'];
                  // print_r($data);

                    for($i=0; $i<count($data); $i++) {
                        $j = $j + 1;
                        $pr = $pr+(int)$data[$i]['price'];
                ?>
                <tr>
                  <th scope="row"><?php echo $j; ?></th>
                  <td><?=$data[$i]['name'] ?></td>
                  <td><?=$data[$i]['price'];?></td>
                  <td><?=$data[$i]['quantity'] ?></td>
                </tr>
                 <?php }} ?> 
                </tbody>
              </table>

            </fieldset>
          </div>
        </div>
        <input type='hidden' name='amount' value='<?php 
                if($isExist){echo $pr;}else {echo 0;} ?>'>
        <div class="w-commerce-commercelayoutsidebar">
          <div class="w-commerce-commercecheckoutordersummarywrapper">
            <div class="w-commerce-commercecheckoutsummaryblockheader">
              <h4>Order Summary</h4>
            </div>
            <fieldset class="w-commerce-commercecheckoutblockcontent">
              <div class="w-commerce-commercecheckoutsummarylineitem">
                <div>Subtotal</div>
                <div>
                <?php 
                if($isExist){echo $pr;} ?>
                </div>
              </div>
              <script type="text/x-wf-template" id="wf-template-613280b9f4424d1c17c823120000000000a0">%3Cdiv%20class%3D%22w-commerce-commercecheckoutordersummaryextraitemslistitem%22%3E%3Cdiv%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script>
              <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-613280b9f4424d1c17c823120000000000a0">
                <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                  <div></div>
                  <div></div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutsummarylineitem">
                <div>Total</div>
                <div class="w-commerce-commercecheckoutsummarytotal"><?php 
                if($isExist){echo $pr;} ?>
                </div></div>
              </div>
              <div>
              <input type="submit" name="pay_now" value="Submit"
                  id="submit-btn" class="btnAction"
                  onClick="stripePay(event);">

              <div id="loader">
                  <img alt="loader" src="LoaderIcon.gif">
              </div>
          </div>
            </fieldset>
          </div>
          <div data-node-type="commerce-checkout-error-state" style="display:none" class="w-commerce-commercecheckouterrorstate">
            <div class="w-checkout-error-msg" data-w-info-error="There was an error processing your customer info.  Please try again, or contact us if you continue to have problems." data-w-shipping-error="Sorry. We can’t ship your order to the address provided." data-w-billing-error="Your payment could not be completed with the payment information provided.  Please make sure that your card and billing address information is correct, or try a different payment card, to complete this order.  Contact us if you continue to have problems." data-w-payment-error="There was an error processing your payment.  Please try again, or contact us if you continue to have problems." data-w-pricing-error="The prices of one or more items in your cart have changed. Please refresh this page and try again." data-w-minimum-error="The order minimum was not met. Add more items to your cart to continue." data-w-extras-error="A merchant setting has changed that impacts your cart. Please refresh and try again." data-w-product-error="One or more of the products in your cart have been removed. Please refresh the page and try again." data-w-invalid-discount-error="This discount is invalid." data-w-expired-discount-error="This discount is no longer available." data-w-usage-reached-discount-error="This discount is no longer available." data-w-requirements-not-met-error="Your order does not meet the requirements for this discount.">There was an error processing your customer info. Please try again, or contact us if you continue to have problems.</div>
          </div>
        </div>
        </form>
      </div>
    
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6128d6673b5738440887baa4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        function cardValidation () {
            var valid = true;
            var name = $('#name').val();
            var email = $('#email').val();
            var cardNumber = $('#card-number').val();
            var month = $('#month').val();
            var year = $('#year').val();
            var cvc = $('#cvc').val();

            $("#error-message").html("").hide();

            if (name.trim() == "") {
                valid = false;
            }
            if (email.trim() == "") {
                valid = false;
            }
            if (cardNumber.trim() == "") {
                valid = false;
            }

            if (month.trim() == "") {
                    valid = false;
            }
            if (year.trim() == "") {
                valid = false;
            }
            if (cvc.trim() == "") {
                valid = false;
            }

            if(valid == false) {
                $("#error-message").html("All Fields are required").show();
            }

            return valid;
        }
        //set your publishable key
        Stripe.setPublishableKey("<?php echo STRIPE_PUBLISHABLE_KEY; ?>");

        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $("#submit-btn").show();
                $( "#loader" ).css("display", "none");
                //display the errors on the form
                $("#error-message").html(response.error.message).show();
            } else {
                //get token id
                var token = response['id'];
                //insert the token into the form
                $("#frmStripePayment").append("<input type='hidden' name='token' value='" + token + "' />");
                //submit form to the server
                $("#frmStripePayment").submit();
            }
        }
        function stripePay(e) {
            e.preventDefault();
            var valid = cardValidation();

            if(valid == true) {
                $("#submit-btn").hide();
                $( "#loader" ).css("display", "inline-block");
                Stripe.createToken({
                    number: $('#card-number').val(),
                    cvc: $('#cvc').val(),
                    exp_month: $('#month').val(),
                    exp_year: $('#year').val()
                }, stripeResponseHandler);

                //submit from callback
                return false;
            }
        }
    </script>
  </body>
</html>