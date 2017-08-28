<template>

</template>

<script>
    import swal from 'sweetalert2';

    export default {
        mounted() {
            swal({
                title: 'Success!',
                text: 'You are logged in.',
                timer: 3000,
                type: 'success'
            })
        }
    }
</script>