<section class="inventory-report-main-container" id="inventory-report-main-container-id">
    <hr class="hr" style="color: #9E5B08;">

    <div class="wrapper d-flex flex-wrap">
        <div class="profile-container ">
            <div class="header-text d-flex flex-row mb-2">
                <i class="fa-solid fa-book"></i>
                <h3>Inventory Reports</h3>
            </div>
            <div class="description-header-text">
                <p>Check out how the numbers drill down and fill up as we keep everything in perfect order!</p>
            </div>
        </div>
    </div>


    <div class="used-item-container mt-3">

   <div class="inventory-report-overview">
    <h3>Overview</h3>
</div>

<div class="row row-cols-xxl-2 row-cols-xl-2 row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1 p-2 gy-3">
    <!-- Most Used Item -->
    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="inventory-report-box-wrapper">
            <div class="inventory-report-title">
                <h3>Most Used Item</h3>
            </div>

            <div class="inventory-report-box">
                <div class="inventory-report-icon">
                    <div class="inventory-report-icon-container">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <div class="inventory-report-list">
                        <ul class="report-list" id="most-used-item-list-id">
                            <li>Rubber</li>
                            <li>Gloves</li>
                            <li>Mask</li>
                        </ul>
                    </div>
                </div>

                <div class="inventory-report-metrics ms-auto">
                    <canvas id="most-used-item-donut-id"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Least Used Item -->
    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="inventory-report-box-wrapper">
            <div class="inventory-report-title">
                <h3>Least Used Item</h3>
            </div>

            <div class="inventory-report-box">
                <div class="inventory-report-icon">
                    <div class="inventory-report-icon-container">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <div class="inventory-report-list">
                        <ul class="report-list" id="least-used-item-list-id">
                            <li>Anesthesia</li>
                            <li>Cotton</li>
                            <li>Mirror</li>
                        </ul>
                    </div>
                </div>

                <div class="inventory-report-metrics ms-auto">
                    <canvas id="least-used-item-donut-id"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    <div class="information-record-container mt-4 border pt-2  ">
        <section class="container-tools px-3">
            <div class="container-tool-wrapper d-flex justify-content-end align-items-center gap-3 flex-wrap">

                <!-- 🔍 Search bar -->
                <div class="record-search-wrapper position-relative">
                    <input type="text" name="record-searchbar" class="record-searchbar form-control"
                        placeholder="Search">
                    <i class="fas fa-search position-absolute"></i>
                </div>

                <!-- ⚙️ Filter icon + dropdown -->
                <div class="filter-search-container-wrapper position-relative">
                    <button class="toggle-button active-tab" id="InventoryReportfilterDropdownBtn" title="Filter Options">
                        <i class="fa-solid fa-sliders"></i>
                    </button>

                    <!-- 🔽 Dropdown Menu -->
                    <div class="filter-dropdown-menu border rounded shadow-sm position-absolute bg-white py-2 mt-2"
                        id="filterDropdownMenu" style="display: none; min-width: 180px; right: 0; z-index: 10;">
                        <button class="dropdown-item filter-option w-100 text-start px-3 py-2"
                            data-filter="alphabetical">
                            <i class="fa-solid fa-arrow-down-a-z me-2"></i> Alphabetical
                        </button>
                        <button class="dropdown-item filter-option w-100 text-start px-3 py-2" data-filter="newest">
                            <i class="fa-solid fa-clock-rotate-left me-2"></i> Newest
                        </button>
                        <button class="dropdown-item filter-option w-100 text-start px-3 py-2" data-filter="oldest">
                            <i class="fa-regular fa-clock me-2"></i> Oldest
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <div class="inventory-table-report-container px-3 pt-2 pb-5">
            <div class="inventory-table-report-wrapper w-100 h-100">
                <table class="inventory-report" id="inventory-report-id">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Remaining</th>
                            <th>Quantity Added</th>
                            <th>Date</th>
                            <th>Audited by</th>
                            <th>Total Quantity Stock</th>
                        </tr>
                    </thead>
                    <tbody id="inventory-report-body-id">
                    </tbody>
                </table>
            </div>
        </div>


        <div class="inventory-report-graph-wrapper">
            <div class="inventory-report-graph-title">
                <h3>Dental Inventory Report</h3>
                <div class="inventory-report-graph-p">
                    <p>Here’s your inventory snapshot—check out how the numbers <br>
                        drill down and fill up as we keep everything in perfect order!</p>
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
            <div class="inventory-report-graph-container">
                <canvas id="revenue-report-graph-id"></canvas>
            </div>
        </div>
    </div>
</section>