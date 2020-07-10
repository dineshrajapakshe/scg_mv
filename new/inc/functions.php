<?php

include_once '../conn.php';

function getAdminDetails($a_id, $conn) {

    $sql = "SELECT * FROM admins where a_id='" . $a_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
function getAdminType($at_id, $conn) {
    $sql = "SELECT * FROM admin_types where at_id='" . $at_id . "'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['at_name'];
}

function getAdminTypeByid($a_id, $conn) {
    $sql = "SELECT * FROM admins where a_id='" . $a_id . "'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return getAdminType($res['a_type'], $conn);
}

function getAdminTypeIdByid($a_id, $conn) {
    $sql = "SELECT * FROM admins where a_id='" . $a_id . "'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['a_type'];
}

function setSecKey($a_id, $conn) {

    $sec_key = rand(1000, 9999);

    $sql = "update admins set  a_sec_key ='" . $sec_key . "'where a_id='" . $a_id . "'";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        $sec_key = '0';
    }

    return $sec_key;
}

function getSecKey($a_id, $conn) {

    $sql = "SELECT a_sec_key FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['a_sec_key'];
}

function getAdminRef($a_id, $conn) {

    $sql = "SELECT a_ref FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['a_ref'];
}

function show_status($status) {

    $result = '';

    if ($status == 1) {
        $result = "Active";
    } elseif ($status == 2) {
        $result = "Inactive";
    } else {
        $result = "Pending";
    }

    return $result;
}

function show_status_table($status) {

    $result = '';

    if ($status == 1) {
        $result = "Accepted";
    } elseif ($status == 2) {
        $result = "Rejected";
    } else {
        $result = "Pending";
    }

    return $result;
}

function show_status_lotto($status) {

    $result = '';

    if ($status == 1) {
        $result = "Accepted";
    } elseif ($status == 0) {
        $result = "Rejected";
    } else {
        $result = "Pending";
    }

    return $result;
}

function print_statement_status($status) {

    $result = '';

    if ($status == 0) {
        $result = "Pending";
    } elseif ($status == 1) {
        $result = "Approved";
    } elseif ($status == 2) {
        $result = "Rejected";
    } else {
        $result = "Not Defined";
    }

    return $result;
}

function getaAdminUpline($a_id, $conn) {

    $sql = "SELECT a_upline FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['a_upline'];
}

function getaAdminCountry($a_id, $conn) {

    $sql = "SELECT a_country FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_country'];
}

function getaAdminCity($a_id, $conn) {

    $sql = "SELECT a_city FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_city'];
}

function getaAdminLastLevel($u_id, $conn) {

    $sql = "SELECT u_type5_by FROM users WHERE u_id = '" . $u_id . "' and u_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['u_type5_by'];
}

function getAdminCurrency($a_id, $conn) {

    $sql = "SELECT a_currency FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['a_currency'];
}

function getUserCurrency($u_id, $conn) {

    $sql = "SELECT u_currency FROM users WHERE u_id = '" . $u_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['u_currency'];
}

function getAdmincountry($a_id, $conn) {

    $sql = "SELECT a_country FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_country'];
}

function getAdminCity($a_id, $conn) {

    $sql = "SELECT a_city FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_city'];
}

function getCurrencyByCu_id($cu_id, $conn) {

    $sql = "select cu_symbol from currency where cu_id= '" . $cu_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['cu_symbol'];
}

function getaAdminUserName($a_id, $conn) {

    $sql = "SELECT a_username FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_username'];
}

function getAdminUserName($a_id, $conn) {

    $sql = "SELECT a_username FROM admins WHERE a_id = '" . $a_id . "' and a_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['a_username'];
}

function getUserName($u_id, $conn) {


    $user = getUserDetails($u_id, $conn);
    return $user['u_username'];
}

function getUplineName($u_upline, $u_id, $conn) {
    $upline_name = '';

    if (getUserName($u_upline, $conn) != '') {

        $upline_name = getUserName($u_upline, $conn);
    } else {

        $upline_name = getaAdminUserName(getUserUplineAdminId($u_id, $conn), $conn);
    }



    return $upline_name;
}

function getAdminOrUserById($u_id, $conn) {
    $status = 0;

    $user = getUserDetails($u_id, $conn);
    $upline_id = $user['u_id'];



    if ($upline_id == 0) {


        $admin = getAdminDetails($u_id, $conn);

        $upline_id = $admin['a_id'];
        if ($upline_id > 0) {
            $status = 2;
        }
    } else {
        $status = 1;
    }


    return $status;
}

function getUserDetails($u_id, $conn) {

    $sql = "SELECT * FROM users WHERE u_id = '" . $u_id . "' and u_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res;
}

