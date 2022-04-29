<?php

namespace App\Http\Controllers\Api;

use App\Models\papi_model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PapiResource;
use Illuminate\Support\Facades\Validator;
use DB;

class PapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
    * @OA\Get(
        *      path="/api/papi",
        *      operationId="getPapiList",
        *      tags={"Papi"},
        *      summary="Get list of papi",
        *      description="Returns list of papi",
        *      @OA\Response(
        *          response=200,
        *          description="Successful operation",
        *          )
        *       )
        *     )
        */
    public function index()
    {
        $result =[];
        $result =  DB::select('select * from papi_models');
        
        
        return response()->json(['data' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //set validation
        $validator = Validator::make($request->all(), [
            'no_pendaftaran'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $papi_model = papi_model::create([
            'no_pendaftaran'     => $request->no_pendaftaran
        ]);

        return new PapiResource($papi_model);
    }

    /**
     * Display the specified resource.
     *
     * @param  papi_model $papi_model
     * @return \Illuminate\Http\Response
     */
    public function show(papi_model $papi_model)
    {
        return new PapiResource($papi_model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  papi_model $papi_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, papi_model $papi_model)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'no_pendaftaran'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //update to database
        $papi_model->update([
            'no_pendaftaran'     => $request->no_pendaftaran
        ]);

        return new PapiResource($papi_model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  papi_model $papi_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(papi_model $papi_model)
    {
        $papi_model->delete();

        return new PapiResource($papi_model);
    }
}
