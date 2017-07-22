@extends('layouts.public.main')

@section('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
@stop

@section('title')
    <title>FAQS</title>
@stop

@section('content')
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <h3>Some of your Questions:</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, velit, eum, delectus aliquid dolore
                    numquam dolorem assumenda nisi nemo eveniet et illo tempore voluptatem cum in repudiandae pariatur.
                    Architecto, exercitationem perspiciatis nam quod tenetur alias necessitatibus quibusdam eum
                    accusamus a.</p>

                <div class="divider"><i class="icon-circle"></i></div>

                <div class="col_full">

                    <h4>General
                        <small>(9)</small>
                    </h4>

                    <div class="accordion accordion-border clearfix" data-state="closed">

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>What is PantryNow?
                        </div>
                        <div class="acc_content clearfix">PantryNow is an on-demand delivery service company which enables you to order grocery, and other products that you need every day, directly via your mobile or web browser.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-comments-alt"></i>What kind of products do you sell?

                        </div>
                        <div class="acc_content clearfix">Our products spread across various categories such as grocery, home care, personal care, chocolates, aerated water, chips and much more.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>What cities and locations do you operate in?
                        </div>
                        <div class="acc_content clearfix">PantryNow currently operates only in Mumbai in the following pincodes: 400003, 400007, 400004, 400005, 400001, 400002, 400020, 400032, 400021, 400006, 400026, 400034, 400025, 400028, 400011, 400012, 400027, 400010, 400018 and 400008.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>What is the minimum order value?
                        </div>
                        <div class="acc_content clearfix">There is no minimum order value.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>Do you charge any amount or taxes over and above the rates shown?
                        </div>
                        <div class="acc_content clearfix">No, we do not charge any taxes on the order value. However, we do have a delivery fee
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How much is the delivery fee?
                        </div>
                        <div class="acc_content clearfix">Upto ₹200 : 20₹<br><br>₹201 - ₹500 : ₹35<br><br>₹500+ : ₹50
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>Can I track the status of my order?
                        </div>
                        <div class="acc_content clearfix">Yes, you can track the status of your order under the My Orders section.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How can I make changes to my order before and after confirmation?
                        </div>
                        <div class="acc_content clearfix">You can edit your products in the cart before checkout. If you’ve already placed your order, you can cancel and reorder.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How can you list your products on the PantryNow Platform?
                        </div>
                        <div class="acc_content clearfix">To list your products on our platform, write to us at info@pantrynow.in with your contact and product information and our team will get in touch with you.
                        </div>
                    </div>

                    <h4 class="topmargin">Payments/Refund related queries
                        <small>(3)</small>
                    </h4>

                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>How can I make payments at PantryNow?
                        </div>
                        <div class="acc_content clearfix">PantryNow accepts multiple modes of payment. You can make online payments using credit cards, debit cards and netbanking. Cash on delivery (COD) is also available.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>
                            How long do you take to initiate my refund?
                        </div>
                        <div class="acc_content clearfix">PantryNow will refund your amount within 7-10 working days for debit/credit card payments and 24-48 hours for cash payment on return/canceled orders.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How can I review my receipt?
                        </div>
                        <div class="acc_content clearfix">We handover the receipt from the merchant to you at the time of delivery. Also, you can look at your transaction history in the “My Orders” tab.
                        </div>

                    </div>

                </div>

                <div class="col_full">

                    <h4>Cancellation & Returns
                        <small>(4)</small>
                    </h4>

                    <div class="accordion accordion-border clearfix" data-state="closed">

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>How can I cancel my order?
                        </div>
                        <div class="acc_content clearfix">PantryNow provides easy and hassle free cancellation. You can cancel your order on our website before it is dispatched (within 10 minutes of placing your order). This option is available under the “My Orders” tab.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>What If I want to return something?
                        </div>
                        <div class="acc_content clearfix">If you’re dissatisfied with the products delivered, please register a complaint on our website within 48 hours for non-perishable items and 24 hours for perishable items. Our customer support team will get in touch with you to resolve this issue. You can also return the products which you are dissatisfied with, at the time of delivery and we will get the refund initiated for you within 24-48 hours.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>Can I reschedule my order?
                        </div>
                        <div class="acc_content clearfix">Unfortunately, due to our quick delivery service we do not allow you to reschedule an order once placed. You can cancel the order and reorder with a scheduled time.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>What if I have any complaint regarding my order?
                        </div>
                        <div class="acc_content clearfix">You can use the “Contact Us” section on our website. Our customer care executives are always happy to help. You can also reach out to us on care@pantrynow.in
                        </div>

                    </div>

                    <h4 class="topmargin">Placing an order
                        <small>(4)</small>
                    </h4>

                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How will I know if any item in my order is unavailable?
                        </div>
                        <div class="acc_content clearfix">If an item your order is out of stock, our Shopper will make an appropriate replacement and contact you to verify it. If you do not wish to get a replacement, refund (if any) will also be initiated within 48 hours.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>Is it safe to use my debit/credit card to shop on PantryNow?
                        </div>
                        <div class="acc_content clearfix">Yes, it is. All transactions on PantryNow are completed via secure payment gateways (CCAvenue) which are PCI and DSS compliant. We do not store your card details at any given time.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>I’m trying to place an order today but it is getting scheduled for the next day. What can I do?
                        </div>
                        <div class="acc_content clearfix">Our delivery timings are from 9am to 8pm. If you place an order after 8pm, you can choose your order to be scheduled for the next day at the earliest time or a time of your convenience.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>Can I schedule an order to my convenience?
                        </div>
                        <div class="acc_content clearfix">Sure. At the checkout page, you can select a delivery slot of your choice.
                        </div>
                    </div>

                </div>

                <div class="col_full nobottommargin">
                    <h4 class="topmargin">Delivery related queries
                        <small>(5)</small>
                    </h4>

                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>Is there a guarantee of delivery within 60 minutes?
                        </div>
                        <div class="acc_content clearfix">No, we do not guarantee the delivery to reach within 60 minutes but depending on the location, we will try to delivery your order within the scheduled time.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>Do you charge for delivery?
                        </div>
                        <div class="acc_content clearfix">Yes, we have a range of delivery fee. The minimum charges are ₹20 depending on your total order value. The delivery charges are mentioned on the checkout page.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>What are your delivery times?
                        </div>
                        <div class="acc_content clearfix">We currently deliver from 9am to 8pm.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>Can I change the delivery address of my order?
                        </div>
                        <div class="acc_content clearfix">At this time, we do not offer this option. You can, however, cancel your order and reorder from a different locality.
                        </div>

                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                                    class="acc-open icon-question-sign"></i>What if I don’t receive my order by the scheduled time?
                        </div>
                        <div class="acc_content clearfix">On rare occasions, due to unforeseen circumstances, your order might be delayed. In case of imminent delay, our customer support executive will keep you updated about the delivery time of your order.
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- #content end -->

@stop
