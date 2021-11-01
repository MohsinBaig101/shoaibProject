<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 28 2021 19:22:18 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="617941659e27022e896d0298" data-wf-site="6128d6673b5738440887baa4">
<head>
  <meta charset="utf-8">
  <base target="_parent">
  <title>rema_v5</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/rema-v5.webflow.css" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div data-node-type="commerce-paypal-checkout-form-container" data-wf-checkout-query="" data-wf-page-link-href-prefix="" class="w-commerce-commercepaypalcheckoutformcontainer">
    <div class="w-commerce-commercelayoutcontainer w-container">
      <div class="w-commerce-commercelayoutmain">
        <form data-node-type="commerce-checkout-shipping-methods-wrapper" class="w-commerce-commercecheckoutshippingmethodswrapper">
          <div class="w-commerce-commercecheckoutblockheader">
            <h4>Shipping Method</h4>
          </div>
          <fieldset>
            <script type="text/x-wf-template" id="wf-template-613280b9f4424d56bec82315000000000012">%3Clabel%20class%3D%22w-commerce-commercecheckoutshippingmethoditem%22%3E%3Cinput%20type%3D%22radio%22%20required%3D%22%22%20name%3D%22shipping-method-choice%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecheckoutshippingmethoddescriptionblock%22%3E%3Cdiv%20class%3D%22w-commerce-commerceboldtextblock%22%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Flabel%3E</script>
            <div data-node-type="commerce-checkout-shipping-methods-list" class="w-commerce-commercecheckoutshippingmethodslist" data-wf-collection="database.commerceOrder.availableShippingMethods" data-wf-template-id="wf-template-613280b9f4424d56bec82315000000000012"><label class="w-commerce-commercecheckoutshippingmethoditem"><input type="radio" required="" name="shipping-method-choice">
                <div class="w-commerce-commercecheckoutshippingmethoddescriptionblock">
                  <div class="w-commerce-commerceboldtextblock"></div>
                  <div></div>
                </div>
                <div></div>
              </label></div>
            <div data-node-type="commerce-checkout-shipping-methods-empty-state" style="display:none" class="w-commerce-commercecheckoutshippingmethodsemptystate">
              <div>No shipping methods are available for the address given.</div>
            </div>
          </fieldset>
        </form>
        <div class="w-commerce-commercecheckoutcustomerinfosummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader">
            <h4>Customer Information</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel">Email</label>
                  <div></div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel">Shipping Address</label>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="w-commerce-commercecheckoutpaymentsummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader">
            <h4>Payment Info</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <div class="w-commerce-commercecheckoutrow">
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel">Payment Info</label>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div></div>
                    <div> / </div>
                    <div></div>
                  </div>
                </div>
              </div>
              <div class="w-commerce-commercecheckoutcolumn">
                <div class="w-commerce-commercecheckoutsummaryitem"><label class="w-commerce-commercecheckoutsummarylabel">Billing Address</label>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div class="w-commerce-commercecheckoutsummaryflexboxdiv">
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                    <div class="w-commerce-commercecheckoutsummarytextspacingondiv"></div>
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
        <div class="w-commerce-commercecheckoutorderitemswrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader">
            <h4>Items in Order</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <script type="text/x-wf-template" id="wf-template-613280b9f4424d56bec82315000000000056"></script>
            <div class="w-commerce-commercecheckoutorderitemslist" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-613280b9f4424d56bec82315000000000056"></div>
          </fieldset>
        </div>
      </div>
      <div class="w-commerce-commercelayoutsidebar">
        <div class="w-commerce-commercecheckoutordersummarywrapper">
          <div class="w-commerce-commercecheckoutsummaryblockheader">
            <h4>Order Summary</h4>
          </div>
          <fieldset class="w-commerce-commercecheckoutblockcontent">
            <div class="w-commerce-commercecheckoutsummarylineitem">
              <div>Subtotal</div>
              <div></div>
            </div>
            <script type="text/x-wf-template" id="wf-template-613280b9f4424d56bec82315000000000070">%3Cdiv%20class%3D%22w-commerce-commercecheckoutordersummaryextraitemslistitem%22%3E%3Cdiv%3E%3C%2Fdiv%3E%3Cdiv%3E%3C%2Fdiv%3E%3C%2Fdiv%3E</script>
            <div class="w-commerce-commercecheckoutordersummaryextraitemslist" data-wf-collection="database.commerceOrder.extraItems" data-wf-template-id="wf-template-613280b9f4424d56bec82315000000000070">
              <div class="w-commerce-commercecheckoutordersummaryextraitemslistitem">
                <div></div>
                <div></div>
              </div>
            </div>
            <div class="w-commerce-commercecheckoutsummarylineitem">
              <div>Total</div>
              <div class="w-commerce-commercecheckoutsummarytotal"></div>
            </div>
          </fieldset>
        </div>
        <a href="#" value="Place Order" data-node-type="commerce-checkout-place-order-button" class="w-commerce-commercecheckoutplaceorderbutton" data-loading-text="Placing Order...">Place Order</a>
        <div data-node-type="commerce-checkout-error-state" style="display:none" class="w-commerce-commercepaypalcheckouterrorstate">
          <div class="w-checkout-error-msg" data-w-info-error="There was an error processing your customer info.  Please try again, or contact us if you continue to have problems." data-w-shipping-error="Sorry. We can’t ship your order to the address provided." data-w-billing-error="Your payment could not be completed with the payment information provided.  Please make sure that your card and billing address information is correct, or try a different payment card, to complete this order.  Contact us if you continue to have problems." data-w-payment-error="There was an error processing your payment.  Please try again, or contact us if you continue to have problems." data-w-pricing-error="The prices of one or more items in your cart have changed. Please refresh this page and try again." data-w-extras-error="A merchant setting has changed that impacts your cart. Please refresh and try again." data-w-product-error="One or more of the products in your cart have been removed. Please refresh the page and try again." data-w-invalid-discount-error="This discount is invalid." data-w-expired-discount-error="This discount is no longer available." data-w-usage-reached-discount-error="This discount is no longer available." data-w-requirements-not-met-error="Your order does not meet the requirements for this discount.">There was an error processing your customer info. Please try again, or contact us if you continue to have problems.</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6128d6673b5738440887baa4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>