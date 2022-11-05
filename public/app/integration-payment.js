if (window.Vue) {
    new Vue({
        el: '#paymentIntegration',

        data: {
            isLoading: false,

            payment: {
                stripe_pub_key: "",
                stripe_sec_key: "",
                paystack_pub_key: "",
                paystack_sec_key: "",
                flutterwave_pub_key: "",
                flutterwave_sec_key: "",
                service: "",
                status: ""
            },

            paymentEdit: {
                stripe_pub_key: "",
                stripe_sec_key: "",
                paystack_pub_key: "",
                paystack_sec_key: "",
                flutterwave_pub_key: "",
                flutterwave_key: "",
                service: "",
                status: ""
            },





            payments: [],

            route: {
                create: "",
                update: "",
                delete: ""
            },



        },


        mounted() {
            this.route.create = $('#createPayment').val();
            this.route.update = $('#updatePayment').val();
            this.route.delete = $('#deletePayment').val();
            this.payments = JSON.parse($('#payments').val());
        },


        methods: {


            selectPaymentService(index){
                this.paymentEdit = Object.assign({}, this.payments[index]);
            },


            createPayment() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.payment) {
                    let value = this.payment[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.create, formData)
                .then((response) => {
                    $('#myModal').modal('hide');
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8" }
                    });

                    this.isLoading = false;
                    this.payments.push(Object.assign({}, response.data.payment, {}));


                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#CC5BB8" }
                    });


                })

            },


            changePaymentService() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.paymentEdit) {
                    let value = this.paymentEdit[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.update, formData).then((response) => {
                    $('#changePaymentService').modal('hide');
                    this.$toastr.Add({
                        msg: response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "success",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#1BBCE8" }
                    });


                    this.isLoading = false;
                    let paymentEdit = response.data.payment;
                    this.payments = this.payments.map((payment) =>{
                        if(payment.id === paymentEdit.id){
                            payment = Object.assign({},paymentEdit)
                        }
                        return payment;
                    })


                }).catch((error) => {
                    this.isLoading = false
                    this.$toastr.Add({
                        msg: error.response.data.message,
                        clickClose: false,
                        timeout: 2000,
                        position: "toast-top-right",
                        type: "error",
                        preventDuplicates: true,
                        progressbar: false,
                        style: { backgroundColor: "#CC5BB8" }
                    });


                })

            },




            deletePayment(index) {
                let payment = Object.assign({}, this.payments[index]);
                payment._token = $('input[name=_token]').val();

                const customAlert = swal({
                    title: 'Warning',
                    text: `This action can't be undone. Are you sure?`,
                    icon: 'warning',
                    closeOnClickOutside: false,
                    buttons: {
                        cancel: {
                            text: "cancel",
                            visible: true,
                            className: "",
                            closeModal: true,
                        },
                        confirm: {
                            text: "Confirm",
                            value: 'delete',
                            visible: true,
                            className: "btn-danger",
                        }
                    }
                });

                customAlert.then(value => {
                    if (value == 'delete') {
                        this.isLoading = true;
                        axios.post(this.route.delete,{id: payment.id})
                            .then(response => {
                                this.isLoading = false;
                                this.payments.splice(index, 1);
                                this.$toastr.Add({
                                    msg: response.data.message,
                                    clickClose: false,
                                    timeout: 2000,
                                    position: "toast-top-right",
                                    type: "success",
                                    preventDuplicates: true,
                                    progressbar: false,
                                    style: { backgroundColor: "#1BBCE8" }
                                });


                            }).catch((error) => {
                                this.isLoading = false
                                this.$toastr.Add({
                                    msg: error.response.data.message,
                                    clickClose: false,
                                    timeout: 2000,
                                    position: "toast-top-right",
                                    type: "error",
                                    preventDuplicates: true,
                                    progressbar: false,
                                    style: { backgroundColor: "red" }
                                });
                            });

                    }
                });
            },

            clearImage() {
                this.imageFile = null;
                this.input = null;
            },


        }
    });
}
