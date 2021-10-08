<?php

$label = array(
    'dashboard'=> array('ENG'=>'Dashboard','TH'=>'หน้าแรก'),
    'members'=> array('ENG'=>'Members','TH'=>'สมาชิก'),
    'logout'=> array('ENG'=>'Logout','TH'=>'ออกจากระบบ'),


    'my_profile'=>array('ENG'=>'My Profile','TH'=>'โปรไฟล์'),
    'view_profile'=>array('ENG'=>'View<br>Profile','TH'=>'ดู<br>โปรไฟล์'),
    'inbox'=>array('ENG'=>'Inbox','TH'=>'ข้อความ'),
    'setting'=>array('ENG'=>'Setting','TH'=>'ตั้งค่า'),
    'account_setting'=>array('ENG'=>'Account Setting','TH'=>'ตั้งค่าบัญชี'),


    'coin'=>array('ENG'=>'Coin','TH'=>'เหรียญ'),
    'amount'=>array('ENG'=>'Amount','TH'=>'จำนวน'),
    'buy_unit'=>array('ENG'=>'PriceBuy/Coin','TH'=>'ราคาซื้อ/เหรียญ'),
    'buy'=>array('ENG'=>'Total (THB)','TH'=>'ราคาซื้อรวม (บาท)'),
    'sell_unit'=>array('ENG'=>'Current/Coin','TH'=>'ปัจจุบัน/เหรียญ'),
    'sell'=>array('ENG'=>'Sell (THB)','TH'=>'ราคาขาย (บาท)'),
    'difference'=>array('ENG'=>'Difference','TH'=>'ความต่าง'),
    'update'=>array('ENG'=>'Update','TH'=>'อัปเดต'),


    'coin_symbol'=>array('ENG'=>'Coin Symbol ETH, BTC','TH'=>'เหรียญ เช่น ETH, BTC'),
    'price_buy'=>array('ENG'=>'Price Buy (THB)','TH'=>'ราคาซื้อ (บาท)'),
    'price_unit'=>array('ENG'=>'Price : Unit (THB)','TH'=>'ราคาเหรียญ:บาท'),
    'price_sell'=>array('ENG'=>'Price Sell (THB)','TH'=>'ราคาขาย (บาท)'),



    'fullname'=>array('ENG'=>'Fullname','TH'=>'ชื่อ'),
    'username'=>array('ENG'=>'Username','TH'=>'รหัสเข้าใช้'),
    'password'=>array('ENG'=>'Password','TH'=>'รหัสผ่าน'),
    'telno'=>array('ENG'=>'Telno','TH'=>'เบอร์ติดต่อ'),
    'email'=>array('ENG'=>'E-Mail','TH'=>'อีเมล'),
    'address'=>array('ENG'=>'Address','TH'=>'ที่อยู่'),
    'update'=>array('ENG'=>'Update','TH'=>'อัปเดต'),


    'name'=>array('ENG'=>'Name','TH'=>'ชื่อ'),
    'lastname'=>array('ENG'=>'Lastname','TH'=>'นามสกุล'),

    'add'=>array('ENG'=>'+ ADD','TH'=>'+ เพิ่ม'),

    'add_title'=>array('ENG'=>'Add','TH'=>'เพิ่ม'),
    'edit_title'=>array('ENG'=>'Edit','TH'=>'แก้ไข'),

    'save'=>array('ENG'=>'Save','TH'=>'บันทึก'),
    'cancel'=>array('ENG'=>'Cancel','TH'=>'ยกเลิก'),


    'no_record'=>array('ENG'=>'No Record','TH'=>'ไม่พบข้อมูล'),
);

function label($name='') {
    $labelx = $_GET['language'];
    global $label;

    if($name=='' || $labelx=='')return '';

    if(!isset($label[$name][$labelx]))return '';
    if($label[$name][$labelx]=='') {
        return $label[$name]['ENG'];
    }
    return $label[$name][$labelx];
}

?>