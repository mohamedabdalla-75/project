<div class="modal fade" id="shelfmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Shelf Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-sh" method="post">
          <input hidden type="text" name="txt_id_sh" id="txt_id_sh">
          <div class="row">
            <div class="col-md-12 ">
                <label>Shelf Name</label>
                <input type="text" class="form-control" name="txt_sh_name" id="txt_sh_name">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_sh">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_sh">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_sh">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#btn_save_sh").click(function(){
    var shelfName = $("#txt_sh_name").val().trim(); // Get the value of the input

    if (shelfName === "") {
        alert("Please enter a shelf name.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(shelfName)) {
        alert("Shelf name must contain only letters and spaces.");
        return;
    }
    else{
    var form_data=$("#frm-sh").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/shelf-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#shelfmodal").modal('hide');
        $("#frm-sh")[0].reset();
        $("#tbl_id_shelf").load(" #tbl_id_shelf > *");
        $("#cbm_book_sh_print").load(" #cbm_book_sh_print > *");
      }
    })
  }
  })
  ////////////////////////////
  $("#btn_update_sh").click(function(){
    var shelfName = $("#txt_sh_name").val().trim(); // Get the value of the input

    if (shelfName === "") {
        alert("Please enter a shelf name.");
        return;
    }
    else{
    var form_data=$("#frm-sh").serialize()+"&oper=update";
    $.ajax({
      url: "oper/shelf-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#shelfmodal").modal('hide');
        $("#frm-sh")[0].reset();
        $("#tbl_id_shelf").load(" #tbl_id_shelf > *");
        $("#cbm_book_sh_print").load(" #cbm_book_sh_print > *");
      }
    })
  }
  })
  //////////////////////////////
  $("#btn_delete_sh").click(function(){
    var shelfName = $("#txt_sh_name").val().trim(); // Get the value of the input

    if (shelfName === "") {
        alert("Please enter a shelf name.");
        return;
    }
    else{
    var form_data=$("#frm-sh").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/shelf-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#shelfmodal").modal('hide');
        $("#frm-sh")[0].reset();
        $("#tbl_id_shelf").load(" #tbl_id_shelf > *");
        $("#cbm_book_sh_print").load(" #cbm_book_sh_print > *");
      }
    })
  }
  })

  $(document).on("click", "#btn-new-sh", function() {
  $("#btn_save_sh").show();
  $("#btn_update_sh").hide();
  $("#btn_delete_sh").hide();
})  

  $(document).on("click", ".btn-edit-shelf", function () {
    const id = $(this).data("id");
    $("#shelfmodal").modal("show");
    $("#btn_save_sh").hide();
    $("#btn_delete_sh").hide();
    $("#btn_update_sh").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT sh_no, shelf_name FROM shelves WHERE sh_no=" + id
    }, function (data) {
        const [sh_no, shelf_name] = data.split(",");
        $("#txt_id_sh").val(sh_no);
        $("#txt_sh_name").val(shelf_name);
    });
});

  //////////////
  $(document).on("click", ".btn-delete-shelf", function () {
    const id = $(this).data("id");
    $("#shelfmodal").modal("show");
    $("#btn_save_sh").hide();
    $("#btn_update_sh").hide();
    $("#btn_delete_sh").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT sh_no, shelf_name FROM shelves WHERE sh_no=" + id
    }, function (data) {
        const [sh_no, shelf_name] = data.split(",");
        $("#txt_id_sh").val(sh_no);
        $("#txt_sh_name").val(shelf_name);
    });
});
</script>