<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="{{ . }}">
    <link rel="canonical" href="{{ . }}">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="apple-touch-icon" href="../frontend/images/logo.png" sizes="180x180">
    <link rel="icon" type="image/png" href="../frontend/images/logo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../frontend/images/logo.png" sizes="16x16">
    <link rel="stylesheet" href="../frontend/components/css/core.css">
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <title>Admin Page</title>
</head>

<body>

    <?= include("header/navbar.php"); ?>
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        <?= include("header/sidebar.php"); ?>


        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <?php
                $defaultPage = 'dashboard.php'; 
                $requestPage = isset($_GET['page']) ? $_GET['page'] : $defaultPage;

                $pagePath = "pages/{$requestPage}.php";
                ?>
            </main>
            <?= include("footer/footer.php") ?>

        </div>

    </div>





    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../frontend/components/javascript/jquery.3.1.js"></script>
    <script src="../frontend/components/javascript/script.js"></script>
</body>

</html>