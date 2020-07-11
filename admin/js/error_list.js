/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function error_by_code(id) {

    switch (id) {
        case 1:

            swal("Sucessfully updated", "click ok to exit", "success");

            break;
        case 2:
            swal("Password Miss Match", "Please check", "warning");

            break;
        case 3:
            swal("Something Went Wrong", "Please check", "error");

            break;
        case 4:
            swal("Sucessfully Added", "Please check", "success");
            break;

        case 5:
            swal("User Name Already Taken", "Please check", "warning");

            break;

        case 6:
            swal("Bank Detils Updated", "Please check", "success");
            break;

        case 7:
            swal("Password Updated", "Please check", "success");
            break;
        case 8:
            swal("Currency Name Already Exist ", "Please check", "error");
            break;

        case 9:
            swal("Sucessfully Transfer", "Sucess", "success");
            break;
        case 10:
            swal("Lotto Draw Number Exist", "Please check", "error");
            break;
        case 11:
            swal("insufficient Balance", "please Request Credit", "warning");
            break;
        case 12:
            swal("Sucessfully Transfer", "Please View Statements", "success");
            break;

        case 13:
            swal("Sucessfully Send", "Please View Statements", "success");
            break;

        case 14:
            swal("insufficient Balance", "please Ennter Less Amount", "warning");
             break;

        case 15:
            swal("Limit Exceeded", "please Ennter Less Amount", "warning");
    }



}


