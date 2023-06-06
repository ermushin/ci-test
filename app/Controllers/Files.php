<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Files extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $filesModel = new \App\Models\FileModel();
        $files = $filesModel->findAll();
        return view('files/index', compact('files'));
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $file = false;
        return view('files/view', compact('file'));
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('files/create');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper('form');

        $data = $this->request->getPost();
        $filesModel = new \App\Models\FileModel();
        $filesModel->save($data);
        return redirect('files');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $filesModel = new \App\Models\FileModel();
        $file = $filesModel->find($id);
        return view('files/edit', compact('file'));
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $data = $this->request->getPost();
        $filesModel = new \App\Models\FileModel();
        $file = $filesModel->find($id);
        $file->save($data);
        return redirect('files');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $filesModel = new \App\Models\FileModel();
        $filesModel->delete($id);
        return redirect('files');
    }
}
