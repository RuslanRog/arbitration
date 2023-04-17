<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leads table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <link rel="icon" href="favicon.ico">
    <script src="/js/app-page.js"></script>
</head>

<body>
    <div>
        <div class="columns is-multiline">
        </div>
        <nav class="navbar py-4">
            <div class="container is-fluid">
                <div class="navbar-brand">
                    <a class="navbar-burger" role="button" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="/">Leads</a><a class="navbar-item" href="table.php">Table</a></div>

                </div>
            </div>
        </nav>

        <section class="section">
            <div class="container">
                <div class="mb-6 pb-3 columns is-multiline">
                    <div class="column is-12 is-6-desktop mx-auto has-text-centered">
                        <h2 class="mb-4 is-size-1 is-size-3-mobile has-text-weight-bold">Leads table</h2>
                        <p class="subtitle has-text-grey mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.</p>
                        <div class="buttons is-centered">
                            <a class="mr-3" href="#">
                                <img src="../images/app-page/images/buttons/app-store.svg" alt=""></a>
                            <a href="#">
                                <img src="../images/app-page/images/buttons/google-play.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section has-background-primary">
            <div class="section is-half">
<?php require_once 'lead_receiver.php';
// Decode JSON data
$data = json_decode($response, true);
?>
<?php
// Insert data into table
echo '<table class="table container" id="table-id">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Name</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>';

foreach ($data as $row) {
    echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['email'] . '</td>
            <td>' . $row['firstName'] . '</td>
            <td>' . $row['date'] . '</td>
          </tr>';
}

echo '</tbody>
    </table>';
?>

            </div>
        </section>

        <footer class="section">
            <div class="container">
                <div class="pb-5 is-flex is-flex-wrap-wrap is-justify-content-between is-align-items-center">
                    <div class="mr-auto mb-2">

                    </div>
                    <div>
                        <ul class="is-flex is-flex-wrap-wrap is-align-items-center is-justify-content-center">
                            <li class="mr-4"><a class="button is-white" href="/">Leads</a></li>
                            <li class="mr-4"><a class="button is-white" href="table.php">Table</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-5" style="border-top: 1px solid #dee2e6;"></div>
            <div class="container">
                <div class="is-flex-tablet is-justify-content-between is-align-items-center">
                    <p>All rights reserved © My App 20XX</p>
                    <div class="py-2 is-hidden-tablet"></div>
                    <div class="ml-auto">
                        <a class="mr-4 is-inline-block" href="#">
                            <img src="../images/app-page/socials/facebook.svg" alt=""></a>
                        <a class="mr-4 is-inline-block" href="#">
                            <img src="../images/app-page/socials/twitter.svg" alt=""></a>
                        <a class="mr-4 is-inline-block" href="#">
                            <img src="../images/app-page/socials/github.svg" alt=""></a>
                        <a class="mr-4 is-inline-block" href="#">
                            <img src="../images/app-page/socials/instagram.svg" alt=""></a>
                        <a class="is-inline-block" href="#">
                            <img src="../images/app-page/socials/linkedin.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="tablesort.min.js"></script> 
<script>
  new Tablesort(document.getElementById('table-id'));
</script>
</body>


</html>