function currency_convert_to_usd($cur_id, $amount, $conn) {

    $get_rate = "select cu_rate from currency where cu_id =" . $cur_id;
    $rate_result = mysqli_query($conn, $get_rate);
    $res_cur = mysqli_fetch_assoc($rate_result);
    $rate = $res_cur['cu_rate'];
    $converted = ($amount / $rate);

    return $converted;
}

function currency_convert_from_usd($cu_id, $amount, $conn) {

    $get_rate = "select cu_withdraw_rate from currency where cu_id =" . $cu_id;
    $rate_result = mysqli_query($conn, $get_rate);
    $res_cur = mysqli_fetch_assoc($rate_result);
    $rate = ($res_cur['cu_withdraw_rate']);
    $converted = ($rate * $amount);

    return $converted;
}

function currency_convert_to_usd_user($user_id, $amount, $conn) {

    $get_currency = "select u_currency from users where u_id=" . $user_id;

    $result = mysqli_query($conn, $get_currency);
    $res = mysqli_fetch_assoc($result);
    $cur_id = $res['u_currency'];

    $converted = currency_convert_to_usd($cur_id, $amount, $conn);

    return $converted;
}

function currency_convert_from_usd_user($user_id, $amount, $conn) {

    $get_currency = "select u_currency from users where u_id=" . $user_id;

    $result = mysqli_query($conn, $get_currency);
    $res = mysqli_fetch_assoc($result);
    $cur_id = $res['u_currency'];

    $converted = currency_convert_from_usd($cur_id, $amount, $conn);

    return $converted;
}

function currency_convert_to_usd_admin($user_id, $amount, $conn) {

    $get_currency = "select a_currency from admins where a_id=" . $user_id;

    $result = mysqli_query($conn, $get_currency);
    $res = mysqli_fetch_assoc($result);
    $cur_id = $res['a_currency'];

    $converted = currency_convert_to_usd($cur_id, $amount, $conn);

    return $converted;
}

function currency_convert_from_usd_admin($a_id, $amount, $conn) {

    $get_currency = "select a_currency from admins where a_id=" . $a_id;

    $result = mysqli_query($conn, $get_currency);
    $res = mysqli_fetch_assoc($result);
    $cur_id = $res['a_currency'];


    $converted = currency_convert_from_usd($cur_id, $amount, $conn);

    return $converted;
}

function printTime($date) {


    return date_format($date, "H:i:s");
}

function printDate($date) {

    $ndate = date_create($date);



    return date_format($ndate, "Y-m-d");
}

function printDateTime($date) {
    $ndate = date_create($date);

    return date_format($ndate, 'Y-m-d H:i:s');
}

function setExpDate($today, $days = 100) {
    return date('Y-m-d H:i:s', strtotime($today . ' + ' . $days . 'days'));
}

function genarateRefId($id, $tbl, $conn) {

    $sql_lstrec = "SELECT * from " . $tbl;

    $resultlst = mysqli_query($conn, $sql_lstrec);

    return $id . '-' . (mysqli_num_rows($resultlst) + 1);
}

function getAdminCurrencySymbol($a_id, $conn) {

    $cu_id = getAdminCurrency($a_id, $conn);

    return getcurrencySymbolByid($cu_id, $conn);
}

function getUserCurrencySymbol($u_id, $conn) {

    $cu_id = getUserCurrency($u_id, $conn);

    return getcurrencySymbolByid($cu_id, $conn);
}

function getcurrencySymbolByid($cu_id, $conn) {

    $sql = "SELECT cu_symbol FROM currency WHERE cu_id = '" . $cu_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['cu_symbol'];
}

function getcurrencyBankByid($cu_id, $conn) {

    $sql = "SELECT cu_bank FROM currency WHERE cu_id = '" . $cu_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return $res['cu_bank'];
}

function getcurrencyBankByUser($u_id, $conn) {

    $cu_id = getUserCurrency($u_id, $conn);

    return getcurrencyBankByid($cu_id, $conn);
}

function printAmount_by_admin($a_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd_admin($a_id, $amount, $conn);

    return number_format($new_amount, 2, '.', '');
}

function printAmount_by_user_with_symbol($u_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd_user($u_id, $amount, $conn);

    return getUserCurrencySymbol($u_id, $conn) . '' . number_format($new_amount, 2, '.', '');
}

function printAmount_by_admin_with_symbol($a_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd_admin($a_id, $amount, $conn);

    return getAdminCurrencySymbol($a_id, $conn) . '' . number_format($new_amount, 2, '.', '');
}

function printAmount_by_user($u_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd_user($u_id, $amount, $conn);

    return number_format($new_amount, 2, '.', '');
}

function printAmount_by_currency($cu_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd($cu_id, $amount, $conn);

    return number_format($new_amount, 2, '.', '');
}

