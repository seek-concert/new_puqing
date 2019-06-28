@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">
            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">查看新闻</h3>
                <div><span class="label">查看新闻信息</span></div>
            </div>
            <div class="g_6 contents_options">
                <div class="simple_buttons">
                    <a href="javascript:;" onclick="get_cache('')">
                        <div class="bwIcon i_16_help">更新缓存</div>
                    </a>
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
            <div class="g_12">
                <div class="widget_header">
                    <h4 class="widget_header_title wwIcon i_16_forms">查看新闻信息</h4>
                </div>
                <div class="widget_contents noPadding">
                    <div class="line_grid">
                        <div class="g_3"><span class="label">新闻封面<span class="must">*</span></span>
                        </div>
                        <div class="g_9">
                            @if(!empty($list->thumbnail))
                                <img src="{{$list->thumbnail}}" alt="p7ing.com" style="width: 75%;height: 50%">
                                <input type="hidden" name="thumbnail" value="{{$list->thumbnail}}" >
                            @endif
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">新闻标题</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field" name="title" value="{{$list->title}}" disabled/>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">关键字</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field atC" name="keywords" value="{{$list->keywords}}" disabled/>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">新闻描述</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field atC" name="description" value="{{$list->description}}" disabled/>
                        </div>
                    </div>
                    <div class="line_grid">
                        <div class="g_3"><span class="label">所属分类</span></div>
                        <div class="g_9">
                            <input type="text" class="simple_field atC" name="category_name" value="{{$list->category_name}}" disabled/>
                        </div>
                    </div>
                    <div class="g_12">
                        <div class="widget_header">
                            <h4 class="widget_header_title wwIcon i_16_wysiwyg">新闻内容<span class="must">*</span></h4>
                        </div>
                        <div class="widget_contents noPadding">
                            <div class="line_grid">
                                <div class="g_12">
                                    <textarea class="simple_field" id="editor_id" name="content" style="height:300px;" disabled >{!! $list->content !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('kindeditor::editor',['editor'=>'editor_id','id'=>'2'])
@endsection