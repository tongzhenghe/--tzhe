<?php

namespace app\webadmin\controller;

use app\extra\Upload;
use Qiniu\Auth;
use think\Db;
use \app\webadmin\model\Index as IndexModel;
use think\response\Json;
use Workerman\Lib\Timer;

class Index extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        return view();

    }

    public function app()
    {
        return view();
    }

    public function grid()
    {
        return view();
    }


    public function button()
    {
        return view();
    }


    public function form()
    {
        return view();
    }

    public function nav()
    {
        return view();
    }

    public function tab()
    {
        return view();
    }

    public function progress()
    {
        return view();
    }




    public function panel()
    {
        return view();
    }

    public function badge()
    {
        return view();
    }

    public function timeline()
    {
        return view();
    }

    public function table_element()
    {
        return view();
    }

    public function anim()
    {
        return view();
    }

    public function auxiliar()
    {
        return view();
    }

    public function layer()
    {
        return view();
    }


    public function laydate()
    {
        return view();
    }


    public function table()
    {
        return view();
    }


    public function laypage()
    {
        return view();
    }

    public function carousel()
    {
        return view();
    }


    public function laytpl()
    {
        return view();
    }


    public function flow()
    {
        return view();
    }


    public function util()
    {
        return view();
    }


    public function code()
    {
        return view();
    }

    public function select_index()
    {
        return view();
    }



    public function keywords_link()
    {
        $tablename = 'keywords_link';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            if ($post['do'] == 'delFind') {
                $res = Db::name('keywords_link')->where('id', intval($post['id']))->delete();
                if ($res) exit(iJson());
            }
            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tablename, $post );
                if ($result) exit(iJson());
            }
        }


        $keywords_link = Db::name($tablename)->select();
        foreach ($keywords_link as &$v) {

            $v['time'] = timeTran($v['time']);

            $v['re_keywords'] = implode(",", (array)json_decode($v['re_keywords']));

        }

        return view('', ['keywords_link' => $keywords_link]);
    }



    //user
    public  function  addkeywords_link()
    {
        //如果选择了下级， 将自动选择其上级
        $tablename = 'keywords_link';
        $post = request()->param();
        if (request()->isAjax()) {
            //验证密码
            if (empty($post['arr_re_keywords']) || !is_array($post['arr_re_keywords']))  exit(iJson('',false, '关联词不能为空！'));
            if (empty($post['link']))  exit(iJson('',false, '链接不能为空!'));

            $data = [
                'link' => trim($post['link'])
                , 're_keywords' => json_encode($post['arr_re_keywords'])
                , 'state' => 1
                ,'time' => time()
            ];

            if (empty($post['id']))
                if(Db::name($tablename)->insert($data)) exit(iJson());
            if(Db::name($tablename)->where('id', intval($post['id']))->update($data)) exit(iJson());

        }

        if (!empty($post['id'])) {
            $row = Db::name($tablename)->where('id', $post['id'])->find();

            if (!empty($row['re_keywords'])) $row['re_keywords'] = json_decode($row['re_keywords']);

            $this->assign('row', $row);
        }

        return view();

    }







    //menu
    public function menu()
    {
        $where = [ 'is_del' => 1];
        //delete
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            if ($post['do'] == '_state') {
                $child = Db::name('admin_menu')->where($where)->where('pid', intval($post['id']))->select();
                if (!empty($child)) exit(iJson('',false, '此数据有子分类， 无法改变！'));
                $result = IndexModel::changeState('admin_menu', $post );
                if ($result) exit(iJson());
            }

            if ($post['do'] == 'delFind') {
                $child = Db::name('admin_menu')->where($where)->where('pid', intval($post['id']))->select();
                if (!empty($child)) exit(iJson('',false, '此数据有子分类， 无法删除！'));
                $res = IndexModel::deleteFindOne('admin_menu', intval($post['id']));
                if ($res) exit(iJson());
            }
        }

        $menu = Db::name('admin_menu')->where($where)->select();
        $menu = tree($menu);
        return view('', ['menu' => $menu]);

    }


   //menu
    public function addmenu()
    {
        $where = [ 'is_del' => 1];
        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name('admin_menu')->where('id', intval($get['id']))->where($where)->find();
        }

        $post = request()->post();
        if (!empty($post)) {
            //通过pid获取
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));
            $post['path'] = $post['path'] ? $post['path'] : 'javascript:;';
            $data = [
                'state' => 1
                ,'is_del'=> 1
                ,'time' => time()
                ,'name' => trim($post['name'])
                ,'path' => trim($post['path'])
                ,'pid' => intval($post['pid'])
            ];

            if (empty( $post['id'] )) {
                $res = Db::name('admin_menu')->insert($data);
            } else {
                $res = Db::name('admin_menu')->where('id' ,intval($post['id']))->update($data);
            }
            if ($res) exit(iJson());
        }

        $menu = Db::name('admin_menu')->where($where)->select();
        $menu = tree($menu);
        return view('', ['menu' => $menu, 'row' => $row]);
    }


    public function route()
    {
        return view();
    }


    public function tabs()
    {
        return view();
    }


    public function utils()
    {
        return view();
    }


    public function inputnumber()
    {
        return view();
    }
  public function setting()
    {
        return view();
    }


    public  function  test()
    {

        return view();
    }


    //克隆 ： 当用户点击克隆当前这条数据的时候：首先获取该调数据的字段值； id和is_mobile除外
    //跳转到添加页面-》

    public  function  clone_field()
    {
        if (request()->isAjax()) {
            $param = request()->param();

            if (empty($param['id']) || empty($param['t']))
                exit(iJson('',false, '数据不存在！ '));
            $id = intval($param['id']);
            $tablename = trim($param['t']);
            $field = Db::name($tablename)->where('id', $id )->find();
            unset($field['id']);
            $field['time']  = time();
            $field['is_mobile']  =  $field['is_mobile']  == 1 ? 2 : 1;
            //获取该数据的字段
            //然后获取该数据的数据表名称
            $res = Db::name($tablename)->insert($field);
            if ($res) exit(iJson());

        }

    }



    public function project()
    {
        if (request()->isAjax()) {

            $post = request()->post();

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne('project', intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState('project', $post );
                if ($result) exit(iJson());

            }

        }

        $where = ['a.is_del' => 1];
        $project  = Db::name('project a')
            ->join('project_cate b', 'a.cateid = b.id', 'LEFT')
            ->field('a.*, b.name cate_name')
            ->order('a.id desc')
            ->where($where)->select();
        foreach ($project as &$vm ) {
            $vm['time'] = timeTran($vm['time'] );
            if (!empty($vm['intro'])) $vm['intro'] = unserialize($vm['intro']);
            if (!empty($vm['content'])) $vm['content'] = unserialize($vm['content']);
            if (!empty($vm['seo_title'])) $vm['seo_title'] = unserialize($vm['seo_title']);
            if (!empty($vm['seo_keywords'])) $vm['seo_keywords'] = unserialize($vm['seo_keywords']);
            if (!empty($vm['seo_description'])) $vm['seo_description'] = unserialize($vm['seo_description']);
        }

        return view('', ['project' => $project]);
    }

    public function addproject()
    {
        if (request()->isAjax()) {

            $post = request()->post();
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！ '));
            if (empty($post['name'])) exit(iJson('',false, '请填写项目名称！ '));
            if (empty($post['out_url']) && empty($post['content'])) exit(iJson('',false, '请编辑内容或有效内容链接！ '));
//            if (empty($post['seo_title'])) exit(iJson('',false, '请填写SEO标题！ '));
//            if (empty($post['seo_keywords'])) exit(iJson('',false, '请填写SEO关键词！ '));
//            if (!validStrlen($post['seo_title'], 300)) exit(iJson('',false, 'SEO标题超过限定字数！ '));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！ '));

            $data = [
                'name' => trim($post['name'])
                ,'cateid' =>intval( $post['cateid'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_del' => 1
                ,'state' => 1
                ,'out_url' =>  $post['out_url']
                ,'intro' => serialize( $post['intro'])
                ,'content' => serialize( $post['content'])
                ,'icon' =>  $post['icon']
                ,'img' =>  $post['img']
                ,'is_new' => intval($post['is_new'])
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'time' =>time()
                ,'sort' => $post['sort']
                ,'seo_title' => serialize($post['seo_title'])
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => serialize($post['seo_description'])
            ];
            if (empty($post['id'])) {
                $result = Db::name('project')->insert($data);
            } else {
                $result = Db::name('project')->where('id', intval($post['id']))->update($data);
            }
            if ($result)  exit(iJson());

        }

        $id = request()->get('id');
        $row = [];
        if (!empty($id)) {
            $row = Db::name('project')->where('id', $id)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = unserialize($row['content']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }


        $where = [ 'is_del' => 1];
        $project_cate = Db::name('project_cate')->where($where)->select();
        $project_cate = tree($project_cate);
        return view('', ['project_cate' => $project_cate, 'row' => $row]);
    }

    public function project_cate()
    {

        $where = [];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            $data = Db::name('project_cate')->where(['pid' => $post['id'], 'is_del' => 1])->where($where)->select();
            if (!empty($data)) exit(iJson('',false, '还有下级，无法改变此状态 '));

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne('project_cate', intval($post['id']));
                if ($res) exit(iJson());
            }

           $result = IndexModel::changeState('project_cate', $post );
           if ($result) exit(iJson());

        }
        $project_cate = Db::name('project_cate')->where($where)->select();
        $project_cate = tree($project_cate);

        return view('', ['project_cate' => $project_cate]);

    }

    public function addproject_cate()
    {
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));
            //if (empty($post['icon'])) exit(iJson('',false, '请上传图标'));
            // if (empty($post['img'])) exit(iJson('',false, '请上传广告图'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'pid' =>  intval($post['pid'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'img' => $post['img']
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                //$name = Db::name('project_cate')->where(['name' => trim($post['name']), 'is_del' => 1])->find();
                //if (!empty($name))  exit(iJson('',false, '该名称已存在！'));
                $result = Db::name('project_cate')->insert($data);
            } else {
                $result = Db::name('project_cate')->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name('project_cate')->where('id', intval($get['id']))->find();
        }

        $project_cate = Db::name('project_cate')->where($where)->select();
        $project_cate = tree($project_cate);

        return view('', ['project_cate' => $project_cate, 'row' => $row]);

    }

    //banner
    public function  banner()
    {
        if (request()->isAjax()) {
            $post = request()->post();
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne('banner', intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState('banner', $post );
                if ($result) exit(iJson());

            }
        }



        $where = ['is_del' => 1];
        $banner = Db::name('banner')->where($where)->select();
        foreach ($banner as &$v ) {
            $v['time'] = timeTran($v['time']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title']))$v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['content']))$v['content'] = html_entity_decode($v['content']);
        }

        return view('', ['banner' => $banner]);
    }

    //banner
    public function  addbanner()
    {
        //menu
        $where = [ 'is_del' => 1];

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name('banner')->where('id', intval($get['id']))->where($where)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['seo_title'])) $row['seo_title'] =  unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] =  unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] =  unserialize($row['seo_description']);
            if (!empty($row['content'])) $row['content'] =  html_entity_decode($row['content']);
        }

        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台'));
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));
            if (empty($post['img'])) exit(iJson('',false, '请选择banner图'));
            if (empty($post['out_url']) && empty($post['content'])) exit(iJson('',false, '请填写内容链接或自定内容！'));
           /* if (empty($post['seo_title'])) exit(iJson('',false, '请填写SEO标题'));
            if (empty($post['seo_keywords'])) exit(iJson('',false, '请填写SEO关键词'));
            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述'));
            if (!validStrlen($post['seo_title'], 500)) exit(iJson('', false, 'SEO标题超出限制字数！'));
            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('', false, 'SEO关键词超出限制字数！'));
            if (!validStrlen($post['seo_description'], 850)) exit(iJson('', false, 'SEO描述超出限制字数！'));*/
            $post['out_url'] = $post['out_url'] ? $post['out_url'] : null;

            $data = [
                'state' => 1
                ,'is_del'=> 1
                ,'time' => time()
                ,'name' => trim($post['name'])
                ,'img' => $post['img']
                ,'intro' => serialize($post['intro'])
                ,'out_url' => trim($post['out_url'])
                ,'seo_title' => null /*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null /*serialize($post['seo_description'])*/
                ,'content' => htmlspecialchars($post['content'])
                ,'sort' => intval($post['sort'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_tj' => intval($post['is_tj'])
            ];

            if (empty( $post['id'] )) {
                $res = Db::name('banner')->insert($data);
            } else {
                $res = Db::name('banner')->where('id' ,intval($post['id']))->update($data);
            }
            if ($res) exit(iJson());
        }

        return view('', ['row' => $row]);

    }


    /**
     * 活动列表
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function  activity()
    {
        $tanlename = 'activity';
        if (request()->isAjax()) {
            $post = request()->post();
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tanlename, intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tanlename, $post );
                if ($result) exit(iJson());

            }
        }

        $where = ['is_del' => 1];
        $activity = Db::name($tanlename)->where($where)->select();
        foreach ($activity as &$v ) {
            $v['time'] = timeTran($v['time']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title']))$v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['content']))$v['content'] = html_entity_decode($v['content']);
        }

        return view('', ['activity' => $activity]);
    }


    /**
     * 活动添加
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     *
     */
    public function addactivity()
    {
        $tablename = 'activity';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！ '));
            if (empty($post['name'])) exit(iJson('',false, '请填写项目名称！ '));
            if (empty($post['out_url']) && empty($post['content'])) exit(iJson('',false, '请编辑内容或有效内容链接！ '));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！ '));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！ '));
