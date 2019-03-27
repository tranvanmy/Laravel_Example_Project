new Vue({
    el: '#login-form',
    data: {
        user: {
            'email': null,
            'password': null
        },
        formErrors: null,
        userNotFound: null
    },

    watch: {
        'user.email': function() {
            this.userNotFound = null;
            if(this.formErrors && this.formErrors.email) this.formErrors.email = null;
        },

        'user.password': function() {
            this.userNotFound = null;
            if(this.formErrors && this.formErrors.password) this.formErrors.password = null;
        },
    },

    methods: {
        handleLogin() {
            var self = this;
            var authOptions = {
                method: 'POST',
                url: '/account/login-handle',
                params: this.user,
                json: true
            }
            axios(authOptions).then((response) => {
                self.formErrors = null;
                window.location.href = '/admin';
            }).catch((error) => {
                self.formErrors = error.response.data.errors;
                if (error.response.status == 401) {
                    self.userNotFound = error.response.data.message
                }
            });
        }
    }
});
