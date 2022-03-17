<?php

namespace App\Http\Controllers;

use App\Models\MemberInstrument;
use App\Services\InstrumentService;
use App\Services\LevelService;
use App\Services\MemberService;
use Illuminate\Http\Request;

class MemberInstrumentController extends Controller
{

    private $memberService;
    private $instrumentService;
    private $levelService;

    public function __construct(MemberService $memberService, InstrumentService $instrumentService, LevelService $levelService)
    {
        $this->memberService = $memberService;
        $this->instrumentService = $instrumentService;
        $this->levelService = $levelService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idMember)
    {

        $member = $this->memberService->getMember($idMember);
        $instruments = $this->memberService->getMemberInstrument($idMember);

        return view('memberInstrument.index', ['member' =>$member, 'instruments' => $instruments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idMember)
    {
        $member      = $this->memberService->getMember($idMember);
        $instruments = $this->instrumentService->listInstruments();
        $levels = $this->levelService->listLevels();

        return view('memberInstrument.create', [
            'member'      => $member,
            'memberInstrument' => new MemberInstrument(),
            'instruments' => $instruments,
            'levels' => $levels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idMember, Request $request)
    {
        $member = $this->memberService->setInstrument($idMember, $request->except('_token'));
        return redirect()->route('member.instrument.index', $member);
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
    public function update(Request $request, $id)
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
        //
    }
}
