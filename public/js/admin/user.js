
var user = new Vue({
    el: '#create_user',
    data: {
        user: {
            'name': null,
            'email': null
        },
        formErrors: null
    },

    computed: {

    },

    mounted: function () {

    },

    created: function () {
    },

    methods: {
        createUser() {
            var self = this;
            var authOptions = {
                method: 'POST',
                url: '/admin/user',
                params: this.user,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                json: true
            }
            axios(authOptions).then((response) => {
                self.formErrors = null;
                console.log('success', self.formErrors);
            }).catch((error) => {
                self.formErrors = error.response.data.errors;
            });
        }
    }
});