function printAmount_by_currency_with_symbol($cu_id, $amount, $conn) {

    $new_amount = currency_convert_from_usd($cu_id, $amount, $conn);

    return getCurrencyByCu_id($cu_id, $conn) . "" . number_format($new_amount, 2, '.', '');
}

function getUserIdByRef($u_ref, $conn) {

    $sql = "SELECT u_id   FROM users WHERE u_ref = '" . $u_ref . "' and u_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['u_id'];
}

function getAdminIdByRefId($a_ref, $conn) {

    $sql = "SELECT a_id   FROM admins WHERE a_ref = '" . $a_ref . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['a_id'];
}

function findUplineByRef($ref, $conn) {


    $id = getUserIdByRef($ref, $conn);

    if ($id == 0) {
        $id = getAdminIdByRefId(ref, $conn);
    }

    return $id;
}

function getAdminType5fromUser($u_id, $conn) {

    $sql = "SELECT u_type5_by   FROM users WHERE u_id = '" . $u_id . "' and u_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    return (int) $res['u_type5_by'];
}

function getAdminfromUser($u_id, $a_type, $conn) {

    $sql = "SELECT u_type" . $a_type . "_by   FROM users WHERE u_id = '" . $u_id . "' and u_status ='1'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);

    $type_str = 'u_type' . $a_type . '_by';
    return (int) $res[$type_str];
}

function getAdminNamefromUser($u_id, $a_type, $conn) {

    $a_id = getAdminfromUser($u_id, $a_type, $conn);
    return getaAdminUserName($a_id, $conn);
}

function total_diposit_user_by_type($u_id, $type, $conn) {



    // normal deposit
    $sql = "SELECT SUM( w_u_amount) as total_deposit FROM users_wallet_in  WHERE  w_u_status = '1' AND   w_u_type='$type'   and w_u_id = '" . $u_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_deposit']);

    return $total_deposit;
}

function total_withdraw_user_by_type($u_id, $type, $conn) {



    // normal deposit
    $sql = "SELECT SUM( w_u_amount) as total_withdraw FROM users_wallet_out  WHERE  w_u_status = '1' AND   w_u_type='$type'   and w_u_id = '" . $u_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_withdraw']);

    return $total_deposit;
}

function total_withdraw_user_by_type_pending($u_id, $type, $conn) {



    // normal deposit
    $sql = "SELECT SUM( w_u_amount) as total_withdraw FROM users_wallet_out  WHERE  w_u_status = '0' AND   w_u_type='$type'   and w_u_id = '" . $u_id . "'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_withdraw']);

    return $total_deposit;
}

function lotto_withdraw_user($u_id, $conn) {

    // normal deposit
    $sql = "SELECT SUM(n_amount) as total_withdraw FROM numbers  WHERE  n_status = '1' AND    n_u_id = '" . $u_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_withdraw']);

    return $total_deposit;
}

function validateOTP($memberid, $otp, $conn) {

    $sql = "SELECT u_otp FROM users WHERE u_id = '" . $memberid . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $m_otp = $row['u_otp'];

    if (strcmp($otp, $m_otp)) {
        return false;
    } else {
        return true;
    }
}

function claim_wallet_balance($u_id, $conn) {

    $direct_diposit = total_diposit_user_by_type($u_id, 3, $conn);
    $widthdraw = total_withdraw_user_by_type_pending($u_id, 4, $conn) + total_withdraw_user_by_type($u_id, 4, $conn) + total_withdraw_user_by_type($u_id, 3, $conn);
    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }

    return printAmount_by_user_with_symbol($u_id, $balance, $conn);
}

function referal_wallet_balance($u_id, $conn) {

    $direct_diposit = total_diposit_user_by_type($u_id, 2, $conn);
    $widthdraw = total_withdraw_user_by_type($u_id, 2, $conn);

    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }



    return printAmount_by_user_with_symbol($u_id, $balance, $conn);
}

function main_wallet_balance($u_id, $conn) {

    $direct_diposit = total_diposit_user_by_type($u_id, 4, $conn);
    $credit_trnsfer = total_diposit_user_by_type($u_id, 5, $conn);

    $total = $direct_diposit + $credit_trnsfer;

    $transfer = total_diposit_user_by_type($u_id, 1, $conn);

    $widthdraw = total_withdraw_user_by_type($u_id, 1, $conn);

    if ($total >= $widthdraw) {
        $balance = ($direct_diposit + $transfer + $credit_trnsfer) - $widthdraw;
    } else {
        $balance = 0;
    }


    if ($balance > lotto_withdraw_user($u_id, $conn)) {

        $balnce_with_lotto = $balance - lotto_withdraw_user($u_id, $conn);
    } else {

        $balnce_with_lotto = 0;
    }

    return printAmount_by_user_with_symbol($u_id, $balnce_with_lotto, $conn);
}

