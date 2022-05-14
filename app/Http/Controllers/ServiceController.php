<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * List all the services
     *
     * @return View
     */
    public function index()
    {
        // cuidar o GET com numero de registros na paginação
        $services = Service::paginate(5);

        return view('services.index')->with('services', $services);
    }

    /**
     * Show empty form
     *
     * @return View
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Insert data
     *
     * @param ServiceRequest $request
     * @return REDIRECT
     */
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

        return redirect()->route('services.index')->with('message', 'Service created successfully');
    }

    /**
     * Show filled up form to change the fields
     *
     * @param integer $id
     * @return View
     */
    public function edit(Service $service)
    {
        return view('services.edit')->with('service', $service);
    }

    /**
     * Update DB
     *
     * @param integer $id
     * @param ServiceRequest $request
     * @return REDIRECT
     */
    public function update(Service $service, ServiceRequest $request)
    {
        $data = $request->except('_token', '_method');

        $service->update($data);

        return redirect()->route('services.index')->with('service', $service)->with('message', 'Service updated successfully');
    }
}
