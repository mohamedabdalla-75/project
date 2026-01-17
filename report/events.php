<script>
$(function(){

    $(".btn_author_all").click(function(){
        $("#mdl_All_reports").modal("show");
        var qry="call  all_authors_report()";
        $.post("config/SYD_Table.php","qry="+qry,function(data){
            $("#rpt_show").html(data);
        }).fail(function(xhr){
            console.error("AJAX error:", xhr.status, xhr.responseText);
            alert("Server error - check console");
        });
    });

    $(".btn_author_single").click(function(){
        var author = $("#cbm_author_print").val().trim(); 
        if (author === ""){
            alert("choose one author")
        }else{
            $("#mdl_All_reports").modal("show");
            var qry="call single_author_report('"+$("#cbm_author_print").val()+"');";
            $.post("config/SYD_Table.php","qry="+qry,function(data){
                $("#rpt_show").html(data);
            }).fail(function(xhr){
                console.error("AJAX error:", xhr.status, xhr.responseText);
                alert("Server error - check console");
            });
        }
    });

    $(".btn_book_all").click(function(){
        $("#mdl_All_reports").modal("show");
        var qry="call  all_books_report()";
        $.post("config/SYD_Table.php","qry="+qry,function(data){
            $("#rpt_show").html(data);
        }).fail(function(xhr){
            console.error("AJAX error:", xhr.status, xhr.responseText);
            alert("Server error - check console");
        });
    });

    $(".btn_book_single").click(function(){
        var book = $("#cbm_book_print").val().trim(); 
        if (book === ""){
            alert("choose one book")
        }else{
            $("#mdl_All_reports").modal("show");
            var qry="call single_book_report('"+$("#cbm_book_print").val()+"');";
            $.post("config/SYD_Table.php","qry="+qry,function(data){
                $("#rpt_show").html(data);
            }).fail(function(xhr){
                console.error("AJAX error:", xhr.status, xhr.responseText);
                alert("Server error - check console");
            });
        }
    });

    $(".btn_barrow_all").click(function(){
        $("#mdl_All_reports").modal("show");
        var qry="call  all_barrow_report()";
        $.post("config/SYD_Table.php","qry="+qry,function(data){
            $("#rpt_show").html(data);
        }).fail(function(xhr){
            console.error("AJAX error:", xhr.status, xhr.responseText);
            alert("Server error - check console");
        });
    });

    $(".btn_barrow_single").click(function(){
        var barrow = $("#cbm_barrow_print").val().trim(); 
        if (barrow === ""){
            alert("choose one book")
        }else{
            $("#mdl_All_reports").modal("show");
            var qry="call single_barrow_report('"+$("#cbm_barrow_print").val()+"');";
            $.post("config/SYD_Table.php","qry="+qry,function(data){
                $("#rpt_show").html(data);
            }).fail(function(xhr){
                console.error("AJAX error:", xhr.status, xhr.responseText);
                alert("Server error - check console");
            });
        }    
    });

    $(".btn_return_all").click(function(){
        $("#mdl_All_reports").modal("show");
        var qry="call  all_return_report()";
        $.post("config/SYD_Table.php","qry="+qry,function(data){
            $("#rpt_show").html(data);
        }).fail(function(xhr){
            console.error("AJAX error:", xhr.status, xhr.responseText);
            alert("Server error - check console");
        });
    });

    $(".btn_return_single").click(function(){
        var returnrep = $("#cbm_return_print").val().trim(); 
        if (returnrep=== ""){
            alert("choose one book")
        }else{
            $("#mdl_All_reports").modal("show");
            var qry="call single_return_report('"+$("#cbm_return_print").val()+"');";
            $.post("config/SYD_Table.php","qry="+qry,function(data){
                $("#rpt_show").html(data);
            }).fail(function(xhr){
                console.error("AJAX error:", xhr.status, xhr.responseText);
                alert("Server error - check console");
            });
        }
    });

    $(".btn_read_all").click(function(){
        $("#mdl_All_reports").modal("show");
        var qry="call  all_read_report()";
        $.post("config/SYD_Table.php","qry="+qry,function(data){
            $("#rpt_show").html(data);
        }).fail(function(xhr){
            console.error("AJAX error:", xhr.status, xhr.responseText);
            alert("Server error - check console");
        });
    });

    $(".btn_read_single").click(function(){
        var returnrep = $("#cbm_read_print").val().trim(); 
        if (returnrep=== ""){
            alert("choose one person")
        }else{
            $("#mdl_All_reports").modal("show");
            var qry="call single_read_report('"+$("#cbm_read_print").val()+"');";
            $.post("config/SYD_Table.php","qry="+qry,function(data){
                $("#rpt_show").html(data);
            }).fail(function(xhr){
                console.error("AJAX error:", xhr.status, xhr.responseText);
                alert("Server error - check console");
            });
        }
    });

  
}); // end $(function)
</script>