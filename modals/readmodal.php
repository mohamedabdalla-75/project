<div class="modal fade" id="readmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Category Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-read" method="post">
          <input hidden type="text" name="txt_id_read" id="txt_id_read">
          <div class="row">
            <div class="col-md-6">
              <label>People</label>
              <?php $coder->fillCombo("SELECT * from people", "cbm_read_peo_print", "Select people"); ?>
            </div>
            <div class="col-md-6 ">
                <label>Read Date</label>
                <input type="date" class="form-control" name="txt_read_date" id="txt_read_date">
            </div>
            <div class="col-md-6 ">
                <label>Time In</label>
                <input type="time" class="form-control" name="txt_time_in" id="txt_time_in">
            </div>
            <div class="col-md-6 ">
                <label>Time Out</label>
                <input type="time" class="form-control" name="txt_time_out" id="txt_time_out">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_read">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_read">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_read">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $("#btn_save_read").click(function(){
    var people = $("#cbm_read_peo_print").val().trim();
    var date = $("#txt_read_date").val().trim(); // Get the value of the input
    var timeIn = $("#txt_time_in").val().trim();
    var timeOut = $("#txt_time_out").val().trim();
    if (people === "" || date === "" || timeIn === "" || timeOut === "") {
        alert("Please fill all fields.");
        return;
    }else{ 
      var form_data=$("#frm-read").serialize()+"&oper=insert";
      $.ajax({
        url: "oper/read-oper.php",
        type: "post",
        data: form_data,
        success: function(data)
        {
          alert(data);
          $("#tbl_id_read").load(" #tbl_id_read > *");
          $("#readmodal").modal('hide');
          $("#frm-read")[0].reset();
        }
      })
    }
  })

  $("#btn_update_read").click(function(){
    var form_data=$("#frm-read").serialize()+"&oper=update";
    $.ajax({
      url: "oper/read-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#tbl_id_read").load(" #tbl_id_read > *");
        $("#readmodal").modal('hide');
        $("#frm-read")[0].reset();
      }
    })
  })
  
  $("#btn_delete_read").click(function(){
    var form_data=$("#frm-read").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/read-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#tbl_id_read").load(" #tbl_id_read > *");
        $("#readmodal").modal('hide');
        $("#frm-read")[0].reset();
      }
    })
  })
  
$(document).on("click", "#btn-new-read", function () {
    $("#btn_update_read").hide();
    $("#btn_delete_read").hide();
    $("#btn_save_read").show();

});

$(document).on("click", ".btn-edit-read", function () {
    const id = $(this).data("id");
    $("#readmodal").modal("show");
    $("#btn_save_read").hide();
    $("#btn_delete_read").hide();
    $("#btn_update_read").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT * FROM reading WHERE rd_no=" + id
    }, function (data) {
        const [rd_no, p_no,rd_date,time_in, time_out] = data.split(",");
        $("#txt_id_read").val(rd_no);
        $("#cbm_read_peo_print").val(p_no);
        $("#txt_read_date").val(rd_date);
        $("#txt_time_in").val(time_in);
        $("#txt_time_out").val(time_out);
    });
});

$(document).on("click", ".btn-delete-read", function () {
    const id = $(this).data("id");
    $("#readmodal").modal("show");
    $("#btn_save_read").hide();
    $("#btn_delete_read").show();
    $("#btn_update_read").hide();

    $.post("config/SYD_search.php", {
        qry: "SELECT * FROM reading WHERE rd_no=" + id
    }, function (data) {
        const [rd_no, p_no,rd_date,time_in, time_out] = data.split(",");
        $("#txt_id_read").val(rd_no);
        $("#cbm_read_peo_print").val(p_no);
        $("#txt_read_date").val(rd_date);
        $("#txt_time_in").val(time_in);
        $("#txt_time_out").val(time_out);
    });
});


</script>