function main_wallet_balance_usd($u_id, $conn) {

    $direct_diposit = total_diposit_user_by_type($u_id, 4, $conn);
    $credit_trnsfer = total_diposit_user_by_type($u_id, 5, $conn);

    $total = $direct_diposit + $credit_trnsfer;

    $transfer = total_diposit_user_by_type($u_id, 1, $conn);

    $widthdraw = total_withdraw_user_by_type($u_id, 1, $conn);

    if ($total >= $widthdraw) {
        $balance = ($direct_diposit + $transfer + $credit_trnsfer) - $widthdraw;
    } else {
        $balance = 0;
    }


    if ($balance > lotto_withdraw_user($u_id, $conn)) {

        $balnce_with_lotto = $balance - lotto_withdraw_user($u_id, $conn);
    } else {

        $balnce_with_lotto = 0;
    }

    return $balnce_with_lotto;
}

function format_lotto_numbers($numbers) {

    return str_replace(",", " ", $numbers);
}

function getNewDrawno($conn) {

    $sql = "SELECT *   FROM games ";

    $result = mysqli_query($conn, $sql);


    $games = (int) (mysqli_num_rows($result) + 1);

    return printf("%04d", $games);
}

function getLottoIdByDrawNO($drawno, $conn) {

    $sql = "SELECT * from lotto where l_refno='$drawno'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);


    return ($res['l_id']);
}

function getResultByDrawNo($draw_no, $conn) {

    $sql = "select * ,DATE_FORMAT(result_Date, '%d/%m/%Y') as lotto_date  from  lottoresult where drawno='" . $draw_no . "'";

    $result = mysqli_query($conn, $sql);


    $res = mysqli_fetch_assoc($result);
    return $res;
}

function printRates($rate) {

    return number_format($rate, 2, '.', '');
}

function admin_credit_wallet_balance_with_symbol($a_id, $conn) {

    $direct_diposit = total_diposit_admin_by_type($a_id, 1, $conn);
    $widthdraw = total_withdraw_admin_by_type($a_id, 1, $conn);

    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }

    return printAmount_by_admin_with_symbol($a_id, $balance, $conn);
}

function admin_Ref_wallet_balance_with_symbol($a_id, $conn) {

    $direct_diposit = total_diposit_admin_by_type($a_id, 2, $conn);
    $widthdraw = total_withdraw_admin_by_type($a_id, 2, $conn);

    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }

    return printAmount_by_admin_with_symbol($a_id, $balance, $conn);
}

function admin_Ref_wallet_balance($a_id, $conn) {

    $direct_diposit = total_diposit_admin_by_type($a_id, 2, $conn);
    $widthdraw = total_withdraw_admin_by_type($a_id, 2, $conn);

    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }

    return $balance;
}

function total_diposit_admin_by_type($a_id, $type, $conn) {



    // normal deposit
    $sql = "SELECT SUM( w_a_amount) as total_deposit FROM admins_wallet_in  WHERE  w_a_status = '1' AND   w_a_type='$type'   and w_a_id = '" . $a_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_deposit']);

    return $total_deposit;
}

function total_withdraw_admin_by_type($a_id, $type, $conn) {



    // normal deposit
    $sql = "SELECT SUM(w_a_amount) as total_withdraw FROM admins_wallet_out  WHERE  w_a_status = '1' AND   w_a_type='$type'   and w_a_id = '" . $a_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $total_deposit = ($res['total_withdraw']);

    return $total_deposit;
}

function admin_credit_wallet_balance($a_id, $conn) {

    $direct_diposit = total_diposit_admin_by_type($a_id, 1, $conn);
    $widthdraw = total_withdraw_admin_by_type($a_id, 1, $conn);

    if ($direct_diposit > $widthdraw) {
        $balance = $direct_diposit - $widthdraw;
    } else {
        $balance = 0;
    }

    return printAmount_by_admin($a_id, $balance, $conn);
}

function getUserUplineAdminId($u_id, $conn) {


    $user = getUserDetails($u_id, $conn);
    return $user['u_type5_by'];
}

