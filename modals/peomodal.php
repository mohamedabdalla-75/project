<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="peomodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">People Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-peo" method="post">
          <input hidden type="text" name="txt_id_peo" id="txt_id_peo">
          <div class="row">
            <div class="col-md-6">
                <label>People Name</label>
                <input type="text" class="form-control" name="txt_peo_names" id="txt_peo_names">
            </div>
            <div class="col-md-6">
                <label>Tell</label>
                <input type="number" class="form-control" name="txt_peo_tell" id="txt_peo_tell">
            </div>
            <div></div>
            <div class="col-md-6">
                <label for="sex">Sex</label>
                <select id="sex" name="sex" class="form-control">
                  <option value="">Select sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_peo">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_peo">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_peo">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $("#btn_save_peo").click(function(){
    var peopleName = $("#txt_peo_names").val().trim();
    var tell = $("#txt_peo_tell").val().trim(); // Get the value of the input
    var sex = $("#sex").val().trim();
    if (peopleName === "" || tell === "" || sex === "") {
        alert("Please fill all fields.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(peopleName)) {
        alert("people name must contain only letters and spaces. ");
        return;
    }
    
    else{
    var form_data=$("#frm-peo").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/peo-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#frm-peo")[0].reset();
        $("#peomodal").modal('hide');
        $("#tbl_id_people").load(" #tbl_id_people > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#cbm_bar_peo_print").load(" #cbm_bar_peo_print > *");
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
      }
    })
  }
  })

  $("#btn_update_peo").click(function(){
    var form_data=$("#frm-peo").serialize()+"&oper=update";
    $.ajax({
      url: "oper/peo-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#frm-peo")[0].reset();
        $("#peomodal").modal('hide');
        $("#tbl_id_people").load(" #tbl_id_people > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#cbm_bar_peo_print").load(" #cbm_bar_peo_print > *");
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
      }
    })

  })
  $("#btn_delete_peo").click(function(){
    var form_data=$("#frm-peo").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/peo-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#frm-peo")[0].reset();
        $("#peomodal").modal('hide');
        $("#tbl_id_people").load(" #tbl_id_people > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#cbm_bar_peo_print").load(" #cbm_bar_peo_print > *");
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
      }
    })

  })
  
$(document).on("click", "#btn-new-peo", function() {
  $("#btn_save_peo").show();
  $("#btn_update_peo").hide();
  $("#btn_delete_peo").hide();
})   
$(document).on("click", ".btn-edit-people", function () {
    const id = $(this).data("id");
    $("#peomodal").modal("show");
    $("#btn_save_peo").hide();
    $("#btn_update_peo").show();
    $("#btn_delete_peo").hide();

    $.post("config/SYD_search.php", {
        qry: "SELECT p_no, name,tell,sex FROM people WHERE p_no=" + id
    }, function (data) {
        const [p_no, name, tell, sex] = data.split(",");
        $("#txt_id_peo").val(p_no);
        $("#txt_peo_names").val(name);
        $("#txt_peo_tell").val(tell || "");
        $("#sex").val(sex);
    });
});
////////////////////////////////////////
$(document).on("click", ".btn-delete-people", function () {
    const id = $(this).data("id");
    $("#peomodal").modal("show");
    $("#btn_save_peo").hide();
    $("#btn_update_peo").hide();
    $("#btn_delete_peo").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT p_no, name,tell,sex FROM people WHERE p_no=" + id
    }, function (data) {
        const [p_no, name, tell, sex] = data.split(",");
        $("#txt_id_peo").val(p_no);
        $("#txt_peo_names").val(name);
        $("#txt_peo_tell").val(tell);
        $("#sex").val(sex);
    });
});
</script>