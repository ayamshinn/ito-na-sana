<div id="admin-messages-page-id" class="messages-page-main-container">



  <div class="line mb-3"></div>


  <div class="wrapper d-flex flex-wrap">
    <div class="page-header ">
      <div class="header-text d-flex flex-row mb-2 gap-1">
        <i class="fa-solid fa-envelope-circle-check "></i>
        <h3>Messages</h3>
      </div>
      <div class="description-header-text">
        <p>View and monitor all message activities between patients and staff.</p>
      </div>
    </div>

  </div>




  <div class="message-container rounded-2">
    <div class="message-wrapper pe-0">
      <div class="row row-cols-lg-2 h-100 w-100 g-0">

        <!-- Conversation List -->
        <div class="col-lg-3 col-md-3 px-0">
          <div class="box ">
            <div class="chat-list-header d-flex align-items-center justify-content-between p-3 border-bottom">
              <h5 class="m-0">
                <i class="fa-solid fa-comments"></i>
              </h5>

              <div class="chat-search-wrapper ms-2 flex-grow-1">
                <input type="text" class="form-control form-control-sm" placeholder="Search chats...">
              </div>
            </div>

            <div class="box2 pt-0">
              <ul class="list-group">
                <li class="list-group-item py-3 list-group-item-action" onclick="openChat('Maria Dela Cruz')">
                  <div class="list-name-container d-flex flex-row">
                    <div class="chat-profile-img-container">
                      <img src="#" alt="Profile Picture">
                    </div>
                    <div class="chat-name-container d-flex align-items-center px-2">
                      <div class="chat-name-wrapper">
                        <h3>Maria Dela Cruz</h3>
                        <small><span>3 </span> Active Conversations</small>
                      </div>
                    </div>
                  </div>
                </li>




              </ul>
            </div>
          </div>
        </div>

        <!-- Chat Window -->
        <div class="col-lg-9 col-md-9">
          <div class="div-container d-flex flex-row">
            <div class="box ">

              <!-- ===============================
                 STATE 1: No conversation selected
            ================================= -->
              <div
                class="select-chat-placeholder d-none flex-column justify-content-center align-items-center text-center p-5">
                <i class="fa-regular fa-comments fa-3x mb-3 text-muted"></i>
                <h5 class="text-muted mb-2">Select a conversation</h5>
                <p class="text-secondary mb-0">Choose a patient from the left to start messaging.</p>
              </div>


              <div class="chat-window-right d-flex  flex-column">
                <div class="chat-header border-bottom p-3 d-flex align-items-center">
                  <button class="btn btn-link d-md-none me-2"><i class="fa-solid fa-arrow-left"></i></button>


                  <h5 class="m-0" id="chat-name">Patient Name</h5>
                  <button class="user-info-panel-btn ms-auto border-none"><i
                      class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>

                <!-- ===============================
              STATE 2: Selected but no chat yet
            ================================= -->

                <div
                  class="no-chat-placeholder d-none flex-column justify-content-center align-items-center text-center p-5">
                  <i class="fa-regular fa-face-smile fa-3x mb-3 text-muted"></i>
                  <h5 class="text-muted mb-2">No conversations yet</h5>
                  <p class="text-secondary mb-0">When you start a chat, messages will appear here.</p>
                </div>

                <!-- ===============================
              STATE 3: Active chat window
             ================================= -->
                <!-- Chat Body -->
                <div class="chat-body-container px-1" id="chat-body-container">
                  <div class="chat-body p-2">

                    <!-- Incoming Message -->
                    <div class="chat-message incoming d-flex flex-row align-items-start mb-3">
                      <div class="chat-window-profile-img-container me-2">
                        <img src="#" alt="Profile Picture">
                      </div>
                      <div class="message">
                        <div class="chat-bubble">
                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                          Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                                                    Hi Doc! I just wanted to ask if my next appointment is still on Monday?

                        </div>
                        <small class="text-muted d-block mt-1">9:42 AM</small>
                      </div>
                    </div>

                    <!-- Outgoing Message -->
                    <div class="chat-message outgoing d-flex flex-row align-items-start justify-content-end mb-3">
                      <div class="message text-end">
                        <div class="chat-bubble">
                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.
                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.

                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.

                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.

                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.

                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.

                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.
                          Hello Maria! 👋 Yes, it’s still confirmed for Monday at 10 AM.


                        </div>
                        <small class="text-muted d-block mt-1">9:44 AM</small>
                      </div>
                      <div class="chat-window-profile-img-container ms-2">
                        <img src="#" alt="Profile Picture">
                      </div>
                    </div>

                  </div>
                </div>



            <!-- Chat Footer -->
            <div class="chat-footer border-top  p-3">
              <div class="input-group">
                <!-- 📎 File Upload Button -->
                <button class="btn btn-outline-secondary" type="button" title="Attach file">
                  <i class="fa-solid fa-plus"></i>
                </button>

                <!-- Hidden File Input -->
                <input type="file" id="fileInput" multiple accept="application/pdf,image/*,video/*,audio/*" hidden>

                <!-- Message Input -->
                <input type="text" class="form-control" placeholder="Type a message...">

                <!-- Send Button -->
                <button class="btn btn-primary" type="button"><i class="fa-solid fa-paper-plane"></i> Send</button>
              </div>
            </div>
          </div>
        </div>
        <div class="patient-info-panel  p-3">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="m-0">Patient Info</h5>
            <button id="closePatientInfoBtn" class="btn btn-sm btn-outline-danger">×</button>
          </div>

          <p><strong>Name:</strong> Maria Dela Cruz</p>
          <p><strong>Age:</strong> 28</p>
          <p><strong>Last Visit:</strong> October 10, 2025</p>
          <p><strong>Notes:</strong> Scheduled for follow-up cleaning.</p>
        </div>
      </div>
    </div>

  </div>
</div>
</div>





</div>