function findWinner($numbers, $drawno, $conn) {



    $sql = "SELECT CASE 
            WHEN first_place = '" . $numbers . "' THEN '1'
            WHEN second_place = '" . $numbers . "' THEN '2'
            WHEN third_place = '" . $numbers . "' THEN '3'
            
            WHEN sp1 = '" . $numbers . "' THEN 'sp1'
            WHEN sp2 = '" . $numbers . "' THEN 'sp2'
            WHEN sp3 = '" . $numbers . "' THEN 'sp3'
            WHEN sp4 = '" . $numbers . "' THEN 'sp4'
            WHEN sp5 = '" . $numbers . "' THEN 'sp5'
            WHEN sp6 = '" . $numbers . "' THEN 'sp6'
            WHEN sp7 = '" . $numbers . "' THEN 'sp7'
            WHEN sp8 = '" . $numbers . "' THEN 'sp8'
            WHEN sp9 = '" . $numbers . "' THEN 'sp9'
            WHEN sp10= '" . $numbers . "' THEN 'sp10'
            WHEN sp11= '" . $numbers . "' THEN 'sp11'    
            WHEN sp12= '" . $numbers . "' THEN 'sp12'
            WHEN sp13= '" . $numbers . "' THEN 'sp13'
            WHEN co1 = '" . $numbers . "' THEN 'co1 '
            WHEN co2 = '" . $numbers . "' THEN 'co2 '
            WHEN co3 = '" . $numbers . "' THEN 'co3 '
            WHEN co4 = '" . $numbers . "' THEN 'co4 '
            WHEN co5 = '" . $numbers . "' THEN 'co5 '
            WHEN co6 = '" . $numbers . "' THEN 'co6 '
            WHEN co7 = '" . $numbers . "' THEN 'co7 '
            WHEN co8 = '" . $numbers . "' THEN 'co8 '
            WHEN co9 = '" . $numbers . "' THEN 'co9 '
            WHEN co10 = '" . $numbers . "' THEN 'co10'

	    END AS place
 
FROM lottoresult where drawno='" . $drawno . "'";



    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $place = $res['place'];
    return $place;
}

function priceByplace($place, $drawno, $conn) {
    $place_prise = '';
    $place = trim($place);
    if ($place == '1') {
        $place_prise = 'first_price';
    } elseif ($place == '2') {

        $place_prise = 'second_price';
    } elseif ($place == '3') {

        $place_prise = 'third_price';
    } else {

        $place_prise = $place . '_price';
    }



    $sql = "select * from lottoresult where drawno='" . $drawno . "'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    $peise = $res[$place_prise];

    return $peise;
}

function findNumbersCuIdbyNid($n_id, $conn) {

    $get_game = "select * from numbers where n_id ='" . $n_id . "'";

    $rate_result = mysqli_query($conn, $get_game);
    $res_cur = mysqli_fetch_assoc($rate_result);
    $n_l_id = ($res_cur['n_l_id']);

    $l_config_id = "select * from lotto where l_id='$n_l_id'";
    $lotto_result = mysqli_query($conn, $l_config_id);
    $res_l_cur = mysqli_fetch_assoc($lotto_result);
    $game = ($res_l_cur['l_config_id']);

    return findGameCuId($game, $conn);
}

function findGameCuId($g_id, $conn) {

    $get_game = "select * from games where g_id ='" . $g_id . "'";

    $rate_result = mysqli_query($conn, $get_game);
    $res_cur = mysqli_fetch_assoc($rate_result);
    return ($res_cur['g_currency']);
}

function lotto_Ref_bounous_palyer($userid, $n_id, $conn) {
    $today = date('Y-m-d H:i:s');
    $lotto_paid = 0.00;



    $sql_find_amount = "select * from numbers where n_id=" . $n_id;

    $result_balance = mysqli_query($conn, $sql_find_amount);
    $res = mysqli_fetch_assoc($result_balance);

    $lotto_paid = $res['n_amount'];

    payto_ref_player($userid, $lotto_paid, $conn);

    payto_ref_admins($userid, $lotto_paid, $conn);

    $sql_set_bounous = "update numbers set  n_bonous='1'  where n_id= " . $n_id;
    mysqli_query($conn, $sql_set_bounous);




    return $lotto_paid;
}

function payto_ref_player($player, $amount, $conn) {

    $level = 1;
    $up_line = $player;


    for ($i = 0; $i < 6; $i++) {
        $up_line = getUserUpline($up_line, $conn);


        if ($up_line > 0) {
            var_dump($up_line);

            pay_comission_user($up_line, $player, $level, $amount, $conn);
        }

        $level++;
    }
}

function payto_ref_admins($user, $amount, $conn) {
    $up_line4 = getUserUplineAdminId($user, $conn);
    pay_comission_admin($up_line4, $user, 4, $amount, $conn);
    $up_line5 = getaAdminUpline($up_line4, $conn);
    pay_comission_admin($up_line5, $user, 3, $amount, $conn);
    $up_line6 = getaAdminUpline($up_line5, $conn);
    pay_comission_admin($up_line6, $user, 2, $amount, $conn);
}

