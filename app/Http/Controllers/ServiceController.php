<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // cuidar o GET com numero de registros na paginação
        $services = Service::paginate(5);

        return view('services.index')->with('services', $services);
    }

    public function create()
    {
        return view('services.create');
    }

    // Mudar o Tipo de request para Validate
    public function store(ServiceRequest $request)
    {
        // $dados = $request->all();
        // para prgar todos os dados exceto o token (array com o nome '_token') csrf se usa o Escept
        $data = $request->except('_token');

        /**
         * IMPORTANT
         */
        // proteger os dados inserido em 'Models/Service' add $fillable['todos os campos no BD'];
        Service::create($data);

        return redirect()->route('services.index');
    }

    public function edit(int $id)
    {
        $service = Service::findOrFail($id);

        return view('services.edit')->with('service', $service);
    }

    public function update(int $id, ServiceRequest $request)
    {
        $data = $request->except('_token', '_method');

        $service = Service::findOrFail($id);

        $service->update($data);

        return redirect()->route('services.index');
    }
}
