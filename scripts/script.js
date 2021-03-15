window.googletag = window.googletag || {cmd: []};
googletag.cmd.push(function() {
    googletag
        .defineSlot(
            '/6355419/Travel/Europe/France/Paris', [300, 250], 'banner-ad')
        .addService(googletag.pubads());
    googletag.enableServices();
});

function onDragEnter() {
    var dropzone = document.getElementById("drop_file_zone");
}

function onDragLeave() {
    var dropzone = document.getElementById("drop_file_zone");
}

window.onload = function () {
    var countDownDate = new Date("Mar 14, 2021 00:23:56").getTime();
    document.getElementById("trayExpirationTime").innerHTML = "CALCULATING..."
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        document.getElementById("trayExpirationTime").innerHTML =  days*24+hours.toString() + ":"
        + (minutes.toString().length == 1 ? "0" + minutes : minutes) + ":" + (seconds.toString().length == 1 ? "0" + seconds : seconds);
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("trayExpirationTime").innerHTML = "EXPIRED";
        }
    }, 1000);
}

function deleteFileRow(id) {
    var table = document.getElementById("table_files");
    document.getElementById(table).deleteRow(id+1);
    console.log(document.getElementById(table).length)
}

var fileobj;
function upload_file(e) {
    var table = document.getElementById("table_files");
    hideBox();

    Array.from(event.dataTransfer.files).forEach((file) => {
        var lastRow = table.rows[ table.rows.length - 1 ];
        var row = table.insertRow(-1);
        var cell_id = row.insertCell(0);
        var cell_filename = row.insertCell(1);
        var cell_size = row.insertCell(2);
        var cell_actions = row.insertCell(3);

        lastId = parseInt(lastRow.cells[0].innerHTML)
        cell_id.innerHTML = lastId ? lastId + 1 : 1;
        cell_filename.innerHTML = file.name;
        cell_size.innerHTML = file.size + " Bit";
        cell_actions.innerHTML = '<form method="post" name="form_actions" onsubmit="deleteFileRow(row_id.value)">' +
            '<input type="hidden" name="row_id" value="' + cell_id.innerHTML + '">' +
            '<input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">' +
        '</form>';
    })

    e.preventDefault();
    fileobj = e.dataTransfer.files[0];
    //ajax_file_upload(fileobj);
}

function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        fileobj = document.getElementById('selectfile').files[0];
        ajax_file_upload(fileobj);
    };
}

function ajax_file_upload(file_obj) {
    // if(file_obj != undefined) {
    //     var form_data = new FormData();   
    //     form_data.append('file', file_obj);
    //     $.ajax({
    //         type: 'POST',
    //         url: 'fileupload.php',
    //         contentType: false,
    //         processData: false,
    //         data: form_data,
    //         success:function(response) {
    //             alert(response);
    //             $('#selectfile').val('');
    //         }
    //     });
    // }
}

function checkCodeValidity() {
    var form = document.forms["form_code"];
    var input_code1 = form['input_code1'].value;
    var input_code2 = form['input_code2'].value;
    var input_code3 = form['input_code3'].value;
    var input_code4 = form['input_code4'].value;
    if(input_code1 != '' && input_code2 != '' && input_code3 != '' && input_code4 != '') {
        // alert("Valid code!")
        form.submit();
    } else {
        // alert("Invalid code!")
    $('#modal_invalidcode').modal('show')
    }
}

function isTogglerOpen() {
    if ($(".navbar-toggler").hasClass("collapsed")) {
        $(".navbar").css('background-color', 'transparent');
        $("#label_form_code").css('color', 'white');
    } else {
        $(".navbar").css('background-color', 'white');
        $("#label_form_code").css('color', 'black');
    }
}

// LEVI - Doboz eltüntetés (2021.03.15)
function hideBox() {
    document.getElementById("emptyTableAnimation").hidden = true
}

/*function showBox() {
    document.getElementById("emptyTableAnimation").hidden = false
}*/

function showFileExplorer() {
    var fileExplorer = document.getElementById('fileUpload')
    fileExplorer.click()
    console.log(fileExplorer.)
}