<div class="modal fade" id="mdl_All_reports" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 3%">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded shadow-sm">
      <div class="modal-header bg-primary text-white">
        <h4 class="modal-title" id="exampleModalLabel">Report System</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">

        </button>
        <button type="button" class="btn btn-light btn-md ml-2" id="btn_prt_dt_rpt">PRINT</button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form id="rpt_show_PRINT">
              <!-- Report Title -->
              <!-- <div class="text-center mb-3">
                <h5 class="font-weight-bold">Monthly Sales Report</h5>
                <img src="your-logo.png" class="img-fluid" style="max-width: 100%; height: auto; margin-top: -2%;">
              </div> -->

              <!-- Date Range Selection -->
              <!-- <div class="form-group">
                <label for="reportDateRange">Select Date Range:</label>
                <input type="text" class="form-control" id="reportDateRange" placeholder="YYYY-MM-DD to YYYY-MM-DD">
              </div> -->

              <!-- Report Content -->
              <div id="rpt_show" class="p-3 border rounded bg-light mt-4">
                <h6 class="font-weight-bold">Report Details</h6>
                <p class="text-muted">No data available. Please select a date range to generate the report.</p>
                <!-- Placeholder for dynamically loaded report data -->
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- All MDL Reports -->


<!-- -----------MDL DELETE------------ -->
<div style="position: absolute">
  <div class="modal fade" id="mdl_delete_all" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="top: 150px;">
        <div class="model-header bg-primary p-15">
          <h4 class="modal-title text-center"
          style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #fff;">
        Delete Record</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 text-center">
            <h6 style="font-size: 12px; text-align: center;color: primary;"><strong>Are you sure you
            want to delete this record?</strong></h6><br>
            <h1 style="font-family: impact; font-size: 20px; text-align: center; color: blue; "></h1>
          </div>
        </div>
        <div class="col-md-12 text-center ">
          <button type="submit" class="btn btn-danger btn-sm btn-circle "
          id="yes_d_btn"><span>YES</span></button>
          <button type="button" class="btn btn-primary btn-sm m-l-80" data-dismiss="modal"><span
            id="spm_deld_Faculty">NO</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>