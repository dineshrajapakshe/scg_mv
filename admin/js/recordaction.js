

function delete_record(id, tbl, id_name, type) {
 
    swal({
        title: "Are you sure?",
        text: "Do You want Deactivate  this account",
        icon: "warning",
        buttons: [
            'No, cancel it!',
            'Yes, I am sure!'
        ],
        dangerMode: true
    }).then(function (isConfirm) {
        if (isConfirm) {
            swal({
                title: 'Deactivated',
                text: 'Sucessfully deactivated',
                icon: 'success'
            }).then(function () {
 
                var data = {
                    id: id,
                    tbl: tbl,
                    id_name: id_name

                };

                $.ajax({
                    type: "POST",
                    url: "./data/deact.php",
                    dataType: 'json',
                    data: data,

                    success: function (data) {

                        switch (data.res) {
                            case 1:
                                window.location.href = "admin_list.php?type=" + type;
                                break;
                            case 2:
                                window.location.href = "admin_list.php?type=" + type;
                                break;
                            case 3:
                                window.location.href = "currency_list.php";
                                break;
                            case 4:
                                window.location.href = "currency_list.php";
                                break;
                            case 5:
                                window.location.href = "user_list.php";
                                break;
                            case 6:
                                window.location.href = "user_list.php";
                                break;
                            // case 7:
                            //     window.location.href = "lotto_result_list.php";
                            //     break;
                            // case 8:
                            //     window.location.href = "lotto_result_list.php";
                            //     break;
                            // case 9:
                            //     window.location.href = "lotto_pending_list.php";
                            //     break;
                            // case 10:
                            //     window.location.href = "lotto_pending_list.php";
                            //     break;
                            // case 11:
                            //     window.location.href = "user_diposit_request_list.php";
                            //     break;
                            // case 12:
                            //     window.location.href = "user_diposit_request_list.php";
                            //     break;
                            // case 13:
                            //     window.location.href = "slider_list.php";
                            //     break;
                            // case 14:
                            //     window.location.href = "slider_list.php";
                            //     break;
                            // case 15:
                            //     window.location.href = "user_withdraw_request_list.php";
                            //     break;
                            // case 16:
                            //     window.location.href = "user_withdraw_request_list.php";
                            //     break;
                            // case 17:
                            //     window.location.href = "game_list.php";
                            //     break;
                            // case 18:
                            //     window.location.href = "game_list.php";
                            //      break;
                            // case 19:
                            //     window.location.href = "admin_withdraw_request_list.php";
                            //      break;
                            // case 20:
                            //     window.location.href = "admin_withdraw_request_list.php";
                            //     break;
                            case 21:
                                window.location.href = "comments_list.php";
                                 break;
                        }

                    }
                });



            });
        } else {
            swal("Cancelled", "User Not Deactivated", "error");
        }
    });

}



function activate_record(id, tbl, id_name, type) {

    swal({
        title: "Are you sure?",
        text: "Do You want Activate  this account",
        icon: "warning",
        buttons: [
            'No, cancel it!',
            'Yes, I am sure!'
        ],
        dangerMode: true,
    }).then(function (isConfirm) {
        if (isConfirm) {
            swal({
                title: 'Activated',
                text: 'Sucessfully Activated',
                icon: 'success'
            }).then(function () {

                var data = {
                    id: id,
                    tbl: tbl,
                    id_name: id_name,

                };

                $.ajax({
                    type: "POST",
                    url: "./data/act.php",
                    dataType: 'json',
                    data: data,

                    success: function (data) {

                        switch (data.res) {
                            case 1:
                                window.location.href = "admin_list.php?type=" + type;
                                break;
                            case 2:
                                window.location.href = "admin_list.php?type=" + type;
                                break;
                            case 3:
                                window.location.href = "currency_list.php";
                                break;
                            case 4:
                                window.location.href = "currency_list.php";
                                break;
                            case 5:
                                window.location.href = "user_list.php";
                                break;
                            case 6:
                                window.location.href = "user_list.php";
                                break;
                            // case 7:
                            //     window.location.href = "lotto_result_list.php";
                            //     break;
                            // case 8:
                            //     window.location.href = "lotto_result_list.php";
                            //     break;
                            // case 9:
                            //     window.location.href = "lotto_pending_list.php";
                            //     break;
                            // case 10:
                            //     window.location.href = "lotto_pending_list.php";
                            //     break;
                            // case 11:
                            //     window.location.href = "user_diposit_request_list.php";
                            //     break;
                            // case 12:
                            //     window.location.href = "user_diposit_request_list.php";
                            //     break;
                            // case 13:
                            //     window.location.href = "slider_list.php";
                            //     break;
                            // case 14:
                            //     window.location.href = "slider_list.php";
                            //     break;
                            // case 15:
                            //     window.location.href = "user_withdraw_request_list.php";
                            //     break;
                            // case 16:
                            //     window.location.href = "user_withdraw_request_list.php";
                            //       break;
                            // case 17:
                            //     window.location.href = "game_list.php";
                            //     break;
                            // case 18:
                            //     window.location.href = "game_list.php";
                            //      break;
                            // case 19:
                            //     window.location.href = "admin_withdraw_request_list.php";
                            //      break;
                            // case 20:
                            //     window.location.href = "admin_withdraw_request_list.php";
                            //     break;
                            case 21:
                                window.location.href = "comments_list.php";
                                 break;


                        }



                    }
                });



            });
        } else {
            swal("Cancelled", "User Not Deactivated", "error");
        }
    });

}




 