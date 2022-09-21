<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="shortcut icon" href="{{  asset ('assets/img/icons/icon-48x48.png')  }}" /> -->

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title>Catalog</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('resources/js/app.js') -->
    <link href="{{  asset ('assets/css/app.css')  }}" rel="stylesheet">
    <link href="{{  asset ('assets/css/dashboard.css')  }}" rel="stylesheet">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('layouts.navdash')

        <!-- table -->

        <div class="container dashboard">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card flex-fill ">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Admin Dashboard</h5>
                        </div>
                        <table class="table table-hover ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Start Date</th>
                                    <th class="d-none d-xl-table-cell">End Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Assignee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Project Apollo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>Project Fireball</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>Project Hades</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>
                                <tr>
                                    <td>Project Nitro</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>Project Phoenix</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>Project X</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>
                                <tr>
                                    <td>Project Romeo</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Christina Mason</td>
                                </tr>
                                <tr>
                                    <td>Project Wombat</td>
                                    <td class="d-none d-xl-table-cell">01/01/2021</td>
                                    <td class="d-none d-xl-table-cell">31/06/2021</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{  asset ('assets/js/app.js')  }}"></script>

</body>

</html>