<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Library\Http\Controller;
use Library\Http\Response;
use Library\DataMapper\DataMapper;

class ProjectController extends Controller
{
    public function fetch(DataMapper $dm)
    {
        $projects = $dm->findAll(Project::class);
        $results = [];
        foreach ($projects as $project)
        {
            $results[] = [
                'id' => $project->getId(),
                'name' => $project->getName()
            ];
        }
        return new Response(Response::STATUS_OK, $results);
    }
}