//            if (!validStrlen($post['seo_title'], 500)) exit(iJson('',false, 'SEO标题超过限定字数！ '));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));

            $data = [
                'cateid' => intval($post['cateid'])
                ,'name' => trim($post['name'])
                ,'sort' =>intval($post['sort'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_del' => 1
                ,'state' => 1
                ,'out_url' =>  $post['out_url']
                ,'intro' => serialize( $post['intro'])
                ,'content' => htmlspecialchars( $post['content'])
                ,'img' =>  $post['img']
                ,'is_new' => intval($post['is_new'])
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'time' =>time()
                ,'seo_title' => null /*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null /* serialize($post['seo_description'])*/
            ];

            if (empty($post['id'])) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id', intval($post['id']))->update($data);
            }
            if ($result)  exit(iJson());

        }

        $id = request()->get('id');
        $row = [];
        if (!empty($id)) {
            $row = Db::name('activity')->where('id', $id)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        $where = [ 'is_del' => 1, 'state' => 1];
        $activity_cate = Db::name('activity_cate')->where($where)->select();
        $activity_cate = tree($activity_cate, 0);
        return view('', ['activity_cate' => $activity_cate, 'row' => $row]);
    }


    /**
     * @return \think\response\View
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function addsubject()
    {
        $tablename = 'subject';
        if (request()->isAjax()) {
            $post = request()->post();

            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！ '));
            if (empty($post['name'])) exit(iJson('',false, '请填写项目名称！ '));
            if (empty($post['out_url']) && empty($post['content'])) exit(iJson('',false, '请编辑内容或有效内容链接！ '));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！ '));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！ '));
//            if (!validStrlen($post['seo_title'], 500)) exit(iJson('',false, 'SEO标题超过限定字数！ '));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));

            $data = [
                'cateid' => intval($post['cateid'])
                ,'name' => trim($post['name'])
                ,'sort' =>intval($post['sort'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_del' => 1
                ,'state' => 1
                ,'out_url' =>  $post['out_url']
                ,'intro' => serialize( $post['intro'])
                ,'content' => htmlspecialchars( $post['content'])
                ,'img' =>  $post['img']
                ,'is_new' => intval($post['is_new'])
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'time' =>time()
                ,'seo_title' => null/*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null/* serialize($post['seo_description'])*/
            ];

            if (empty($post['id'])) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id', intval($post['id']))->update($data);
            }
            if ($result)  exit(iJson());

        }

        $id = request()->get('id');
        $row = [];
        if (!empty($id)) {
            $row = Db::name('subject')->where('id', $id)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        $where = [ 'is_del' => 1, 'state' => 1];
        $subject_cate = Db::name('subject_cate')->where($where)->select();
        return view('', ['subject_cate' => $subject_cate, 'row' => $row]);
    }


    /**
     * 活动分类
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function activity_cate()
    {
        $tablename = 'activity_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            $data = Db::name($tablename)->where('pid', $post['id'])->where($where)->select();
            if (!empty($data)) exit(iJson('',false, '还有下级，无法改变此状态 '));

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $activity_cate = Db::name($tablename)->where($where)->select();
        $activity_cate = tree($activity_cate);

        return view('', ['activity_cate' => $activity_cate]);

    }



    public function  subject()
    {
        $tanlename = 'subject';
        if (request()->isAjax()) {
            $post = request()->post();
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tanlename, intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tanlename, $post );
                if ($result) exit(iJson());

            }
        }

        $where = ['is_del' => 1];
        $subject = Db::name($tanlename)->where($where)->select();
        foreach ($subject as &$v ) {
            $v['time'] = timeTran($v['time']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title']))$v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['content']))$v['content'] = html_entity_decode($v['content']);
        }

        return view('', ['subject' => $subject]);
    }


    //项目专题
    public function subject_cate()
    {
        $tablename = 'subject_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $subject_cate = Db::name($tablename)->where($where)->select();

        return view('', ['subject_cate' => $subject_cate]);

    }




    /**
     * @return \think\response\View
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function addsubject_cate()
    {
        $tablename = 'subject_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {

            $post = request()->post();

            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) $row = Db::name($tablename)->where('id', intval($get['id']))->find();

        return view('', [ 'row' => $row]);

    }


    /**
     * @return \think\response\View
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
  public function addactivity_cate()
    {
        $tablename = 'activity_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {

            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'pid' =>  intval($post['pid'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
        }

        $activity_cate = Db::name($tablename)->where($where)->select();
        $activity_cate = tree($activity_cate);

        return view('', ['activity_cate' => $activity_cate, 'row' => $row]);

    }



    //新闻列表
    public  function news()
    {
        $tanlename = 'news';
        if (request()->isAjax()) {
            $post = request()->post();
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tanlename, intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tanlename, $post );
                if ($result) exit(iJson());

            }
        }

        $where = ['is_del' => 1];
        $news = Db::name($tanlename)->where($where)->select();

        foreach ($news as &$v ) {
            $v['time'] = timeTran($v['time']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title']))$v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['content']))$v['content'] = html_entity_decode($v['content']);
        }
        return view('', ['news' => $news]);

    }

    //新闻列表
    public  function addnews()
    {
        $tablename = 'news';
        if (request()->isAjax()) {

            $post = request()->post();

            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！ '));
            if (empty($post['name'])) exit(iJson('',false, '请填写名称！ '));
            if (empty($post['intro'])) exit(iJson('',false, '请填写新闻简介！ '));
            if (empty($post['content'])) exit(iJson('',false, '请编辑新闻详情！ '));
            if (empty($post['icon'])) exit(iJson('',false, '请选择新闻标题图！ '));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！'));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！'));
//            if (!validStrlen($post['seo_title'],500)) exit(iJson('',false, 'SEO标题超过限定字数！ '));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));

            $data = [
                'name' => trim($post['name'])
                ,'intro' => serialize( $post['intro'])
                ,'icon' =>  $post['icon']
                ,'time' =>time()
                ,'content' => htmlspecialchars( $post['content'])
                ,'seo_title' => null /*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null/*serialize($post['seo_description'])*/
                ,'is_new' => intval($post['is_new'])
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'cateid' => intval($post['cateid'])
                ,'sort' =>intval($post['sort'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_del' => 1
                ,'state' => 1
            ];

            if (empty($post['id'])) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id', intval($post['id']))->update($data);
            }
            if ($result)  exit(iJson());

        }

        $id = request()->get('id');
        $row = [];
        if (!empty($id)) {
            $row = Db::name($tablename)->where('id', $id)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        $where = [ 'is_del' => 1];
        $news_cate = Db::name('news_cate')->where($where)->select();
        $news_cate = tree($news_cate);
        return view('', ['news_cate' => $news_cate, 'row' => $row]);
    }



    //新闻cate
    public  function news_cate()
    {
        $tablename = 'news_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            $data = Db::name($tablename)->where('pid', $post['id'])->where($where)->select();
            if (!empty($data)) exit(iJson('',false, '还有下级，无法改变此状态 '));

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $news_cate = Db::name($tablename)->where($where)->select();
        $news_cate = tree($news_cate);
        return view('', ['news_cate' => $news_cate]);

    }


    //新闻cate
    public  function addnews_cate()
    {
        $tablename = 'news_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'pid' =>  intval($post['pid'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
        }

        $news_cate = Db::name($tablename)->where($where)->select();
        $news_cate = tree($news_cate);

        return view('', ['news_cate' => $news_cate, 'row' => $row]);

    }


    //cate
    public  function ask_cate()
    {
        $tablename = 'ask_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            $data = Db::name($tablename)->where('pid', $post['id'])->where($where)->select();
            if (!empty($data)) exit(iJson('',false, '还有下级，无法改变此状态 '));

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $ask_cate = Db::name($tablename)->where($where)->select();
        $ask_cate = tree($ask_cate);
        return view('', ['ask_cate' => $ask_cate]);

    }


    //新闻cate
    public  function addask_cate()
    {
        $tablename = 'ask_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'pid' =>  intval($post['pid'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
        }

        $ask_cate = Db::name($tablename)->where($where)->select();
        $ask_cate = tree($ask_cate);

        return view('', ['ask_cate' => $ask_cate, 'row' => $row]);

    }


    //新闻列表
    public  function ask()
    {
        $tanlename = 'ask';
        if (request()->isAjax()) {
            $post = request()->post();
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tanlename, intval($post['id']));
                if ($res) exit(iJson());
            }

            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tanlename, $post );
                if ($result) exit(iJson());

            }
        }

        $where = ['is_del' => 1];
        $ask = Db::name($tanlename)->where($where)->select();

        foreach ($ask as &$v ) {
            $v['time'] = timeTran($v['time']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title']))$v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['content']))$v['content'] = html_entity_decode($v['content']);
            //所属类别
        }

        return view('', ['ask' => $ask]);

    }

    //问题列表
    public  function addask()
    {
        $tablename = 'ask';
        if (request()->isAjax()) {

            $post = request()->post();

            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！ '));
            if (empty($post['name'])) exit(iJson('',false, '请填写名称！ '));
            if (empty($post['intro'])) exit(iJson('',false, '请填写问题简介！ '));
            if (empty($post['content'])) exit(iJson('',false, '请编辑问题详情！ '));
            if (empty($post['icon'])) exit(iJson('',false, '请选择问题标题图！ '));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！'));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！'));
