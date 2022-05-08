<?php

namespace App\Http\Controllers\Api;

use App\Models\tiu_model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TiuResource;
use Illuminate\Support\Facades\Validator;
use DB;

class TiuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/api/tiu",
     *      operationId="getTiuList",
     *      tags={"TIU"},
     *      summary="Get list of tiu",
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
        $result = [];
        $result =  DB::select('select * from tiu_models');


        return response()->json(['data' => $result]);
    }

    public function getTiuUserResult(Request $request)
    {   
        $no_pendaftaran = ($request->no_pendaftaran);

        

        $result =  DB::select(
            'select * from tiu_models
        where no_pendaftaran ="' . $no_pendaftaran.'"'
        );
        $TiuUserResult = response()->json(['data' => $result]);
       
        if (!empty($result))
        {
            $result = [
                'name' => 'getuser',
                'status' =>  'ok',
                'no_pendaftaran' => $result[0]->no_pendaftaran,
                'message' => 'udah ada gaes'
            ];
        }
        else
        {
            $result = [
                'name' => 'getuser',
                'status' =>  'null',
               
            ];
        }

        return new TiuResource($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\POST(
     *     path="/api/tiu",
     *     summary="Create a Test",
     *     tags={"TIU"},
     *     @OA\RequestBody(
     *        required = true,
     *        description = "Data packet for Test",
     *        @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                property="data",
     *                type="array",
     *                @OA\Items(
     *                      @OA\Property(
     *                         property="no_pendaftaran",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb1",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb2",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb3",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb4",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb5",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb6",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb7",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb8",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb9",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb10",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb11",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb12",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb13",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb14",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb15",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb16",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb17",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb18",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb19",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb20",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb21",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb22",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb23",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb24",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb25",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb26",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb27",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb28",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb29",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb30",
     *                         type="string",
     *                         example=""
     *                      )
    
     *                ),
     *             ),
     *        ),
     *     ),
     *
     *
     *     @OA\Response(
     *        response="200",
     *        description="Successful response",
     *     ),
     * )
     */
    public function store(Request $request)
    {
        $result = [];
        $data = ($request->json("data"));

        if (count($data) == 0) {
            $validator = Validator::make($request->all(), [
                'no_pendaftaran'   => 'required'
            ]);


            //response error validation
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
        } else {
            for ($d = 0; $d < count($data); $d++) {
                //save to database
                $papi = tiu_model::create([
                    'no_pendaftaran'     => $data[$d]["no_pendaftaran"],
                    'jwb1' => $data[$d]['jwb1'],
                    'jwb2' => $data[$d]['jwb2'],
                    'jwb3' => $data[$d]['jwb3'],
                    'jwb4' => $data[$d]['jwb4'],
                    'jwb5' => $data[$d]['jwb5'],
                    'jwb6' => $data[$d]['jwb6'],
                    'jwb7' => $data[$d]['jwb7'],
                    'jwb8' => $data[$d]['jwb8'],
                    'jwb9' => $data[$d]['jwb9'],
                    'jwb10' => $data[$d]['jwb10'],
                    'jwb11' => $data[$d]['jwb11'],
                    'jwb12' => $data[$d]['jwb12'],
                    'jwb13' => $data[$d]['jwb13'],
                    'jwb14' => $data[$d]['jwb14'],
                    'jwb15' => $data[$d]['jwb15'],
                    'jwb16' => $data[$d]['jwb16'],
                    'jwb17' => $data[$d]['jwb17'],
                    'jwb18' => $data[$d]['jwb18'],
                    'jwb19' => $data[$d]['jwb19'],
                    'jwb20' => $data[$d]['jwb20'],
                    'jwb21' => $data[$d]['jwb21'],
                    'jwb22' => $data[$d]['jwb22'],
                    'jwb23' => $data[$d]['jwb23'],
                    'jwb24' => $data[$d]['jwb24'],
                    'jwb25' => $data[$d]['jwb25'],
                    'jwb26' => $data[$d]['jwb26'],
                    'jwb27' => $data[$d]['jwb27'],
                    'jwb28' => $data[$d]['jwb28'],
                    'jwb29' => $data[$d]['jwb29'],
                    'jwb30' => $data[$d]['jwb30']

                ]);
                $p = [
                    'name' => 'Insert Papi',
                    'no_pendaftaran' => $data[$d]["no_pendaftaran"],
                    'jwb1' => $data[$d]['jwb1'],
                    'jwb2' => $data[$d]['jwb2'],
                    'jwb3' => $data[$d]['jwb3'],
                    'jwb4' => $data[$d]['jwb4'],
                    'jwb5' => $data[$d]['jwb5'],
                    'jwb6' => $data[$d]['jwb6'],
                    'jwb7' => $data[$d]['jwb7'],
                    'jwb8' => $data[$d]['jwb8'],
                    'jwb9' => $data[$d]['jwb9'],
                    'jwb10' => $data[$d]['jwb10'],
                    'jwb11' => $data[$d]['jwb11'],
                    'jwb12' => $data[$d]['jwb12'],
                    'jwb13' => $data[$d]['jwb13'],
                    'jwb14' => $data[$d]['jwb14'],
                    'jwb15' => $data[$d]['jwb15'],
                    'jwb16' => $data[$d]['jwb16'],
                    'jwb17' => $data[$d]['jwb17'],
                    'jwb18' => $data[$d]['jwb18'],
                    'jwb19' => $data[$d]['jwb19'],
                    'jwb20' => $data[$d]['jwb20'],
                    'jwb21' => $data[$d]['jwb21'],
                    'jwb22' => $data[$d]['jwb22'],
                    'jwb23' => $data[$d]['jwb23'],
                    'jwb24' => $data[$d]['jwb24'],
                    'jwb25' => $data[$d]['jwb25'],
                    'jwb26' => $data[$d]['jwb26'],
                    'jwb27' => $data[$d]['jwb27'],
                    'jwb28' => $data[$d]['jwb28'],
                    'jwb29' => $data[$d]['jwb29'],
                    'jwb30' => $data[$d]['jwb30'],
                    'status' => 'success', 'code' => 200
                ];
                array_push($result, $p);
            }
        }

        return new TiuResource($result);

        // $validator = Validator::make($request->all(), [
        //     'no_pendaftaran'   => 'required'
        // ]);


        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }


        // $tiu_model = tiu_model::create([
        //     'no_pendaftaran'     => $request->no_pendaftaran
        // ]);

        // return new TiuResource($tiu_model);
    }

    /**
     * Display the specified resource.
     *
     * @param  tiu_model $tiu_model
     * @return \Illuminate\Http\Response
     */
    public function show(tiu_model $tiu_model)
    {
        return new TiuResource($tiu_model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  tiu_model $tiu_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiu_model $tiu_model)
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
        $tiu_model->update([
            'no_pendaftaran'     => $request->no_pendaftaran
        ]);

        return new TiuResource($tiu_model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  tiu_model $tiu_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiu_model $tiu_model)
    {
        $tiu_model->delete();

        return new TiuResource($tiu_model);
    }
}
