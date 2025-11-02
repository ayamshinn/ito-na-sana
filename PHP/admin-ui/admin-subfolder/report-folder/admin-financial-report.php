<section id="financial-report-main-container-id" class="financial-report-main-container">
    <hr class="hr" style="color: #9E5B08;">

    <div class="wrapper d-flex flex-wrap">
        <div class="profile-container ">
            <div class="header-text d-flex flex-row mb-2">
                <i class="fa-solid fa-book"></i>
                <h3>Financial Reports</h3>
            </div>
            <div class="description-header-text">
                <p>See how the numbers unfold, grow, and drive your success as we keep your financials in perfect balance!</p>
            </div>
        </div>
    </div>

    <div class="financial-report-container-box mt-3">
        <div class="financial-report-overview"> 
            <h3>Overview</h3>
        </div>

        <div class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 p-2 gy-3">
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="financial-report-box-wrapper">
                    <div class="financial-report-title">
                        <h3>Top Grossing Service</h3>
                    </div>

                    <div class="financial-report-box">
                        <div class="financial-report-icon">
                            <div class="financial-report-icon-container bg-success">
                                <i class="fa-solid fa-ranking-star"></i>
                            </div>
                            <div class="financial-report-list">
                                <ul class="report-list">
                                    <li>Orthodontics</li>
                                    <li>Cleaning</li>
                                    <li>Filling</li>
                                </ul>
                            </div>
                        </div>

                        <div class="financial-report-metrics ms-auto">
                            <canvas id="top-grossing-service-id"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="financial-report-box-wrapper">
                    <div class="financial-report-title">
                        <h3>Lowest Revenue Service</h3> 
                    </div>

                    <div class="financial-report-box">
                        <div class="financial-report-icon">
                            <div class="financial-report-icon-container bg-warning">
                                <i class="fa-solid fa-down-long"></i>
                            </div>
                            <div class="financial-report-list">
                                <ul class="report-list">
                                    <li>Extraction</li>
                                    <li>Cleaning</li>
                                    <li>Filling</li>
                                </ul>
                            </div>
                        </div>

                        <div class="financial-report-metrics ms-auto">
                            <canvas id="lowest-revenue-service-id"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="financial-report-box-wrapper">
                    <div class="financial-report-title">
                        <h3>Total HMO Patients</h3>
                    </div>

                    <div class="financial-report-box">
                        <div class="financial-report-icon">
                            <div class="financial-report-icon-container bg-info">
                                <i class="fa-solid fa-address-card"></i>
                            </div>
                            <div class="financial-report-list">
                                <p><span id="total-hmo-patient-card-id"></span></p>
                            </div>
                        </div>

                        <div class="financial-report-metrics ms-auto">
                            <canvas id="total-hmo-patient-id"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="financial-wrapper-container mt-5 border pt-2">
        <div class="container-tools px-3">
            <div class="container-tool-wrapper d-flex justify-content-space-between align-items-center gap-3 flex-wrap">


                <div class="monthly-wrapper-caret-down">
                    <button type="button" class="inventory-management-caret-button" id="financial-report-caret-btn"
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
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="financial-report-table-container px-3 pt-2 pb-5">
                    <div class="financial-report-table-wrapper w-100 h-100">
                        <table class="financial-report-table mb-0" id="financial-report-table-id">
                            <thead>
                                <tr>
                                    <th>Main Category</th>
                                    <th>Subcategory</th>
                                    <th>Revenue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="financial-report-body">
                                <tr>
                                    <td rowspan="2">Periodontics</td>
                                    <td>Oral Prophylaxis</td>
                                    <td>&#8369 10,000</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Oral Prophylaxis"
                                                data-target="financial-report-table-container-modal-id"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Deep Scaling</td>
                                    <td>&#8369 500</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Deep Scaling"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Cosmetic Care</td>
                                    <td>Tooth Filling</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Tooth Filling"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Teeth Whitening</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Teeth Whitening"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cosmetic Bonding</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Cosmetic Bonding"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Orthodontics</td>
                                    <td>Metal Braces</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Metal Braces"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ceramic Braces</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Ceramic Braces"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Self Ligating Braces</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Self Ligating Braces"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="3">Prosthodontics</td>
                                    <td>Fixed Denture</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Fixed Denture"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Partial Dentures</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Partial Dentures"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Complete Dentures</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Complete Dentures"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Surgical Treatment</td>
                                    <td>Implant</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Implant"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Surgery</td>
                                    <td>&#8369 600</td>
                                    <td>
                                        <div class="services-action-button">
                                            <button type="button" class="financial-report-view-btn"
                                                data-service="Surgery"></i>View
                                                Detail</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="financial-report-graph-container ">
                    <div class="financial-graph-wrapper">
                        <div class="financial-report-graph-title">
                            <h3>Financial Report</h3>
                            <div class="financial-report-graph-p">
                                <p>Here’s Your Financial Overview—see how the numbers <br>
                                    unfold and grow as we keep your financials in perfect balance!</p>
                            </div>
                            <div class="month-selector">
                            <label for="month-select">Select Month:</label>
                            <select id="month-select">
                                <option value="2023-09">September 2023 (Last Month)</option>
                                <option value="2023-10" selected>October 2023 (Current Month)</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        </div>

                        <div class="financial-report-graph-wrapper">
                            <canvas id="financial-report-id"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="financial-report-table-container-modal" id="financial-report-table-container-modal-id">
    <div class="financial-report-table-wrapper-modal">
        <div class="financial-report-table-close-modal">
            <button id="financial-report-table-close-modal-btn">&times;</button>
        </div>
        <div class="financial-detailed-report-table-container mt-4">
            <div class="financial-detailed-report-table-wrapper w-100 h-100">
                <table class="financial-detailed-report" id="financial-detailed-report-id">
                    <thead>
                        <tr>
                            <td>Service</td>
                            <td>Patient Id</td>
                            <td>Patient Name</td>
                            <td>Dentist</td>
                            <td>Fee</td>
                            <td>Additional Fee</td>
                        </tr>
                    </thead>
                    <tbody id="financial-detailed-report-body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>