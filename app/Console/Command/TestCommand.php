<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-02-27
 * Time: 18:58
 */

namespace App\Console\Command;

use Inhere\Console\Command;
use App\Model\CategoryModel;

/**
 * Class Test
 * @package App\Console\Command
 */
class TestCommand extends Command
{
    protected static $name = 'test';
    protected static $description = 'a test command';

    /**
     * do execute
     * @param  \Inhere\Console\IO\Input $input
     * @param  \Inhere\Console\IO\Output $output
     * @return int
     */
    protected function execute($input, $output)
    {
        $output->write('hello, this in ' . __METHOD__);

        //AnsiCode::make()->screen(AnsiCode::CLEAR);
        // $ret = \Qin::get('db')->fetchAll('show tables');

        $data = array( // row #3
            'cate_ID' => 5,
            'cate_Name' => '装扮test',
            'cate_Order' => 0,
            'cate_Count' => 0,
            'cate_Alias' => 'test',
            'cate_Intro' => 'test',
            'cate_RootID' => 0,
            'cate_ParentID' => 0,
            'cate_Template' => '',
            'cate_LogTemplate' => '',
            'cate_Meta' => 'test',
        );

        $model = CategoryModel::load($data);
        \p($model->all());
        $model->insert();
        \pe($model->all());

        $model = CategoryModel::findByPk(5);

        // \pe($ret->cate_ID);
        \pe($model->all());

        $model['cate_Intro'] = 'test';

        $model->update();

        \p($model->all());

        \p($model->delete());
    }
}
