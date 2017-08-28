<template>
    <div id="top-cart">
        <a href="#" @click.prevent="" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>{{ totalItems }}</span></a>
        <div class="top-cart-content">
            <div class="top-cart-title">
                <h4>Shopping Cart</h4>
            </div>
            <div class="top-cart-items">
                <div class="top-cart-item clearfix" v-for="item in items[0]">
                    <div class="top-cart-item-image">
                        <a href="#"><img :src="item.photo_url" alt="item.name"/></a>
                    </div>
                    <div class="top-cart-item-desc">
                        <a href="#" v-text="item.name"></a>
                        <span class="top-cart-item-price" v-text="item.price"></span>
                    </div>
                </div>
            </div>
            <div class="top-cart-action clearfix" v-if="!this.empty">
                <span class="fleft top-checkout-price" v-text="totalPrice + ' INR'"></span>
                <a href="/cart">
                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                </a>
            </div>
        </div>
    </div><!-- #top-cart end -->

</template>

<script>
    export default {
        data() {
            return {
                items: [],
                empty: true,
                display: false,
                count: 0,
                totalCartValue: 0
            }
        },

        mounted() {
            this.updateCart();

            VueEvents.$on('item-added', () => {
                this.updateCart();
            });
        },

        methods: {
            updateCart(){
                axios.post('/getCartItems')
                    .then((response) => {
                        if (!response.data.empty) {
                            this.items.splice(0);
                            this.assigns(response);
                        }
                    })
                    .catch((error) => {

                    })
            },

            assigns(response) {
                this.count = response.data.count;
                this.totalCartValue = response.data.price;
                this.items.push(response.data.products);
                this.empty = false;
            }
        },

        computed: {
            totalPrice: function () {
                return this.totalCartValue;
            },

            totalItems: function () {
                return this.count;
            },
        }
    }
</script>