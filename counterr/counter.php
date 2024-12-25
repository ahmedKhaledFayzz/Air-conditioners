<?php
// ملف لتسجيل عدد الزيارات
$file = "./counter.txt";

// إذا كان الملف غير موجود، قم بإنشائه
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// زيادة العداد
$visits = file_get_contents($file);
$visits = $visits + 1;
file_put_contents($file, $visits);

// عرض عدد الزيارات
echo "عدد زيارات الموقع: " . $visits;
?>
