<template>
    <!--<div class="modal1 mfp-hide" id="myModal1">-->
    <!--<div class="block divcenter" style="background-color: #FFF; max-width: 700px;">-->
    <!--<div class="row nomargin clearfix">-->
    <!--<div class="col-sm-6" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="0"-->
    <!--data-height-xxs="0"-->
    <!--style="background-image: url('images/modals/g1.jpg'); background-size: cover;"></div>-->
    <!--<div class="col-sm-6 col-padding" data-height-lg="456" data-height-md="456" data-height-sm="456"-->
    <!--data-height-xs="456" data-height-xxs="456">-->
    <!--<div>-->
    <!--<h4 class="uppercase ls1">Sign Up for Offers</h4>-->
    <!--<form action="" class="clearfix" style="max-width: 300px;" @submit.prevent="checkZip">-->
    <!--<div class="col_full">-->
    <!--<label for="" class="capitalize t600">City:</label>-->
    <!--<input type="text" id="template-op-form-email" value="mumbai" class="sm-form-control"-->
    <!--readonly/>-->
    <!--</div>-->
    <!--<div class="col_full">-->
    <!--<label for="" class="capitalize t600">Enter Zip Code:</label>-->
    <!--<input type="text" id="zip" v-model="zip" value="" class="sm-form-control" required/>-->
    <!--</div>-->
    <!--<div class="col_full nobottommargin">-->
    <!--<button type="submit" class="button button-rounded button-small button-dark nomargin"-->
    <!--value="submit">CHECK-->
    <!--</button>-->
    <!--</div>-->
    <!--</form>-->
    <!--<div class="alert alert-success" v-if="success">-->
    <!--<i class="icon-gift"></i><strong>Well done!</strong> You successfully read this important alert message.-->
    <!--</div>-->

    <!--<div class="alert alert-danger" v-if="error">-->
    <!--<i class="icon-remove-sign"></i><strong>Oh snap!</strong> Change a few things up and try submitting again.-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
</template>


<script>
    import swal from 'sweetalert2';

    export default {
        created() {
            swal({
                title: 'Enter your pin to check if we deliver in your locality.',
                input: 'text',
                showCancelButton: false,
                confirmButtonText: 'Check',
                showLoaderOnConfirm: true,
                preConfirm: function (zip) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            if (zip === '') {
                                reject('Please enter a zip code.')
                            }else{
                                resolve()
                            }
                        }, 2000)
                    })
                },
                allowOutsideClick: false
            }).then(function (zip) {
                axios.post('/checkZipFromInput', {zip: zip})
                    .then((response) => {
                        if (response.data.exist) {
                            swal('success','We deliver to your pincode','success');
                        } else {
                            swal('Sorry!','We do not deliver to your pincode yet.','info');
                        }
                    });
            })
        }
    }
    //        data() {
    //            return {
    //                zip: '',
    //                success: false,
    //                error: false,
    //            }
    //        },
    //
    //        methods: {
    //            checkZip() {
    //                this.success = false; this.error = false;
    //
    //                axios.post('/checkZip', {zip: this.zip})
    //                    .then((response) => {
    //                    alert(response.data.exist);
    //                        if (response.data.exist) {
    //                            this.success = true;
    //                        }else{
    //                            this.error = true;
    //                        }
    //                    })
    //            }
    //        }
    //    }
</script>