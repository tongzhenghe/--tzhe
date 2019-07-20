<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 16:02
 */

namespace app\index\controller;


use think\Db;

class Wap extends  Common
{
    public function  index()
    {
        //banner
        $banner =  Db::name('banner')->field('img, out_url')
            ->where(['is_del' => 1,'state' => 1, 'is_mobile' =>  1])
            ->select();
        //推荐商品
        $goods = Db::name('vshop')
            ->where(['is_tj' => 1, 'state' => 1])
            ->order('sort asc')
            ->limit(3)
            ->field('icon, name, price')
            ->select();

        //推荐项目-二级推荐
        $prot = Db::name('project_cate')
            ->where(['state' => 1, 'is_del' => 1, 'is_tj' => 1])
            ->field('id, icon,name')
            ->select();

        //最新动态
        $ask = Db::name('ask')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 1, 'is_new' => 1])
            ->field('name, id')
            ->order('sort asc')
            ->select();

        //特价商品
        $goods_d = Db::name('vshop')
            ->where(['state' => 1, 'discount' => 1])
            ->field('name, icon, price')
            ->order('sort asc')
            ->select();

        //医师
        $doc = Db::name('doctor')
            ->where(['is_mobile' => 1, 'state' => 1, 'is_del' => 1])
            ->field('id, name, 	be_expert_in,position, honour, img')
            ->order('sort asc')
            ->select();
        foreach ($doc as &$vc ) {
            $vc['be_expert_in'] = array_slice(\Qiniu\json_decode( $vc['be_expert_in']), 0, 3);
            $vc['honour'] = unserialize( $vc['honour']);
        }

        //我要变美-》真人案例
        $real_show = Db::name('real_show_cate')
            ->where([ 'state' => 1, 'is_del' => 1, ])
            ->field('id , name')->select();
        foreach ($real_show as &$va ) {
            $va['children'] = Db::name('real_show')->order('sort asc')->limit(1)->where(['state' => 1 , 'is_del' => 1, 'is_mobile' => 1, 'cateid' => $va['id']])->select();
            foreach ($va['children'] as &$vc) {
                if (!empty($vc['intro']))  $vc['intro'] = unserialize($vc['intro']);
            }
        }

        //视频
        $video = Db::name('pro_video')
            ->where(['state'=>1 ,'is_del' => 1, 'is_tj' => 1])
            ->limit(3)
            ->field('name, path')
            ->select();

        //公益
        $gy = Db::name('gy')
            ->where(['state' => 1, 'is_del' => 1])
            ->limit(5)
            ->field('intro, img')
            ->select();
        foreach ($gy as &$vc) {
            if (!empty($vc['intro'])) $vc['intro'] =  unserialize($vc['intro']);
        }

        //医疗设备

        $sb = Db::name('machine')->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 1])->field('img')->limit(1)->select();

        return view('', ['banner' => $banner
            , 'goods' => $goods
            , 'prot' => $prot
            ,'ask' => $ask
            ,'goods_d' => $goods_d
            ,'doc' => $doc
            ,'real_show' => $real_show
            ,'video' => $video
            ,'gy' => $gy
            ,'sb' => $sb

        ]);

    }


    //问答详情
    public  function aski()
    {
        //通过id获取
        $param = request()->param();
        if (!empty($param['id'])) {
            $where = ['id' => $param['id']];
            $data = Db::name('ask')->where($where)->find();
            $data['time'] = timeTran($data['time']);
            $data['intro'] = unserialize($data['intro']);
            $data['content'] = html_entity_decode($data['content']);
            $data['seo_title'] = unserialize($data['seo_title']);
            $data['seo_keywords'] = unserialize($data['seo_keywords']);
            $data['seo_description'] = unserialize($data['seo_description']);
        }

        //热门
        $ask = Db::name('ask')
            ->limit(6)
            ->where(['state' => 1, 'is_del' => 1, 'is_hot' => 1])
            ->field('name, id,time')->select();
        return view('', ['data' => $data, 'ask' => $ask]);
    }


    //医生详情
    public  function  doci()
    {
        $param = request()->param();
        if (!empty($param['id'])) {
            $where = ['id' => $param['id']];
            $data = Db::name('doctor')->where($where)->find();
            $data['time'] = timeTran($data['time']);
            $data['intro'] = unserialize($data['intro']);
            $data['content'] = html_entity_decode($data['content']);
            $data['honour'] = unserialize($data['honour']);//荣誉
            $data['be_expert_in'] = json_decode($data['be_expert_in']);//擅长项目
            $data['seo_title'] = unserialize($data['seo_title']);
            $data['seo_keywords'] = unserialize($data['seo_keywords']);
            $data['seo_description'] = unserialize($data['seo_description']);
        }

        $doc = Db::name('doctor')->where(['state' => 1, 'is_del' => 1, 'is_tj' => 1])->field('name, id')->select();
        return view('', ['data' => $data, 'doc' => $doc]);

    }


    //banner content
    public  function  banneri()
    {

        return view();

    }

    //所有项目
    public  function  project()
    {

        //最新动态
        $ask = Db::name('ask')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 1, 'is_new' => 1])
            ->field('name, id')
            ->order('sort asc')
            ->select();


        //分类
        $cate = Db::name('project_cate')
            ->where(['state' => 1, 'is_del' => 1])
            ->field('id, name, icon, pid, is_hot')
            ->select();

        $cate = _reSort($cate);

        return view('', ['cate' => $cate, 'ask' => $ask]);

    }


    //new list
    public  function  newl()
    {
        $list = Db::name('news_cate')
            ->where('state',1)
            ->field('id, name, pid')
            ->where(['state' => 1, 'is_del' => 1])
            ->limit(4)
            ->where('pid=0')
            ->paginate(10)
            ->each(function($item){
                $item['children'] = Db::name('news')
                        ->where(['state' => 1, 'is_mobile' => 1, 'is_del' => 1, 'cateid' => $item['id']])
                        ->order('sort asc')
                        ->select();
            return $item;
        });

        return view('', ['list' => $list]);

    }


        //new list
    public  function  askl()
    {
        $list = Db::name('ask')
            ->where(['state' => 1, 'is_mobile' => 1, 'is_del' => 1])
            ->limit(4)
            ->order('sort asc')
            ->paginate(10);

        return view('', ['list' => $list]);

    }


    //品牌中心
    public  function  about_us()
    {
        $tablename = 'about_us';
        $data = Db::name($tablename)->find();
        if (!empty($data['intro'])) $data['intro'] = unserialize($data['intro']);
        if (!empty($data['seo_title'])) $data['seo_title'] = unserialize($data['seo_title']);
        if (!empty($data['seo_keywords'])) $data['seo_keywords'] = unserialize($data['seo_keywords']);
        if (!empty($data['seo_description'])) $data['seo_description'] = unserialize($data['seo_description']);
        return view('', ['data' => $data]);

    }

    //专家列表
    public  function  docl()
    {
        $doc = Db::name('doctor')
            ->where(['state' => 1, 'is_del' => 1, 'is_mobile' => 1 ])
            ->order('sort asc')
            ->select();

        foreach ($doc as &$v ) {
            if (!empty($v['honour'])) $v['honour'] = utf8_sub_str(unserialize($v['honour']), 1, 25).'..';
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['content'])) $v['content'] = html_entity_decode($v['content']);
            $v['be_expert_in'] = array_slice(json_decode($v['be_expert_in']), 0, 3);
            if (!empty($v['be_expert_in'])) $v['be_expert_in'] = implode('、', $v['be_expert_in']);
            if (!empty($v['seo_title'])) $v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
        }

        return view('', ['doc' => $doc]);

    }


    //真人秀列表
    public  function  real_showl()
    {

        return view();

    }






    //来院路线
    public  function  contact()
    {
        $data = Db::name('contact')->find();
        if ($data['tel']) $data['tel'] = \Qiniu\json_decode($data['tel']);
        if ($data['address']) $data['address'] = unserialize($data['address']);
        if ($data['recruit']) $data['recruit'] = \Qiniu\json_decode($data['recruit']);
        if ($data['bus']) $data['bus'] = implode('、', \Qiniu\json_decode($data['bus']));
        if ($data['seo_title']) $data['seo_title'] = unserialize($data['seo_title']);
        if ($data['seo_keywords']) $data['seo_keywords'] = unserialize($data['seo_keywords']);
        if ($data['seo_description']) $data['seo_description'] = unserialize($data['seo_description']);

        return view('', ['data' => $data]);

    }





}