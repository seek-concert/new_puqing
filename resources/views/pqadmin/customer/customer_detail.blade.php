@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">
            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">查看客户</h3>
                <div><span class="label">查看客户信息</span></div>
            </div>
            <div class="g_6 contents_options">
                <div class="simple_buttons">
                    <a href="javascript:;" onclick="get_cache('')"><div class="bwIcon i_16_help">更新缓存</div></a>
                </div>
                <div class="simple_buttons">
                    <div class="bwIcon i_16_settings">Settings</div>
                    <div class="buttons_arrow">
                        <!-- Drop Menu -->
                        <ul class="drop_menu menu_with_icons right_direction">
                            <li>
                                <a class="i_16_add" href="#" title="New Flie">
                                    <span class="label">New File</span>
                                </a>
                            </li>
                            <li>
                                <a class="i_16_progress" href="#" title="2 Files Left">
                                    <span class="label">Files Left</span>
                                    <span class="small_count">2</span>
                                </a>
                            </li>
                            <li>
                                <a class="i_16_files" href="#" title="Browse Files">
                                    <span class="label">Browse Files</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="g_12 separator"><span></span></div>
            <form action="{{url('pqadmin/customer_edit')}}" method="post">
                {{ csrf_field() }}
                <input class="simple_field" type="hidden" name="id" value="{{$info->id}}"/>
                <div class="g_12">
                    <div class="widget_header">
                        <h4 class="widget_header_title wwIcon i_16_forms">查看客户信息</h4>
                    </div>
                    <div class="widget_contents noPadding">
                        <div class="line_grid">
                            <div class="g_3"><span class="label">客户姓名</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="username" value="{{$info->username}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">联系方式</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="phone" value="{{$info->phone}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">(公司)项目名称</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="web_name" value="{{$info->web_name}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">项目链接</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="web_url" value="{{$info->web_url}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔地址</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="bt_url" value="{{$info->bt_url}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔用户名</span></div>
                            <div class="g_9">
                                <input class="simple_field tooltip" type="text" name="bt_username" value="{{$info->bt_username}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">宝塔密码</span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="bt_password" value="{{$info->bt_password}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label ">云服务器账户登录账号</span></div>
                            <div class="g_9">
                                <input class="simple_field fiwIcon" name="yun_username" value="{{$info->yun_username}}" disabled/>

                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器账户登录密码</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field" name="yun_password" value="{{$info->yun_password}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器账户</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field" name="yun_services_username" value="{{$info->yun_services_username}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">云服务器密码</span></div>
                            <div class="g_9">
                                <input type="text" class="simple_field atC" name="yun_services_password" value="{{$info->yun_services_password}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">服务到期时间</span></div>
                            <div class="g_9">
                                <input class="simple_field pick_date" type="text" name="services_end_time" value="{{date('d/m/Y',$info->services_end_time)}}" disabled/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">其他</span></div>
                            <div class="g_9">
                                <textarea class="simple_field elastic" name="description" disabled >{{$info->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection