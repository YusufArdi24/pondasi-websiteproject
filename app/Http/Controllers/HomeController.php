<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\LayananModel;
use App\Models\PortofolioModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['layananrumah'] = LayananModel::where('idkategori', 1)
            ->orderBy('idlayanan', 'DESC')
            ->limit(6)
            ->get();

        $data['layananinterior'] = LayananModel::where('idkategori', 2)
            ->orderBy('idlayanan', 'DESC')
            ->limit(6)
            ->get();

        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();

        return view('home.index', $data);
    }

    // layanan
    public function layanan(Request $request, $idkategori)
    {
        $query = LayananModel::with('kategori')->where('idkategori', $idkategori);

        if ($request->filled('gayadesain')) {
            $query->where('gayadesain', $request->gayadesain);
        }

        if ($idkategori == 1) {
            if ($request->filled('jumlahlantai')) {
                $query->where('jumlahlantai', $request->jumlahlantai);
            }
            if ($request->filled('jumlahkamar')) {
                $query->where('jumlahkamar', $request->jumlahkamar);
            }
            if ($request->filled('jumlahkamarmandi')) {
                $query->where('jumlahkamarmandi', $request->jumlahkamarmandi);
            }
        }

        if ($idkategori == 2) {
            if ($request->filled('jenisruangan')) {
                $query->where('jenisruangan', $request->jenisruangan);
            }
            if ($request->filled('tipe')) {
                $query->where('tipe', $request->tipe);
            }
            if ($request->filled('harga')) {
                if ($request->harga == 'bawah') {
                    $query->where('harga', '<', 10000000);
                } elseif ($request->harga == 'atas') {
                    $query->where('harga', '>=', 10000000);
                }
            }
        }

        $data['layanan'] = $query->paginate(6)->withQueryString();
        $data['namakategori'] = KategoriModel::where('idkategori', $idkategori)->first()->kategori;
        $data['idkategori'] = $idkategori;
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();

        // return response()->json($data);

        return view('home.layanan', $data);
    }


    public function layanandetail($idlayanan)
    {
        $data['layanan'] = LayananModel::where('idlayanan', $idlayanan)->first();
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();
        return view('home.layanandetail', $data);
    }

    // portofolio

    public function portofolio()
    {
        $data['portofolio'] = PortofolioModel::orderBy('idportofolio', 'DESC')->paginate(9);
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();
        return view('home.portofolio', $data);
    }

    public function portofoliodetail($idportofolio)
    {
        $data['portofolio'] = PortofolioModel::where('idportofolio', $idportofolio)->first();
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();
        return view('home.portofoliodetail', $data);
    }

    // tentang
    public function tentang()
    {
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();
        return view('home.tentang', $data);
    }

    // kontak
    public function kontak()
    {
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'ASC')->get();
        return view('home.kontak', $data);
    }
}
