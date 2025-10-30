<?php
// ==========================================
// dentist_patient_detail_view.php
// ==========================================

// Example: fetch patient detail by ID (placeholder)
$patientId = $_GET['id'] ?? 'M-23234';

// Example data (replace later with database query)
$patient = [
    'id' => 'M-23234',
    'name' => 'Dracy Malibu',
    'age' => '24 years old',
    'gender' => 'Female',
    'email' => 'dracy.malibu@gmail.com',
    'phone' => '053641',
    'status' => 'Active',
    'registered' => 'June 15, 2023',
    'hmo' => 'Active',
    'profile_img' => 'profile.jpg',
    'allergy' => 'Shrimp',
    'disease' => 'None',
    'other' => 'None',
    'current_med' => 'Ibuprofen (200mg daily)',
    'past_med' => 'Paracetamol (previously used)'
];

// Example dental history data
$dental_history = [
    [
        'date' => '06/15/25',
        'service' => 'Minartilyo ang ngipin',
        'price' => 'P1500.00',
        'dentist' => 'Dr. Maguan',
        'status' => 'Completed',
        'remarks' => 'Braces 1st Session'
    ],
    [
        'date' => '07/01/25',
        'service' => 'Cleaning',
        'price' => 'P1000.00',
        'dentist' => 'Dr. Santos',
        'status' => 'Completed',
        'remarks' => 'Routine Cleaning'
    ]
];
?>

<!----------------Admin Patient Profile Section Part 2----------------------->
<div id="dentist-patient-detail-view-page-id" class="information-record-main-container-detail-view">
    <hr class="hr" style="color: #9E5B08;">

    <div class="wrapper d-flex flex-wrap">
        <div class="profile">
            <div class="header-text d-flex flex-row align-items-center mb-2">
                <div class="back-btn-con me-1">
                    <button class="back-btn"
                        data-target="../../PHP/dentist-ui/dentist-subfolder/dentist-patient-records.php">
                        <i class="fas fa-arrow-left" title="Back Button"></i>
                    </button>
                </div>
                <div>
                    <h3>Patient Information Records</h3>
                </div>
            </div>
            <div class="description-header-text">
                <p>Manage and update patient information records to ensure accurate and organized clinic data.</p>
            </div>
        </div>
    </div>

    <div class="info-wrapper d-flex flex-column p-2 pt-3 pb-4">
        <div class="row info-row row-cols-xxl-3 row-cols-xl-2 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 pt-0 g-3 px-2 pb-4 p-0">

            <!-- Profile Section -->
            <div class="col-xxl-2 col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0 ps-2 pe-2">
                <div class="user-id-container h-100 w-100 p-0">
                    <div class="user-information-profile d-flex flex-column align-items-center mt-3 pb-0 pt-3">
                        <div class="user-information-profile-img align-items-center">
                            <img src="<?php echo htmlspecialchars($patient['profile_img']); ?>" alt="Profile">
                        </div>

                        <div class="user-information-profile-text text-center w-100 h-100 mt-4">
                            <div class="container-h">
                                <h4 class="mb-2">Patient ID: </h4>
                                <h4><span class="user-information-profile-id"><?php echo htmlspecialchars($patient['id']); ?></span></h4>
                            </div>
                            <div class="container-p mt-4 h-100 w-100">
                                <p class="mb-1"><strong>Status:</strong> 
                                    <span class="text-success"><?php echo htmlspecialchars($patient['status']); ?></span>
                                </p>
                                <p class="mb-0 text-muted"><strong>Registered:</strong> 
                                    <?php echo htmlspecialchars($patient['registered']); ?>
                                </p>
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
                                <?php
                                $fields = [
                                    'Name' => $patient['name'],
                                    'Age' => $patient['age'],
                                    'Gender' => $patient['gender'],
                                    'Email' => $patient['email'],
                                    'Phone' => $patient['phone'],
                                    'HMO Card' => $patient['hmo']
                                ];
                                foreach ($fields as $label => $value): ?>
                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label><?php echo $label; ?></label>
                                        <input type="text" class="form-control-user-info editable"
                                            value="<?php echo htmlspecialchars($value); ?>" disabled>
                                    </div>
                                </div>
                                <?php endforeach; ?>
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
                                <?php
                                $medical_fields = [
                                    'Allergy' => $patient['allergy'],
                                    'Chronic Disease' => $patient['disease'],
                                    'Other' => $patient['other'],
                                    'Current Medication' => $patient['current_med'],
                                    'Past Medication' => $patient['past_med']
                                ];
                                foreach ($medical_fields as $label => $value): ?>
                                <div class="col-12">
                                    <div class="form-floating-user-info mb-3">
                                        <label><?php echo $label; ?></label>
                                        <input type="text" class="form-control-user-info editable"
                                            value="<?php echo htmlspecialchars($value); ?>" disabled>
                                    </div>
                                </div>
                                <?php endforeach; ?>
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

    <!-- =============================
         PATIENT DENTAL HISTORY
    ============================== -->
    <div class="patient-dental-history-header-container p-3 mt-4">
        <div class="row search-wrapper-patient-info row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="patient-dental-history-header mt-2">
                    <h3>Patient Dental History</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-row align-items-center gap-2">
                <div class="search-bar">
                    <input type="text" name="patient-info-searchbar" class="patient-info-searchbar form-control" placeholder="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="patient-history-tb-filter-search-wrapper dropdown">
                    <button class="patient-history-tb-button btn btn-light dropdown-toggle" type="button" id="filterDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false" title="Sort Items">
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

    <div class="patient-dental-history-tb-container p-3 pb-5">
        <div class="patient-dental-history-tb-wrapper">
            <table class="table patient-dental-history-tb" id="patient-dental-history-tb-id">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Services</th>
                        <th>Price</th>
                        <th>Dentist</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody id="patient-dental-history-tb-body">
                    <?php foreach ($dental_history as $history): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($history['date']); ?></td>
                        <td><?php echo htmlspecialchars($history['service']); ?></td>
                        <td><?php echo htmlspecialchars($history['price']); ?></td>
                        <td><?php echo htmlspecialchars($history['dentist']); ?></td>
                        <td><?php echo htmlspecialchars($history['status']); ?></td>
                        <td><?php echo htmlspecialchars($history['remarks']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
