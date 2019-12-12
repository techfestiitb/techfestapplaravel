<div class="row" style="position: sticky;top: 0;background-color: white;z-index: 1;padding: 1%;filter: invert(1);margin-right: 0px;margin-left: 0px;">
    <div id="app" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="width: 100%;">
                <div class="col-1" style="text-align: center;">
                    <a href="<?php echo e(URL::previous()); ?>">
                        <img src="/2019/profile/left-arrow.png" alt="" style="max-height: 3.5vh">
                    </a>
                </div>
                <div class="col-8" style="text-align: center;">
                    <img src="http://techfest.org/2019/tf_date_black.png" alt="" style="max-height: 4vh">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('initiatives')); ?>">Initiatives</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('summit')); ?>">Summit</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('twmun')); ?>">TWMUN--</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('lectures')); ?>">Lectures--</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('exhibitions')); ?>">Exhibitions--</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Workshops</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('competitions')); ?>">Competition</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('esports')); ?>">Esports--</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('ift')); ?>">IFT</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('robowars')); ?>">Robowars</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Technoholix</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact_us')); ?>">Ozone</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact_us')); ?>">Contact Us</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<?php /**PATH /var/app/current/blog/resources/views/2019/header/header.blade.php ENDPATH**/ ?>