<?php
namespace app\index\controller;

use think\Db;
use think\Request;

class Index extends Common
{
    public function index()
    {
        //banner
        $banner = Db::name('banner')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 2])
            ->field('img, out_url')
            ->order('sort asc')->select();

        //本月专场
        $new_activity = Db::name('activity')
            ->where(['is_del' => 1 , 'state' => 1, 'is_new' => 1, 'is_mobile' => 2])
            ->field('name, id, img, out_url')
            ->order('sort asc')
            ->limit(2)
            ->select();
        //新闻

        $new_news = Db::name('news')
            ->where(['is_del' => 1 , 'state' => 1, 'is_new' => 1, 'is_mobile' => 2])
            ->field('name, icon, id')
            ->order('sort asc')
            ->limit(6)
            ->select();

        //最新专题
        $new_jt = Db::name('subject')
            ->where(['is_del' => 1 , 'state' => 1, 'is_new' => 1, 'is_mobile' => 2])
            ->field('name, img, id')
            ->order('sort asc')
            ->select();

        //事记

        $note = Db::name('notes')->where(['state' => 1, 'is_del' =>1])->field('name, alias_name, img, intro')->select();

        foreach ($note as &$v ) {
            $v['img'] = unserialize( $v['img']);
            $v['intro'] = unserialize( $v['intro']);
        }

        return view('', ['banner' => $banner, 'new_activity' => $new_activity, 'new_news' => $new_news, 'new_jt' => $new_jt, 'note' => $note]);

    }



    //contact
    public  function  contact()
    {

        $data = null;
        $data = Db::name('contact')->find();
        if (!empty($data)) {
            $data['address'] = unserialize( $data['address']);
            $data['recruit'] = json_decode( $data['recruit']);
            $data['bus'] = json_decode( $data['bus']);
            $data['seo_title'] = unserialize( $data['seo_title']);
            $data['seo_keywords'] = unserialize( $data['seo_keywords']);
            $data['seo_description'] = unserialize( $data['seo_description']);
        }

        return view('', ['data' => $data]);
    }

    //expertl
    public  function  expertl()
    {
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 2])
            ->field('id, name, img, honour, intro,be_expert_in,position')
            ->select();
        foreach ($expert as &$v) {
            if (!empty($v['honour'])) $v['honour'] = unserialize($v['honour']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['be_expert_in'])) $v['be_expert_in'] = json_decode($v['be_expert_in']);
        }


        //推荐项目
        $rpro  = Db::name('project')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 2, 'is_tj' => 1])
            ->field('id, name')
            ->limit(10)
            ->select();



        $data['seo_title'] = '酒泉整形医师列表';

        return view('', ['expert' => $expert, 'rpro' => $rpro, 'data' => $data]);
    }


    public  function  about()
    {
        //获取简介、 视频、 医师团队、 设备
        $intro = Db::name('about_us')->find();
        if (!empty($intro['seo_title'])) $intro['seo_title'] = unserialize($intro['seo_title']);
        if (!empty($intro['seo_keywords'])) $intro['seo_keywords'] = unserialize($intro['seo_keywords']);
        if (!empty($intro['seo_description'])) $intro['seo_description'] = unserialize($intro['seo_description']);
        if (!empty($intro['intro'])) $intro['intro'] = unserialize($intro['intro']);
        //设备
        $machine = Db::name('machine')->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 2])
            ->field('id, name, img')->order('sort asc')->select();

        $intro['name'] = $intro['seo_title'];
        $intro['intro'] = $intro['seo_description'];
        return view('', ['data' => $intro, 'machine' => $machine]);
    }

    //先进设备
    public  function  machinel()
    {
        return view();

    }


    //全部项目
    public  function  proall()
    {
        $where_a  = ['is_del' => 1, 'state' => 1];
        $project_all  = Db::name('project_cate')->field('id, pid, name')->where($where_a)->select();
        $project_all = _reSort($project_all);

        foreach ($project_all as &$v) {
            foreach ($v['children'] as &$vc) {
                $pro = Db::name('project')->where($where_a)
                    ->where(['cateid'=> $vc['id'], 'is_mobile' => 2])
                    ->field('name, is_hot, id')->order('sort asc')->select();
                if (!empty($pro)) {
                    $vc['child'] = $pro;
                }

            }
        }

        return view('', ['project_all' => $project_all]);

    }

    public  function  newsi()
    {
        //添加瀏覽記錄
        $param = request()->param();
        //求上一篇和下一篇

        //  怎么当当前页为第首页或最后一页就禁止

        if (!empty($param['action'])) {
            switch ($param['action']) {
                case 'up'://上一篇
                    $newsi = Db::name('news')->where(['is_mobile'=> 2, 'state' => 1, 'is_del' =>1])->where('id<'.intval($param['id']))->order('id desc')->limit(0,1)->find();

                    break;
                case 'down':  //下一篇
                    $newsi = Db::name('news')->where(['is_mobile'=> 2, 'state' => 1, 'is_del' =>1])->where('id>'.intval($param['id']))->order('id asc')->limit(0,1)->find();
                    break;
                default:
                    exit((1));
                    break;
            }
            Db::name('news')->where('id', intval($newsi['id']))->setInc('view_num');
            if(empty($newsi)) if (empty($newsi)) $this->error('没有了！');
        }else {
            Db::name('news')->where('id', intval($param['id']))->setInc('view_num');
            $newsi = Db::name('news')->where('id' , intval($param['id']))->find();
        }

        if (!empty($newsi['intro'])) $newsi['intro'] = unserialize($newsi['intro']);
        if (!empty($newsi['content'])) $newsi['content'] = html_entity_decode($newsi['content']);
        if (!empty($newsi['seo_title'])) $newsi['seo_title'] = unserialize($newsi['seo_title']);
        if (!empty($newsi['seo_keywords'])) $newsi['seo_keywords'] = unserialize($newsi['seo_keywords']);
        if (!empty($newsi['seo_description'])) $newsi['seo_description'] = unserialize($newsi['seo_description']);
        $newsi['time'] = timeTran($newsi['time']);

        //全部新闻
        $news_all = Db::name('news a')
            ->join('news_cate b', 'a.cateid=b.id', 'LEFT')

            ->where(['a.state' => 1, 'a.is_del' => 1, 'a.is_mobile' =>2])
            ->order('a.sort asc')
            ->field('a.id, a.intro,a.icon, a.name, a.time, b.name cate_name')
            ->select();

        foreach ( $news_all as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 150). '...';
            $v['time'] = timeTran($v['time']);
        }

        //医师团队
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_tj' => 1])
            ->order('sort asc')
            ->field('id, img')
            ->select();

        //其他人浏览热门
        $hot_news = Db::name('news')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->limit(10)
            ->field('id, name, intro')
            ->select();

        //热门活动专题
        foreach ( $hot_news as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 25). '...';
        }

        $data = $newsi;
        return view('', ['data' => $data, 'expert' => $expert, 'hot_news' => $hot_news, 'news_all' => $news_all, 'rand_s' => rand(111111, 999999), 'data' => $data]);

    }

    public  function  newsl()
    {
        //全部新闻
        $news_all = Db::name('news a')
            ->join('news_cate b', 'a.cateid=b.id', 'LEFT')
            ->where(['a.state' => 1, 'a.is_del' => 1, 'a.is_mobile' =>2])
            ->order('a.sort asc')
            ->field('a.id, a.intro,a.icon, a.name, a.time, b.name cate_name')
            ->paginate(10, true);

        //当用户第一次进入页面显示数据为1（开始【动态】）- 10（每页显示条数）
        // 当用户下一页的时候，此页面应该 11-11+10

        foreach ( $news_all as &$v ) {
//            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 150). '...';
            $v['time'] = timeTran($v['time']);
        }


        //热门活动
        $hot_activity = Db::name('activity')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->field('id, out_url,img')
            ->select();

        //医师团队
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_tj' => 1])
            ->order('sort asc')
            ->field('id, img')
            ->select();

        //其他人浏览热门
        $hot_news = Db::name('news')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->limit(10)
            ->field('id, name, intro')
            ->select();


        //热门活动专题
//        $pro = Db::name('project')
//            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
//            ->order('sort asc')
//            ->limit(10)
//            ->select();


        foreach ( $hot_news as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 25). '...';
        }

        return view('', ['hot_activity' => $hot_activity, 'expert' => $expert, 'hot_news' => $hot_news, 'news_all' => $news_all]);

    }


    public  function  askl()
    {
        //ask
        $ask_alls = Db::name('ask a')
            ->join('ask_cate b', 'a.cateid=b.id', 'LEFT')
            ->where(['a.state' => 1, 'a.is_del' => 1, 'a.is_mobile' =>2])
            ->order('a.sort asc')
            ->field('a.id, a.intro,a.icon, a.name, a.time, b.name cate_name')
            ->paginate(10, true);

        //热门活动
        $hot_activity = Db::name('activity')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->field('id, out_url,img')
            ->select();

        //医师团队
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_tj' => 1])
            ->order('sort asc')
            ->field('id, img')
            ->select();

        //猜您还关心
        $hot_asks = Db::name('ask')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->limit(5)
            ->field('id, name, intro')
            ->select();

        foreach ( $hot_asks as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 25). '...';
        }


        $data['name'] = '酒泉华美整形-问答列表';
        return view('', ['hot_activity' => $hot_activity, 'expert' => $expert, 'hot_asks' => $hot_asks, 'ask_alls' => $ask_alls, 'data' => $data]);

    }



    public  function  aski()
    {
        //添加瀏覽記錄
        $param = request()->param();
        //求上一篇和下一篇

        //  怎么当当前页为第首页或最后一页就禁止

        if (!empty($param['action'])) {
            switch ($param['action']) {
                case 'up'://上一篇
                    $asks = Db::name('ask')->where(['is_mobile'=> 2, 'state' => 1, 'is_del' =>1])->where('id<'.intval($param['id']))->order('id desc')->limit(0,1)->find();

                    break;
                case 'down':  //下一篇
                    $asks = Db::name('ask')->where(['is_mobile'=> 2, 'state' => 1, 'is_del' =>1])->where('id>'.intval($param['id']))->order('id asc')->limit(0,1)->find();
                    break;
                default:
                    exit((1));
                    break;
            }
            Db::name('ask')->where('id', intval($asks['id']))->setInc('view_num');
            if(empty($asks)) if (empty($asks)) $this->error('没有了！');
        }else {
            Db::name('ask')->where('id', intval($param['id']))->setInc('view_num');
            $asks = Db::name('ask')->where('id' , intval($param['id']))->find();
        }

        if (!empty($asks['intro'])) $asks['intro'] = unserialize($asks['intro']);
        if (!empty($asks['content'])) $asks['content'] = html_entity_decode($asks['content']);
        if (!empty($asks['seo_title'])) $asks['seo_title'] = unserialize($asks['seo_title']);
        if (!empty($asks['seo_keywords'])) $asks['seo_keywords'] = unserialize($asks['seo_keywords']);
        if (!empty($asks['seo_description'])) $asks['seo_description'] = unserialize($asks['seo_description']);
        $asks['time'] = timeTran($asks['time']);


        //自动生成关联超链
        $keywords = Db::name('keywords_link')->where('state', 1)->select();

        $asks['content'] = rek($keywords, $asks['content']);



        //医师团队
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_tj' => 1])
            ->order('sort asc')
            ->field('id, img')
            ->select();

        //猜您还关心
        $hot_asks = Db::name('ask')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->limit(5)
            ->field('id, name, intro')
            ->select();

        //热门活动专题
        foreach ( $hot_asks as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 25). '...';
        }

        $data = $asks;
        return view('', ['data' => $data, 'expert' => $expert, 'hot_asks' => $hot_asks,  'rand_s' => rand(111111, 999999)]);

    }



    //专题详情
    public  function  subi()
    {

        $params = \request()->param();

        if (!empty($params['id']))
        {
            $subi = Db::name('subject')->where('id', intval($params['id']))
                ->find();

            if (!empty($subi)) {
                $subi['content'] = html_entity_decode($subi['content']);
                $subi['intro'] = unserialize($subi['intro']);
                $subi['seo_keywords'] = unserialize($subi['seo_keywords']);
            }

        }

        return view('', ['data' => $subi]);

    }





    //项目专题
    public  function  subl()
    {
//        $subject = Db::name('subject a')
//            ->join('subject_cate b', 'a.cateid = b.id','LEFT')
//            ->where(['a.state'=> 1, 'a.is_del' => 1, 'a.is_mobile' => 2])
//            ->field('a.*,b.name catename')
//            ->select();
//        wl_debug($subject);


        //ask
        $ask_alls = Db::name('ask a')
            ->join('ask_cate b', 'a.cateid=b.id', 'LEFT')
            ->where(['a.state' => 1, 'a.is_del' => 1, 'a.is_mobile' =>2])
            ->order('a.sort asc')
            ->field('a.id, a.intro,a.icon, a.name, a.time, b.name cate_name')
            ->paginate(10, true);

        //热门活动
        $hot_activity = Db::name('activity')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->field('id, out_url,img')
            ->select();

        //医师团队
        $expert = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_tj' => 1])
            ->order('sort asc')
            ->field('id, img')
            ->select();

        //猜您还关心
        $hot_asks = Db::name('ask')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' =>2, 'is_hot' => 1])
            ->order('sort asc')
            ->limit(5)
            ->field('id, name, intro')
            ->select();

        foreach ( $hot_asks as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = utf8_sub_str(unserialize($v['intro']), 0, 25). '...';
        }


        $data['seo_title'] = '酒泉华美医疗美容医问答院列表';

        return view('', ['hot_activity' => $hot_activity, 'expert' => $expert, 'hot_asks' => $hot_asks, 'ask_alls' => $ask_alls, 'data' => $data]);

    }






    public  function  test()
    {
        return view();


    }

    public  function operation()
    {
        $param = request()->param();

        jsondebug($param);

        if (empty($param['news_id'])) exit(return_json('', 400, false, '数据不存在'));

        if (!empty($param)) {
            //将数据存入数据库
            $news_id = intval($param['news_id']);
            //更新数据
            $data = ['dz_num' => 1];
            $res = Db::name('news')
                ->where('id', $news_id)
                ->update($data);
            //当用户点赞同时将当前用户ip和新闻id存入session， 但是需要提前判断一下， 如果相同ip和相同新闻id



        }


    }

}