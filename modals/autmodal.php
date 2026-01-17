<div class="modal fade" id="autmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Author Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-aut" method="post">
          <input hidden type="text" name="txt_id_aut" id="txt_id_aut">
          <div class="row">
            <div class="col-md-6 ">
                <label>Author Name</label>
                <input type="text" class="form-control" name="txt_aut_name" id="txt_aut_name">
            </div>
            <div class="col-md-6 ">
                <label>Title</label>
                <input type="text" class="form-control" name="txt_aut_des" id="txt_aut_des">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_aut">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_aut">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_aut">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#btn_save_aut").click(function(){
    var autName = $("#txt_aut_name").val().trim();
    var autTitle = $("#txt_aut_des").val().trim(); // Get the value of the input

    if (autName === "" || autTitle === "") {
        alert("Please fill all field.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(autName) || !/^[A-Za-z ]+$/.test(autTitle)) {
        alert("Author name and title must contain only letters and spaces.");
        return;
    }  
    else{
    var form_data=$("#frm-aut").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/aut-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#autmodal").modal('hide');
        $("#frm-aut")[0].reset();
        $("#tbl_id_aut").load(" #tbl_id_aut > *");
        $("#cbm_book_aut_print").load(" #cbm_book_aut_print > *");
      }
    })
  }
  })

  $("#btn_update_aut").click(function(){
    var form_data=$("#frm-aut").serialize()+"&oper=update";
    $.ajax({
      url: "oper/aut-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#autmodal").modal('hide');
        $("#frm-aut")[0].reset();
        $("#tbl_id_aut").load(" #tbl_id_aut > *");
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_book_aut_print").load(" #cbm_book_aut_print > *");
      }
    })
  })
  /////////////////////////////////////
  $("#btn_delete_aut").click(function(){
    var form_data=$("#frm-aut").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/aut-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#autmodal").modal('hide');
        $("#frm-aut")[0].reset();
        $("#tbl_id_aut").load(" #tbl_id_aut > *");
        $("#cbm_book_aut_print").load(" #cbm_book_aut_print > *");
      }
    })
  })

  $(document).on("click", "#btn-new-aut", function() {
  $("#btn_save_aut").show();
  $("#btn_delete_aut").hide();
  $("#btn_update_aut").hide();
}) 

  $(document).on("click", ".btn-delete-author", function () {
    const id = $(this).data("id");
    $("#autmodal").modal("show");
    $("#btn_save_aut").hide();
    $("#btn_update_aut").hide();
    $("#btn_delete_aut").show();
  

    $.post("config/SYD_search.php", {
        qry: "SELECT * FROM authors WHERE aut_no=" + id
    }, function (data) {
        const [aut_no, author_name,title] = data.split(",");
        $("#txt_id_aut").val(aut_no);
        $("#txt_aut_name").val(author_name);
        $("#txt_aut_des").val(title);
    });
});


  $(document).on("click", ".btn-edit-author", function () {
    const id = $(this).data("id");
    $("#autmodal").modal("show");
    $("#btn_save_aut").hide();
    $("#btn_delete_aut").hide();
    $("#btn_update_aut").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT * FROM authors WHERE aut_no=" + id
    }, function (data) {
        const [aut_no, author_name,title] = data.split(",");
        $("#txt_id_aut").val(aut_no);
        $("#txt_aut_name").val(author_name);
        $("#txt_aut_des").val(title);
    });
});
</script>