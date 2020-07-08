<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/list")
 */
class ListController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/index", name="list_index")
     */
    public function getListsAction()
    {
        return $this->json([
            'message' => 'Lista de Registro',
        ]);
    }


    /**
     * @Rest\Get("/{id}", name="list_show")
     */
    public function getListAction($id)
    {
        return $this->json([
            'message' => 'Lista de Registro',
        ]);
    }


    /**
     * @Rest\Post("/new", name="list_new")
     */
    public function postListsAction()
    {
        return $this->json([
            'message' => 'Nuevo Registro',
        ]);
    }


    /**
     * @Rest\Put("/{id}/edit", name="list_edit")
     */
    public function putListsAction()
    {
        return $this->json([
            'message' => 'Editar Registro',
        ]);
    }


    /**
     * @Rest\Get("/{id}/tasks", name="list_tasks")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getListsTasksAction($id)
    {
        return $this->json([
            'message' => 'LIST TASKS'
        ]);
    }
}
