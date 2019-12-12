<div class="row" style="position: sticky;top: 0;background-color: white;z-index: 1;padding: 1%;">

    <div id="app" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="width: 100%;">
                <div class="col-1" style="text-align: center;"></div>
                <div class="col-8" style="text-align: center;">
                    <img src="http://techfest.org/2019/tf_date_black.png" alt="" style="max-height: 4vh">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<?php /**PATH /var/app/current/blog/resources/views/2019/header/header_profile.blade.php ENDPATH**/ ?>