if (window.Vue) {
    new Vue({
        el: '#store-product',

        data: {
            isLoading: false,

            product: {
               name: "",
               description: "",
               qty: "",
               amount: "",
               product_image: ""
            },

            upadateProduct: {
                name: "",
               description: "",
               qty: "",
               amount: ""
            },





            products: [],

            route: {
                create: "",
                update: "",
                delete: ""
            },



        },


        mounted() {
            this.route.create = $('#createProduct').val();
            this.products = JSON.parse($('#products').val());
        },


        methods: {

            addProduct() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.product) {
                    let value = this.product[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.create, formData)
                .then((response) => {
                    $('#addProduct').modal('hide');
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

                    const checkoutPayment = {
                        name: this.product.name,
                        amount: this.product.amount,
                    }
                    window.localStorage.setItem('payment', JSON.stringify(checkoutPayment));

                    this.isLoading = false;
                    this.products.push(Object.assign({}, response.data.product, {}));
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


            updateProduct() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.eventEdit) {
                    let value = this.eventEdit[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.updateEvent, formData).then((response) => {
                    $('#exampleModalCenter').modal('hide');
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
                    let eventEdit = response.data.event;
                    this.events = this.events.map((event) =>{
                        if(event.id === eventEdit.id){
                            event = Object.assign({},eventEdit)
                        }
                        return event;
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






            deleteProduct(index) {
                let product = Object.assign({}, this.products[index]);
                product._token = $('input[name=_token]').val();

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
                        axios.post(this.route.delete,{id: product.id})
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
