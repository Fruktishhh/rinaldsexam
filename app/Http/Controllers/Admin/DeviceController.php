<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Devices;
use App\Http\Requests\DeviceStoreRequest;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        $devices = Devices::sortable()->paginate(10);
        return view('admin.devices.index', compact('devices'));
        return view('admin.devices.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.devices.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeviceStoreRequest $request)
    {
        Devices::create([
            'DeviceName' => $request->DeviceName,
            'Device' => $request->Device,
            'manufacturer' => $request->manufacturer,
            'identifier' => $request->identifier,
            'ISN' => $request->ISN,
        ]);
        return redirect()->route('admin.devices.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Devices $devices)
    {
        return view('admin.device.show', [
            'device' => $devices,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Devices $device)
    {
        return view('admin.devices.edit', compact('device'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devices $device)
    {
            $request->validate([
            'DeviceName' => 'required',
            'Device' => 'required',
            'manufacturer' => 'required',
            'identifier' => 'required',
            'ISN' => 'required',
            ]);

            $device->update([
                'DeviceName' => $request->DeviceName,
                'Device' => $request->Device,
                'manufacturer' => $request->manufacturer,
                'identifier' => $request->identifier,
                'ISN' => $request->ISN,
            ]);
            return redirect()->route('admin.devices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devices $device)
    {   
        $device->delete();
        return redirect()->route('admin.devices.index');
    }
}
