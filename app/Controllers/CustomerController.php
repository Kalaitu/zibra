<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\KaryawanModel;
use App\Models\ProdukModel;
use App\Models\UserModel;
use App\Models\PemesananModel;

class CustomerController extends BaseController
{
    public function index()
    {
        $modelProduk = new ProdukModel();
        $data = [
            'aktif1' => 'active',
            'aktif2' => '',
            'aktif3' => '',
            'produkhotsales' => $modelProduk->getHotSalesProduk(),
            'produknewarival' => $modelProduk->getNewArivalProduk(),
            'produkreguler' => $modelProduk->getRegulerProduk()
        ];
        return view('Zibra/index', $data);
    }

    public function product()
    {
        $modelProduk = new ProdukModel();
        $data = [
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'produkhotsales' => $modelProduk->getHotSalesProduk(),
            'produknewarival' => $modelProduk->getNewArivalProduk(),
            'produkreguler' => $modelProduk->getRegulerProduk()
        ];
        return view('Zibra/product', $data);
    }

    public function productDetail($id)
    {
        $modelProduk = new ProdukModel();
        $data = [
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'dataproduk' => $modelProduk->getDetailProduk($id)
        ];
        return view('Zibra/DetailProduk', $data);
    }

    public function tambahkeranjang()
    {
        $currentDate = date('Ymdhis');
        $currentDate2 = date('Y-m-d');
        $pemesananModel = new PemesananModel();
        $cek = $pemesananModel->cekKode(session()->get('id_user'));
        if ($cek == null) {
            $kode = 'ORDER' . '' . session()->get('id_user') . '' . $currentDate;
        } else {
            $kode = $cek->kode_pemesanan;
        }
        $cekbarang = $pemesananModel->cekBarang(session()->get('id_user'), $this->request->getPost('id_produk'));
        if ($cekbarang == null) {
            $data = [
                'kode_pemesanan' => $kode,
                'id_user' => session()->get('id_user'),
                'id_produk' => $this->request->getPost('id_produk'),
                'tanggal_pemesanan' => $currentDate2,
                'status' => 'Keranjang',
                'qty' => $this->request->getPost('qty')
            ];
            $pemesananModel->insert($data);
        } else {
            $qty = $cekbarang->qty + $this->request->getPost('qty');
            $data = [
                'kode_pemesanan' => $kode,
                'id_user' => session()->get('id_user'),
                'id_produk' => $this->request->getPost('id_produk'),
                'tanggal_pemesanan' => $currentDate2,
                'status' => 'Keranjang',
                'qty' => $qty
            ];
            $pemesananModel->update($cekbarang->id_pemesanan, $data);
        }
        return redirect()->to('zibra/cart')->with('success-kernjang', 'Data Keranjang Berhasi Ditambahkan');
    }

    public function cart()
    {
        $pemesananModel = new PemesananModel();
        $customerModel = new CustomerModel();
        $cek = $pemesananModel->cekKode(session()->get('id_user'));
        $data = [
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'datapesanan' => $pemesananModel->getProdukByKodePemesanan($cek->kode_pemesanan),
            'datacustomer' => $customerModel->detDetailCustomer(session()->get('id_customer'))
        ];
        return view('Zibra/Cart', $data);
    }


    public function editcart($id)
    {
        $pemesananModel = new PemesananModel();
        $data = [
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'datapemesanan' => $pemesananModel->getProdukByIdPemesanan($id)
        ];
        return view('Zibra/EditCart', $data);
    }

    public function updatecart()
    {
        $pemesananModel = new PemesananModel();
        $qty = $this->request->getPost('qty');
        $id = $this->request->getPost('id_pemesanan');
        if ($qty == 0) {
            $pemesananModel->delete($id);
        } else {
            $data = [
                'qty' => $qty
            ];
            $pemesananModel->update($id, $data);
        }
        session()->setFlashdata('updatecart', 'tambah-berhasil');
        return redirect()->to(base_url('zibra/cart'));
    }

    public function checkoutbray()
    {
        $pemesananModel = new PemesananModel();
        $customerModel = new CustomerModel();
        $kodereveral = $this->request->getPost('kode_reveral');
        $datacustomer = $customerModel->getByIdUser(session()->get('id_user'));
        if ($datacustomer->kode_reveral != $kodereveral) {
            $datacustomerreveral = $customerModel->getByKodeReveral($kodereveral);
            if ($datacustomerreveral != null) {
                $point = (int) $datacustomerreveral->point;
                $point = $point + 10;
                $data = [
                    'point' => $point
                ];
                $customerModel->update($datacustomerreveral->id_customer, $data);
            }
        }
        $pemesananModel->updateByKodePesanan($this->request->getPost('kode_pemesanan'));
        session()->setFlashdata('checkoutberhasil', 'tambah-berhasil');
        return redirect()->to(base_url('zibra/invoice/' . $this->request->getPost('kode_pemesanan')));
    }

    public function invoice($id)
    {
        $pemesananModel = new PemesananModel();
        $data = [
            'aktif1' => '',
            'aktif2' => 'active',
            'aktif3' => '',
            'datapemesanan' => $pemesananModel->getProdukByKodePemesanan($id)
        ];
        return view('Zibra/Invoice', $data);
    }
}
