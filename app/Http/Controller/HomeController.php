<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-10-18
 * Time: 18:58
 */

namespace App\Http\Controller;

use Inhere\Library\Utils\LiteLogger;
use Qin\Helper\Respond;
use Qin\Http\HttpController;

/**
 * class HomeController
 * @Controller()
 */
class HomeController extends HttpController
{
    /**
     * @Route(route="/", method="GET")
     * Route(route="/*", method="GET")
     * @return string
     */
    public function index(): string
    {
        echo 'OOO';
        //\var_dump(__METHOD__);
        return 'hello, world';
    }

    /**
     * @Route()
     * @return string
     * @throws \Throwable
     */
    public function log(): string
    {
        $content = 'hello, welcome!! this is ' . __METHOD__;

        d(\Qin::get('logger'));

        \Qin::get('logger')->info('a message test');
        \Qin::get('logger')->notice('a notice test');
        \Qin::get('logger')->flush();

        de(\Qin::get('logger'));

        return $this->renderContent($content);
    }

    /**
     * @Route()
     * @param $ctx
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function routes($ctx): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Inhere\Route\Router $router */
        $router = \Qin::$di->get('router');

        // Setting a header
        $ctx->res->setHeader('Content-Type', 'application/json');

        return Respond::json([
            'static' => $router->getStaticRoutes(),
            'regular' => $router->getRegularRoutes(),
            'vague' => $router->getVagueRoutes(),
        ]);
    }

    /**
     * @Route()
     * @throws \Inhere\Exceptions\FileSystemException
     */
    public function test(): void
    {

        $lgr = LiteLogger::make([
            'name' => 'test',
            'splitType' => 'hour',
            'basePath' => BASE_PATH . '/user/tmp',
        ]);

        $lgr->trace('a traced message');
        $lgr->info('a info message');
        var_dump($lgr);

        $lgr->flush();

        echo 'hello';
    }

    /**
     * @Route()
     */
    public function config(): void
    {
        echo 'ddd';
    }

    /**
     * @Route()
     */
    public function json(): void
    {
        \Qin::trace('test info');

        Respond::rawJson([
            'code' => 0,
            'msg' => 'successful!',
            'data' => [
                'name' => 'value',
            ]
        ]);
    }
}
