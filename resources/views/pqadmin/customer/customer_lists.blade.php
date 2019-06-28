@extends('pqadmin.public')
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="contents">
        <div class="grid_wrapper">
            <div class="g_6 contents_header">
                <h3 class="i_16_table tab_label">客户信息</h3>
                <div><span class="label">查看客户所有信息</span></div>
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
            <!-- Separator -->
            <div class="g_12 separator"><span></span></div>
            <div class="g_12">
                <div class="widget_header wwOptions">
                    <h4 class="widget_header_title wwIcon i_16_data">客户信息</h4>
                    <div class="w_Options i_16_settings">
                        <!-- Drop Menu -->
                        <ul class="drop_menu menu_with_icons right_direction">
                            <li>
                                <a class="i_16_add" href="customer_add" title="New Flie">
                                    <span class="label">新增客户</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget_contents noPadding">
                    <table class="datatable tables">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>网站名称</th>
                            <th>网站地址</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $value)
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->web_name}}</td>
                                <td><a href="{{$value->web_url}}" target="_blank" rel="noopener noreferrer">{{$value->web_url}}</a></td>
                                <td>
                                    <a href="{{url('pqadmin/customer_detail/'.$value->id)}}">
                                        <div class="simple_buttons" id="customer_detail" original-title="查看客户详细信息">
                                            <div>查看</div>
                                        </div>
                                    </a>
                                    <a href="{{url('pqadmin/customer_edit/'.$value->id)}}">
                                        <div class="simple_buttons" id="customer_edit" original-title="编辑客户信息">
                                            <div>编辑</div>
                                        </div>
                                    </a>
                                    <div class="simple_buttons" onclick="customer_del({{$value->id}})" id="customer_del" original-title="删除该客户信息,请谨慎操作">
                                        <div>删除</div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function customer_del(id) {

            var d = dialog({
                title: '提示',
                content: '是否确定删除本条数据,该操作不可逆,请谨慎操作',
                okValue: '确定',
                ok: function () {
                    $.ajaxSetup({
                        url: "{{url('pqadmin/customer_del/')}}",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            id: id
                        },
                        success: function (result) {

                            var dia = dialog({
                                title: '提示',
                                content: result.msg,
                                ok: function () {
                                    window.location.reload();
                                    return false;
                                },
                            });
                            dia.show();
                        },
                    });
                    $.ajax();
                },
                cancelValue: '取消',
                cancel: function () {
                }
            });
            d.show();
        }
    </script>

@endsection
