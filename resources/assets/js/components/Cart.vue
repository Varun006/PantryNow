<template>
    <button type="submit" :product="product" @click.prevent="addItemToCart(product)" class="add-to-cart button nomargin"
            v-text="cartText">
    </button>
</template>

<script>
    import swal from 'sweetalert2';

    export default {
        props: ['product'],

        mounted() {
            this.checkItemInCart(this.product);
            this.checkZipCode();
        },

        data() {
            return {
                cartText: 'Add To Cart',
                itemInCart: false,
                validZipCode: true
            }
        },

        methods: {
            checkZipCode(){
                axios.post('/checkZip')
                    .then((response) => {
                        return this.validZipCode = response.data.exist;
                    })
            },

            checkItemInCart(id) {
                axios.post('/checkIfItemInCart', {id: id})
                    .then((response) => {
                        if (response.data.exist) {
                            this.cartText = 'Item in the cart'
                        }
                        return this.itemInCart = response.data.exist;
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.log(error.response.data);
                            console.log(error.response.status);
                            console.log(error.response.headers);
                        }
                    })

            },

            addItemToCart(id) {

                if (!this.itemInCart) {
                    axios.post('/addItemToCart', {id: id})
                        .then((response) => {
                            if (!response.data.auth) {
                                return VueEvents.$emit('show-login');
                            }

                            if (!response.data.zip) {
                                return swal('Sorry!','We do not deliver to your zip code yet', 'info');
                            }

                            if (response.data.success) {
                                toastr["success"]("Item added to your cart.");
                                this.itemInCart = true;
                                VueEvents.$emit('item-added');
                            } else {
                                toastr["info"]("Item already in your cart.");
                            }
                        })
                }

            }
        }
    }
</script>