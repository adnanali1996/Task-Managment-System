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
            <h3 class="card__title position-absolute">All Employees Info</h3>
            <div class="table-responsive">
              <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>Emp. Name</th>
                    <th>Designation</th>
                    <th>Joining date</th>
                    <th>Emp. Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="assets\images\avatar1.jpg'" class="rounded-circle mr-2" width="40px" alt="">
                      Johnson</td>
                    <td>Corporate Business Theme</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar1.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Elexa ker</td>
                    <td>HR operations</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Alexander</td>
                    <td>Interior web design</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Smith Kelly</td>
                    <td>Personal portfolio</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-danger">Processing</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Elizabeth</td>
                    <td>Agriculture and farming</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar6.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Williamson</td>
                    <td>Integration Specialist</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar7.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Thomas</td>
                    <td>Sales Assistant</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Davidson</td>
                    <td>Integration Specialist</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Michael</td>
                    <td>Javascript Developer</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar3.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Margaret</td>
                    <td>Software Engineer</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Charlotte</td>
                    <td>Office Manager</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Isabella</td>
                    <td>Support Lead</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar6.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Victoria</td>
                    <td>Regional Director</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar7.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Wilson</td>
                    <td>Senior Marketing Designer</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar1.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Jessica</td>
                    <td>Regional Director</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar2.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Michael</td>
                    <td>Marketing Designer</td>
                    <td>09/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar3.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Anderson</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>06/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar4.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Gloria</td>
                    <td>Systems Administrator</td>
                    <td>07/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
                  </tr>
                  <tr>
                    <td><img src="assets\images\avatar5.jpg" class="rounded-circle mr-2" width="40px" alt="">
                      Taylor</td>
                    <td>Software Engineer</td>
                    <td>08/01/2020</td>
                    <td><span class="badge badge-warning">In active</span></td>
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
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>