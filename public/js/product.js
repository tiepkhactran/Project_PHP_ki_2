function changePicture(url) {
    // alert(1);
    // document.getElementById("picture_1").valueOf();
    $.ajax({
        type: "GET",
        data: "mainid =" + url,
        success: function(result) {
            $("#somewhere").html(result);
        }
    })
}