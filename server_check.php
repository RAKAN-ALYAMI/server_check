<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فحص السيرفر</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            text-align: right;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2><i class="fas fa-server"></i> فحص السيرفر</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <?php
// RAKAN ALYAMI
// Telegram: @r7000r
// email: rakan7777@gmail.com
                        // RAKAN ALYAMI
                        // Telegram: @r7000r
                        // email: rakan7777@gmail.com

                        // بدء الفحص
                        $start_time = microtime(true);

                        // إصدار PHP
                        echo "<h4><i class='fas fa-code'></i> إصدار PHP</h4>";
                        echo '<p>الإصدار الحالي: ' . PHP_VERSION . '</p><hr>';

                        // الوحدات المحملة
                        $required_modules = ['pdo_mysql', 'curl', 'mbstring'];
                        echo "<h4><i class='fas fa-puzzle-piece'></i> الوحدات المحملة</h4>";
                        echo '<ul class="list-group mb-3">';
                        foreach ($required_modules as $module) {
                            echo "<li class='list-group-item'>الوحدة $module: " . (extension_loaded($module) ? '<span class="text-success">محملة</span>' : '<span class="text-danger">غير محملة</span>') . "</li>";
                        }
                        echo '</ul>';

                        // صلاحيات الملفات
                        $directories = ['/var/www/html', '/tmp'];
                        echo "<h4><i class='fas fa-folder'></i> صلاحيات الملفات</h4>";
                        echo '<ul class="list-group mb-3">';
                        foreach ($directories as $dir) {
                            echo "<li class='list-group-item'>المجلد $dir: " . (is_writable($dir) ? '<span class="text-success">قابل للكتابة</span>' : '<span class="text-danger">غير قابل للكتابة</span>') . "</li>";
                        }
                        echo '</ul>';

                        // التحقق من الاتصال بالإنترنت
                        echo "<h4><i class='fas fa-wifi'></i> التحقق من الاتصال بالإنترنت</h4>";
                        $connected = @fsockopen("www.google.com", 80);
                        if ($connected) {
                            echo '<p class="text-success">الاتصال بالإنترنت متاح</p><hr>';
                            fclose($connected);
                        } else {
                            echo '<p class="text-danger">لا يوجد اتصال بالإنترنت</p><hr>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <?php
                        // المساحة التخزينية المتاحة
                        echo "<h4><i class='fas fa-hdd'></i> المساحة التخزينية المتاحة</h4>";
                        $free_space = disk_free_space("/") / 1024 / 1024;
                        echo '<p>المساحة الحرة: ' . round($free_space, 2) . ' ميجابايت</p><hr>';

                        // إعدادات PHP الأساسية
                        echo "<h4><i class='fas fa-cogs'></i> الإعدادات الأساسية للسيرفر</h4>";
                        echo '<ul class="list-group mb-3">';
                        echo '<li class="list-group-item">حد الذاكرة: ' . ini_get('memory_limit') . '</li>';
                        echo '<li class="list-group-item">حجم الملف الأقصى للرفع: ' . ini_get('upload_max_filesize') . '</li>';
                        echo '<li class="list-group-item">حجم البيانات الأقصى للإرسال: ' . ini_get('post_max_size') . '</li>';
                        echo '</ul>';

                        // تحليل أداء المعالج والذاكرة
                        echo "<h4><i class='fas fa-microchip'></i> أداء المعالج والذاكرة</h4>";
                        $load = sys_getloadavg();
                        echo '<p>متوسط الحمل على المعالج (آخر دقيقة): ' . $load[0] . '</p>';
                        echo '<p>استخدام الذاكرة الحالي: ' . round(memory_get_usage() / 1024 / 1024, 2) . ' ميجابايت</p><hr>';

                        // التوقيت الحالي للخادم
                        echo "<h4><i class='fas fa-clock'></i> التوقيت الحالي للخادم</h4>";
                        echo '<p>التوقيت الحالي: ' . date('Y-m-d H:i:s') . '</p><hr>';

                        // تفاصيل نظام التشغيل
                        echo "<h4><i class='fas fa-desktop'></i> تفاصيل نظام التشغيل</h4>";
                        echo '<p>' . php_uname() . '</p><hr>';

                        // الوقت المستغرق في تنفيذ الفحص
                        $end_time = microtime(true);
                        $execution_time = round($end_time - $start_time, 4);
                        echo "<h4><i class='fas fa-stopwatch'></i> وقت تنفيذ الفحص</h4>";
                        echo '<p>الوقت المستغرق: ' . $execution_time . ' ثانية</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer class="text-center mt-5">
        <p>جميع الحقوق محفوظة &copy; 2024 - RAKAN ALYAMI | Telegram: @r7000r | email: rakan7777@gmail.com</p>
    </footer>
</body>
</html>