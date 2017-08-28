<template>
    <table class="table cart table-responsive">
        <thead>
        <tr>
            <th class="cart-product-remove">&nbsp;</th>
            <th class="cart-product-thumbnail">&nbsp;</th>
            <th class="cart-product-name">Product</th>
            <th class="cart-product-price">Unit Price</th>
            <th class="cart-product-quantity">Quantity</th>
            <th class="cart-product-subtotal">Total</th>
        </tr>
        </thead>
        <tbody>
        <tr class="cart_item" v-for="item in items">
            <td class="cart-product-remove">
                <a href="#" class="remove" @click.prevent="remove(item)" title="Remove this item"><i
                        class="icon-trash2"></i></a>
            </td>

            <td class="cart-product-thumbnail">
                <a href="#"><img width="64" height="64" :src="item.photo_url"
                                 :alt="item.name"></a>
            </td>

            <td class="cart-product-name">
                <a href="#" v-text="item.name"></a>
            </td>

            <td class="cart-product-price">
                <span class="amount" v-text="item.price"></span>
            </td>

            <td class="cart-product-quantity">
                <div class="quantity clearfix">
                    <input type="button" value="-" class="minus"
                           @click.prevent="update(item,'decrement')">
                    <input type="text" name="quantity" v-text="item.quantity" v-model="item.quantity" class="qty"
                           readonly/>
                    <input type="button" value="+" class="plus" @click.prevent="update(item,'increment')">
                </div>
            </td>

            <td class="cart-product-subtotal">
                <span class="amount" v-text="item.quantity * item.price"></span>
            </td>
        </tr>
        <tr class="cart_item">
            <td colspan="6">
                <div class="row clearfix">
                    <div class="col-md-4 col-xs-4 nopadding" v-if="!isCouponApplied">
                        <div class="col-xs-7 nopadding">
                            <input type="text" value="" v-model="code" class="sm-form-control"
                                   placeholder="Enter Coupon Code..">
                        </div>
                        <div class="col-md-4 col-xs-5">
                            <a href="#"
                               class="button button-3d button-black nomargin"
                               @click.prevent="validateCoupon"
                               :disabled="disabled">
                                Apply Coupon
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-8 nopadding"
                         :class="{'col-md-12': col12Class , 'col-md-8 ' : col8Md}">
                        <a href="/checkout" class="button button-3d notopmargin fright" v-if="!schedule">Proceed to Checkout</a>
                        <a href="#" @click.prevent="showTimeSelection()" class="button button-3d notopmargin fright"
                           v-else>Schedule your order</a>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    import swal from 'sweetalert2';
    import 'sweetalert2/dist/sweetalert2.css';
    import * as moment from 'moment';
    import 'moment/locale/pt-br';
    import vmodal from 'vue-js-modal';

    export default {

        data() {
            return {
                items: [],
                disabled: false,
                code: '',
                col12Class: false,
                col8Md: true,
                isCouponApplied: false,
                couponCode: '',
                schedule: false
            }
        },

        methods: {
            checkForTime() {
                if ( (moment().isAfter(moment({hour: 20, minute: 0})))  ||  (moment(new Date).add('1' , 'days').isBefore(moment({hour: 9, minute: 0}))) ) {
//                if (moment().isAfter(moment({hour: 16, minute: 0}))) {
                    this.schedule = true;
                }
            },

            showTimeSelection() {
                VueEvents.$emit('show-modal');
            },

            update(item, action) {
                axios.post('/updateQuantity', {id: item.id, action: action})
                    .then((response) => {
                        if (response.data.success) {
                            item.quantity = response.data.quantity;
                            VueEvents.$emit('cart-updated');
                        }
                    });
            },

            getCartItems(){
                axios.post('/getCartItems')
                    .then((response) => {
                        this.items = response.data.products
                    })
            },

            remove(item) {
                swal({
                    title: 'Are you sure?',
                    text: "You want to delete this item",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then(() => {
                    axios.post('/removeItemFromCart', {product_id: item.id})
                        .then((response) => {
                            if (response.data.success) {
                                this.getCartItems();
                                VueEvents.$emit('cart-updated');
                                swal(
                                    'Deleted!',
                                    'Product deleted from cart.',
                                    'success'
                                )
                            }
                        });
                });
            },

            checkCouponApplied() {
                axios.post('/checkIfCouponApplied', {coupon: this.code})
                    .then((response) => {
                        if (response.data.isApplied) {
                            this.aCouponIsApplied(response.data.code);
                        }
                    })
            },

            validateCoupon() {
                axios.post('/validateCoupon', {coupon: this.code})
                    .then((response) => {
                        if (response.data.success) {
                            this.aCouponIsApplied(response.data.code);
                            swal('Success!', 'The coupon is applied.', 'success');
                        } else {
                            swal('OOPS!', 'The code you entered is invalid', 'error');
                            this.code = ''
                        }
                    })
            },

            aCouponIsApplied(couponCode) {
                this.col12Class = true;
                this.col8Md = false;
                this.isCouponApplied = true,
                    this.couponCode = couponCode,
                    VueEvents.$emit('coupon-applied', this.isCouponApplied, couponCode)
            }
        },

        mounted() {
            this.checkForTime();

            setInterval(() => {
                this.time = moment().format("hA");

                this.checkForTime();
            }, 3000);

            this.getCartItems();

            this.checkCouponApplied();
        },


    }
</script>