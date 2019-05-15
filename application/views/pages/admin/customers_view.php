<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <?php echo $css; ?>
    </head>
    <body class="bg-default g-sidenav-show g-sidenav-pinned" data-gr-c-s-loaded="true">
        <?php
            echo $sidenav
            echo $header;
            echo $customers;
            echo $footer;
        ?>
    </body>
        <?php echo $js; ?>
</html>
