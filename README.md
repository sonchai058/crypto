PHP Hard Code & API Crypto


https://themeforest.net/item/crypto-admin-responsive-bootstrap-4-admin-html-templates/21604673?fbclid=IwAR19rV23GnlAoY2-73I1IwL1oEqCHwd7OKCwXhJuwpmAP4Le2xwjcKCoRRA
ธีม ให้เชียร์ลองดู

http://www.thaifundstoday.com/?fbclid=IwAR2DBf61PRPL24gDyaocSTLvZroBaX_r8_ujvFX1zmIDbaYLrRIpVfOtWPQ
web refferent
เปลี่ยนจากกองทุนเป็นคริปโต

https://coinmarketcap.com/api/
web api ดึงข้อมูล

https://drive.google.com/file/d/1p7ZRsa1JrQXywKmKd_fS_J8OlwBBxpd0/view?usp=sharing

เวลาทำ ประมาณ 1-2 อาทิด
10,0000 40/60 
#1 4,0000 21 กย
#2

ขอบเขต
1. ระบบล็อคอิน username,password 
2.ระบบ Register สมาชิก (แบบธรรมดา)
3. Dashboard สำหรับ แสดงและจัดการเหรียญ ดิจิตอล
   3.1 ดึงข้อมูลราคาเหรียญดิจิตอล ปัจจุบันจาก link ที่ให้ มาอัปเดต โดยจะทำ Crontab ไว้ให้
   3.2 รายการเหรียญดิจิตอล
   3.2.1 เพิ่มลบเหรียญ
   3.2.2 แสดงราคาปัจจุบัน ราคาซื้อ ราคาขาย ปัจจุบัน
   3.2.3 แสดงเป็นกราฟอย่างง่าย
4. ปรับให้ใช้ Theme ที่มีไว้ให้ปัจจุบัน https://drive.google.com/file/d/1p7ZRsa1JrQXywKmKd_fS_J8OlwBBxpd0/view?usp=sharing



https://coinmarketcap.com/api/documentation/v1/#section/Endpoint-Overview
http://localhost/crypto/
http://localhost/crypto/step1_api_example.php
https://fontawesome.com/v4.7/icons/
http://www.thaifundstoday.com/?fbclid=IwAR0yCnncs9_zxv6bcK6IG07UIjy5_tkZpCI_e6Xa_zmCLK1f8TCbvpLsyJk


DBname : coindcatod_ay
user : coindcatod_ay
pass : Av3OleqlqP

Directadmin : http://119.59.116.231:2222/
U : coindcatod
P : 1q2w3e4r^^

Domain Name : coindcatoday.com

FTP accounts:   1
Anonymous FTP:  OFF
FTP Server:     ftp.coindcatoday.com
Login:  coindcatod
Password:       1q2w3e4r^^

119.59.116.231
21

http://119.59.116.231/phpmyadmin/tbl_structure.php?db=coindcatod_ay&table=port&token=b66179bd0aab6d0368b513e05809036b

https://www.codegrepper.com/code-examples/php/how+to+make+a+variable+global+in+php


https://datatables.net/examples/styling/bootstrap4


เรียก API จะบันทึกแต่ที่ port มีเท่านั้น เนื่องจากรายการมากกว่า 1,700+ จะ timeout
จำนวนสกุลเงิน: 6,486 มูลค่าตลาดทั้งหมด: $1,871,683,883,554 ปริมาณ (24 ชม.): $93,556,230,277
API Call Update
step1_api_example.php
step1_api_example.php?start=5000&limit=5000
สามารถรัน Cronjob ได้เลย หรือ รันผ่าน URL

วิธีใช้ label
<?php echo label('dashboard');?>
ไฟล์ _label.php