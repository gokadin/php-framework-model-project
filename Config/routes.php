<?php

//$this->get('/api/hello', 'SomeController@test');
$this->group(['prefix' => '/api'], function () {
    $this->group(['prefix' => 'project'], function () {
        $this->resource('ProjectController', ['store', 'fetch', 'destroy']);
    });
});
