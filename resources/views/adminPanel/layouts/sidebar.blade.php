
<!--Sidebar Start-->
<aside>
    <div id="sidebar">
        <ul class="sidebar-menu">
            <li class="">
                <a  href="{{route('panel')}}">
                    <i class="fa fa-television"></i>
                    <span>امار دسته ها</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cart-arrow-down"></i>
                    <span>بازیکن</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub clearfix">
                    <li><i class="fa fa-circle-thin z_icon"></i><a href="{{route('addPlayer')}}">اضاف کردن بازیکن</a></li>
                    <li><i class="fa fa-circle-thin z_icon"></i><a href="{{route('listPlayer')}}">لیست بازیکن</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:">
                    <i class="fa fa-cart-plus"></i>
                    <span>تیم</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub clearfix">
                    <li><i class="fa fa-circle-thin z_icon"></i><a href="{{route('addTeam')}}">اضاف کردن تیم</a></li>
                    <li><i class="fa fa-circle-thin z_icon"></i><a href="{{route('listTeam')}}">لیست تیم ها</a></li>

                </ul>
            </li>


               <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i>
                    <span>خروج</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!--Sidebar End-->
  