<section id="appointment-report-main-container-id" class="appointment-report-main-container">
    <hr class="hr" style="color: #9E5B08;">
    <div class="wrapper d-flex flex-wrap">
        <div class="profile-container ">
            <div class="header-text d-flex flex-row mb-2">
                <i class="fa-solid fa-book"></i>
                <h3>Appointment Reports</h3>
            </div>
            <div class="description-header-text">
                <p>See how schedules line up and patient visits stack up as we keep every appointment right on track!
                </p>
            </div>
        </div>
    </div>

    <div class="appointment-report-container-box mt-3">
        <div class="appointment-report-overview">
            <h3>Overview</h3>
        </div>

        <div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-1 row-cols-md-1 row-cols-sm-1 p-2 gy-3">
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="appointment-report-box-wrapper">
                    <div class="appointment-report-icon">
                        <div class="appointment-report-icon-container bg-primary">
                            <i class="fa-solid fa-calendar"></i>
                        </div>
                        <div class="appointment-report-box-title d-flex flex-column justify-content-start">
                            <h4>Completed Appointments</h4>
                            <h3 class="appointment-count" data-category="completed"></h3>
                            <p>This month</p>
                        </div>
                        <div class="appointment-report-view-detail d-flex ms-auto">
                            <button type="button" class="view-btn" data-target="#appointment-modal-container-id"
                                data-category="completed">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="appointment-report-box-wrapper">
                    <div class="appointment-report-icon">
                        <div class="appointment-report-icon-container" style="background-color: gray">
                            <i class="fa-solid fa-calendar-minus"></i>
                        </div>
                        <div class="appointment-report-box-title d-flex flex-column justify-content-start">
                            <h4>No Show Appointments</h4>
                            <h3 class="appointment-count" data-category="no-show"></h3>
                            <p>This month</p>
                        </div>
                        <div class="appointment-report-view-detail d-flex ms-auto">
                            <button type="button" class="view-btn" data-category="no-show"
                                data-target="#appointment-modal-container-id">View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="appointment-report-box-wrapper">
                    <div class="appointment-report-icon">
                        <div class="appointment-report-icon-container bg-danger">
                            <i class="fa-solid fa-calendar-xmark"></i>
                        </div>
                        <div class="appointment-report-box-title d-flex flex-column justify-content-start">
                            <h4>Cancelled Appointments</h4>
                            <h3 class="appointment-count" data-category="cancelled"></h3>
                            <p>This month</p>
                        </div>
                        <div class="appointment-report-view-detail d-flex ms-auto">
                            <button type="button" class="view-btn" data-category="cancelled"
                                data-target="#appointment-modal-container-id">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="appointment-wrapper-container mt-5 border pt-2">
        <div class="container-tools px-3">
            <div class="container-tool-wrapper d-flex justify-content-space-between align-items-center gap-3 flex-wrap">


                <div class="monthly-wrapper-caret-down">
                    <button type="button" class="inventory-management-caret-button" id="appointment-report-caret-btn"
                        title="Weekly Report" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="selected-period">Select Period</span>
                        <i class="fa-solid fa-caret-down"></i>
                    </button>

                    <ul class="monthly-dropdown" id="admin-financoal-dropdown-id">
                        <li><a class="monthly-dropdown-item" href="#">Weekly</a></li>
                        <li><a class="monthly-dropdown-item" href="#">Monthly</a></li>
                        <li><a class="monthly-dropdown-item" href="#">Yearly</a></li>
                    </ul>
                </div>

                <div class="search-wrapper-inventory">
                    <input type="text" name="inventory-searchbar" class="inventory-searchbar form-control"
                        placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>

        <hr class="mt-2 mb-4" style="color: #9E5B08;">



        <div class="row row-cols-xxl-2 row-cols-xl-2 row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="appointment-service-table-container px-3 pt-2 pb-5">
                    <div class="appointment-service-table-wrapper w-100 h-100">
                        <table class="appointmet-service-table" id="appointment-service-table-id">
                            <thead>
                                <tr>
                                    <th>Main Category</th>
                                    <th>Subcategory</th>
                                    <th>Total</th>
                                    <th>Action<th>
                                </tr>
                            </thead>
                            <tbody id="appointment-service-body"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="appointment-report-graph-container">
                    <div class="appointment-graph-wrapper">
                        <div class="appointment-report-graph-title p-2">
                            <h3>Appointment Report</h3>
                            <div class="appointment-report-graph-p">
                                <p>Here’s Your appointment Overview—see how the numbers <br>
                                    unfold and grow as we keep your appointments in perfect balance!</p>
                            </div>
                            <div class="month-selector">
                                <label for="month-select">Select Month:</label>
                                <select id="month-select">
                                    <option value="2023-09">September 2023 (Last Month)</option>
                                    <option value="2023-10">October 2023 (Current Month)</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>



                        <div class="appointment-report-graph-wrapper">
                            <canvas id="appointment-report-id"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="appointment-modal-container" id="appointment-modal-container-id">
    <div class="appointment-modal-wrapper">
        <div class="close-modal">
            <button id="close-modal-btn">&times;</button>
        </div>
        <div class="appointment-modal-title">
            <h3 id="modal-title">Appointment Details</h3>
        </div>
        <div class="appointment-modal-table-container">
            <div class="appointment-modal-table-wrapper">
                <table class="appointment-report-modal-table" id="appointment-modal-table-id">
                    <thead id="appointment-report-modal-head">
                    </thead>
                    <tbody id="appointment-report-modal-body"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>