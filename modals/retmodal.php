<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="retmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Return Book Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-ret" method="post">
          <input hidden type="text" name="txt_id_ret" id="txt_id_ret">
          <div class="row">
            <div class="col-md-12">
              <label>Barrow</label>
              <?php $coder->fillCombo("SELECT  bb.bar_no,concat(b.book_name, ' - ', p.name) as display FROM people p, books b, barrow_book bb WHERE bb.p_no = p.p_no AND bb.book_no = b.book_no and bb.status='borrowed'", "cbm_ret_peobar_print", "Select people and book"); ?>
            </div>
            <div class="col-md-6">
              <label>Return Date</label>
              <input type="date" class="form-control" name="txt_ret_retdate" id="txt_ret_retdate">
            </div>
            <div class="col-md-6 ">
                <label>Description</label>
                <input type="text" class="form-control" name="txt_aut_names" id="txt_aut_name">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_ret">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_ret">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $("#btn_save_ret").click(function(){
    var form_data=$("#frm-ret").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/return-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#frm-ret")[0].reset();
        $("#retmodal").modal('hide');
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
      }
    })
  })

  $("#btn_update_ret").click(function(){
    var form_data=$("#frm-ret").serialize()+"&oper=update";
    $.ajax({
      url: "oper/return-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#frm-ret")[0].reset();
        $("#retmodal").modal('hide');
        $("#tbl_id_return").load(" #tbl_id_return > *");
        $("#tbl_id_barrow").load(" #tbl_id_barrow > *");
        $("#tbl_id_book").load(" #tbl_id_book > *");
        $("#cbm_ret_peobar_print").load(" #cbm_ret_peobar_print > *");
      }
    })
  })

  $(document).on("click", ".btn-edit-return", function () {
  const id = $(this).data("id");
  $("#retmodal").modal("show");
  $("#btn_save_ret").hide();
  $("#btn_update_ret").show();

  $.post("config/SYD_search.php", {
    qry: "SELECT r.rt_no, bb.bar_no, concat(b.book_name, ' - ', p.name) as display, r.ret_date, r.description FROM people p, books b, barrow_book bb, return_book r WHERE bb.p_no = p.p_no AND bb.book_no = b.book_no AND bb.bar_no = r.bar_no AND r.rt_no = " + id
  }, function(data) {
    console.log("Response: ", data); // eeg xogta
    const parts = data.split(",");
    if (parts.length >= 5) {
      const [rt_no, bar_no, display, ret_date, description] = parts;
      $("#txt_id_ret").val(rt_no.trim());
      $("#cbm_ret_peobar_print").val(bar_no.trim()).trigger('change');
      $("#txt_ret_retdate").val(ret_date.trim());
      $("#txt_aut_name").val(description.trim());
    }
  });
});


</script>