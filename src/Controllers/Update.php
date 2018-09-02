<?php

namespace Folk\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Folk\FormFactory;
use Middlewares\Utils\Factory;

/**
 * Performs a row update
 */
class Update extends Controller
{
    public function __invoke(ServerRequestInterface $request)
    {
        //JSON request
        if (self::isJSON($request)) {
            return self::notFoundResponse();
        }

        //HTML request
        $entityName = $request->getAttribute('entityName');

        if (!$this->app->hasEntity($entityName)) {
            return self::notFoundResponse();
        }

        $entity = $this->app->getEntity($entityName);
        $id = $request->getAttribute('id');

        $form = FormFactory::update($entity->getScheme());
        $form->loadFromServerRequest($request);

        $value = $form->getValue();

        if ($form->isValid()) {
            $entity->update($id, $value['data']);
            $id = $value['id'];

            return Factory::createResponse(302)
                ->withHeader('location', $this->app->getRoute('read', compact('entityName', 'id')));
        }

        echo $this->app->get('templates')->render('pages/read', compact('entityName', 'id'));

        return Factory::createResponse(400);
    }
}
