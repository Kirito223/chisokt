<section class="sidebar">
    <section class="avatar">
        <section class="sp-pic">
            <img src="{{asset('img/user.png')}}" />
        </section>
        <section class="menu-avatar">
            <nav class='animated bounceInDown'>
                <ul>
                    <li class='sub-menu'><a href='#settings' class="btn-menu-avatar">Admin Bình Định<div
                                class='fa fa-caret-down right'></div></a>
                        <ul class="menu">
                            <li><a onclick="changeAvatar()"><i class="fas fa-user-tie"></i> Đổi ảnh đại diện</a>
                            </li>
                            <li><a onclick="changePasswordAccount()"><i class="fas fa-key"></i> Thay đổi mật khẩu</a></li>
                            <li><a href='#settings'><i class="fas fa-sign-out-alt"></i> Thoát</a></li>
                        </ul>
                    </li>
                    <li class='sub-menu'><a href='/account'><i class="fas fa-users"></i> Quản lý tài khoản
                        </a>
                    </li>
                    <li class='sub-menu'><a href='/decentralized'><i class="fas fa-user-circle"></i> Phân quyền tự đánh
                            giá
                        </a>
                    </li>
                    <li class='sub-menu'><a href='#message'><i class="fas fa-user-circle"></i> Thực hiện đánh giá<div
                                class='fa fa-caret-down right'></div>
                        </a>
                        <ul class="menu">
                            <li><a href='#settings'>Bình định</a></li>
                            <li><a href='#settings'>Submit a Ticket</a></li>
                            <li><a href='#settings'>Network Status</a></li>
                        </ul>
                    </li>
                    <li class='sub-menu'><a href='/message'><i class="fas fa-bell"></i> Thông báo
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
    <section class="main-menu">

    </section>
    <input id="avatarFile" type="file" class="hidden" />
    @include('modals\account\modalChangePassword');
</section>
<link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
<script>
    $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
	$(this).parent(".sub-menu").children("ul").slideToggle("100");
	$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});

function changeAvatar(e){
$('#avatarFile').click();
}

function changePasswordAccount() {
    $("#modelChangePassword").modal("show");
}
</script>