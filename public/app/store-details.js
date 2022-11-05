if (window.Vue) {
    new Vue({
        el: '#product-details',

        data: {
            isLoading: false,

            product: {
               name: "",
               description: "",
               qty: "",
               amount: ""
            },

            upadateProduct: {
                name: "",
               description: "",
               qty: "",
               amount: ""
            },





            payments: [],

            route: {
                create: "",
                update: "",
                delete: ""
            },



        },


        mounted() {
            this.route.create = $('#createProduct').val();
            this.product = JSON.parse($('#product').val());
            this.payments = JSON.parse($('#payments').val());

        },


        methods: {

            makePayment(){

            },






        }
    });
}
