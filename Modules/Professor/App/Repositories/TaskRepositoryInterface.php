<?php

namespace Modules\Professor\App\Repositories;

interface TaskRepositoryInterface{
    public function index();
    public function create($id);
    public function store($object);
    public function edit($id);
    public function update($id,$object);
    public function destroy($id);

}