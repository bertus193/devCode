function publicErrorMsg(errorMsg) {
    document.getElementById("notificationMsg").innerHTML =
        '<div class="alert alert-dismissible alert-danger">\
                    <button type="button" class="close" data-dismiss="alert">&times;</button>\
                    <strong>Error:</strong><br>' + errorMsg + '.\
                    </div>'
}

function publicSuccessMsg(successMsg) {
    document.getElementById("notificationMsg").innerHTML =
        '<div class="alert alert-dismissible alert-success">\
                    <button type="button" class="close" data-dismiss="alert">&times;</button>\
                    <strong>Ya está:</strong><br>' + successMsg + '.\
                    </div>'
}