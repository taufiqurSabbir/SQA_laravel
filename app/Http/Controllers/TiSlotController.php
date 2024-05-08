<?php

namespace App\Http\Controllers;

use App\Models\ti_slot;
use Illuminate\Http\Request;

class TiSlotController extends Controller
{
    public function index()
    {
        $tiSlots = ti_slot::all();
        return view('ti_slots.index', compact('tiSlots'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'table_id' => 'required',
        ]);

        TiSlot::create($request->all());

        return redirect()->route('ti_slots.index')
            ->with('success','Ti slot created successfully.');
    }

    public function show(ti_slot $tiSlot)
    {
        return view('ti_slots.show',compact('tiSlot'));
    }

    public function edit(ti_slot $tiSlot)
    {
        return view('ti_slots.edit',compact('tiSlot'));
    }

    public function update(Request $request, ti_slot $tiSlot)
    {
        $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'table_id' => 'required',
        ]);

        $tiSlot->update($request->all());

        return redirect()->route('ti_slots.index')
            ->with('success','Ti slot updated successfully');
    }


    public function destroy(ti_slot $tiSlot)
    {
        $tiSlot->delete();

        return redirect()->route('ti_slots.index')
            ->with('success','Ti slot deleted successfully');
    }

}