//            if (!validStrlen($post['seo_title'],500)) exit(iJson('',false, 'SEO标题超过限定字数！ '));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));

            $data = [
                'name' => trim($post['name'])
                ,'intro' => serialize( $post['intro'])
                ,'icon' =>  $post['icon']
                ,'time' =>time()
                ,'content' => htmlspecialchars( $post['content'])
                ,'seo_title' => null /*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null/*serialize($post['seo_description'])*/
                ,'is_new' => intval($post['is_new'])
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'cateid' => intval($post['cateid'])
                ,'sort' =>intval($post['sort'])
                ,'is_mobile' => intval($post['is_mobile'])
                ,'is_del' => 1
                ,'state' => 1
            ];

            if (empty($post['id'])) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id', intval($post['id']))->update($data);
            }
            if ($result)  exit(iJson());

        }

        $id = request()->get('id');
        $row = [];
        if (!empty($id)) {
            $row = Db::name($tablename)->where('id', $id)->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        $where = [ 'is_del' => 1, 'state' => 1];
        $ask_cate = Db::name('ask_cate')->where($where)->select();
        $ask_cate = tree($ask_cate);
        return view('', ['ask_cate' => $ask_cate, 'row' => $row]);
    }





    //cate
    public  function real_show_cate()
    {
        $tablename = 'real_show_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tablename, $post);
                if ($result) exit(iJson());
            }

        }
        $real_show_cate = Db::name($tablename)->where($where)->select();
        return view('', ['real_show_cate' => $real_show_cate]);

    }


    //新闻cate
    public  function addreal_show_cate()
    {
        $tablename = 'real_show_cate';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();

            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_hot' => intval($post['is_hot'])
                ,'is_tj' => intval($post['is_tj'])
                ,'is_new' => intval($post['is_new'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
        }

        return view('', [ 'row' => $row]);

    }










    public  function real_show()
    {
        $tablename = 'real_show';
        $where = [ 'is_del' => 1];

        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }

        $real_show = Db::name($tablename)->where($where)->select();

        //回收站
        $delData = Db::name($tablename)->where('is_del', 2)->select();
        foreach ($delData as &$dv ) {
            if (!empty($dv['intro']))  $dv['intro'] = unserialize($dv['intro']);
            $dv['time'] = timeTran( $dv['time']);
        }

        foreach ($real_show as &$v ) {
            if (!empty( $v['intro']))  $v['intro'] = unserialize( $v['intro']);
            $v['time'] = timeTran( $v['time']);
        }

        return view('', ['real_show' => $real_show, 'delData' => $delData]);

    }
     public  function addreal_show()
    {
        $tablename = 'real_show';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称！'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'sort' =>  intval($post['sort'])
                ,'icon' => !empty($post['icon']) ? $post['icon'] : null
                ,'intro' => serialize( $post['intro'] )
                ,'img' => $post['img'] ? $post['img'] : null
                ,'is_mobile' => intval( $post['is_mobile'] )
                ,'time' => time()
                ,'cateid' => intval($post['cateid'])
                ,'icon_title' => !empty($post['icon_title']) ? trim($post['icon_title']) : null
                ,'content' =>  htmlspecialchars($post['content'])
                ,'video_path' =>  !empty($post['video_path']) ? trim($post['video_path']) : null
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
        }


        //lebie
        $cate = Db::name('real_show_cate')
            ->where(['is_del' => 1, 'state' => 1])
            ->field('id, name')
            ->select();

        return view('', [ 'row' => $row, 'cate' => $cate]);

    }



    //video
    public  function notes()
    {
        $tablename = 'notes';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $notes = Db::name($tablename)->where($where)->select();
        foreach ($notes as &$v ) {
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title'])) $v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['time'])) $v['time'] = timeTran($v['time']);
            if (!empty($v['content'])) $v['content'] = html_entity_decode($v['content']);
        }

        return view('', ['notes' => $notes]);

    }

    //新闻cate
    public  function addnotes()
    {
        $tablename = 'notes';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写标题!'));
            if (empty($post['intro'])) exit(iJson('',false, '请填写简介！'));
            if (empty($post['img'])) exit(iJson('',false, '请上传大图！'));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！'));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！'));
