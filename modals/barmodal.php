<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="barmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Barrow Book Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-bar" method="post">
          <input hidden type="text" name="txt_id_bar" id="txt_id_bar">
          <div class="row">
            <div class="col-md-6">
              <label>People</label>
              <?php $coder->fillCombo("SELECT * from people", "cbm_bar_peo_print", "Select people"); ?>
            </div>
            <div class="col-md-6">
              <label>Books</label>
              <?php $coder->fillCombo("SELECT * from books where books.vailable_qty>0", "cbm_bar_book_print", "Select Book"); ?>
            </div>
            <div class="col-md-6">
              <label>Barrow Date</label>
              <input type="date" class="form-control" name="txt_bar_bardate" id="txt_bar_bardate">
            </div>
            <div class="col-md-6">
              <label>Promise Date</label>
              <input type="date" class="form-control" name="txt_pro_prodate" id="txt_pro_prodate">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_bar">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_bar">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_bar">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $("#btn_save_bar").click(function () {
    var book = $("#cbm_bar_book_print").val().trim(); 
    var people = $("#cbm_bar_peo_print").val().trim();
    var barDate = $("#txt_bar_bardate").val().trim();
    var proDate = $("#txt_pro_prodate").val().trim();

    if (book === "" || people === "" || barDate === "" || proDate === "") {
        alert("Please fill all fields.");
        return;
    }

    // Convert to JavaScript Date objects
    var barDateObj = new Date(barDate);
    var proDateObj = new Date(proDate);

    if (proDateObj < barDateObj) {
        alert("Promise date cannot be before borrow date.");
        return;
    };


    // Haddii wax walba sax yihiin
    var form_data = $("#frm-bar").serialize()+"&oper=insert";
    $.ajax({
        url: "oper/barrow-oper.php",
        type: "post",
        data: form_data,
        success: function (data) {
            alert(data);
            $("#barmodal").modal('hide'); // beddel ID-kan haddii modal-kaaga magaciisu yahay mid kale
            $("#frm-bar")[0].reset();
            $("#tbl_id_book").load(" #tbl_id_book > *");
            $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
            $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
        }
    });
});
  ///////////////////////////
  $("#btn_update_bar").click(function () {
    var book = $("#cbm_bar_book_print").val().trim(); 
    var people = $("#cbm_bar_peo_print").val().trim();
    var barDate = $("#txt_bar_bardate").val().trim();
    var proDate = $("#txt_pro_prodate").val().trim();

    if (book === "" || people === "" || barDate === "" || proDate === "") {
        alert("Please fill all fields.");
        return;
    }

    // Convert to JavaScript Date objects
    var barDateObj = new Date(barDate);
    var proDateObj = new Date(proDate);

    if (proDateObj < barDateObj) {
        alert("Promise date cannot be before borrow date.");
        return;
    };
    // Haddii wax walba sax yihiin
    var form_data = $("#frm-bar").serialize()+"&oper=update";
    $.ajax({
        url: "oper/barrow-oper.php",
        type: "post",
        data: form_data,
        success: function (data) {
            alert(data);
            $("#barmodal").modal('hide'); // beddel ID-kan haddii modal-kaaga magaciisu yahay mid kale
            $("#frm-bar")[0].reset();
            $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
            $("#tbl_id_book").load(" #tbl_id_book > *");
            $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
        }
    });
});

  $("#btn_delete_bar").click(function () {
    var book = $("#cbm_bar_book_print").val().trim(); 
    var people = $("#cbm_bar_peo_print").val().trim();
    var barDate = $("#txt_bar_bardate").val().trim();
    var proDate = $("#txt_pro_prodate").val().trim();

    if (book === "" || people === "" || barDate === "" || proDate === "") {
        alert("Please fill all fields.");
        return;
    }
    // Haddii wax walba sax yihiin
    var form_data = $("#frm-bar").serialize()+"&oper=delete";
    $.ajax({
        url: "oper/barrow-oper.php",
        type: "post",
        data: form_data,
        success: function (data) {
            alert(data);
            $("#barmodal").modal('hide'); // beddel ID-kan haddii modal-kaaga magaciisu yahay mid kale
            $("#frm-bar")[0].reset();
            $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
            $("#tbl_id_book").load(" #tbl_id_book > *");
            $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
        }
    });
});


  $(document).on("click", "#btn-new-bar", function() {
  $("#btn_save_bar").show();
  $("#btn_update_bar").hide();
  $("#btn_delete_bar").hide();
}) 

  $(document).on("click", ".btn-edit-borrow", function () {
    const id = $(this).data("id");
    $("#barmodal").modal("show");
    $("#btn_save_bar").hide();
    $("#btn_update_bar").show();
    $("#btn_delete_bar").hide();

    $.post("config/SYD_search.php", {
    qry: "SELECT bb.bar_no, p.p_no, p.name, b.book_no, b.book_name, bb.bar_date, bb.promise_date " +
         "FROM barrow_book bb, people p, books b " +
         "WHERE bb.p_no=p.p_no AND bb.book_no=b.book_no AND bb.bar_no=" + id
    }, function(data) {
      console.log("Raw response:", data);  // <- muhiim!

      const parts = data.split(",");
      console.log("Split parts:", parts);

      if (parts.length >= 7) {
        const [bar_no, p_no, person, book_no, book, bar_date, promise_date] = parts;

        $("#txt_id_bar").val(bar_no.trim());
        $("#cbm_bar_peo_print").val(p_no.trim()).trigger('change');
        $("#cbm_bar_book_print").val(book_no.trim()).trigger('change');
        $("#txt_bar_bardate").val(bar_date.trim());
        $("#txt_pro_prodate").val(promise_date.trim());
    }
  });
});

  $(document).on("click", ".btn-delete-borrow", function () {
    const id = $(this).data("id");
    $("#barmodal").modal("show");
    $("#btn_save_bar").hide();
    $("#btn_update_bar").hide();
    $("#btn_delete_bar").show();

    $.post("config/SYD_search.php", {
    qry: "SELECT bb.bar_no, p.p_no, p.name, b.book_no, b.book_name, bb.bar_date, bb.promise_date " +
         "FROM barrow_book bb, people p, books b " +
         "WHERE bb.p_no=p.p_no AND bb.book_no=b.book_no AND bb.bar_no=" + id
    }, function(data) {
      console.log("Raw response:", data);  // <- muhiim!

      const parts = data.split(",");
      console.log("Split parts:", parts);

      if (parts.length >= 7) {
        const [bar_no, p_no, person, book_no, book, bar_date, promise_date] = parts;

        $("#txt_id_bar").val(bar_no.trim());
        $("#cbm_bar_peo_print").val(p_no.trim()).trigger('change');
        $("#cbm_bar_book_print").val(book_no.trim()).trigger('change');
        $("#txt_bar_bardate").val(bar_date.trim());
        $("#txt_pro_prodate").val(promise_date.trim());
    }
  });
});
</script>