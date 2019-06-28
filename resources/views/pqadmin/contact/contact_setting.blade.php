@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">
            {{-- 头部开始 --}}
            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">联系设置</h3>
                <div><span class="label">设置联系我们</span></div>
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
            {{-- 头部结束 --}}
            {{-- 隔断线 --}}
            <div class="g_12 separator"><span></span></div>
            {{-- 正文开始 --}}
            <div class="g_12">
                <div class="widget_header">
                    <h4 class="widget_header_title wwIcon i_16_valid">联系设置</h4>
                </div>
                <div class="widget_contents noPadding">
                    <form action="{{url('pqadmin/contact_setting')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="line_grid">
                            <div class="g_3"><span class="label">售前专线 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="售前专线" name="before_service_phone" value="{{isset($contact_info['before_service_phone'])?$contact_info['before_service_phone']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">售前QQ<span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="售前QQ" name="before_service_qq" value="{{isset($contact_info['before_service_qq'])?$contact_info['before_service_qq']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">售后专线 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="售后专线" name="after_service_phone" value="{{isset($contact_info['after_service_phone'])?$contact_info['after_service_phone']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">售后QQ <span class="must">*</span></span></div>
                            <div class="g_9">
                            <input type="text" placeholder="售后QQ" name="after_service_qq" value="{{isset($contact_info['after_service_qq'])?$contact_info['after_service_qq']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">联系地址 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="联系地址" name="address" value="{{isset($contact_info['address'])?$contact_info['address']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">邮政编码 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="邮政编码" name="post_code" value="{{isset($contact_info['post_code'])?$contact_info['post_code']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">企业邮箱 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="企业邮箱" name="company_email" value="{{isset($contact_info['company_email'])?$contact_info['company_email']:''}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_9">
                                <input type="submit" value="修改" class="submitIt simple_buttons"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- 正文结束 --}}
        </div>
    </div>

@endsection