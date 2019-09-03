<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHasilRequest;
use App\Http\Requests\UpdateHasilRequest;
use App\Repositories\HasilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Jawaban;
use App\Models\Pertanyaan;

class HasilController extends AppBaseController
{
    /** @var  HasilRepository */
    private $hasilRepository;

    public function __construct(HasilRepository $hasilRepo)
    {
        $this->hasilRepository = $hasilRepo;
    }

    /**
     * Display a listing of the Hasil.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hasils = $this->hasilRepository->all();

        return view('hasils.index')
            ->with('hasils', $hasils);
    }

    /**
     * Show the form for creating a new Hasil.
     *
     * @return Response
     */
    public function create()
    {
        $pertanyaan= Pertanyaan::where('isi_pertanyaan',1)->get();
        //$jawaban= Jawaban::find([1,2]);
        $jawaban= Jawaban::where('pertanyaan_id',1)->get()->pluck('isi_jawaban','id');
        /*dd($pertanyaan);*/
        return view('hasils.create',compact('pertanyaan','jawaban'));
    }

    /**
     * Store a newly created Hasil in storage.
     *
     * @param CreateHasilRequest $request
     *
     * @return Response
     */
    public function store(CreateHasilRequest $request)
    {
        $input = $request->all();

        $hasil = $this->hasilRepository->create($input);

        Flash::success('Hasil saved successfully.');

        return redirect(route('hasils.index'));
    }

    /**
     * Display the specified Hasil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hasil = $this->hasilRepository->find($id);

        if (empty($hasil)) {
            Flash::error('Hasil not found');

            return redirect(route('hasils.index'));
        }

        return view('hasils.show')->with('hasil', $hasil);
    }

    /**
     * Show the form for editing the specified Hasil.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hasil = $this->hasilRepository->find($id);

        if (empty($hasil)) {
            Flash::error('Hasil not found');

            return redirect(route('hasils.index'));
        }

        return view('hasils.edit')->with('hasil', $hasil);
    }

    /**
     * Update the specified Hasil in storage.
     *
     * @param int $id
     * @param UpdateHasilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateHasilRequest $request)
    {
        $hasil = $this->hasilRepository->find($id);

        if (empty($hasil)) {
            Flash::error('Hasil not found');

            return redirect(route('hasils.index'));
        }

        $hasil = $this->hasilRepository->update($request->all(), $id);

        Flash::success('Hasil updated successfully.');

        return redirect(route('hasils.index'));
    }

    /**
     * Remove the specified Hasil from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hasil = $this->hasilRepository->find($id);

        if (empty($hasil)) {
            Flash::error('Hasil not found');

            return redirect(route('hasils.index'));
        }

        $this->hasilRepository->delete($id);

        Flash::success('Hasil deleted successfully.');

        return redirect(route('hasils.index'));
    }
}
