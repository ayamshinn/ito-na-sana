<!----------------Admin Patient Profile Section Part 2----------------------->
<div id="admin-dentist-detail-view-page-id"
    class="information-record-main-container-detail-view">
    <hr class="hr" style="color: #9E5B08;">
    <div class="wrapper d-flex flex-wrap">
        <div class="profile ">
            <div class="header-text d-flex flex-row align-items-center mb-2 ">
                <div class="back-btn-con me-1">
                    <button class="back-btn" data-target="../../PHP/admin-ui/admin-subfolder/admin-dentist-management.php"><i class="fas fa-arrow-left"
                            title="Back Button"></i></button>
                </div>
                <div class="div ">
                    <h3>Dentist Information Records</h3>
                </div>
            </div>
            <div class="description-header-text">
                <p>Manage and update dentist information records to ensure accurate and organized clinic data.</p>
            </div>
        </div>
  
    </div>




    <div class="info-wrapper d-flex flex-column p-2 pt-3 pb-4">
        <div
            class="row info-row row-cols-xxl-3 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 pt-0 g-3 px-2 pb-4 p-0">

            <!-- Profile Section -->
            <!-- Profile Section -->
            <div class="col-xxl-2 col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0  ps-2 pe-2">
                <div class="user-id-container  h-100 w-100 p-0">

                    <!-- Patient Profile -->
                    <div class="user-information-profile d-flex flex-column align-items-center mt-3 pb-0 pt-3 ">
                        <div class="user-information-profile-img align-items-center">
                            <img src="profile.jpg" alt="Profile">
                        </div>

                        <div class="user-information-profile-text text-center w-100 h-100 mt-4">
                            <div class="container-h">
                            <h4 class="mb-2">Dentist ID: </h4>
                            <h4><span class="user-information-profile-id">M-23234</span></h4>
                        </div>
                            <div class="container-p  mt-4 h-100 w-100 ">
                                <p class="mb-1"><strong>Status:</strong> <span class="text-success">Active</span></p>
                                <p class="mb-0 text-muted"><strong>Registered:</strong> June 15, 2023</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <!-- General Information -->
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="user-general-info-container h-100 d-flex flex-column">
                    <div class="user-general-info ms-auto pt-2 h-100 d-flex align-items-center flex-column">
                        <div class="user-general-info-title d-flex pt-2 align-items-center w-100">
                            <h3>General Information</h3>

                        </div>

                        <div class="user-information-view-more px-3 w-100 mt-2">
                            <div class="row row-cols-1">

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-name">Name</label>
                                        <input type="text" class="form-control-user-info editable" id="user-name"
                                            value="Dracula Malibuadadawdssssssssssssssssssss" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-age-text">Age</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="user-age-text" value="24 years old" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-gender-text">Gender</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="user-gender-text" value="Female" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-address-text">Email</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="user-address-text" value="dracy.malibu@gmail.com" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-phone-text">Phone</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="user-phone-text" value="053641" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="user-HMO-card">HMO Card</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="user-HMO-card" value="Active" disabled>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Medical Record -->
            <div class="col-xxl-5 col-lg-6 col-xl-6 col-md-12 col-sm-12">
                <div class="patient-medical-record-container h-100">
                    <div class="patient-medical-record pt-2">
                        <div class="patient-medical-record-title d-flex justify-content-between align-items-center">
                            <h3>Medical Record</h3>

                        </div>

                        <div class="patient-information-view-more px-3 mt-2">
                            <div class="row row-cols-1">

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="patient-allergy-text">Allergy</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="patient-allergy-text" value="Shrimp" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="patient-cdisease-text">Chronic Disease</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="patient-cdisease-text" value="None" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="patient-other-text">Other</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="patient-other-text" value="None" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="patient-current-med">Current Medication</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="patient-current-med" value="Ibuprofen (200mg daily)" disabled>

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label for="patient-past-med">Past Medication</label>
                                        <input type="text" class="form-control-user-info editable"
                                            id="patient-past-med" value="Paracetamol (previously used)" disabled>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="patient-edit-view-more-btn-container ms-auto me-2">
            <button class="patient-view-more-btn">View more</button>
            <button class="patient-view-more-btn">Edit</button>

        </div>
    </div>



    <div class="patient-dental-history-header-container p-3 mt-4">
        <div class="row search-wrapper-patient-info row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="div">
                    <div class="patient-dental-history-header mt-2">
                        <h3> Dental History</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-row align-items-center gap-2">
                <div class="search-bar">
                    <input type="text" name="dentist-info-searchbar" class="patient-info-searchbar form-control"
                        placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="patient-history-tb-filter-search-wrapper dropdown">
                    <button class="patient-history-tb-button btn btn-light dropdown-toggle" type="button"
                        id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Sort Items">
                        <i class="fa-solid fa-sliders"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filterDropdown">
                        <li><a class="dropdown-item" href="#">Alphabetical (A–Z)</a></li>
                        <li><a class="dropdown-item" href="#">Newest First</a></li>
                        <li><a class="dropdown-item" href="#">Oldest First</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="patient-dental-history-tb-container  p-3 pb-5">
        <div class="patient-dental-history-tb-wrapper ">
            <table class="table patient-dental-history-tb " id="dentist-dental-history-tb-id">
                <thead>
                    <tr>
                        <th>
                            Date
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-light dropdown-toggle p-0 border-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">January</a></li>
                                    <li><a class="dropdown-item" href="#">February</a></li>
                                    <li><a class="dropdown-item" href="#">March</a></li>
                                    <li><a class="dropdown-item" href="#">April</a></li>
                                    <li><a class="dropdown-item" href="#">May</a></li>
                                    <li><a class="dropdown-item" href="#">June</a></li>
                                    <li><a class="dropdown-item" href="#">July</a></li>
                                    <li><a class="dropdown-item" href="#">August</a></li>
                                    <li><a class="dropdown-item" href="#">September</a></li>
                                    <li><a class="dropdown-item" href="#">October</a></li>
                                    <li><a class="dropdown-item" href="#">November</a></li>
                                    <li><a class="dropdown-item" href="#">December</a></li>
                                </ul>
                            </div>
                        </th>

                        <!-- SERVICES DROPDOWN -->
                        <th>
                            Services
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-light dropdown-toggle p-0 border-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Cleaning</a></li>
                                    <li><a class="dropdown-item" href="#">Filling</a></li>
                                    <li><a class="dropdown-item" href="#">Extraction</a></li>
                                </ul>
                            </div>
                        </th>

                        <th>Patient Name</th>

                        <!-- DENTIST DROPDOWN -->
                        <th>
                            Patient ID
                            
                        </th>

                        <!-- STATUS DROPDOWN -->
                        <th>
                            Status
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-light dropdown-toggle p-0 border-0" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Completed</a></li>
                                    <li><a class="dropdown-item" href="#">Upcoming</a></li>
                                    <li><a class="dropdown-item" href="#">Cancelled</a></li>
                                </ul>
                            </div>
                        </th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="patient-dental-history-tb-body">
                    <tr>
                        <td>06/15/25</td>
                        <td>Minartilyo ang ngipin</td>
                        <td>Dracy Malibu</td>
                        <td>P-1007</td>
                        <td>Completed</td>
                        <td><button type="button" class="view-detail-modal-btn">View Detail</button></td>
                    </tr>
                    <tr>
                        <td>06/15/25</td>
                        <td>Minartilyo ang ngipin</td>
                        <td>Dracy Malibu</td>
                        <td>P-1007</td>
                        <td>Completed</td>
                        <td>Braces 1st Session</td>
                    </tr>
                    <tr>
                        <td>06/15/25</td>
                        <td>Minartilyo ang ngipin</td>
                        <td>Dracy Malibu</td>
                        <td>P-1007</td>
                        <td>Completed</td>
                        <td>Braces 1st Session</td>
                    </tr>
                    <tr>
                        <td>06/15/25</td>
                        <td>Minartilyo ang ngipin</td>
                        <td>Dracy Malibu</td>
                        <td>P-1007</td>
                        <td>Completed</td>
                        <td>Braces 1st Session</td>
                    </tr>
                    <tr>
                        <td>06/15/25</td>
                        <td>Minartilyo ang ngipin</td>
                        <td>Dracy Malibu</td>
                        <td>P-1007</td>
                        <td>Completed</td>
                        <td>Braces 1st Session</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

