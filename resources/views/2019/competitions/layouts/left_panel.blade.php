<div class="dropdown " style="float:left;">
    <button class=" btn btn-primary btn-learn " style="margin-top: 4px;">More</button>
    <div class="dropdown-content" style="left: 1px;">
        @if(!empty($competition_info->structure))
            <a onclick="myFunction1()">Structure</a>
        @endif
        @if(!empty($competition_info->faqs))
            <a onclick="myFunction2()">FaQs</a>
        @endif
        @if(!empty($competition_info->timeline))
            <a onclick="myFunction3()">Timeline</a>
        @endif
        @if(!empty($competition_info->rules))
            <a onclick="myFunction6()">Rules</a>
        @endif
        @if(!empty($competition_info->resources))
            <a onclick="myFunction4()">Resources</a>
        @endif
        @if(!empty($competition_info->contact_us))
            <a onclick="myFunction5()">Contact Us</a>
        @endif
    </div>
</div>
