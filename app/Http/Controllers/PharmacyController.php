<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PharmacyRepositoryInterface;

class PharmacyController extends Controller
{
    /**
     * @var PharmacyRepositoryInterface $pharmacyRepository 
     */
    private $pharmacyRepository;

    /**
     * PharmacyController Constructor
     */
    public function __construct(PharmacyRepositoryInterface $pharmacyRepository)
    {
        $this->pharmacyRepository = $pharmacyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pharmacies.index', [
            'pharmacies' => $this->pharmacyRepository->paginated(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->pharmacyRepository->rules());

        $this->pharmacyRepository->create($request->except('token'));

        return redirect()->route('pharmacies.index')
            ->with('success', __('Created Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pharmacies.show', [
            'pharmacy' => $this->pharmacyRepository->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pharmacies.edit', [
            'pharmacy' => $this->pharmacyRepository->find($id)
        ]);
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
        $request->validate($this->pharmacyRepository->rules());

        $this->pharmacyRepository->update($id, $request->except('token'));

        return redirect()->route('pharmacies.index')
            ->with('success', __('Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pharmacyRepository->delete($id);

        return redirect()->route('pharmacies.index')
            ->with('success', __('Deleted Successfully'));
    }
}
