<?php

namespace App\Http\Controllers\Api;

use App\Models\riasec_model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RiasecResource;
use Illuminate\Support\Facades\Validator;
use DB;

class RiasecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/api/riasec",
     *      operationId="getRiasecList",
     *      tags={"RIASEC"},
     *      summary="Get list of riasec",
     *      description="Returns list of riasec",
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
        $result =  DB::select('select * from riasec_models');


        return response()->json(['data' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\POST(
     *     path="/api/riasec",
     *     summary="Create a Test",
     *     tags={"RIASEC"},
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
     *                         property="jawab1",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab2",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab3",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab4",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab5",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab6",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab7",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab8",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab9",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab10",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab11",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab12",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab13",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab14",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab15",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab16",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab17",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab18",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab19",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab20",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab21",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab22",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab23",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab24",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab25",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab26",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab27",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab28",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab29",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab30",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab31",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab32",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab33",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab34",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab35",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab36",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab37",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab38",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab39",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab40",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab41",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jawab42",
     *                         type="string",
     *                         example=""
     *                      ),
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
                $papi = riasec_model::create([
                    'no_pendaftaran'     => $data[$d]["no_pendaftaran"],
                    'jawab1' => $data[$d]['jawab1'],
                    'jawab2' => $data[$d]['jawab2'],
                    'jawab3' => $data[$d]['jawab3'],
                    'jawab4' => $data[$d]['jawab4'],
                    'jawab5' => $data[$d]['jawab5'],
                    'jawab6' => $data[$d]['jawab6'],
                    'jawab7' => $data[$d]['jawab7'],
                    'jawab8' => $data[$d]['jawab8'],
                    'jawab9' => $data[$d]['jawab9'],
                    'jawab10' => $data[$d]['jawab10'],
                    'jawab11' => $data[$d]['jawab11'],
                    'jawab12' => $data[$d]['jawab12'],
                    'jawab13' => $data[$d]['jawab13'],
                    'jawab14' => $data[$d]['jawab14'],
                    'jawab15' => $data[$d]['jawab15'],
                    'jawab16' => $data[$d]['jawab16'],
                    'jawab17' => $data[$d]['jawab17'],
                    'jawab18' => $data[$d]['jawab18'],
                    'jawab19' => $data[$d]['jawab19'],
                    'jawab20' => $data[$d]['jawab20'],
                    'jawab21' => $data[$d]['jawab21'],
                    'jawab22' => $data[$d]['jawab22'],
                    'jawab23' => $data[$d]['jawab23'],
                    'jawab24' => $data[$d]['jawab24'],
                    'jawab25' => $data[$d]['jawab25'],
                    'jawab26' => $data[$d]['jawab26'],
                    'jawab27' => $data[$d]['jawab27'],
                    'jawab28' => $data[$d]['jawab28'],
                    'jawab29' => $data[$d]['jawab29'],
                    'jawab30' => $data[$d]['jawab30'],
                    'jawab31' => $data[$d]['jawab31'],
                    'jawab32' => $data[$d]['jawab32'],
                    'jawab33' => $data[$d]['jawab33'],
                    'jawab34' => $data[$d]['jawab34'],
                    'jawab35' => $data[$d]['jawab35'],
                    'jawab36' => $data[$d]['jawab36'],
                    'jawab37' => $data[$d]['jawab37'],
                    'jawab38' => $data[$d]['jawab38'],
                    'jawab39' => $data[$d]['jawab39'],
                    'jawab40' => $data[$d]['jawab40'],
                    'jawab41' => $data[$d]['jawab41'],
                    'jawab42' => $data[$d]['jawab42']

                ]);
                $p = [
                    'name' => 'Insert Riasec',
                    'no_pendaftaran' => $data[$d]["no_pendaftaran"],
                    'jawab1' => $data[$d]['jawab1'],
                    'jawab2' => $data[$d]['jawab2'],
                    'jawab3' => $data[$d]['jawab3'],
                    'jawab4' => $data[$d]['jawab4'],
                    'jawab5' => $data[$d]['jawab5'],
                    'jawab6' => $data[$d]['jawab6'],
                    'jawab7' => $data[$d]['jawab7'],
                    'jawab8' => $data[$d]['jawab8'],
                    'jawab9' => $data[$d]['jawab9'],
                    'jawab10' => $data[$d]['jawab10'],
                    'jawab11' => $data[$d]['jawab11'],
                    'jawab12' => $data[$d]['jawab12'],
                    'jawab13' => $data[$d]['jawab13'],
                    'jawab14' => $data[$d]['jawab14'],
                    'jawab15' => $data[$d]['jawab15'],
                    'jawab16' => $data[$d]['jawab16'],
                    'jawab17' => $data[$d]['jawab17'],
                    'jawab18' => $data[$d]['jawab18'],
                    'jawab19' => $data[$d]['jawab19'],
                    'jawab20' => $data[$d]['jawab20'],
                    'jawab21' => $data[$d]['jawab21'],
                    'jawab22' => $data[$d]['jawab22'],
                    'jawab23' => $data[$d]['jawab23'],
                    'jawab24' => $data[$d]['jawab24'],
                    'jawab25' => $data[$d]['jawab25'],
                    'jawab26' => $data[$d]['jawab26'],
                    'jawab27' => $data[$d]['jawab27'],
                    'jawab28' => $data[$d]['jawab28'],
                    'jawab29' => $data[$d]['jawab29'],
                    'jawab30' => $data[$d]['jawab30'],
                    'jawab31' => $data[$d]['jawab31'],
                    'jawab32' => $data[$d]['jawab32'],
                    'jawab33' => $data[$d]['jawab33'],
                    'jawab34' => $data[$d]['jawab34'],
                    'jawab35' => $data[$d]['jawab35'],
                    'jawab36' => $data[$d]['jawab36'],
                    'jawab37' => $data[$d]['jawab37'],
                    'jawab38' => $data[$d]['jawab38'],
                    'jawab39' => $data[$d]['jawab39'],
                    'jawab40' => $data[$d]['jawab40'],
                    'jawab41' => $data[$d]['jawab41'],
                    'jawab42' => $data[$d]['jawab42'],
                    'status' => 'success', 'code' => 200
                ];
                array_push($result, $p);
            }
        }

        return new RiasecResource($result);

        // $validator = Validator::make($request->all(), [
        //     'no_pendaftaran'   => 'required'
        // ]);


        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }


        // $riasec_model = riasec_model::create([
        //     'no_pendaftaran'     => $request->no_pendaftaran
        // ]);

        // return new RiasecResource($riasec_model);
    }

    /**
     * Display the specified resource.
     *
     * @param  riasec_model $riasec_model
     * @return \Illuminate\Http\Response
     */
    public function show(riasec_model $riasec_model)
    {
        return new RiasecResource($riasec_model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  riasec_model $riasec_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, riasec_model $riasec_model)
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
        $riasec_model->update([
            'no_pendaftaran'     => $request->no_pendaftaran
        ]);

        return new RiasecResource($riasec_model);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  riasec_model $riasec_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(riasec_model $riasec_model)
    {
        $riasec_model->delete();

        return new RiasecResource($riasec_model);
    }
}
