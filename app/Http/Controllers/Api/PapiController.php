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
     *      tags={"PAPI"},
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
        $result = [];
        $result =  DB::select('select * from papi_models');


        return response()->json(['data' => $result]);
    }


    public function getPapiUserResult(Request $request)
    {   
        $no_pendaftaran = ($request->no_pendaftaran);

        

        $result =  DB::select(
            'select * from papi_models
        where no_pendaftaran ="' . $no_pendaftaran.'"'
        );
        $PapiUserResult = response()->json(['data' => $result]);
        // dump($username);
        // dump($password);
        //dump($login);
        // dump($result[0]->id);
        // die;
        if (!empty($result))
        {
            $result = [
                'name' => 'getuser',
                'status' =>  'ok',
                // 'id' => $result[0]->id,
                'no_pendaftaran' => $result[0]->no_pendaftaran,
                'meesage' => 'udah ada gaes'
            ];
        }
        else
        {
            $result = [
                'name' => 'getuser',
                'status' =>  'null',
               
            ];
        }

        return new PapiResource($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * @OA\POST(
     *     path="/api/papi",
     *     summary="Create a Test",
     *     tags={"PAPI"},
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
     *                      ),
     *                      @OA\Property(
     *                         property="jwb31",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb32",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb33",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb34",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb35",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb36",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb37",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb38",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb39",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb40",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb41",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb42",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb43",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb44",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb45",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb46",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb47",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb48",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb49",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb50",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb51",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb52",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb53",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb54",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb55",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb56",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb57",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb58",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb59",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb60",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb61",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb62",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb63",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb64",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb65",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb66",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb67",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb68",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb69",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb70",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb71",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb72",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb73",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb74",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb75",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb76",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb77",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb78",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb79",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb80",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb81",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb82",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb83",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb84",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb85",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb86",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb87",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb88",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb89",
     *                         type="string",
     *                         example=""
     *                      ),
     *                      @OA\Property(
     *                         property="jwb90",
     *                         type="string",
     *                         example=""
     *                      ),
     *                     
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
                $papi = papi_model::create([
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
                    'jwb30' => $data[$d]['jwb30'],
                    'jwb31' => $data[$d]['jwb31'],
                    'jwb32' => $data[$d]['jwb32'],
                    'jwb33' => $data[$d]['jwb33'],
                    'jwb34' => $data[$d]['jwb34'],
                    'jwb35' => $data[$d]['jwb35'],
                    'jwb36' => $data[$d]['jwb36'],
                    'jwb37' => $data[$d]['jwb37'],
                    'jwb38' => $data[$d]['jwb38'],
                    'jwb39' => $data[$d]['jwb39'],
                    'jwb40' => $data[$d]['jwb40'],
                    'jwb41' => $data[$d]['jwb41'],
                    'jwb42' => $data[$d]['jwb42'],
                    'jwb43' => $data[$d]['jwb43'],
                    'jwb44' => $data[$d]['jwb44'],
                    'jwb45' => $data[$d]['jwb45'],
                    'jwb46' => $data[$d]['jwb46'],
                    'jwb47' => $data[$d]['jwb47'],
                    'jwb48' => $data[$d]['jwb48'],
                    'jwb49' => $data[$d]['jwb49'],
                    'jwb50' => $data[$d]['jwb50'],
                    'jwb51' => $data[$d]['jwb51'],
                    'jwb52' => $data[$d]['jwb52'],
                    'jwb53' => $data[$d]['jwb53'],
                    'jwb54' => $data[$d]['jwb54'],
                    'jwb55' => $data[$d]['jwb55'],
                    'jwb56' => $data[$d]['jwb56'],
                    'jwb57' => $data[$d]['jwb57'],
                    'jwb58' => $data[$d]['jwb58'],
                    'jwb59' => $data[$d]['jwb59'],
                    'jwb60' => $data[$d]['jwb60'],
                    'jwb61' => $data[$d]['jwb61'],
                    'jwb62' => $data[$d]['jwb62'],
                    'jwb63' => $data[$d]['jwb63'],
                    'jwb64' => $data[$d]['jwb64'],
                    'jwb65' => $data[$d]['jwb65'],
                    'jwb66' => $data[$d]['jwb66'],
                    'jwb67' => $data[$d]['jwb67'],
                    'jwb68' => $data[$d]['jwb68'],
                    'jwb69' => $data[$d]['jwb69'],
                    'jwb70' => $data[$d]['jwb70'],
                    'jwb71' => $data[$d]['jwb71'],
                    'jwb72' => $data[$d]['jwb72'],
                    'jwb73' => $data[$d]['jwb73'],
                    'jwb74' => $data[$d]['jwb74'],
                    'jwb75' => $data[$d]['jwb75'],
                    'jwb76' => $data[$d]['jwb76'],
                    'jwb77' => $data[$d]['jwb77'],
                    'jwb78' => $data[$d]['jwb78'],
                    'jwb79' => $data[$d]['jwb79'],
                    'jwb80' => $data[$d]['jwb80'],
                    'jwb81' => $data[$d]['jwb81'],
                    'jwb82' => $data[$d]['jwb82'],
                    'jwb83' => $data[$d]['jwb83'],
                    'jwb84' => $data[$d]['jwb84'],
                    'jwb85' => $data[$d]['jwb85'],
                    'jwb86' => $data[$d]['jwb86'],
                    'jwb87' => $data[$d]['jwb87'],
                    'jwb88' => $data[$d]['jwb88'],
                    'jwb89' => $data[$d]['jwb89'],
                    'jwb90' => $data[$d]['jwb90']

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
                    'jwb31' => $data[$d]['jwb31'],
                    'jwb32' => $data[$d]['jwb32'],
                    'jwb33' => $data[$d]['jwb33'],
                    'jwb34' => $data[$d]['jwb34'],
                    'jwb35' => $data[$d]['jwb35'],
                    'jwb36' => $data[$d]['jwb36'],
                    'jwb37' => $data[$d]['jwb37'],
                    'jwb38' => $data[$d]['jwb38'],
                    'jwb39' => $data[$d]['jwb39'],
                    'jwb40' => $data[$d]['jwb40'],
                    'jwb41' => $data[$d]['jwb41'],
                    'jwb42' => $data[$d]['jwb42'],
                    'jwb43' => $data[$d]['jwb43'],
                    'jwb44' => $data[$d]['jwb44'],
                    'jwb45' => $data[$d]['jwb45'],
                    'jwb46' => $data[$d]['jwb46'],
                    'jwb47' => $data[$d]['jwb47'],
                    'jwb48' => $data[$d]['jwb48'],
                    'jwb49' => $data[$d]['jwb49'],
                    'jwb50' => $data[$d]['jwb50'],
                    'jwb51' => $data[$d]['jwb51'],
                    'jwb52' => $data[$d]['jwb52'],
                    'jwb53' => $data[$d]['jwb53'],
                    'jwb54' => $data[$d]['jwb54'],
                    'jwb55' => $data[$d]['jwb55'],
                    'jwb56' => $data[$d]['jwb56'],
                    'jwb57' => $data[$d]['jwb57'],
                    'jwb58' => $data[$d]['jwb58'],
                    'jwb59' => $data[$d]['jwb59'],
                    'jwb60' => $data[$d]['jwb60'],
                    'jwb61' => $data[$d]['jwb61'],
                    'jwb62' => $data[$d]['jwb62'],
                    'jwb63' => $data[$d]['jwb63'],
                    'jwb64' => $data[$d]['jwb64'],
                    'jwb65' => $data[$d]['jwb65'],
                    'jwb66' => $data[$d]['jwb66'],
                    'jwb67' => $data[$d]['jwb67'],
                    'jwb68' => $data[$d]['jwb68'],
                    'jwb69' => $data[$d]['jwb69'],
                    'jwb70' => $data[$d]['jwb70'],
                    'jwb71' => $data[$d]['jwb71'],
                    'jwb72' => $data[$d]['jwb72'],
                    'jwb73' => $data[$d]['jwb73'],
                    'jwb74' => $data[$d]['jwb74'],
                    'jwb75' => $data[$d]['jwb75'],
                    'jwb76' => $data[$d]['jwb76'],
                    'jwb77' => $data[$d]['jwb77'],
                    'jwb78' => $data[$d]['jwb78'],
                    'jwb79' => $data[$d]['jwb79'],
                    'jwb80' => $data[$d]['jwb80'],
                    'jwb81' => $data[$d]['jwb81'],
                    'jwb82' => $data[$d]['jwb82'],
                    'jwb83' => $data[$d]['jwb83'],
                    'jwb84' => $data[$d]['jwb84'],
                    'jwb85' => $data[$d]['jwb85'],
                    'jwb86' => $data[$d]['jwb86'],
                    'jwb87' => $data[$d]['jwb87'],
                    'jwb88' => $data[$d]['jwb88'],
                    'jwb89' => $data[$d]['jwb89'],
                    'jwb90' => $data[$d]['jwb90'],
                    'status' => 'success', 'code' => 200
                ];
                array_push($result, $p);
            }
        }

        return new PapiResource($result);

        // $validator = Validator::make($request->all(), [
        //     'no_pendaftaran'   => 'required'
        // ]);


        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 400);
        // }


        // $papi_model = papi_model::create([
        //     'no_pendaftaran'     => $request->no_pendaftaran
        // ]);

        // return new PapiResource($papi_model);
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
