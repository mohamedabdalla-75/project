<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="bookmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Book Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-book" method="post">
          <input hidden type="text" name="txt_id_book" id="txt_id_book">
          <div class="row">
            <div class="col-md-6">
              <label>Book Name</label>
              <input type="text" class="form-control" name="txt_book_names" id="txt_book_names">
            </div>
            <div class="col-md-6">
              <label>Authors</label>
              <?php $coder->fillCombo("SELECT a.aut_no, concat(a.aut_no, '-', a.author_name) as author FROM authors a order by aut_no asc", "cbm_book_aut_print", "Select authors"); ?>
            </div>
            <div class="col-md-6">
              <label>Category</label>
              <?php $coder->fillCombo("SELECT c.cat_no,concat(c.cat_no, '-', c.cat_name) as Category FROM categories c order by cat_no asc", "cbm_book_cat_print", "Select category"); ?>
            </div>
            <div class="col-md-6">
              <label>Pages</label>
              <input type="number" class="form-control" name="txt_book_pages" id="txt_book_pages" min="0" max="100" step="1">
            </div>
            <div class="col-md-6">
              <label>Quantity</label>
              <input type="number" class="form-control" name="txt_book_qty" id="txt_book_qty" min="0" max="100" step="1">
            </div>
            <div class="col-md-6">
              <label>Version</label>
              <input type="text" class="form-control" name="txt_book_ver" id="txt_book_ver">
            </div>
            <div class="col-md-6">
              <label>Book Date</label>
              <input type="date" class="form-control" name="txt_book_date" id="txt_book_date">
            </div>
            <div class="col-md-6">
              <label>Shelves</label>
              <?php $coder->fillCombo("SELECT sh_no,concat (sh_no, '-', shelf_name) FROM shelves order by sh_no asc", "cbm_book_sh_print", "Select shelf"); ?>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_book">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_book">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_book">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $("#btn_save_book").click(function(){
    var bookName = $("#txt_book_names").val().trim();
    var author = $("#cbm_book_aut_print").val().trim(); // Get the value of the input
    var category = $("#cbm_book_cat_print").val().trim();
    var page = $("#txt_book_pages").val().trim();
    var qty = $("#txt_book_qty").val().trim();
    var version = $("#txt_book_ver").val().trim();
    var bookDate = $("#txt_book_date").val().trim();
    var shelf = $("#cbm_book_sh_print").val().trim();
    if (bookName === "" || author === "" || category === "" || page === "" || qty === "" || version === "" || bookDate === "" || shelf === "") {
        alert("Please fill all field.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(bookName)) {
        alert("Book name and must contain only letters and spaces.");
        return;
    }
    if (qty<1) {
        alert("the quantity can not less 1");
        return;
    }
    if (page<10) {
        alert("the pages can not less 20");
        return;
    }
    else{
    var form_data=$("#frm-book").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/book-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#bookmodal").modal('hide');
        $("#frm-book")[0].reset();
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#cbm_bar_book_print").load(" #cbm_bar_book_print > *");
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");        
      }
    })
  }
  })

  $("#btn_update_book").click(function(){
    var form_data=$("#frm-book").serialize()+"&oper=update";
    $.ajax({
      url: "oper/book-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#bookmodal").modal('hide');
        $("#frm-book")[0].reset();
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_bar_book_print").load(" #cbm_bar_book_print > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *"); 
      }
    })

  })

  $("#btn_delete_book").click(function(){
    var form_data=$("#frm-book").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/book-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#bookmodal").modal('hide');
        $("#frm-book")[0].reset();
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_bar_book_print").load(" #cbm_bar_book_print > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");  
      }
    })

  })

$(document).on("click", "#btn-new-book", function() {
  $("#btn_save_book").show();
  $("#btn_update_book").hide();
  $("#btn_delete_book").hide();
})


$(document).on("click", ".btn-edit-book", function () {
    const id = $(this).data("id");
    $("#bookmodal").modal("show");
    $("#btn_save_book").hide();
    $("#btn_update_book").show();
    $("#btn_delete_book").hide();

     $.post("config/SYD_search.php", {
    qry: "SELECT book_no, book_name, a.aut_no, c.cat_no, pages, qty, version, book_date, s.sh_no " +
         "FROM books b, authors a, categories c, shelves s " +
         "WHERE b.aut_no=a.aut_no AND b.cat_no=c.cat_no AND b.sh_no=s.sh_no AND book_no=" + id
      }, function (data) {
          const [book_no, book_name, aut_no, cat_no, pages, qty, version, book_date, sh_no] = data.split(",");

          $("#txt_id_book").val(book_no);
          $("#txt_book_names").val(book_name);
          $("#cbm_book_aut_print").val(aut_no.trim()).trigger('change');
          $("#cbm_book_cat_print").val(cat_no.trim()).trigger('change');
          $("#txt_book_pages").val(pages);
          $("#txt_book_qty").val(qty);
          $("#txt_book_ver").val(version);
          $("#txt_book_date").val(book_date);
          $("#cbm_book_sh_print").val(sh_no.trim()).trigger('change');
      });
});

$(document).on("click", ".btn-delete-book", function () {
    const id = $(this).data("id");
    $("#bookmodal").modal("show");
    $("#btn_save_book").hide();
    $("#btn_update_book").hide();
    $("#btn_delete_book").show();

     $.post("config/SYD_search.php", {
    qry: "SELECT book_no, book_name, a.aut_no, c.cat_no, pages, qty, version, book_date, s.sh_no " +
         "FROM books b, authors a, categories c, shelves s " +
         "WHERE b.aut_no=a.aut_no AND b.cat_no=c.cat_no AND b.sh_no=s.sh_no AND book_no=" + id
      }, function (data) {
          const [book_no, book_name, aut_no, cat_no, pages, qty, version, book_date, sh_no] = data.split(",");

          $("#txt_id_book").val(book_no);
          $("#txt_book_names").val(book_name);
          $("#cbm_book_aut_print").val(aut_no.trim()).trigger('change');
          $("#cbm_book_cat_print").val(cat_no.trim()).trigger('change');
          $("#txt_book_pages").val(pages);
          $("#txt_book_qty").val(qty);
          $("#txt_book_ver").val(version);
          $("#txt_book_date").val(book_date);
          $("#cbm_book_sh_print").val(sh_no.trim()).trigger('change');
      });
});


</script>