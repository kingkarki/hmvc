<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home page title</title>
    <base href="/" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h2>Server Response</h2>
                <p> First Name field : <?php echo $first_name; ?> Was sent at <?php echo date('Y-m-d h:i:s A'); ?></p>
                <p> Last Name field : <?php echo $last_name; ?> Was sent at <?php echo date('Y-m-d h:i:s A'); ?></p>
            </div>
        </div>
    </div>
</body>

<style>
    .form-group {
        padding: 10px;
        ;
    }
</style>

</html>