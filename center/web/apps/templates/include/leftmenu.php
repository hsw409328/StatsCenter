<nav>
<ul>
    <li <?php if ($this->isActiveMenu('stats', 'home')){ ?>class="active"<?php } ?>>
        <a href="/stats/home/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">系统首页</span></a>
    </li>
    <?php if ($this->isAllow('stats')) : ?>
    <li <?php if ($this->isActiveMenu('stats')){ ?>class="active"<?php } ?>>
        <a href="/stats/index/" id="stats_index_link"><i class="fa fa-lg fa-fw fa-th"></i> <span class="menu-item-parent">服务端统计数据</span></a>
    </li>
	    <li>
		    <a href="#"><i class="fa fa-lg fa-fw fa-th"></i> <span class="menu-item-parent">客户端统计数据</span></a>
		    <ul>
			    <li>
				    <a href="#" onclick="return false"> <span class="menu-item-parent"> eclicks.cn </span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==1){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=1&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">chelun</span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==2){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=2&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">chelun-pre</span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==3){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=3&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">chaweizhang</span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==4){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=4&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">appdev</span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==7){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=7&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">rtanalysis</span></a>
			    </li>
			    <li>
				    <a href="#" onclick="return false"> <span class="menu-item-parent"> auto98.com </span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==6){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=6&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">common</span></a>
			    </li>
			    <li>
				    <a href="#" onclick="return false"> <span class="menu-item-parent"> chelun.com </span></a>
			    </li>
			    <li <?php if ($this->isActiveMenu('appstats') && $_GET['h']==8){ ?>class="active"<?php } ?>>
				    <a href="/appstats/index/?h=8&date_key=<?php echo urlencode($_GET['date_key']) ?>"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">community.dev</span></a>
			    </li>
		    </ul>
	    </li>    <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-bell"></i> <span class="menu-item-parent">模调管理</span></a>
        <ul>
            <li <?php if ($this->isActiveMenu('setting', 'add_interface')){ ?>class="active"<?php } ?>>
                <a href="/setting/add_interface/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增接口</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'interface_list')){ ?>class="active"<?php } ?>>
                <a href="/setting/interface_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">接口列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'add_module')){ ?>class="active"<?php } ?>>
                <a href="/setting/add_module/"><i class="fa fa-lg fa-fw fa-plus-circle"></i> <span class="menu-item-parent">新增模块</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'module_list')){ ?>class="active"<?php } ?>>
                <a href="/setting/module_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">模块列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'machine')){ ?>class="active"<?php } ?>>
                <a href="/setting/machine/"><i class="fa fa-lg fa-fw fa-star"></i> <span class="menu-item-parent">分层视图</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'passport')){ ?>class="active"<?php } ?>>
                <a href="/setting/passport/"><i class="fa fa-lg fa-fw             fa-suitcase"></i> <span
                        class="menu-item-parent">申请员工登录APP</span></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php
    //只有超级管理员可以修改项目
    if ($this->userinfo['usertype'] == 0):
    ?>
        <li>
        <a href="#"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">系统管理</span></a>
        <ul>
            <li
                <?php if ($this->isActiveMenu('setting', 'add_user')){ ?>class="active"
                <?php } ?>>
                <a href="/setting/add_user/"
            ><i class="fa fa-lg fa-fw fa-user"></i> <span
                        class="menu-item-parent">新增用户</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'user_list')){ ?>
                class="active" <?php } ?>>
                <a href="/setting/user_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span
                        class="menu-item-parent">用户列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'project_list')){ ?>
                class="active" <?php } ?>>
                <a href="/setting/project_list/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                    <span class="menu-item-parent">项目管理</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'app_project_list')){ ?>
                class="active" <?php } ?>>
                <a href="/setting/app_project_list/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                    <span class="menu-item-parent">APP项目管理</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('setting', 'app_list')){ ?>
                class="active" <?php } ?>>
                <a href="/setting/app_list/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                    <span class="menu-item-parent">APP管理</span></a>
            </li>
        </ul>
        </li>
    <?php
    endif;
    //短信查看的权限
    if ($this->isAllow('sms')) : ?>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-envelope"></i> <span class="menu-item-parent">短信管理</span></a>
            <ul>
                <li <?php if ($this->isActiveMenu('msg', 'smslog')){ ?> class="active" <?php } ?>>
                    <a href="/msg/smslog/"><i class="fa fa-lg fa-fw fa-reorder"></i>
                        <span class="menu-item-parent">短信记录</span></a>
                </li>
                <li <?php if ($this->isActiveMenu('msg', 'msg_stats')){ ?>class="active"<?php } ?>>
                    <a href="/msg/msg_stats/"><i class="fa fa-lg fa-fw fa-thumbs-o-up"></i> <span
                            class="menu-item-parent">短信成功率统计</span></a>
                </li>
                <li <?php if ($this->isActiveMenu('msg', 'captcha_stats')){ ?>class="active" <?php } ?>>
                    <a href="/msg/captcha_stats/"><i class="fa fa-lg fa-fw fa-cutlery"></i> <span
                            class="menu-item-parent">验证码使用率统计</span></a>
                </li>
                <li <?php if ($this->isActiveMenu('msg', 'report')){ ?>class="active" <?php } ?>>
                    <a href="/msg/report/"><i class="fa fa-lg fa-fw fa-envelope-o"></i> <span
                            class="menu-item-parent">短信费用报表</span></a>
                </li>
                <li <?php if ($this->isActiveMenu('msg', 'captcha_query')){ ?>class="active" <?php } ?>>
                    <a href="/msg/captcha_query/"><i class="fa fa-lg fa-fw  fa-comments-o"></i> <span
                            class="menu-item-parent">验证码查询</span></a>
                </li>
            </ul>
        </li>
    <?php endif;?>

    <?php if ($this->isAllow('stats')) : ?>
    <li <?php if ($this->isActiveMenu('logs2', 'index')){ ?>class="active"<?php } ?>>
        <a href="/logs2/index/" id="logs2_index_link"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">日志系统</span></a>
    </li>
    <?php endif; ?>
    <li <?php if ($this->isActiveMenu('user', 'passwd')){ ?>class="active"<?php } ?>>
        <a href="/user/passwd/"><i class="fa fa-lg fa-fw fa-key"></i> <span class="menu-item-parent">修改密码</span></a>
    </li>
    <li <?php if ($this->isActiveMenu('user', 'edit')){ ?>class="active"<?php } ?>>
        <a href="/user/edit/"><i class="fa fa-lg fa-fw fa-book"></i> <span class="menu-item-parent">修改资料</span></a>
    </li>
    <?php if ($this->isAllow('app')) : ?>
    <li>
        <a href="#">
            <i class="fa fa-lg fa-fw fa-mobile"></i>
            <span class="menu-item-parent">APP云端控制</span>
        </a>
        <ul>
            <!-- <li <?php if ($this->isActiveMenu('app_host', 'add_project')){ ?>
            class="active" <?php } ?>>
            <a href="/app_host/add_project/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增项目</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'project_list')){ ?>
            class="active" <?php } ?>>
            <a href="/app_host/project_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">项目列表</span></a>
            </li> -->
            <!--
            <li <?php if ($this->isActiveMenu('app_host', 'add_host')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/add_host/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">新增App接口</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'host_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/host_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">App接口列表</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'add_rule')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/add_rule/"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">指定设备接口</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'rule_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/rule_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">指定列表</span></a>
            </li>
            -->
            <li <?php if ($this->isActiveMenu('app_release', 'app_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_release/app_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">APP版本管理</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_host', 'project_list')){ ?>
                class="active" <?php } ?>>
                <a href="/app_host/project_list/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">接口下发</span></a>
            </li>
            <li <?php if ($this->isActiveMenu('app_script', 'index')){ ?>
                class="active" <?php } ?>>
                <a id="menu_app_script_index" href="/app_script/index/"><i class="fa fa-lg fa-fw fa-reorder"></i> <span class="menu-item-parent">JS脚本下发</span></a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
</ul>
</nav>