function getUserUpline($u_id, $conn) {

    $user = getUserDetails($u_id, $conn);

    return $user['u_upline'];
}

function get_rate_by_level_admin($level, $conn) {


    $get_rate = "select * from rate_settings where rt_id=1";
    $rate_result = mysqli_query($conn, $get_rate);
    $res_cur = mysqli_fetch_assoc($rate_result);
    $level_new = 'rt_a_L' . $level;
    $rate = ($res_cur[$level_new]);



    return $rate;
}

function get_rate_by_level_user($level, $conn) {


    $get_rate = "select * from rate_settings where rt_id=1";
    $rate_result = mysqli_query($conn, $get_rate);
    $res_cur = mysqli_fetch_assoc($rate_result);
    $level_new = 'rt_u_L' . $level;
    $rate = ($res_cur[$level_new]);



    return $rate;
}

function pay_comission_admin($a_id, $by_u_id, $level, $amount, $conn) {

    $w_a_type_note = 'Player Bonous from  ' . getUserName($by_u_id, $conn);
    $w_a_type_txt = "Commission";
    $today = date('Y-m-d H:i:s');
    $w_a_from = $by_u_id;
    $w_a_ref_out = '';
    $new_amount = ($amount * get_rate_by_level_admin($level, $conn)) / 100;

    return deposit_admin($a_id, $new_amount, 2, $today, $w_a_type_note, $w_a_type_txt, $w_a_from, $w_a_ref_out, $conn);
}

function pay_comission_user($u_id, $by_u_id, $level, $amount, $conn) {

    $w_u_type_note = 'Player Bonous from  ' . getUserName($by_u_id, $conn);
    $w_u_type_txt = "Commission";
    $date = date('Y-m-d H:i:s');
    $new_amount = ($amount * get_rate_by_level_user($level, $conn)) / 100;

    $type = 2;
    $w_u_from = $by_u_id;
    $status = 1;
    $w_u_slip = '';

    return deposit_user($u_id, $new_amount, $type, $date, $w_u_type_note, $w_u_type_txt, $w_u_from, $status, $w_u_slip, $conn);
}

function deposit_user($u_id, $amount, $type, $date, $w_u_type_note, $w_u_type_txt, $w_u_from, $status, $w_u_slip, $conn) {

    $w_u_currency = getUserCurrency($u_id, $conn);
    $w_u_ref = genarateRefId($u_id, 'users_wallet_in', $conn);
    $w_u_expiry = setExpDate($date);


    $sql_in = "INSERT INTO `users_wallet_in` ( `w_u_id`, `w_u_currency`, `w_u_amount`, `w_u_ref`, `w_u_type`,`w_u_type_txt`, `w_u_date`, `w_u_expiry`, `w_u_status`,  `w_u_type_note`,   `w_u_slip`,`w_u_from`) VALUES ('$u_id', '$w_u_currency',  '$amount', '$w_u_ref','$type','$w_u_type_txt', '$date', '$w_u_expiry', '$status',  '$w_u_type_note',  '$w_u_slip','$w_u_from')";


    if (mysqli_query($conn, $sql_in)) {

        return $conn->insert_id;
    } else {

        return 0;
    }
}

function deposit_admin($a_id, $amount, $type, $date, $w_a_type_note, $w_a_type_txt, $w_a_from, $w_a_ref_out, $conn) {

    $w_a_currency = getAdminCurrency($a_id, $conn);
    $w_a_ref_in = genarateRefId($a_id, 'admins_wallet_in', $conn);
    $w_a_expiry = setExpDate($date);

    $sql_in = "INSERT INTO `admins_wallet_in` ( `w_a_id`, `w_a_currency`, `w_a_amount`, `w_a_ref`, `w_a_type`, `w_a_date`, `w_a_expiry`, `w_a_status`,  `w_a_type_note`, `w_a_type_txt`, `w_a_from`,`w_a_from_ref`) VALUES ( '" . $a_id . "', '" . $w_a_currency . "', '" . $amount . "', '" . $w_a_ref_in . "', '" . $type . "', '" . $date . "','" . $w_a_expiry . "', '1',  '" . $w_a_type_note . "','" . $w_a_type_txt . "', '" . $w_a_from . "', '" . $w_a_ref_out . "')";
    if (mysqli_query($conn, $sql_in)) {

        return $conn->insert_id;
    } else {

        return 0;
    }
}

