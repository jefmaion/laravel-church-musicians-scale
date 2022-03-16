<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstrumentRequest;
use App\Models\Instrument;
use App\Services\InstrumentService;

class InstrumentController extends Controller
{

    private $instrumentService;

    public function __construct(InstrumentService $instrumentService)
    {
        $this->instrumentService = $instrumentService;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datatable = [

            'route' => 'instrument',

            'header' => [
                'Nome' => 'name',
            ],

            'data' => $this->instrumentService->listInstruments()
        ];

        return view('instrument.index', ['data' => $datatable]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instrument.create', ['instrument' => new Instrument()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstrumentRequest $request)
    {
        $this->instrumentService->addNewInstrument($request->except('_token'));
        return redirect()->route('instrument.index');
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
        return view('instrument.update', ['instrument' => $this->instrumentService->getInstrument($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstrumentRequest $request, $id)
    {
        $this->instrumentService->updateInstrument($id, $request->except(['_token', '_method']));
        return redirect()->route('instrument.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->instrumentService->deleteInstrument($id);
        return redirect()->route('instrument.index');
    }
}
