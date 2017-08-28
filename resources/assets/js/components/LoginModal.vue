<template>

</template>

<script>
    import swal from 'sweetalert2';

    export default {
        mounted() {
            VueEvents.$on('show-login', () => {
                swal({
                    title: 'Login to continue',
                    text: "Please login to add this item to cart.",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Login'
                }).then(() => {
                    axios.post('/toLogin').then((response) => {
                        if (response.data.success) {
                            window.location = '/login';
                        }
                    });
                })
            });
        }
    }
</script>