//            if (!validStrlen($post['seo_title'], 500)) exit(iJson('',false, 'SEO标题超过限定字数！'));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));

            $data = [
                'name' => trim($post['name'])
                ,'alias_name' => trim($post['alias_name'])
                ,'icon' => $post['icon']
                ,'img' =>  serialize($post['img'])
                ,'intro' => serialize( $post['intro'])
                ,'content' => htmlspecialchars( $post['content'])
                ,'state' => 1
                ,'is_del' => 1
                ,'seo_title' => null/*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null/* serialize($post['seo_description'])*/
                ,'time' => time()
                ,'is_mobile' => intval($post['is_mobile'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();

            if (!empty($row['img']))  $row['img'] = unserialize($row['img']);
            if (!empty($row['intro']))  $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content']))  $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['seo_title']))  $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords']))  $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description']))  $row['seo_description'] = unserialize($row['seo_description']);
        }

        return view('', [ 'row' => $row]);

    }




    //notes
    public  function video()
    {
        $tablename = 'pro_video';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $video = Db::name($tablename)->where($where)->select();

        foreach ($video as &$v ) {
            if (!empty($v['time'])) $v['time'] = timeTran($v['time']);
        }

        return view('', ['video' => $video]);

    }

    //
    public  function addvideo()
    {
        $tablename = 'pro_video';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台!'));
            if (empty($post['name'])) exit(iJson('',false, '请填写名称!'));
            if (empty($post['path'])) exit(iJson('',false, '请填写视频连接！'));

            $data = [
                'is_mobile' => trim($post['is_mobile'])
                ,'name' => trim($post['name'])
                ,'path' => trim($post['path'])
                ,'state' => 1
                ,'is_del' => 1
                ,'time' => time()
                ,'sort' => intval($post['sort'])
                ,'is_tj' => intval($post['is_tj'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
        }

        return view('', [ 'row' => $row]);

    }


    //关于我们 - 专家
    //notes
    public  function expert()
    {
        $tablename = 'doctor';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $expert = Db::name($tablename)->where($where)->order('id DESC')->select();
        foreach ($expert as &$v ) {
            if (!empty($v['honour'])) $v['honour'] = unserialize($v['honour']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['content'])) $v['content'] = html_entity_decode($v['content']);
            if (!empty($v['be_expert_in'])) $v['be_expert_in'] = implode('、', json_decode($v['be_expert_in']));
            $v['time'] = timeTran($v['time']);
            if (!empty($v['seo_title'])) $v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
        }

        return view('', ['expert' => $expert]);

    }

    //
    public  function addexpert()
    {
        $tablename = 'doctor';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写专家姓名!'));
            if (empty($post['position'])) exit(iJson('',false, '请填写专家职位!'));
            if (empty($post['img'])) exit(iJson('',false, '请选择专家头像！'));
            if (empty($post['honour'])) exit(iJson('',false, '请填写专家荣誉！'));
            if (empty($post['content'])) exit(iJson('',false, '请填写专家详情介绍！'));
            if (empty($post['be_expert_in']) || !is_array($post['be_expert_in'])) exit(iJson('',false, '请填写专家擅长的项目！'));
//            if (empty($post['seo_title'])) exit(iJson('', false, '请填写SEO标题！ '));
            if (empty($post['seo_keywords'])) exit(iJson('', false, '请填写SEO关键词！'));
//            if (empty($post['seo_description'])) exit(iJson('',false, '请填写SEO描述！'));
//            if (!validStrlen($post['seo_title'], 500)) exit(iJson('',false, 'SEO标题超过限定字数！'));
//            if (!validStrlen($post['seo_keywords'], 500)) exit(iJson('',false, 'SEO关键词超过限定字数！ '));
//            if (!validStrlen($post['seo_description'], 800)) exit(iJson('',false, 'SEO描述超过限定字数！ '));
            $data = [
                'name' => trim($post['name'])
                ,'position' => trim($post['position'])//职位
                ,'honour' => serialize($post['honour'])//荣誉
                ,'intro' => serialize($post['intro'])
                ,'content' => htmlspecialchars( $post['content'])
                ,'be_expert_in' => json_encode( $post['be_expert_in'])
                ,'time' => time()
                ,'is_del' => 1
                ,'is_tj' => intval($post['is_tj'])
                ,'img' =>  $post['img']
                ,'state' => 1
                ,'seo_title' => null/*serialize($post['seo_title'])*/
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => null  /*serialize($post['seo_description'])*/
                ,'is_mobile' => intval($post['is_mobile'])
                ,'sort' => intval($post['sort'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
            if (!empty($row['honour'])) $row['honour'] = unserialize($row['honour']);
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
            if (!empty($row['be_expert_in'])) $row['be_expert_in'] = json_decode($row['be_expert_in']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }


        return view('', [ 'row' => $row]);

    }


    //官网商城
    public  function goods()
    {
        $tablename = 'vshop';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }

        $goods = Db::name($tablename)->select();


        foreach ($goods as &$v ) {
            if (!empty( $v['intro']))  $v['intro'] = unserialize( $v['intro']);
            $v['time'] = timeTran( $v['time']);
        }

        return view('', ['goods' => $goods]);

    }

    public  function addgoods()
    {
        $tablename = 'vshop';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写商品名称'));
            if (empty($post['price'])) exit(iJson('',false, '请填写商品价格'));
            if (empty($post['icon'])) exit(iJson('',false, '请选择商品图'));

            $data = [
                'state' => 1
                ,'sort' =>  intval($post['sort'])
                ,'name' => trim($post['name'])
                ,'intro' => serialize( $post['intro'])
                ,'price' => trim($post['price'])
                ,'icon' => $post['icon']
                ,'time' => time()
                ,'is_tj' => $post['is_tj']
                ,'discount' => $post['discount']
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
        }

        return view('', [ 'row' => $row]);

    }






    //关于我们 - 设备
    public  function machine()
    {
        $tablename = 'machine';
        $where = [ 'is_del' => 1];

        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);
            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }

        $machine = Db::name($tablename)->where($where)->select();

        foreach ($machine as &$v ) {
            if (!empty($v['intro'])) $v['intro'] =  unserialize($v['intro']);
            if (!empty($v['content'])) $v['content'] =  html_entity_decode($v['content']);
            $v['time'] = timeTran( $v['time']);
        }

        //回收站
        $delData = Db::name($tablename)->where('is_del', 2)->select();
        foreach ($delData as &$dv ) {
            if (!empty($dv['intro']))  $dv['intro'] = unserialize($dv['intro']);
            $dv['time'] = timeTran( $dv['time']);
        }

        return view('', ['machine' => $machine, 'delData' => $delData]);

    }
    public  function addmachine()
    {
        $tablename = 'machine';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名称'));
//            if (empty($post['icon'])) exit(iJson('',false, '请选择icon'));
//            if (empty($post['img'])) exit(iJson('',false, '请选择大图'));

            $data = [
                'state' => 1
                ,'is_del' => 1
                ,'name' => trim($post['name'])
                ,'sort' =>  intval($post['sort'])
                ,'intro' => serialize( $post['intro'] )
                ,'content' => htmlspecialchars( $post['content'] )
                ,'img' => !empty($post['img']) ?$post['img'] : null
                ,'icon' => !empty($post['icon']) ?$post['icon'] : null
                ,'is_mobile' => intval( $post['is_mobile'] )
                ,'time' => time()
                ,'seo_keywords' => serialize($post['seo_keywords'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
            if (!empty($row['content'])) $row['content'] = html_entity_decode($row['content']);
        }

        return view('', [ 'row' => $row]);

    }


    //关于我们 - contact
    public  function contact()
    {
        $tablename = 'contact';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['tel']) || !is_array($post['tel'])) exit(iJson('',false, '请填写客服电话！'));
            if (empty($post['recruit_email'])) exit(iJson('',false, '请填写应聘信息-联系邮箱！'));
            if (empty($post['recruit_phone'])) exit(iJson('',false, '请填写应聘信息-联系方式！'));
            if (empty($post['recruit_address'])) exit(iJson('',false, '请填写应聘信息-联系地址！'));
            if (empty($post['bus']) || !is_array($post['bus'])) exit(iJson('',false, '请填写公交路线！'));
            if (empty($post['address'])) exit(iJson('',false, '请填写·医院地址！'));

            $data = [
                'time' => time()
                ,'address' =>serialize($post['address'])
                ,'tel' => json_encode($post['tel'])
                ,'bus' => json_encode($post['bus'])
                ,'recruit' => json_encode([
                    'recruit_email' => $post['recruit_email']
                    , 'recruit_phone' => $post['recruit_phone']
                    , 'recruit_address' => $post['recruit_address']
                ])//应聘信息
                ,'seo_title' => serialize($post['seo_title'])
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => serialize($post['seo_description'])
            ];
            if (empty($post['id']))
                if(Db::name($tablename)->insert($data)) exit(iJson());
                if(Db::name($tablename)->where('id', intval($post['id']))->update($data)) exit(iJson());

        }

        $row = Db::name($tablename)->find();
        if (!empty($row)) {
            if (!empty($row['tel'])) $row['tel'] = json_decode($row['tel']);
            if (!empty($row['bus'])) $row['bus'] = json_decode($row['bus']);
            if (!empty($row['recruit'])) $row['recruit'] = json_decode($row['recruit']);
            if (!empty($row['address'])) $row['address'] = unserialize($row['address']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        return view('', [ 'row' => $row]);

    }


    //品牌故事
    public  function about_us()
    {
        $tablename = 'about_us';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择平台！'));
            if (empty($post['intro'])) exit(iJson('',false, '请填写品牌简介！'));
            $data = [
                'img' => $post['img']
                ,'intro' => serialize($post['intro'])
                ,'seo_title' => serialize($post['seo_title'])
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => serialize($post['seo_description'])
                ,'time' => time()
                ,'state' => 1
                ,'is_del' => 1
                ,'is_mobile' => intval($post['is_mobile'])
                ,'about_video' => trim($post['about_video'])
            ];

            if (empty($post['id']))
                if(Db::name($tablename)->insert($data)) exit(iJson());
            if(Db::name($tablename)->where('id', intval($post['id']))->update($data)) exit(iJson());

        }

        $row = Db::name($tablename)->find();
        if (!empty($row)) {
            if (!empty($row['intro'])) $row['intro'] = unserialize($row['intro']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
        }

        return view('', [ 'row' => $row]);

    }

    //system_param
    public  function  system_param()
    {
        return view();

    }


    //user
    public  function  user()
    {
        $tablename = 'user';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }
            //switch
            if ($post['do'] == '_state') {
                $result = IndexModel::changeState($tablename, $post );
                if ($result) exit(iJson());
            }
        }

        $user = Db::name($tablename)->where('is_del', 1)->select();
        return view('', ['user' => $user]);
    }

   //user
    public  function  adduser()
    {
        //如果选择了下级， 将自动选择其上级
        $tablename = 'user';
        if (request()->isAjax()) {
            $post = request()->post();

            //验证密码
            if (empty($post['password']))  exit(iJson('',false, '密码不能为空！'));
            if (empty($post['pername']))  exit(iJson('',false, '真实姓名不能为空！'));
            if (empty($post['username']))  exit(iJson('',false, '用户名不能为空！'));
            if ($post['password'] !== $post['repassword'])  exit(iJson('',false, '两次输入密码不一致！'));
            $exist  = Db::name($tablename)->where('username', trim($post['username']))->find();
            if (!empty($exist))  exit(iJson('',false, '该用户名已被注册！'));

            $data = [
                'pername' => trim($post['pername'])
                , 'username' => trim($post['username'])
                , 'password' => md5($post['password'])
                , 'is_del' =>1
                , 'state' =>2
                ,'userip' => get_ip()
                //,'menus' => 2
                ,'time' => time()
                ,
            ];
            if (empty($post['id']))
                if(Db::name($tablename)->insert($data)) exit(iJson());
            if(Db::name($tablename)->where('id', intval($post['id']))->update($data)) exit(iJson());

        }

        //获取所有才菜单列表
        $where = ['is_del' => 1, 'state' => 1 ];
        $menu = Db::name('admin_menu')->where($where)->select();
        $menu = IndexModel::_reSort($menu, 0);
        return view('', ['menu' => $menu]);

    }



    //seo
    public  function  web_setting()
    {
        $tablename = 'web_setting';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['bscnym_path'])) exit(iJson('',false, '请填写商务通链接！'));
            if (empty($post['left_poster'])) exit(iJson('',false, '请上传左侧广告图'));
            if (empty($post['center_poster'])) exit(iJson('',false, '请上传中间弹框广告！'));
            if (empty($post['mobile_poster'])) exit(iJson('',false, '请上传移动端中间弹框广告！'));
            if (empty($post['seo_title'])) exit(iJson('',false, '请填写seo标题！'));
            if (empty($post['seo_keywords'])) exit(iJson('',false, '请填写seo关键词！'));
            if (empty($post['seo_description'])) exit(iJson('',false, '请填写seo描述！'));
            $data = [
                'bscnym_path' => trim($post['bscnym_path']) //商务通
                ,'left_poster' => $post['left_poster']
                ,'center_poster' => $post['center_poster']
                ,'mobile_poster' => $post['mobile_poster']
                ,'seo_title' => serialize($post['seo_title'])
                ,'seo_keywords' => serialize($post['seo_keywords'])
                ,'seo_description' => serialize($post['seo_description'])
                ,'other_code' => serialize($post['other_code'])
                ,'time' => time()
                ,'is_open_dialog' => json_encode([
                    'is_open_dialog_mobile' => $post['is_open_dialog_mobile'] ? $post['is_open_dialog_mobile'] : 2
                    , 'is_open_dialog_pc' => $post['is_open_dialog_pc'] ? $post['is_open_dialog_pc']: 2])
                ];
            if (empty($post['id']))
                if(Db::name($tablename)->insert($data)) exit(iJson());
            if(Db::name($tablename)->where('id', intval($post['id']))->update($data)) exit(iJson());

        }

        $row = Db::name($tablename)->find();
        if (!empty($row)) {
            if (!empty($row['other_code'])) $row['other_code'] = unserialize($row['other_code']);
            if (!empty($row['seo_title'])) $row['seo_title'] = unserialize($row['seo_title']);
            if (!empty($row['seo_keywords'])) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if (!empty($row['seo_description'])) $row['seo_description'] = unserialize($row['seo_description']);
            $row['is_open_dialog'] = json_decode($row['is_open_dialog']);
        }

        return view('', [ 'row' => $row]);
    }



    //video
    public  function gy()
    {
        $tablename = 'gy';
        $where = [ 'is_del' => 1];
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id'])) exit(false);

            //delete
            if ($post['do'] == 'delFind') {
                $res = IndexModel::deleteFindOne($tablename, intval($post['id']));
                if ($res) exit(iJson());
            }

            $result = IndexModel::changeState($tablename, $post );
            if ($result) exit(iJson());

        }
        $gy = Db::name($tablename)->where($where)->select();
        foreach ($gy as &$v ) {
            if (!empty($v['date'])) $v['date'] = date('y', $v['date']);
            if (!empty($v['intro'])) $v['intro'] = unserialize($v['intro']);
            if (!empty($v['seo_title'])) $v['seo_title'] = unserialize($v['seo_title']);
            if (!empty($v['seo_keywords'])) $v['seo_keywords'] = unserialize($v['seo_keywords']);
            if (!empty($v['seo_description'])) $v['seo_description'] = unserialize($v['seo_description']);
            if (!empty($v['time'])) $v['time'] = timeTran($v['time']);
            if (!empty($v['content'])) $v['content'] = html_entity_decode($v['content']);
        }

        return view('', ['gy' => $gy]);

    }

    //新闻cate
    public  function addgy()
    {
        $tablename = 'gy';
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['name'])) exit(iJson('',false, '请填写名!'));
            if (empty($post['is_mobile'])) exit(iJson('',false, '请选择展示平台!'));

            $data = [
                'name' => trim($post['name'])
                ,'date' => strtotime($post['date'])
                ,'time' => time()
                ,'state' => 1
                ,'is_del' => 1
                ,'img' => $post['img']
                ,'is_mobile' => intval($post['is_mobile'])
                ,'intro' => serialize( $post['intro'])
                ,'content' => htmlspecialchars( $post['content'])
                ,'seo_keywords' => serialize($post['seo_keywords'])
            ];

            if (empty( $post['id'] )) {
                $result = Db::name($tablename)->insert($data);
            } else {
                $result = Db::name($tablename)->where('id' ,intval($post['id']))->update($data);
            }
            if($result) exit(iJson());

        }

        $row = [];
        $get = request()->get();
        if (!empty($get['id'])) {
            $row = Db::name($tablename)->where('id', intval($get['id']))->find();
            if ($row['date']) $row['date'] = date('Y-m-d', $row['date']);
            if ($row['intro']) $row['intro'] = unserialize($row['intro']);
            if ($row['content']) $row['content'] = html_entity_decode($row['content']);
            if ($row['seo_title']) $row['seo_title'] = unserialize($row['seo_title']);
            if ($row['seo_keywords']) $row['seo_keywords'] = unserialize($row['seo_keywords']);
            if ($row['seo_description']) $row['seo_description'] = unserialize($row['seo_description']);
        }

        return view('', [ 'row' => $row]);

    }






    public function user_index()
    {
        return view();
    }

    public function user_create()
    {
        return view();
    }


    public function user_edit()
    {
        return view();
    }

    public function form_index()
    {
        return view();
    }

    public function table2()
    {
        return view();
    }



    public function Ero403()
    {
        return view();
    }

    public function Ero404()
    {
        return view();
    }

    public function Ero500()
    {
        return view();
    }


    //delete
    public  function for_del()
    {
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id']) || empty($post['table'])) exit(iJson('',false, '数据不存在！'));
            if (Db::name(trim($post['table']))->where('id', intval($post['id']))->delete())
                exit(iJson());
        }

    }

    //还原数据
    public function restore()
    {
        if (request()->isAjax()) {
            $post = request()->post();
            if (empty($post['id']) || empty($post['table'])) exit(iJson('',false, '数据不存在！'));
            if (Db::name(trim($post['table']))->where('id', intval($post['id']))->update(['is_del' => 1 ]))
                exit(iJson());
        }

    }

    public function  upload()
    {
        $img = $_FILES;
        if ($img) Upload::image($img['file']);

    }



}
