<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
<aside id="colorlib-aside" role="complementary" class="border js-fullheight" >
    <a href="/"><img src="/2019/homepage/logo_edit.png" alt="" style="width: 130%; margin-left:-15%"></a>
    <nav id="colorlib-main-menu" role="navigation" style="font-size: medium;bottom: 20%;right: 20%;position: absolute;">
        <ul>
            <li ><a href="/competitions">Home</a></li>
            <?php if(!empty($competition_info->structure)): ?>
                <li ><a onclick="myFunction1()">Structure</a></li>
            <?php endif; ?>
            <?php if(!empty($competition_info->faqs)): ?>
                <li ><a onclick="myFunction2()">FaQs</a></li>
            <?php endif; ?>
            <?php if(!empty($competition_info->timeline)): ?>
            <li ><a onclick="myFunction3()">Timeline</a></li>
            <?php endif; ?>
            <?php if(!empty($competition_info->resources)): ?>
                <li ><a onclick="myFunction4()">Resources</a></li>
            <?php endif; ?>
            <?php if(!empty($competition_info->contact_us)): ?>
                <li ><a onclick="myFunction5()">Contact Us</a></li>
            <?php endif; ?>

        </ul>
    </nav>
</aside><?php /**PATH /var/app/current/blog/resources/views/2019/competitions/layouts/left_panel.blade.php ENDPATH**/ ?>