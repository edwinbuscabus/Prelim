<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepricingRequest;
use App\Http\Requests\UpdatepricingRequest;
use App\Repositories\pricingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class pricingController extends AppBaseController
{
    /** @var  pricingRepository */
    private $pricingRepository;

    public function __construct(pricingRepository $pricingRepo)
    {
        $this->pricingRepository = $pricingRepo;
    }

    /**
     * Display a listing of the pricing.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pricings = $this->pricingRepository->all();

        return view('pricings.index')
            ->with('pricings', $pricings);
    }

    /**
     * Show the form for creating a new pricing.
     *
     * @return Response
     */
    public function create()
    {
        return view('pricings.create');
    }

    /**
     * Store a newly created pricing in storage.
     *
     * @param CreatepricingRequest $request
     *
     * @return Response
     */
    public function store(CreatepricingRequest $request)
    {
        $input = $request->all();

        $pricing = $this->pricingRepository->create($input);

        Flash::success('Pricing saved successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Display the specified pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.show')->with('pricing', $pricing);
    }

    /**
     * Show the form for editing the specified pricing.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        return view('pricings.edit')->with('pricing', $pricing);
    }

    /**
     * Update the specified pricing in storage.
     *
     * @param int $id
     * @param UpdatepricingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepricingRequest $request)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        $pricing = $this->pricingRepository->update($request->all(), $id);

        Flash::success('Pricing updated successfully.');

        return redirect(route('pricings.index'));
    }

    /**
     * Remove the specified pricing from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pricing = $this->pricingRepository->find($id);

        if (empty($pricing)) {
            Flash::error('Pricing not found');

            return redirect(route('pricings.index'));
        }

        $this->pricingRepository->delete($id);

        Flash::success('Pricing deleted successfully.');

        return redirect(route('pricings.index'));
    }
}
