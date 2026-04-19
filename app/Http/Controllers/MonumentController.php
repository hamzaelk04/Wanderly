<?php

namespace App\Http\Controllers;

use App\Models\Monument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'description' => 'nullable|string',
            'history' => 'nullable|string',
            'openning' => 'nullable|date_format:H:i',
            'closing' => 'nullable|date_format:H:i',
            'fees' => 'nullable|numeric',
            'images.*' => 'image|max:10240',
        ]);

        DB::beginTransaction();

        try {
            $monument = Monument::create([
                'name' => $request->name,
                'city' => $request->city,
                'address' => $request->address,
                'description' => $request->description,
                'history' => $request->history,
                'openning' => $request->openning,
                'closing' => $request->closing,
                'fees' => $request->fees,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('monuments', 'public');

                    $monument->images()->create([
                        'path' => $path
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('dashboard.organizer');
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
