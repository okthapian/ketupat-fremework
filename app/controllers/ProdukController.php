<?php

class ProdukController
{
    public function run_index()
    {
        Render::view('produk.index');
    }

    public function run_single($id)
    {
        $produk = ['id' => $id, 'nama' => 'Puding Coklat'];

        $data = [];
        $data['produk'] = $produk;
        Render::json( $data);
    }
}
