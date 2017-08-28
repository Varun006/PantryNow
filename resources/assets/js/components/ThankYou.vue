<template>

</template>

<script>
    import swal from 'sweetalert2';

    export default {
        mounted() {
            swal('Succes!', 'Your order has been placed!', 'success');
        }
    }
</script>