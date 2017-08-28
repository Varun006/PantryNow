<template>
    <table class="table cart">
        <tbody>
        <tr class="cart_item">
            <td class="cart-product-name">
                <strong>Cart Subtotal</strong>
            </td>

            <td class="cart-product-name">
                <span class="amount" v-text="this.subTotal"></span>
            </td>
        </tr>
        <tr class="cart_item">
            <td class="cart-product-name">
                <strong>Shipping</strong>
            </td>

            <td class="cart-product-name">
                <span class="amount" v-text="this.shipping"></span>
            </td>
        </tr>
        <tr class="cart_item" v-if="couponApplied">
            <td class="cart-product-name">
                <strong>Coupon Applied</strong>
            </td>

            <td class="cart-product-name">
                <span class="amount color lead" v-text="this.couponCode"></span>
            </td>
        </tr>
        <tr class="cart_item" v-if="couponApplied">
            <td class="cart-product-name">
                <strong>Discount Received</strong>
            </td>

            <td class="cart-product-name">
                <span class="amount color lead" v-text="this.discountInRs"></span>
            </td>
        </tr>
        <tr class="cart_item">
            <td class="cart-product-name">
                <strong>Total</strong>
            </td>

            <td class="cart-product-name">
                <span class="amount color lead"><strong v-text="this.total"></strong></span>
            </td>
        </tr>
        </tbody>

    </table>
</template>

<script>
    export default {
        mounted() {
            this.getCartTotal();

            VueEvents.$on('coupon-applied', ( isCouponApplied, code) => {
                this.couponApplied = isCouponApplied;
                this.couponCode = code;
                this.getCartTotal();
            });

            VueEvents.$on('cart-updated', () => {
                this.getCartTotal();
            });
        },

        data() {
            return {
                subTotal: 0,
                shipping: 35,
                couponApplied: false,
                couponCode: '',
                discountInRs: 0,
                total: 0
            }
        },

        methods: {
            getCartTotal() {
                axios.post('/getCartTotal')
                    .then((response) => {
                        if (response.data.success) {
                            this.subTotal = response.data.subTotal;
                            this.discountInRs = response.data.discountReceived;
                            this.shipping = response.data.shipping;
                            this.total = response.data.total;
                        }
                    })
            },
        },

//        computed: {
//            totalAfterShipping: function () {
//                return this.subTotal + this.shipping;
//            }
//        },

//        watch: {
//            subTotal(value) {
//                this.shipping = value >= 200 ? 0 : 35;
//            },
//            deep: true
//        }
    }
</script>