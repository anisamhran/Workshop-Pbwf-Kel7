<?php

namespace App\Http\Controllers;
use App\Models\TenagaMedis;
use App\Models\Service;
use App\Models\Roles;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all(); // Fetch all services from the database

        return view('service', compact('services')); // Pass $services variable to the view
    }

    //CUSTOMER??
    public function formdokter(){
        return view('appoinment.dokter');
    }

    public function formperawat(){
        return view('appoinment.perawat');
    }

    // ADMIN
    public function main()
    {
        $services = Service::all();
        // $roles = Roles::all();
        return view('admin.service.main', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    // // Ambil ID role dari form nek ws di-submit
    // $roleId = request()->input('id_roles'); // Pastikan ini sesuai dengan nama input pada form

    // // Query nama tenaga medis berdasarkan role
    // $tenagaMedisByRole = TenagaMedis::where('id_roles', $roleId)->get();

    return view('admin.service.create');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi input form disini sesuai dengan kebutuhan Anda
         $services = new Service();
         $services->nama_service = $request->input('nama_service');

        // Mengunggah gambar (foto pekerja)
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('serviceimg'), $imageName); // Ganti direktori tujuan
            $services->image = $imageName;
        }

        $services->save();

        return redirect()->route('service.main')->with('success', 'Data medis berhasil disimpan');
    }



    public function show(Service $services)
    {
        //
    }

    public function showForm()
    {
        $services = Service::all();

        return view('admin.service.create', compact('services'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $services = Service::find($id);
        return view('admin.service.edit', ['service' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
     {
         $services = Service::find($id);

         // Validasi input form disini sesuai dengan kebutuhan Anda

        //  $services->tenagamedis->nama= $request->input('nama_medis');
         $services->nama_service = $request->input('nama_service');

         // Mengunggah gambar (foto medis) jika dipilih
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $imageName = time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('serviceimg'), $imageName);

             // Hapus foto lama jika ada
             if (!empty($services->image)) {
                 $fotoPath = public_path('serviceimg/' . $services->image);
                 if (file_exists($fotoPath)) {
                     unlink($fotoPath);
                 } else {
                     return redirect()->back()->with('error', 'File foto medis tidak ditemukan');
                 }
             }

             $services->image = $imageName;
         }

         $services->save();

         return redirect()->route('service.main')->with('success', 'Data medis berhasil diperbarui');
     }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->back();
    }
    // ServiceController.php (atau TenagaMedisController.php)

    // public function fetchDoctors()
    // {
    //     $tenagaMedis = TenagaMedis::where('id_roles', 2)->get();
    //     return view('appointment.dokter', compact('tenagaMedis'));
    // }
    // ServiceController.php

public function fetchDoctors()
{
    $tenagaMedis = TenagaMedis::where('id_roles', 2)->get();
    return view('appointment.dokter', ['tenagaMedis' => $tenagaMedis]);
}






}
