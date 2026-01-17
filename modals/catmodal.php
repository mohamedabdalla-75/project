<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="catmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Category Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-cat" method="post">
          <input hidden type="text" name="txt_id_cat" id="txt_id_cat">
          <div class="row">
            <div class="col-md-12 ">
                <label>Category Name</label>
                <input type="text" class="form-control" name="txt_cat_names" id="txt_cat_name">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_cat">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_cat">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_cat">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $("#btn_save_cat").click(function(){
    var catName = $("#txt_cat_name").val().trim(); // Get the value of the input

    if (catName === "") {
        alert("Please enter a category name.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(catName)) {
        alert("Category name must contain only letters and spaces.");
        return;
    }  
    else{
    var form_data=$("#frm-cat").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/cat-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#catmodal").modal('hide');
        $("#frm-cat")[0].reset();
        $("#tbl_id_cat").load(" #tbl_id_cat > *");
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_book_cat_print").load(" #cbm_book_cat_print > *");
      }
    })
  }
  })

  /////////////////////////
  $("#btn_update_cat").click(function(){
    var catName = $("#txt_cat_name").val().trim(); // Get the value of the input

    if (catName === "") {
        alert("Please enter a category name.");
        return;
    }    
    else{
    var form_data=$("#frm-cat").serialize()+"&oper=update";
    $.ajax({
      url: "oper/cat-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#catmodal").modal('hide');
        $("#frm-cat")[0].reset();
        $("#tbl_id_cat").load(" #tbl_id_cat > *");
        $("#cbm_book_cat_print").load(" #cbm_book_cat_print > *");
      }
    })
  }
  })
  ///delete operation///
  $("#btn_delete_cat").click(function(){
    var form_data=$("#frm-cat").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/cat-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#catmodal").modal('hide');
        $("#frm-cat")[0].reset();
        $("#tbl_id_cat").load(" #tbl_id_cat > *");
        $("#cbm_book_cat_print").load(" #cbm_book_cat_print > *");
      }
    })
  
  })
  
$(document).on("click", "#btn-new-cat", function() {
  $("#btn_update_cat").hide();
  $("#btn_delete_cat").hide();
  $("#btn_save_cat").show();
})  

$(document).on("click", ".btn-delete-category", function () {
    const id = $(this).data("id");
    $("#catmodal").modal("show");
    $("#btn_save_cat").hide();
    $("#btn_update_cat").hide();
    $("#btn_delete_cat").show();


    $.post("config/SYD_search.php", {
        qry: "SELECT cat_no, cat_name FROM categories WHERE cat_no=" + id
    }, function (data) {
        const [cat_no, cat_name] = data.split(",");
        $("#txt_id_cat").val(cat_no);
        $("#txt_cat_name").val(cat_name);
    });
});


$(document).on("click", ".btn-edit-category", function () {
    const id = $(this).data("id");
    $("#catmodal").modal("show");
    $("#btn_save_cat").hide();
    $("#btn_delete_cat").hide();
    $("#btn_update_cat").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT cat_no, cat_name FROM categories WHERE cat_no=" + id
    }, function (data) {
        const [cat_no, cat_name] = data.split(",");
        $("#txt_id_cat").val(cat_no);
        $("#txt_cat_name").val(cat_name);
    });
});


</script>