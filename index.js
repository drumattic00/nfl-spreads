function updateStatus(id, person, answer) {
    $.ajax({
        type:"post",
        url:"inc/update_status.inc.php",
        data:{id:id, person:person, answer:answer},
        success:function(response) {
            if(response == "error") {
                $(".errMsg").html("Some Error Occurred. Please contact admin!")
            } else {
                $(".table").html(response);
            }
            $(".table").html(response);
        },
        error: function() {
            $(".errMsg").html("Some error occurred, please contact Jamers.");
        }
    })
}