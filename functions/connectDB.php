<?php
 function connectDB()
 {
     return mysqli_connect("192.168.56.56:3306", "homestead", "secret", "electro_db");
 }