function withdraw_admin($w_a_id, $w_a_amount, $w_a_from, $w_a_type, $w_a_date, $w_a_status, $w_a_type_approved_by, $w_a_type_approved_date, $w_a_type_note, $w_a_type_txt, $w_a_to, $conn) {

    $w_a_ref = genarateRefId($w_a_from, 'admins_wallet_out', $conn);
    $w_a_to_ref = genarateRefId($w_a_to, 'admins_wallet_out', $conn);
    $w_a_expiry = setExpDate($w_a_date);
    $w_a_currency = getAdminCurrency($w_a_id, $conn);

    $sql_out = "INSERT INTO `admins_wallet_out` ( `w_a_id`, `w_a_currency`, `w_a_amount`, `w_a_ref`, `w_a_type`, `w_a_date`, `w_a_expiry`, `w_a_status`, `w_a_type_approved_by`, `w_a_type_approved_date`, `w_a_type_note`, `w_a_type_txt`, `w_a_to`, `w_a_to_ref`) VALUES ( '$w_a_id', '$w_a_currency', '$w_a_amount','$w_a_ref', '$w_a_type', '$w_a_date', '$w_a_expiry', '$w_a_status', '$w_a_type_approved_by', '$w_a_type_approved_date','$w_a_type_note', '$w_a_type_txt', '$w_a_to', '$w_a_to_ref')";

    if (mysqli_query($conn, $sql_out)) {

        return $conn->insert_id;
    } else {

        return 0;
    }
}

function setGameResult($drawno, $conn) {

    $sql = "update games set g_result='1' where g_drawno=" . $drawno;


    if (mysqli_query($conn, $sql)) {

        return 1;
    } else {

        return 0;
    }
}

function countPlayersUnderAdmin($a_id, $conn) {
    if (getAdminTypeIdByid($a_id, $conn) == 1) {
        $sql = "SELECT COUNT(u_id) as cu FROM users where u_type1_by ='$a_id'";
    } elseif (getAdminTypeIdByid($a_id, $conn) == 2) {
        $sql = "SELECT COUNT(u_id) as cu FROM users where u_type2_by ='$a_id'";
    } elseif (getAdminTypeIdByid($a_id, $conn) == 3) {
        $sql = "SELECT COUNT(u_id) as cu FROM users where u_type3_by ='$a_id'";
    } elseif (getAdminTypeIdByid($a_id, $conn) == 4) {
        $sql = "SELECT COUNT(u_id) as cu FROM users where u_type4_by ='$a_id'";
    } elseif (getAdminTypeIdByid($a_id, $conn) == 5) {
        $sql = "SELECT COUNT(u_id) as cu FROM users where u_type5_by ='$a_id'";
    }

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return ($res['cu']);
}

function get_count_used_numbers($g_id, $conn) {
    $drawno_res = get_game_details($g_id, $conn);
    $drawno = $drawno_res['g_drawno'];

    $sql = "SELECT COUNT(n_id) as used FROM numbers where n_draw_no ='$drawno'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['used'];
}

function get_balance_lottonumber_count($g_id, $conn) {
    $res = get_game_details($g_id, $conn);
    $max_lottos = $res['g_max_lottos'];
    $used_lottos = get_count_used_numbers($g_id, $conn);
    if ($max_lottos >= $used_lottos) {
        $balance = $max_lottos - $used_lottos;
    } else {
        $balance = 0;
    }

    return $balance;
}

function get_game_details($g_id, $conn) {

    $sql = "SELECT * FROM games where g_id ='$g_id'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function get_game_details_drawno($n_draw_no, $conn) {

    $sql = "SELECT * FROM games where g_drawno ='$n_draw_no'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function get_game_details_playnumbers($n_play_numbers, $conn) {

    $sql = "SELECT * FROM numbers where n_play_numbers ='$n_play_numbers'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function get_number_details_by_number($n_numbers, $conn) {

    $sql = "SELECT * FROM numbers where n_numbers ='$n_numbers'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res;
}

function get_bet_value_balance_by_number($n_numbers, $drawno, $conn) {

    $sql = "SELECT SUM(n_bet_val) as used FROM numbers where n_status=1 and n_draw_no='$drawno' and n_play_numbers ='$n_numbers'";
    $result = mysqli_query($conn, $sql);
    $res2 = mysqli_fetch_assoc($result);

    $current_bet = $res2['used'];



    $max_bet = get_max_bet_value($n_numbers, $drawno, $conn);
    if ($max_bet > $current_bet) {
        $balance = $max_bet - $current_bet;
    } else {
        $balance = 0;
    }

    return $balance;
}

function get_max_bet_value($n_numbers, $drawno, $conn) {
    $max_bet = 0;
    $sql_find = "select * from numbers_ctrl where nc_numbers='$n_numbers' and nc_draw_no='$drawno'";
    $result = mysqli_query($conn, $sql_find);

    if (mysqli_num_rows($result) > 0) {
        $res = mysqli_fetch_assoc($result);
        $max_bet = $res['nc_bet_val'];
    } else {
        $res_r = get_game_details_drawno($drawno, $conn);
        $max_bet = $res_r['g_max_bet_val'];
    }

    return $max_bet;
}

