<style scoped>
.card-widget {
    border: 0;
    position: relative;
}
.widget-user .widget-user-header {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    height: 135px;
    padding: 1rem;
    text-align: center;
}
.text-white {
    color: #fff!important;
}
.widget-user .widget-user-username {
    font-size: 25px;
    font-weight: 300;
    margin-bottom: 0;
    margin-top: 0;
    text-shadow: 0 1px 1px rgba(0,0,0,.2);
}

.text-right {
    text-align: right!important;
}
.widget-user .widget-user-desc {
    margin-top: 0;
}

.widget-user .widget-user-image {
    left: 50%;
    margin-left: -45px;
    position: absolute;
    top: 80px;
}
*, ::after, ::before {
    box-sizing: border-box;
}
.widget-user .card-footer {
    padding-top: 50px;
}
.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 0 solid rgba(0,0,0,.125);
}
.widget-user .widget-user-image>img {
    border: 3px solid #fff;
    height: auto;
    width: 90px;
}

.img-circle {
    border-radius: 50%;
}
</style>
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white" style="background: url('./assets/images/photo1.png') center center;">
                <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="/assets/images/profile.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            </div>
        </div>
        <!-- forms 2 -->
            <div class="card card_border py-2 mb-4">
                <div class="card-body">
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="input__label">Email</label>
                                <input type="email" v-model="form.email" class="form-control input-style" :class="{ 'is-invalid': form.errors.has('email') }"
                                id="inputEmail4" placeholder="Email">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="input__label">Password (Leave empty if not changed)</label>
                                <input type="password" v-model="form.password" class="form-control input-style" :class="{ 'is-invalid': form.errors.has('password') }" id="inputPassword4" placeholder="Password">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUsername" class="input__label">Username</label>
                            <input type="text" v-model="form.name" class="form-control input-style" :class="{ 'is-invalid': form.errors.has('name') }" id="inputUsername" placeholder="John">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" class="input__label">Address</label>
                            <input type="text" v-model="form.adress" class="form-control input-style" :class="{ 'is-invalid': form.errors.has('adress') }" id="inputAddress" placeholder="1234 Main Street">
                            <has-error :form="form" field="adress"></has-error>
                        </div>
                        <div class="form-group">
                             <label for="inputAddress" class="input__label">Chose Photo</label>
                            <div class="custom-file">
                                <input type="file" @change="uploadFile" class="custom-file-input" id="validatedCustomFile" required="">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                        <button type="submit" @click.prevent="updateProfile" class="btn btn-primary btn-style mt-4">Update</button>
                    </form>
                </div>
            </div>
            <!-- //forms 2 -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                form: new Form({
                    id: '',
                    name: '',
                    email: '',
                    adress: '',
                    photo: '',
                    type: '',
                    password: '',
                })
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            updateProfile(){
                this.$Progress.start();
                 this.form.put('api/profile')
                        .then(()=>{
                             swal.fire(
                            'Updated!',
                            'Your profile has been Updated.',
                            'success'
                            );
                            this.$Progress.finish();
                        })
                        .catch(()=>{
                            swal.fire(
                            'Oops!',
                            'Something went wrong!',
                            'error'
                            );
                            this.$Progress.fail();
                        });

            },
            uploadFile(e){

                    let file = e.target.files[0];
                    // CHECK IF A UPLODED FILE IS IMAGE OR OTHER FILE
                    console.log(file['type']);
                    if(file['type'] === 'image/png' || file['type'] ==='image/jpeg' || file['type']==='image/png'){
                        if(file['size'] <2000000){
                            let reader = new FileReader();
                            reader.onloadend = () => {
                                // console.log('RESULT', reader.result)
                                this.form.photo = reader.result;
                            }
                            reader.readAsDataURL(file)
                        }
                        else
                        {
                            swal.fire(
                            'Oops!',
                            'Your are uploading a large file!',
                            'error'
                            );
                        }
                    }
                    else
                    {
                        swal.fire(
                            'Oops!',
                            'Please Upload Image File!',
                            'error'
                            );
                    }


            },
        },
        created(){
            axios.get('api/profile')
            .then(({ data }) => (this.form.fill(data)));
        }
    }
</script>
