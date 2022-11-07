if (window.Vue) {
    new Vue({
        el: '#payment-checkout',

        data: {
            isLoading: false,

            item: {
               name: "",
               description:"",
               amount: "",
            },


            stripe: '',
            elements: '',
            card: '',


            card: {
                fullname: "",
                cvv: "",
                month: "",
                year: "",
                addPaymentStatus: 0,
                addPaymentStatusError: '',

            },

            route: {
                create: "",

            },



        },


        mounted() {
            // this.route.create = $('#stripePayment').val();
            this.includeStripe('js.stripe.com/v3/', function(){
                this.configureStripe();
            }.bind(this) );
        },


        methods: {
            paywithStripe(){
                this.addPaymentStatus = 1;
                this.stripe.confirmCardSetup(
                    this.intentToken.client_secret, {
                        payment_method: {
                            card: this.card,
                            billing_details: {
                                name: this.name
                            }
                        }
                    }
                ).then(function(result) {
                    if (result.error) {
                        this.addPaymentStatus = 3;
                        this.addPaymentStatusError = result.error.message;
                    } else {
                        this.savePaymentMethod( result.setupIntent.payment_method );
                        this.addPaymentStatus = 2;
                        this.card.clear();
                        this.name = '';
                    }
                }.bind(this));
            },


            includeStripe( URL, callback ){
                let documentTag = document, tag = 'script',
                    object = documentTag.createElement(tag),
                    scriptTag = documentTag.getElementsByTagName(tag)[0];
                object.src = '//' + URL;
                if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
                scriptTag.parentNode.insertBefore(object, scriptTag);
            },

            configureStripe(){
                this.stripe = Stripe( this.stripeAPIToken );

                this.elements = this.stripe.elements();
                this.card = this.elements.create('card');

                this.card.mount('#card-element');
            },

            savePaymentMethod( method ){
                axios.post('/product/stripe/payment', {
                    payment_method: method
                }).then( function(){
                    this.loadPaymentMethods();
                }.bind(this));
            },







        }
    });
}
