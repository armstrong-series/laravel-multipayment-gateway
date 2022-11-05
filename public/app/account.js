if (window.Vue) {
    new Vue({
        el: '#account',

        data: {
            isLoading: false,

            user: {
               name: "",
               email: "",
               password: "",
               confirm_password: ""
            },

            payments: [],

            route: {
                create: "",

            },



        },


        mounted() {
            this.route.create = $('#createAccount').val();

        },


        methods: {

            signup() {
                this.isLoading = true;
                let formData = new FormData();
                for (let key in this.user) {
                    let value = this.user[key]
                    formData.append(key, value);
                }
                formData.append('_token', $('input[name=_token]').val());
                axios.post(this.route.create, formData)
                .then((response) => {
                    $('#signup').modal('hide');
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
                    // windows.reload();

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




        }
    });
}
