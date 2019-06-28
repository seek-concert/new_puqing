@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">
            {{-- 头部开始 --}}
            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">网站设置</h3>
                <div><span class="label">修改网站信息</span></div>
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
                    <h4 class="widget_header_title wwIcon i_16_valid">网站设置</h4>
                </div>
                <div class="widget_contents noPadding">
                    <form action="web_save" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站logo<span class="must">*</span></span>
                            </div>
                            <div class="g_9">
                                <input type="file" name="logo" class="simple_form"/>
                                @if(!empty($list->logo))
                                    <img src="{{$list->logo}}" alt="p7ing.com">
                                    <input type="hidden" name="logo" value="{{$list->logo}}">
                                @endif
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站名称 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="网站名称" name="name" value="{{$list->name}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站标题 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="网站标题" name="title" value="{{$list->title}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站关键字 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="网站关键字" name="keywords" value="{{$list->keywords}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站描述 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <textarea class="simple_field" name="description">{{$list->description}}</textarea>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">网站版权 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="网站版权" name="copyrights" value="{{$list->copyrights}}"
                                       class="simple_field" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">统计代码 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <textarea class="simple_field" name="statistical">{{$list->statistical}}</textarea>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">ICP备案号 <span class="must">*</span></span></div>
                            <div class="g_9">
                                <input type="text" placeholder="ICP备案号" name="copyright" value="{{$list->copyright}}"
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