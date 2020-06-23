<?php
echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobExpo</title>

    <!-- Favicon -->
    <link rel="icon" href="https://tao.ai/wp-content/uploads/2020/06/tao_sq_2_128.png" type="image/png">

    <!-- Bundle Styles -->
    <link rel="stylesheet" href="./css/bundle.css">

    <link rel="stylesheet" href="./css/enjoyhint.css">

    <!-- App styles -->
    <link rel="stylesheet" href="./css/app.min.css">

    <link rel="stylesheet" href="./css/custom.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!-- page loading -->
<div class="page-loading"></div>
<!-- ./ page loading -->

<!-- page tour modal -->
<div class="modal fade" id="pageTour" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-body text-center pt-5">
                <div class="row">
                    <div class="col-md-6 offset-3">
                        <figure>
                            <img src="dist/media/svg/undraw_product_tour_foyt.svg" class="img-fluid" alt="image">
                        </figure>
                        <p class="lead mt-5">Would you like to take a short page tour?</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary start-tour">Start Tour</button>
                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ./ page tour modal -->

<!-- disconnected modal -->
<div class="modal fade" id="disconnected" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row mb-5">
                    <div class="col-md-6 offset-3">
                        <img src="./dist/media/svg/undraw_warning_cyit.svg" class="img-fluid" alt="image">
                    </div>
                </div>
                <p class="lead text-center">Application disconnected</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-success btn-lg">Reconnect</button>
                <a href="login.html" class="btn btn-link">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- ./ disconnected modal -->

<!-- voice call modal -->
<div class="modal call fade" id="call" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="call">
                    <div>
                        <figure class="mb-4 avatar avatar-xl">
                            <img src="http://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                        </figure>
                        <h4>Brietta Blogg <span class="text-success">calling...</span></h4>
                        <div class="action-button">
                            <button type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                                <i data-feather="x"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-pulse btn-floating btn-lg">
                                <i data-feather="phone"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ voice call modal -->

<!-- voice call modal -->
<div class="modal call fade" id="videoCall" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="call">
                    <div>
                        <figure class="mb-4 avatar avatar-xl">
                            <img src="http://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                        </figure>
                        <h4>Brietta Blogg <span class="text-success">video calling...</span></h4>
                        <div class="action-button">
                            <button type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                                <i data-feather="x"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-pulse btn-floating btn-lg">
                                <i data-feather="video"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ voice call modal -->

<!-- add JobExpo modal -->
<div class="modal fade" id="addJobExpo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i data-feather="user-plus" class="mr-2"></i> Add JobExpo
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">Send invitations to JobExpo.</div>
                <form>
                    <div class="form-group">
                        <label for="emails" class="col-form-label">Email addresses</label>
                        <input type="text" class="form-control" id="emails">
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-form-label">Invitation message</label>
                        <textarea class="form-control" id="message"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- ./ add JobExpo modal -->

<!-- new group modal -->
<div class="modal fade" id="newGroup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i data-feather="users" class="mr-2"></i> New Group
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="group_name" class="col-form-label">Group name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="group_name">
                            <div class="input-group-append">
                                <button class="btn btn-light" data-toggle="tooltip" title="Emoji" type="button">
                                    <i data-feather="smile"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="mb-2">The group members</p>
                    <div class="form-group">
                        <div class="avatar-group">
                            <figure class="avatar" data-toggle="tooltip" title="Tobit Spraging">
                                <span class="avatar-title bg-success rounded-circle">T</span>
                            </figure>
                            <figure class="avatar" data-toggle="tooltip" title="Cloe Jeayes">
                                <img src="http://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                            </figure>
                            <figure class="avatar" data-toggle="tooltip" title="Marlee Perazzo">
                                <span class="avatar-title bg-warning rounded-circle">M</span>
                            </figure>
                            <figure class="avatar" data-toggle="tooltip" title="Stafford Pioch">
                                <img src="http://via.placeholder.com/128X128" class="rounded-circle" alt="image">
                            </figure>
                            <figure class="avatar" data-toggle="tooltip" title="Bethena Langsdon">
                                <span class="avatar-title bg-info rounded-circle">B</span>
                            </figure>
                            <a href="#" title="Add JobExpo">
                                <figure class="avatar">
                                    <span class="avatar-title bg-primary rounded-circle">
                                        <i data-feather="plus"></i>
                                    </span>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea class="form-control" id="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Create Group</button>
            </div>
        </div>
    </div>
</div>
<!-- ./ new group modal -->
<!-- layout -->
<div class="layout">';
?>

<?php include("navigation.html"); ?>

<?php echo '<!-- content -->
<div class="content">'
?>

<?php include("sidebar-left.html"); ?>
<?php include("chat.html"); ?>
<?php include("sidebar-right.html"); ?>
<?php include("settings.html"); ?>

<?php
echo '</div>
    <!-- ./ content -->';
?>

<?php
echo '</div>
<!-- ./ layout -->

<!-- Bundle -->
<script src="./js/bundle.js"></script>

<script src="./js/enjoyhint.min.js"></script>

<!-- App scripts -->
<script src="./js/app.min.js"></script>

<!-- Examples -->
<script src="./js/examples.js"></script>

<!-- Custom -->
<script src="./js/custom.js"></script>


</body>
</html>
';
?>
