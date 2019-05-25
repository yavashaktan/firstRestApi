<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use App\Person;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;

class PersonController extends Controller
{
    /**
     * @return PersonResourceCollection
     */
    public function index(): PersonResourceCollection
    {
        return new PersonResourceCollection(Person::paginate());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $person = Person::create($request->all());
        return response()->json($person, 201);
    }

    /**
     * @param Person $person
     * @return PersonResource
     */
    public function show(Person $person): PersonResource
    {
        return new PersonResource($person);
    }

    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return response()->json($person, 200);
    }

    public function destroy(Person $person)
    {
        try {
            $person->delete();
        } catch (Exception $e) {
            return response()->json($e);
        }
        return \response(null, 200);
    }
}
