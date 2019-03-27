new Vue({
    el: '#register-form',
    data: {
        image: '',
        avatar: null,
        user: {
            'name': null,
            'password': null,
            'avatar': null,
            'avatarName': null
        }
    },
    methods: {

        openModalUpload() {
            this.image = null;
            this.imageName = null;
            this.user.avatar = null;
            this.user.avatarName = null;
            $('#modal-default').modal('show');
        },

        onFileChange(e) {
            this.imageName = e.target.files[0].name;
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length) return;

            this.createImage(files[0]);
        },

        createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.image = e.target.result;
                console.log(vm.image);
            };
            reader.readAsDataURL(file);
        },

        removeImage: function (e) {
            this.image = '';
            this.imageName = '';
        },

        confirmUpload() {
            this.user.avatar = this.image;
            this.user.avatarName = this.imageName;

            $('#modal-default').modal('hide');
        }
    }
})