<?php

Route::post('/databases/{databaseName}/collections/{collectionName}/insertOne', 'Mongo\Databases\Collections\InsertOneController')->name('insertOne');

Route::get('/databases/{databaseName}/collections/{collectionName}/findMany', 'Mongo\Databases\Collections\FindManyController')->name('findMany');

Route::get('/databases/{databaseName}/collections/{collectionName}/findOne', 'Mongo\Databases\Collections\FindOneController')->name('findOne');
