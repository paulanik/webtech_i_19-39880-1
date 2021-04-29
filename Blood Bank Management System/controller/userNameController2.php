<?php
require_once 'Model/model2.php';

function check_username_exists()
{
    $username = $this->input->post('username');
    log_message('debug', 'Posted Username by Ajax for Check it exist or not : '. print_r($username, TRUE));

    $exists = $this->patient_db->check_username($username);

    log_message('debug', 'Username Exist or not Response array: '. print_r($exists, TRUE));

    $count = count($exists);
    // echo $count 
    log_message('debug', 'Username Exist or not Response Count: '. print_r($count, TRUE));

    if ($count == 1) {
        $data['unique'] = 1;
        print(json_encode($data));
    } else {
        $data['unique'] = 0;
        print(json_encode($data));
    }
}

?>
