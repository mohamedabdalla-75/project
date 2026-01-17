<div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frm-user" method="post">
          <input hidden type="text" name="txt_id_user" id="txt_id_user">
          <div class="row">
            <div class="col-md-6 ">
                <label>User Name</label>
                <input type="text" class="form-control" name="txt_user_name" id="txt_user_name">
            </div>
            <div class="col-md-6 ">
                <label>Password</label>
                <input type="text" class="form-control" name="txt_user_pass" id="txt_user_pass">
            </div>
            <div class="col-md-6 ">
                <label>Tell</label>
                <input type="text" class="form-control" name="txt_user_tell" id="txt_user_tell">
            </div>
            <div class="col-md-6">
                <label for="type">Type</label>
                <select id="type" name="type" class="form-control">
                  <option value="">Select Role</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
            </div>
            <div class="col-md-6">
              <label>Profile Image</label>
              <input type="file" class="form-control" name="txt_user_image" id="txt_user_image" accept="image/*">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn_save_user">Save</button>
        <button type="button" class="btn btn-primary" id="btn_update_user">Update</button>
        <button type="button" class="btn btn-danger" id="btn_delete_user">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#btn_save_user").click(function(){
    var userName = $("#txt_user_name").val().trim();
    var userPass = $("#txt_user_pass").val().trim(); // Get the value of the input
    var userTell = $("#txt_user_tell").val().trim();
    var userType = $("#type").val().trim();
    // var userImage = $("#txt_user_image").val().trim();

    if (userName === "" || userPass === "" || userTell === "" ) {
        alert("Please fill all field.");
        return;
    }
    if (!/^[A-Za-z ]+$/.test(userName) || !/^[A-Za-z ]+$/.test(userPass) || !/^[A-Za-z ]+$/.test(userTell)) {
        alert("User name and Password and Tell must contain only letters and spaces.");
        return;
    }  
    else{
    var form_data=$("#frm-user").serialize()+"&oper=insert";
    $.ajax({
      url: "oper/user-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#usermodal").modal('hide');
        $("#frm-user")[0].reset();
        $("#tbl_id_user").load(" #tbl_id_user > *");
      }
    })
  }
  })

  $("#btn_update_user").click(function(){
    var form_data=$("#frm-user").serialize()+"&oper=update";
    $.ajax({
      url: "oper/user-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#usermodal").modal('hide');
        $("#frm-user")[0].reset();
        $("#tbl_id_user").load(" #tbl_id_user > *");
      }
    })
  })
  ////////////////////////////////////////
  $("#btn_delete_user").click(function(){
    var form_data=$("#frm-user").serialize()+"&oper=delete";
    $.ajax({
      url: "oper/user-oper.php",
      type: "post",
      data: form_data,
      success: function(data)
      {
        alert(data);
        $("#usermodal").modal('hide');
        $("#frm-user")[0].reset();
        $("#tbl_id_user").load(" #tbl_id_user > *");
      }
    })
  })

  $(document).on("click", "#btn-new-user", function() {
  $("#btn_save_user").show();
  $("#btn_delete_user").hide();
  $("#btn_update_user").hide();
}) 

  $(document).on("click", ".btn-delete-user", function () {
    const id = $(this).data("id");
    $("#usermodal").modal("show");
    $("#btn_save_user").hide();
    $("#btn_update_user").hide();
    $("#btn_delete_user").show();
  

    $.post("config/SYD_search.php", {
        qry: "SELECT * FROM user_info WHERE user_no=" + id
    }, function (data) {
        const [user_no, user_name,pass, tell, type] = data.split(",");
        $("#txt_id_user").val(user_no);
        $("#txt_user_name").val(user_name);
        $("#txt_user_pass").val(pass);
        $("#txt_user_tell").val(tell);
        $("#type").val(type);
    });
});


  $(document).on("click", ".btn-edit-user", function () {
    const id = $(this).data("id");
    $("#usermodal").modal("show");
    $("#btn_save_user").hide();
    $("#btn_delete_user").hide();
    $("#btn_update_user").show();

    $.post("config/SYD_search.php", {
        qry: "SELECT user_no,user_name, password, tell,type,image FROM user_info WHERE user_no=" + id
    }, function (data) {
        const [user_no, user_name,pass, tell, type, image] = data.split(",");
        $("#txt_id_user").val(user_no);
        $("#txt_user_name").val(user_name);
        $("#txt_user_pass").val(pass);
        $("#txt_user_tell").val(tell);
        $("#type").val(type);
        $("#txt_user_image").val(image);
    });
});
</script>