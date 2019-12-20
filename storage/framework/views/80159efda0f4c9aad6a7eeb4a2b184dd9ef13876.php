

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Bet on Team')); ?></div>

                    <div class="card-body">



            <div class="col-md-6">
                <div class="col-md-6 offset-md-4">
                    <button onclick="bet()" type="submit" class="btn btn-primary">
                        <?php echo e(__('Taanaji')); ?>

                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-6 offset-md-4">
                    <button onclick="bet()" type="submit" class="btn btn-primary">
                        <?php echo e(__('Bose')); ?>

                    </button>
                </div>
                <p id="demo" style="color: deeppink" size="larger"></p>
            </div>

                        <script>
                            function bet() {
                                var txt;
                                var amount = prompt("Please enter the amount of XPS you want to bet:\n (You have " + <?php echo $xps_user->xps; ?> +" remaining)", " ");
                                if (amount == null || amount == " ") {
                                    txt = "Enter Valid Amount";
                                }
                                else if (amount > 0.9*<?php echo $xps_user->xps; ?> && amount <<?php echo $xps_user->xps; ?>  ) {
                                    txt = "Sorry but you can't spend more than 90% of your XPS ";
                                }
                                else if (amount < 0.9*<?php echo $xps_user->xps; ?> ) {
                                    txt = "Hey " + "<?php echo e($user_row->name); ?>" + "! You are playing for " + amount + "XPS";
                                }
                                
                                
                                
                                else{
                                    txt = "Reload your page!";
                                }
                                document.getElementById("demo").innerHTML = txt;
                            }
                        </script>
        </div></div></div></div>
    </div>
    
    <div>
        <form action="/robowars/betting/bet/post" method="post">
            <?php echo csrf_field(); ?>
            <input type="number" name="amount" max="<?php echo $xps_user->xps; ?>" min="1">
            <select name="bot_name">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <input type="submit">
        </form>
    </div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/app/current/blog/resources/views/2019/robowars/betting_portal/bet.blade.php ENDPATH**/ ?>