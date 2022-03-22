<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberInstrumentRequest;
use App\Services\InstrumentService;
use App\Services\LevelService;
use App\Services\MemberService;
use Illuminate\Http\Request;
use stdClass;

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

        if(!$member = $this->memberService->getMember($idMember)) {
            return redirect()->back();
        }

        return view('memberInstrument.index', [
            'member'      => $member,
            'instruments' => $member->instruments
        ]);
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
        $levels      = $this->levelService->listLevels();

        return view('memberInstrument.create', [
            'member'      => $member,
            'memberInstrument' => $member->getInstrument(0),
            'instruments' => $instruments,
            'levels'      => $levels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($idMember, MemberInstrumentRequest $request)
    {

        if(!$member = $this->memberService->getMember($idMember)) {
            return redirect()->back();
        }

        $this->memberService->addInstrument($member, $request->member_instrument);
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
    public function edit($idMember, $id)
    {

        if(!$member = $this->memberService->getMember($idMember)) {
            return redirect()->back();
        }

        $memberInstrument  = $member->getInstrument($id);
        $instruments       = $this->instrumentService->listInstruments();
        $levels            = $this->levelService->listLevels();

        return view('memberInstrument.update', [
            'member'           => $member,
            'memberInstrument' => $memberInstrument,
            'instruments'      => $instruments,
            'levels'           => $levels
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberInstrumentRequest $request, $id)
    {

        if(!$member = $this->memberService->getMember($id)) {
            return redirect()->back();
        }

        $this->memberService->updateInstrument($member, $request->member_instrument);
        return redirect()->route('member.instrument.index', $member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMember, $idPivot)
    {

        if(!$member = $this->memberService->getMember($idMember)) {
            return redirect()->back();
        }

        $this->memberService->deleteInstrument($member, $idPivot);
        return redirect()->route('member.instrument.index', $member);
    }
}
