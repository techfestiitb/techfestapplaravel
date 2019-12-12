<div class="dropdown " style="float:left;">
    <button class=" btn btn-primary btn-learn " style="margin-top: 4px;">More</button>
    <div class="dropdown-content" style="left: 1px;">
        <?php if(!empty($competition_info->structure)): ?>
            <a onclick="myFunction1()">Structure</a>
        <?php endif; ?>
        <?php if(!empty($competition_info->faqs)): ?>
            <a onclick="myFunction2()">FaQs</a>
        <?php endif; ?>
        <?php if(!empty($competition_info->timeline)): ?>
            <a onclick="myFunction3()">Timeline</a>
        <?php endif; ?>
        <?php if(!empty($competition_info->rules)): ?>
            <a onclick="myFunction6()">Rules</a>
        <?php endif; ?>
        <?php if(!empty($competition_info->resources)): ?>
            <a onclick="myFunction4()">Resources</a>
        <?php endif; ?>
        <?php if(!empty($competition_info->contact_us)): ?>
            <a onclick="myFunction5()">Contact Us</a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/app/current/blog/resources/views/2019/competitions/layouts/left_panel.blade.php ENDPATH**/ ?>