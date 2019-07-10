<?php
/**
*【路由】
*@author 普擎科技
*/
Route::get('test', function () {
    return 'Hello World';
});

/**
 *[前台目录]
 */
Route::namespace('index')->group(function () {
    /*=======================[首页]=============================*/
    Route::any('/', 'IndexController@index');

    /*=======================[网站建设]=============================*/
    /*------ [首页] -----*/
    Route::any('/web', 'WebController@index');
    /*------ [商城网站] -----*/
    Route::any('/web_site_shop_web', 'WebController@web_site_shop_web');//B2B
    Route::any('/web_site_shop_b2b2c', 'WebController@web_site_shop_b2b2c');//B2B2C
    Route::any('/web_site_shop_sale', 'WebController@web_site_shop_sale');//分销
    /*------ [企业官网] -----*/
    Route::any('/web_site_company_web', 'WebController@web_site_company_web');//企业官网
    Route::any('/web_site_company_view', 'WebController@web_site_company_view');//视觉形象展示网站
    Route::any('/web_site_company_sale', 'WebController@web_site_company_sale');//营销型
    Route::any('/web_site_company_all', 'WebController@web_site_company_all');//响应式
    /*------ [手机网站] -----*/
    Route::any('/web_site_html5', 'WebController@web_site_html5');
    /*------ [门户网站] -----*/
    Route::any('/web_site_portal_web', 'WebController@web_site_portal_web');
    /*------ [后台管理系统] -----*/
    Route::any('/web_site_admin', 'WebController@web_site_admin');

    /*=======================[微信开发]=============================*/
    /*------ [首页] -----*/
    Route::any('/wechat', 'WechatController@index');
    /*------ [公众号] -----*/
    Route::any('/wechat_dev_public', 'WechatController@wechat_dev_public');//公众号
    /*------ [小程序] -----*/
    Route::any('/wechat_dev_small', 'WechatController@wechat_dev_small');
    /*------ [微商城] -----*/
    Route::any('/wechat_site_shop_web', 'WechatController@wechat_site_shop_web');//B2B
    Route::any('/wechat_site_shop_b2b2c', 'WechatController@wechat_site_shop_b2b2c');//B2B2C
    Route::any('/wechat_site_shop_sale', 'WechatController@wechat_site_shop_sale');//分销
    /*------ [微服务] -----*/
    Route::any('/wechat_dev_service', 'WechatController@wechat_dev_service');

    /*=======================[软件定制]=============================*/
    /*------ [首页] -----*/
    Route::any('/app', 'AppController@index');
    /*------ [软件定制] -----*/
    Route::any('/soft_creat_app', 'AppController@soft_creat_app');

    /*=======================[成功案例]=============================*/
    /*------ [首页] -----*/
    Route::any('/case', 'CaseController@index');
    /*------ [成功案例详情] -----*/
    Route::any('/case_info/{id}', 'CaseController@case_info');
    Route::any('/case_show/{id}', 'CaseController@case_show');//old

    /*=======================[新闻资讯]=============================*/
    /*------ [首页] -----*/
    Route::any('/news', 'NewsController@index');
    /*------ [新闻资讯详情] -----*/
    Route::any('/news_info/{id}', 'NewsController@news_info');
    Route::any('/news_show/{id}', 'NewsController@news_show');//old

    /*=======================[关于普擎]=============================*/
    /*------ [首页] -----*/
    Route::any('/about', 'AboutController@index');

});

/**
 *[后台目录]
 */
Route::namespace('pqadmin')->group(function () {
    //跳转提示页
    Route::resource('pqadmin/prompt','PromptController');
    //登录页
    Route::any('pqadmin/login', 'LoginController@login');
    //登录
    Route::any('pqadmin/passport', 'LoginController@passport');
    //退出登录
    Route::any('pqadmin/loginOut', 'LoginController@loginOut');
    //后台首页
    Route::any('pqadmin/index', 'IndexController@index');
    //网站设置
    Route::any('pqadmin/web_setting','WebController@index');
    //网站设置修改
    Route::any('pqadmin/web_save','WebController@save');
    //banner图
    Route::any('pqadmin/banner','BannerController@index');
    //banner图新增
    Route::any('pqadmin/banner_add','BannerController@add');
    //banner图修改
    Route::any('pqadmin/banner_edit/{id}','BannerController@edit');
    //banner图删除
    Route::any('pqadmin/banner_del/{id}','BannerController@del');
    //解决方案
    Route::any('pqadmin/solution','SolutionController@index');
    //解决方案新增
    Route::any('pqadmin/solution_add','SolutionController@add');
    //解决方案修改
    Route::any('pqadmin/solution_edit/{id}','SolutionController@edit');
    //解决方案查看
    Route::any('pqadmin/solution_detail/{id}','SolutionController@detail');
    //解决方案删除
    Route::any('pqadmin/solution_del/{id}','SolutionController@del');
    //案例分类
    Route::any('pqadmin/case_category','CaseCategoryController@index');
    //案例分类新增
    Route::any('pqadmin/case_category_add','CaseCategoryController@add');
    //案例分类修改
    Route::any('pqadmin/case_category_edit/{id}','CaseCategoryController@edit');
    //案例分类删除
    Route::any('pqadmin/case_category_del/{id}','CaseCategoryController@del');
    //案例
    Route::any('pqadmin/case','CaseController@index');
    //案例新增
    Route::any('pqadmin/case_add','CaseController@add');
    //案例修改
    Route::any('pqadmin/case_edit/{id}','CaseController@edit');
    //查看案例详情
    Route::any('pqadmin/case_detail/{id}','CaseController@detail');
    //案例删除
    Route::any('pqadmin/case_del/{id}','CaseController@del');
    //新闻分类
    Route::any('pqadmin/news_category','NewsCategoryController@index');
    //新闻分类新增
    Route::any('pqadmin/news_category_add','NewsCategoryController@add');
    //新闻分类修改
    Route::any('pqadmin/news_category_edit/{id}','NewsCategoryController@edit');
    //新闻分类删除
    Route::any('pqadmin/news_category_del/{id}','NewsCategoryController@del');
    //新闻
    Route::any('pqadmin/news','NewsController@index');
    //新闻新增
    Route::any('pqadmin/news_add','NewsController@add');
    //新闻修改
    Route::any('pqadmin/news_edit/{id}','NewsController@edit');
    //新闻详情
    Route::any('pqadmin/news_detail/{id}','NewsController@detail');
    //新闻删除
    Route::any('pqadmin/news_del/{id}','NewsController@del');
    //客户信息
    Route::any('pqadmin/customer_lists','CustomerController@customer_lists');
    //添加新客户
    Route::any('pqadmin/customer_add','CustomerController@customer_add');
    //修改客户信息
    Route::any('pqadmin/customer_edit/{id?}','CustomerController@customer_edit');
    //查看客户详情
    Route::any('pqadmin/customer_detail/{id?}','CustomerController@customer_detail');
    //删除客户详情
    Route::any('pqadmin/customer_del/{id?}','CustomerController@customer_del');
    //设置网站联系方式
    Route::any('pqadmin/contact_setting','ContactController@contact_setting');
    //更新缓存
    Route::any('pqadmin/get_cache','CacheController@get_cache');
});