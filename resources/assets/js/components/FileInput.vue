<template>
    <div>
        <div v-if="!image" class="ads-fileinput">
            <div class="file-button" id="divUpload" @click="onUploadInput">
                <span class="glyphicon glyphicon-plus"></span>
            </div>
        </div>
        <div v-else>
            <div class="img-thumb" :style="{backgroundImage:`url(${image})`}"></div>
            <div id="img"></div>
            <button class="ui negative icon basic button" @click="removeImage">
                <i class="remove negative large icon"></i>
            </button>
        </div>
        <!--<div v-if="eroor">-->
                <!--&lt;!&ndash;{{error}}&ndash;&gt;-->
        <!--</div>-->
        <input @change="onFileChange"
               :name="filename"
               :id="fileid"
               :class="classname"
               type="file"
               style="display: none"
               accept="image/*"
        >
    </div>
</template>

<script>
    export default{
        props: ['filename', 'fileid', 'classname'],
        data() {
            return {
                image: '',
            }
        },
        methods: {
            onUploadInput(e) {
                $(this.$el).find('.' + this.classname).click();
            },
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {

                    let image = new Image();
                    vm.image = e.target.result;

                    image.onload = (e) =>{
                        let canvas = document.createElement("canvas");
                        let size = 50; // Changing the image size on the percent

                        image.width = (image.width * size) / 100;
                        image.height = (image.height * size) / 100;
                        // resize
                        let ctx = canvas.getContext("2d");
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        canvas.width = image.width;
                        canvas.height = image.height;
                        ctx.drawImage(image, 0, 0, image.width, image.height);

                        let dataurl = canvas.toDataURL("image/png");
                        document.getElementById('img').src = dataurl;

                        //  $('#img').append(image);

                        // AUTO DOWNLOAD THE IMAGES, ONCES RESIZED.
                        let a = document.createElement('a');
                        a.href = canvas.toDataURL("image/png");
                        a.download = 'sample.jpg';
                        document.body.appendChild(a);
                        a.click();
                    };
                };
                reader.readAsDataURL(file);
            },
            // TODO после удаления повторно не грузит привью
            removeImage: function (e) {
               return this.image = '';

            }
        }
    }

</script>