function findAdminCount($a_id, $type, $target, $conn) {


    $sql = "select COUNT(a_id) as tot from admins where a_type" . $type . "_by = '$a_id' and a_type='$target' ";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['tot'];
}

function findPlayerCount($a_id, $type, $conn) {


    $sql = "select COUNT(u_id) as tot from users where u_type" . $type . "_by = '$a_id' and u_status='1' ";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['tot'];
}

function statement_Player_spend($from, $to, $a_id, $conn) {

    if ($to != '') {
        $sql = " SELECT   SUM(n.n_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type5_by ='$a_id'  AND n.n_date between '$from' and '$to'";
    } else {
        $sql = " SELECT   SUM(n.n_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type5_by ='$a_id'  AND DATE(n.n_date) = DATE('$from')";
    }


    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function statement_Player_spend_by_user($from, $to, $u_id, $conn) {

    if ($to != '') {
        $sql = " SELECT   SUM(n.n_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_id ='$u_id'  AND n.n_date between '$from' and '$to'";
    } else {
        $sql = " SELECT   SUM(n.n_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where  u.u_id ='$u_id'  AND DATE(n.n_date) =  DATE('$from')";
    }


    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function statement_Player_win($from, $to, $a_id, $conn) {

    if ($to != '') {
        $sql = " SELECT   SUM(n.n_win_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type5_by ='$a_id'  AND n.n_date between '$from' and '$to'";
    } else {
        $sql = " SELECT   SUM(n.n_win_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type5_by ='$a_id'  AND DATE(n.n_date) =  DATE('$from')";
    }


    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function statement_Player_win_user($from, $to, $u_id, $conn) {

    if ($to != '') {
        $sql = " SELECT   SUM(n.n_win_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_id ='$u_id'  AND n.n_date between '$from' and '$to'";
    } else {
        $sql = " SELECT   SUM(n.n_win_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_id ='$u_id'  AND DATE(n.n_date) =  DATE('$from')";
    }


    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function statement_admin_commission($from, $to, $a_id, $conn) {

    if ($to != '') {
        $sql = " select SUM(w_a_amount) as play from admins_wallet_in  where w_a_type ='2'  and w_a_status='1'  and w_a_id ='$a_id'  AND w_a_date between '$from' and '$to'";
    } else {
        $sql = " select SUM(w_a_amount) as play from admins_wallet_in  where w_a_type ='2'  and w_a_status='1'  and w_a_id  ='$a_id'  AND DATE(w_a_date) =  DATE('$from')";
    }


    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function getGamecount($conn) {
    $sql = "select COUNT(g_id) as gm  from games where g_status=1";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['gm'];
}

function getwinnercount($conn) {
    $sql = "select count(n_id) as tot from numbers where n_win_amount>0 ";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['tot'];
}

function getPendingDeposit($conn) {
    $sql = "select COUNT(w_id_u) as tot from users_wallet_in where w_u_type ='4' and w_u_status='0' ORDER BY w_id_u DESC";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['tot'];
}

function getDrawNoById($g_id, $conn) {
    $res = get_game_details($g_id, $conn);

    return $res['g_drawno'];
}

function statement_Player_spend_today($from, $a_id, $conn) {

    $a_type = getAdminTypeIdByid($a_id, $conn);

    $sql = " SELECT   SUM(n.n_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type" . $a_type . "_by ='$a_id'  AND DATE(n.n_date) = DATE('$from')";



    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function statement_Player_win_dash($a_id, $conn) {
    $a_type = getAdminTypeIdByid($a_id, $conn);

    $sql = " SELECT   SUM(n.n_win_amount) as play  FROM  users u LEFT JOIN numbers n ON   u.u_id=n.n_u_id   where u.u_type" . $a_type . "_by ='$a_id' ";



    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['play'];
}

function getvideo($v_id, $conn) {

    $sql = "SELECT v_title FROM videos where v_id='" . $v_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['v_title'];
}

function getuser($u_id, $conn) {

    $sql = "SELECT u_username FROM user where u_id='" . $u_id . "'";

    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_assoc($result);
    return $res['u_username'];
}

/* FUNCTIONS FOR VIDEO SESSION --------------------------------------------------------------------- s */

function getCategory($conn, $cat_id = 0) {
    if ($cat_id != 0) {
        $query = "SELECT * FROM category WHERE status=1";
        return mysqli_query($conn, $query);
    } else {
        $query = "SELECT * FROM category WHERE category_id=\"$cat_id\"";
        return mysqli_fetch_assoc(mysqli_query($conn, $query));
    }
}

/* ------------------------------------------------------------------------------------------------- e */