@extends('pqadmin.public')
@section('content')

    <div class="contents">
        <div class="grid_wrapper">

            <div class="g_6 contents_header">
                <h3 class="i_16_forms tab_label">新增案例</h3>
                <div><span class="label">新增案例信息</span></div>
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
            <form action="{{url('pqadmin/case_add')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="g_12">
                    <div class="widget_header">
                        <h4 class="widget_header_title wwIcon i_16_forms">添加案例信息</h4>
                    </div>
                    <div class="widget_contents noPadding">
                        <div class="line_grid">
                            <div class="g_3"><span class="label">案例封面<span class="must">*</span></span>
                            </div>
                            <div class="g_9">
                                <input type="file" name="thumbnail" class="simple_form"/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">案例标题<span class="must">*</span></span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="title" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">案例网址<span class="must">*</span></span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="url" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">关键字<span class="must">*</span></span></div>
                            <div class="g_9">
                                <input class="simple_field" type="text" name="keywords" required/>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">案例描述<span class="must">*</span></span></div>
                            <div class="g_9">
                                <textarea class="simple_field" name="description"></textarea>
                            </div>
                        </div>
                        <div class="line_grid">
                            <div class="g_3"><span class="label">所属分类<span class="must">*</span></span></div>
                            <div class="g_9">
                                <select class="simple_form" name="category_id">
                                    <option value="" selected="selected"/>请选择所属分类!
                                    @foreach ($list as $value)
                                        <option value="{{$value->id}}"/>{{$value->name}}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{--<div class="line_grid">--}}
                            {{--<div class="g_3"><span class="label">案例内容<span class="must">*</span></span></div>--}}
                            {{--<div class="g_9">--}}
                                {{--<textarea class="simple_field" id="editor_id" name="content"></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="g_12">
                            <div class="widget_header">
                                <h4 class="widget_header_title wwIcon i_16_wysiwyg">案例内容<span class="must">*</span></h4>
                            </div>
                            <div class="widget_contents noPadding">
                                <div class="line_grid">
                                    <div class="g_12">
                                        <textarea class="simple_field" id="editor_id" name="content" style="height:300px;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line_grid">
                    <div class="g_3"><span class="label"></span></div>
                    <div class="g_9">
                        <input type="submit" value="提交" class="submitIt simple_buttons"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('kindeditor::editor',['editor'=>'editor_id','id'=>'1'])
@endsection