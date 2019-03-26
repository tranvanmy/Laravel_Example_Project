var formUser = new Vue({
    el: '#list_user',
    data: {
        users: null
    },

    computed: {

    },

    mounted: function () {

    },

    created: function () {
        this.getUsers();
    },

    methods: {
        getUsers() {
            var self = this;
            var authOptions = {
                method: 'GET',
                url: '/admin/user',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                json: true
            }
            axios(authOptions).then((response) => {
                self.users = response.data;
            }).catch((error) => {
                self.formErrors = error.response.data.errors;
            });
        }
    }
});
