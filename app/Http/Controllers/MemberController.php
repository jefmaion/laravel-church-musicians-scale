<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Services\MemberService;

class MemberController extends Controller
{

    private $memberService;

    public function __construct(MemberService $memberService)
    {
        $this->memberService = $memberService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       

        $datatable = [

            'route' => 'member',

            'header' => [
                'Nome' => 'name',
                'Email' => 'email',
                'Telefone' => 'phone'
            ],

            'data' => [
                (object)  [
                    'id' => 1,
                    'name' => 'Jefferson',
                    'email' => 'jefmaion@hotmail.com',
                    'phone' => '(19) 98552480'
                ],
                (object)  [
                    'id' => 2,
                    'name' => 'Jefferson',
                    'email' => 'jefmaion@hotmail.com',
                    'phone' => '(19) 98552480'
                ]
            ]
        ];

        return view('member.index', ['datatable' => $datatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('member.index');
    }
}
