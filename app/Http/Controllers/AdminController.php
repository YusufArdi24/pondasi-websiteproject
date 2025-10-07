<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use App\Models\LayananModel;
use App\Models\PortofolioModel;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['portofolio'] = PortofolioModel::count();
        $data['layananrumah'] = LayananModel::where('idkategori', 1)->count();
        $data['layananinterior'] = LayananModel::where('idkategori', 2)->count();
        return view('panel.dashboard', $data);
    }

    // portofolio
    public function portofolio()
    {
        $data['portofolio'] = PortofolioModel::orderBy('idportofolio', 'DESC')->get();
        return view('panel.portofolio', $data);
    }

    public function portofoliosimpan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $data = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ];

        try {
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $filename = $file->hashName();
                $file->storeAs('portofolio', $filename, 'public');

                $data['foto'] = $filename;
            }

            PortofolioModel::create($data);
        } catch (Exception $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage(),
            ]);
        }
        return redirect('panel/portofolio')->with('success', 'Portofolio berhasil disimpan');
    }

    public function portofolioedit($id)
    {
        $data['portofolio'] = PortofolioModel::find($id);

        return view('panel.portofolioedit', $data);
    }

    public function portofolioupdate(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $data = [
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {

            $portofolio = PortofolioModel::find($id);

            if ($portofolio->foto && file_exists(public_path('storage/portofolio/' . $portofolio->foto))) {
                unlink(public_path('storage/portofolio/' . $portofolio->foto));
            }

            $file = $request->file('foto');
            $filename = $file->hashName();
            $file->storeAs('portofolio', $filename, 'public');

            $data['foto'] = $filename;
        }

        PortofolioModel::where('idportofolio', $id)->update($data);

        return redirect('panel/portofolio')->with('success', 'Data berhasil diupdate');
    }

    public function portofoliohapus($id)
    {
        $portofolio = PortofolioModel::find($id);

        if ($portofolio->foto && file_exists(public_path('storage/portofolio/' . $portofolio->foto))) {
            unlink(public_path('storage/portofolio/' . $portofolio->foto));
        }

        PortofolioModel::where('idportofolio', $id)->delete();
        return redirect('panel/portofolio')->with('success', 'Data berhasil dihapus');
    }

    // kategori
    public function kategori()
    {
        $data['kategori'] = KategoriModel::orderBy('idkategori', 'DESC')->get();
        return view('panel.kategori', $data);
    }

    public function kategorisimpan(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        $data = [
            'kategori' => $request->kategori,
        ];

        KategoriModel::create($data);

        return redirect('panel/kategori')->with('success', 'Kategori berhasil disimpan');
    }

    public function kategoriedit($id)
    {
        $data['kategori'] = KategoriModel::find($id);

        return view('panel.kategoriedit', $data);
    }

    public function kategoriupdate(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        $data = [
            'kategori' => $request->kategori,
        ];

        KategoriModel::where('idkategori', $id)->update($data);

        return redirect('panel/kategori')->with('success', 'Data berhasil diupdate');
    }

    public function kategorihapus($id)
    {
        KategoriModel::where('idkategori', $id)->delete();
        return redirect('panel/kategori')->with('success', 'Data berhasil dihapus');
    }

    // layanan rumah

    public function layananrumah()
    {
        $data['layanan'] = LayananModel::where('idkategori', 1)
            ->orderBy('idlayanan', 'DESC')
            ->get();
        return view('panel.layananrumah', $data);
    }

    public function layananrumahsimpan(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gayadesain' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'fotodenah' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $data = [
            'idkategori'        => 1,
            'judul'             => $request->judul,
            'deskripsi'         => $request->deskripsi,
            'lokasi'            => $request->lokasi,
            'luas'              => $request->luas,
            'jumlahkamar'       => $request->jumlahkamar,
            'jumlahkamarmandi'  => $request->jumlahkamarmandi,
            'jumlahlantai'      => $request->jumlahlantai,
            'gayadesain'        => $request->gayadesain,
            'harga'             => $request->harga,
        ];


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['foto'] = $filename;
        }

        if ($request->hasFile('fotodenah')) {
            $file = $request->file('fotodenah');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['fotodenah'] = $filename;
        }

        LayananModel::create($data);


        return redirect('panel/layananrumah')->with('success', 'Layanan berhasil disimpan');
    }

    public function layananrumahedit($id)
    {
        $data['layanan'] = LayananModel::findOrFail($id);
        return view('panel.layananrumahedit', $data);
    }

    public function layananrumahupdate(Request $request, $id)
    {
        $layanan = LayananModel::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gayadesain' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'fotodenah' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $data = [
            'idkategori'        => 1,
            'judul'             => $request->judul,
            'deskripsi'         => $request->deskripsi,
            'lokasi'            => $request->lokasi,
            'luas'              => $request->luas,
            'jumlahkamar'       => $request->jumlahkamar,
            'jumlahkamarmandi'  => $request->jumlahkamarmandi,
            'jumlahlantai'      => $request->jumlahlantai,
            'gayadesain'        => $request->gayadesain,
            'harga'             => $request->harga,
        ];

        // upload foto baru kalau ada
        if ($request->hasFile('foto')) {
            if ($layanan->foto && file_exists(public_path('storage/layanan/' . $layanan->foto))) {
                unlink(public_path('storage/layanan/' . $layanan->foto));
            }
            $file = $request->file('foto');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['foto'] = $filename;
        }

        if ($request->hasFile('fotodenah')) {
            if ($layanan->fotodenah && file_exists(public_path('storage/layanan/' . $layanan->fotodenah))) {
                unlink(public_path('storage/layanan/' . $layanan->fotodenah));
            }
            $file = $request->file('fotodenah');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['fotodenah'] = $filename;
        }

        LayananModel::where('idlayanan', $id)->update($data);

        return redirect('panel/layananrumah')->with('success', 'Layanan berhasil diperbarui');
    }

    public function layananrumahhapus($id)
    {
        $layanan = LayananModel::findOrFail($id);
        if ($layanan->foto && file_exists(public_path('storage/layanan/' . $layanan->foto))) {
            unlink(public_path('storage/layanan/' . $layanan->foto));
        }
        if ($layanan->fotodenah && file_exists(public_path('storage/layanan/' . $layanan->fotodenah))) {
            unlink(public_path('storage/layanan/' . $layanan->fotodenah));
        }
        LayananModel::where('idlayanan', $id)->delete();
        return redirect('panel/layananrumah')->with('success', 'Layanan berhasil dihapus');
    }

    // layanan interior
    public function layananinterior()
    {
        $data['layanan'] = LayananModel::where('idkategori', 2)
            ->orderBy('idlayanan', 'DESC')
            ->get();

        return view('panel.layananinterior', $data);
    }

    public function layananinteriorsimpan(Request $request)
    {
        $request->validate([
            'judul'        => 'required',
            'deskripsi'    => 'required',
            'jenisruangan' => 'required',
            'tipe'         => 'required',
            'harga'        => 'required|numeric',
            'foto'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $data = [
            'idkategori'    => 2,
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'jenisruangan'  => $request->jenisruangan,
            'tipe'          => $request->tipe,
            'harga'         => $request->harga,
        ];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['foto'] = $filename;
        }

        LayananModel::create($data);

        return redirect('panel/layananinterior')->with('success', 'Layanan Interior berhasil disimpan');
    }

    // Edit interior
    public function layananinterioredit($id)
    {
        $layanan = LayananModel::findOrFail($id);

        return view('panel.layananinterioredit', compact('layanan'));
    }

    // Update interior
    public function layananinteriorupdate(Request $request, $id)
    {
        $request->validate([
            'judul'        => 'required',
            'deskripsi'    => 'required',
            'jenisruangan' => 'required',
            'gayadesain'   => 'required',
            'tipe'         => 'required',
            'harga'        => 'required|numeric',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $layanan = LayananModel::findOrFail($id);

        $data = [
            'judul'        => $request->judul,
            'deskripsi'    => $request->deskripsi,
            'jenisruangan' => $request->jenisruangan,
            'tipe'         => $request->tipe,
            'harga'        => $request->harga,
            'gayadesain'   => $request->gayadesain,
        ];

        if ($request->hasFile('foto')) {
            if ($layanan->foto && file_exists(public_path('storage/layanan/' . $layanan->foto))) {
                unlink(public_path('storage/layanan/' . $layanan->foto));
            }
            $file = $request->file('foto');
            $filename = $file->hashName();
            $file->storeAs('layanan', $filename, 'public');
            $data['foto'] = $filename;
        }

        LayananModel::where('idlayanan', $id)->update($data);

        return redirect('panel/layananinterior')->with('success', 'Layanan Interior berhasil diupdate');
    }

    public function layananinteriorhapus($id)
    {
        $layanan = LayananModel::findOrFail($id);
        if ($layanan->foto && file_exists(public_path('storage/layanan/' . $layanan->foto))) {
            unlink(public_path('storage/layanan/' . $layanan->foto));
        }
        if ($layanan->fotodenah && file_exists(public_path('storage/layanan/' . $layanan->fotodenah))) {
            unlink(public_path('storage/layanan/' . $layanan->fotodenah));
        }
        LayananModel::where('idlayanan', $id)->delete();
        return redirect('panel/layananinterior')->with('success', 'Layanan berhasil dihapus');
    }
}
