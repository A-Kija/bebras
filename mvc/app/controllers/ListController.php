<?php

namespace App\Controllers;

class BankController {


    public function showAdd($user_id)
    {
        $id = $user_id;
        return include DIR.'views/show_add_form.php';
    }


    public function add($user_id)
    {
        $id = $user_id;
        $money = $_POST['amount'];
        //BL

        $this->update($id, ['amout' => 88]);

        header();

    }



}