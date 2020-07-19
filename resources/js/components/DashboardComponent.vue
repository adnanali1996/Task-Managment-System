<template>
    <div class="main-content">

  <!-- content -->
  <div class="container-fluid content-top-gap">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb my-breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </nav>
    <div class="welcome-msg pt-3 pb-4">
      <h1>Hi <span class="text-primary">Adnan Ali</span>, Welcome back</h1>
      <p>Very detailed & featured admin.</p>
    </div>

    <!-- statistics data -->
    <div class="statistics">
      <div class="row">
        <div class="col-xl-6 pr-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-users"> </i>
                <h3 class="text-primary number">29.75 M</h3>
                <p class="stat-text">Total Users</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-eye"> </i>
                <h3 class="text-secondary number">51.25 K</h3>
                <p class="stat-text">Daily Visitors</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 pl-xl-2">
          <div class="row">
            <div class="col-sm-6 pr-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cloud-download"> </i>
                <h3 class="text-success number">166.89 M</h3>
                <p class="stat-text">Downloads</p>
              </div>
            </div>
            <div class="col-sm-6 pl-sm-2 statistics-grid">
              <div class="card card_border border-primary-top p-4">
                <i class="lnr lnr-cart"> </i>
                <h3 class="text-danger number">1,250k</h3>
                <p class="stat-text">Purchased</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //statistics data -->

    <!-- data tables -->
    <div class="data-tables">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <div class="card card_border p-4">
            <h3 class="card__title mt-2">All Tasks Info</h3>
            <div class="card-tools">
                <button type="button"  class="btn btn-success float-right" @click="newModel"> Add New Task <span class="lnr lnr-plus-circle"></span></button></div>
            <div class="table table-striped table-responsive-sm">
              <table id="example" class="display table-bordered" style="width:100%">
                <thead class="thead-primary">
                  <tr>
                    <th>Tasks</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="task in tasks" :key="task.id">
                    <td>{{ task.task | upText }}</td>
                    <td>
                        <button class="btn btn-danger" v-if="task.completed==0"> Marks as Complete</button>
                        <button class="btn btn-success" v-if="task.completed==1"> Completed</button>
                    </td>

                    <td>
                        <a href="#" @click="editModel(task)"><span class="lnr lnr-pencil text-primary" style="font-size:20px;"></span></a>
                        <a href="#" @click="deleteTask(task.id)"><span class="lnr lnr-cross text-danger" style="font-size:20px;"></span></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 chart-grid mb-4">
          <div class="card card_border p-4">
            <div class="card-header chart-grid__header pl-0 pt-0">
              Chatting
            </div>
            <div class="messaging">
              <div class="inbox_msg">
                <div class="inbox_people">
                  <div class="headind_srch">
                    <div class="srch_bar">
                      <div class="stylish-input-group">
                        <input type="text" class="search-bar" placeholder="Search Chat">
                        <span class="input-group-addon">
                          <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                        </span> </div>
                    </div>
                  </div>
                  <div class="inbox_chat">
                    <div class="chat_list active_chat">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar5.jpg" alt="Alexander" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Alexander <span class="chat_date">1 hour ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar3.jpg" alt="Anderson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Anderson <span class="chat_date">5 hours ago</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar5.jpg" alt="Isabella" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Isabella <span class="chat_date">Yesterday</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar4.jpg" alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Mar 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar2.jpg" alt="Davidson" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Davidson <span class="chat_date">Feb 18</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar1.jpg" alt="Elexa ker" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Elexa ker <span class="chat_date">Feb 04</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                    <div class="chat_list">
                      <div class="chat_people">
                        <div class="chat_img"> <img src="assets\images\avatar4.jpg" alt="Charlotte" class="img-fluid">
                        </div>
                        <div class="chat_ib">
                          <h5>Charlotte <span class="chat_date">Jan 28</span></h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mesgs">
                  <div class="msg_history">
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets\images\avatar5.jpg" alt="Alexander" class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Coming along nicely, we've got a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          </p>
                          <span class="time_date"> 10:05 AM | Mar 9</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>Great start, I've added some Lorem ipsum dolor sit amet. </p>
                        <span class="time_date"> 12:15 PM | Mar 9</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets\images\avatar5.jpg" alt="Alexander" class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                          <span class="time_date"> 09:16 AM | Yesterday</span>
                        </div>
                      </div>
                    </div>
                    <div class="outgoing_msg">
                      <div class="sent_msg">
                        <p>But I must explain to you.</p>
                        <span class="time_date"> 03:15 PM | Today</span>
                      </div>
                    </div>
                    <div class="incoming_msg">
                      <div class="incoming_msg_img"> <img src="assets\images\avatar5.jpg" alt="Alexander" class="img-fluid"> </div>
                      <div class="received_msg">
                        <div class="received_withd_msg">
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores.</p>
                          <span class="time_date"> 03:16 PM | Today</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="type_msg">
                    <div class="input_msg_write">
                      <input type="text" class="write_msg" placeholder="Type a message">
                      <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //data tables -->

  </div>
  <!-- //content -->
  <!-- Modal -->
                  <div class="modal fade" id="addTaskModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form @submit.prevent="editMode? editTask() : createTask()" @keydown="form.onKeydown($event)">

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Task</label>
                                    <input v-model="form.task" type="text" name="task"
                                        class="form-control" :class="{ 'is-invalid': form.errors.has('task') }">
                                    <has-error :form="form" field="task"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button  v-show="editMode" type="submit" class="btn btn-primary">Update</button>
                            <button v-show="!editMode" type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
</div>
</template>

<script>
    export default {
          data () {
            return {
            editMode : false,
            tasks: {},
            // Create a new form instance
            form: new Form({
                id: '',
                task: ''
            })
            }
     },
    methods: {
        editTask(){
            this.$Progress.start();
            this.form.put('api/user/'+ this.form.id)
            .then(() =>{
                swal.fire(
                    'Updated!',
                    'Your Task has been Updated.',
                    'success'
                    )
                $("#addTaskModel").modal("hide");
                Fire.$emit('TaskCreated');
                this.$Progress.finish();
            }).catch(()=>{
                this.$Progress.fail();
            });
        },
        editModel(task){
            this.editMode = true;
            $("#exampleModalLongTitle").text('Update Task');
            this.form.clear();
            this.form.reset();
            $("#addTaskModel").modal("show");
            this.form.fill(task);
        },
        newModel(){
            this.editMode = false;
            this.form.reset();
            $("#addTaskModel").modal("show");
        },
        loadTasks(){
            axios.get('api/user').then(({ data }) =>(this.tasks = data.data))
        },
        createTask(){
            this.form.post('api/user').then(() => {
                this.$Progress.start();
                Fire.$emit('TaskCreated');
                $('#addTaskModel').modal('hide');
                toast.fire({
                    icon: 'success',
                    title: 'User Created Successfully'
                })
                this.$Progress.finish();
            }).catch(() => {
                console.log("error");
            });

        },
        deleteTask(id){
            swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                // Send Request to Server for delet
                this.form.delete('api/user/'+id).then(()=> {
                    swal.fire(
                    'Deleted!',
                    'Your Task has been deleted.',
                    'success'
                    )
                    Fire.$emit('TaskCreated');
                }).catch(()=> {
                    swal("Failed", "There was Something wrong.", "warning");
                });

            }
            })
        },
    },
        created() {
            // console.log('Component mounted.')
            this.loadTasks();
            Fire.$on('TaskCreated', () => {
                this.loadTasks()
            });
        }
    }
</script>
