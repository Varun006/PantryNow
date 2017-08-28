<template>
    <div class="modal fade" :class="{in: show}" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" :style="styleObject">
        <div class="modal-dialog">
            <div class="modal-body center">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" @click.prevent="closeModal"  aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Select time of delivery</h4>
                        <div class="center" style="padding-top: 50px">
                            <span>
                                As you placed order after 8 PM we cannot deliver your order today. But, we will deliver your order tomorrow at the time of your choice.
                            </span>
                        </div>
                    </div>

                    <div class="modal-body nobg nomargin padding">
                        <div class="center" style="padding-top: 20px">
                            <form action="" @submit.prevent="schedule">
                                <select name="template-jobform-position" v-model="selectedTime"
                                        id="template-jobform-position" tabindex="9"
                                        class="sm-form-control required" aria-required="true">
                                    <option value="9 AM -  10 AM">Deliver my Order between 9 AM - 10 AM</option>
                                    <option value="10 AM - 11 AM">Deliver my Order between 10 AM - 11 AM</option>
                                    <option value="11 AM - 12 PM">Deliver my Order between 11 AM - 12 PM</option>
                                    <option value="12 PM - 1 PM">Deliver my Order between 12 PM - 1 PM</option>
                                    <option value="1 PM - 2 PM">Deliver my Order between 1 PM - 2 PM</option>
                                    <option value="2 PM - 3 PM">Deliver my Order between 2 PM - 3 PM</option>
                                    <option value="3 PM - 4 PM">Deliver my Order between 3 PM - 4 PM</option>
                                    <option value="5 PM - 6 PM">Deliver my Order between 5 PM - 6 PM</option>
                                    <option value="7 PM - 8 PM">Deliver my Order between 7 PM - 8 PM</option>
                                    <option value="7 PM - 8 PM">Deliver my Order between 7 PM - 8 PM</option>
                                </select>
                                <div class="center margin" style="padding: 30px;">
                                    <button class="button button-3d button-large btn-block nomargin" type="submit">
                                        Checkout
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    //    import swal from 'sweetalert2';

    export default{

        data() {
            return {
                show: false,
                selectedTime: '',
                styleObject: {
                    display: 'none',
                }
            }
        },

        mounted() {
            VueEvents.$on('show-modal', () => {
                //                swal({
//                    title: 'Select time to deliver',
////                    type: 'info',
//                    html: '<div class="col_full">' +
//                    '<select name="template-jobform-position" id="template-jobform-position" tabindex="9" class="sm-form-control required" aria-required="true">' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '<option value="Senior Python Developer">Senior Python Developer</option>' +
//                    '</select>' +
//                    '</div>',
//                    showCloseButton: true,
//                    showCancelButton: true,
//                })
                this.showModal();
                this.getScheduledTime();
            });
        },

        methods: {
            getScheduledTime() {
                axios.post('/getScheduleTime')
                    .then((response) => {
                        if (response.data.success) {
                            this.selectedTime = response.data.time;
                        }
                    });
            },

            schedule() {
                axios.post('/setTime', {time: this.selectedTime})
                    .then((response) => {
                        if (response.data.success) {
                            window.location.href = response.data.redirect;
                        }
                    });
            },

            showModal() {
                this.show = true;
                this.styleObject.display = 'block';
            },

            closeModal() {
                this.show = false;
                this.styleObject.display = 'none';
            },

            reschedule() {
                this.showModal();
            }
        }
    }
</script>