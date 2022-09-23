<?php

namespace Tests\Feature;

use App\Models\Alat;
use App\Models\Detail_Alat;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class KameralistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public const KAMERAURL = 'pemilik/alat';
    public const KAMERATAMBAHURL = 'pemilik/kondisi-kamera';
    public const NOCONTENT = 'Belum Ada Isinya';
    public const NAME = 'Kamera DSLR UltraWhite';
    public const SPEK = 'Kamera DSLR UltraWhite';
    public const KATEGORI = 'DSLR';
    public const HARGA = '900000';
    public const STOK = '3';
    public const GAMBAR = '';
    public const SELL = '930000';
    public const PEMILIK = 1;
    public const KONDISI = 1;


    public const NOMERURUT ='1';
    public const SUBNAMA ='DLSR-01-CAMERA';


   

    public function test_list_kamera()
    {
        // bikin akun 
        $user = User::factory()->create([
            'hak_akses' => 1
        ]);

        //user buka halaman list price
        $response = $this->actingAs($user)
        ->get(KameralistTest::KAMERAURL);
        
        // cek header table
        $response->assertSeeText("Dashboard");
        $response->assertSeeText("Rental Disewakan Kamera");
        $response->assertSeeText("Nomer");
        $response->assertSeeText("Kamera");
        $response->assertSeeText("Speksifikasi");
        $response->assertSeeText("Harga");
        $response->assertSeeText("Stok");
        $response->assertSeeText("Kategori");
        $response->assertSeeText("Pemilik kamera");
        $response->assertSeeText("Gambar");
        $response->assertSeeText("Aksi");

        $response->assertSee("Tambahkan Kondisi Kamera");
        $response->assertSee("Tambahkan");

        //pastikan halamannya bisa dibuka
        $response->assertStatus(200);

        // //cek tampil keterangan tabel masih kosong 
        // $response->assertSeeText(KameralistTest::NOCONTENT);
    }

    public function test_list_kondisi_kamera_create_one_data()
    {
        //setup 
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        // Isi dulu satu data
        Detail_Alat::create([
            
            'kondisi_alat' =>  KameralistTest::KONDISI,
            'sub_nama' =>  KameralistTest::SUBNAMA,
          
            
        ]);
        //do something
       

        //user buka halaman list price
        $response = $this->actingAs($user)->get('pemilik/kondisi-kamera');
       
        //cek header table
        $response->assertSee("Nomer");
        $response->assertSee("kondisi");
        $response->assertSee("sub nama");
        $response->assertSee("Aksi");

         //pastikan halamannya bisa dibuka
         $response->assertStatus(200);
    }

    public function test_list_kondisi_kamera_update_one_data()
    {
        //setup 
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        // Isi dulu satu data
        Detail_Alat::updated([
            
            'kondisi_alat' =>  KameralistTest::KONDISI,
            'sub_nama' =>  KameralistTest::SUBNAMA,
          
            
        ]);
        //do something
       

        //user buka halaman list price
        $response = $this->actingAs($user)->get('pemilik/kondisi-kamera');
       
        //cek header table
        $response->assertSee("Nomer");
        $response->assertSee("kondisi");
        $response->assertSee("sub nama");
        $response->assertSee("Aksi");

         //pastikan halamannya bisa dibuka
         $response->assertStatus(200);
    }





    public function test_list_kamera_create_one_data()
    {
        //setup 
        // bikin akun 
        $user = User::factory()->create([
            'hak_akses' => 1
        ]);

        // Isi dulu satu data
        Alat::create([
            'nama_alat' => KameralistTest::NAME,
            'kategori' =>  KameralistTest::KATEGORI,
            'speksifikasi' =>  KameralistTest::SPEK,
            'harga' =>  KameralistTest::HARGA,
            'stok'=>  KameralistTest::STOK,
            'gambar' =>  KameralistTest::GAMBAR,
            'user_id' =>  KameralistTest::PEMILIK,
            'detailAlat_id' =>  KameralistTest::KONDISI,
            
        ]);
        //do something
        //user buka halaman list price
        $response = $this->actingAs($user)->get(KameralistTest::KAMERATAMBAHURL);
        //pastikan halamannya bisa dibuka
        $response->assertStatus(200);
        //cek header table
        $response->assertSee("Nomer");
        $response->assertSee("Kamera");
        // $response->assertSee("Speksifikasi");
        // $response->assertSee("Harga");
        // $response->assertSee("Stok");
        // $response->assertSee("Kondisi");
        // $response->assertSee("Kategori");
        // $response->assertSee("Pemilik kamera");
        // $response->assertSee("Gambar");
        
    }

    public function test_list_kamera_update_one_data()
    {
        //setup 
        // bikin akun 
        $user = User::factory()->create([
            'hak_akses' => 1
        ]);

        // Isi dulu satu data
        Alat::updated([
            'nama_alat' => KameralistTest::NAME,
            'kategori' =>  KameralistTest::KATEGORI,
            'speksifikasi' =>  KameralistTest::SPEK,
            'harga' =>  KameralistTest::HARGA,
            'stok'=>  KameralistTest::STOK,
            'gambar' =>  KameralistTest::GAMBAR,
            'user_id' =>  KameralistTest::PEMILIK,
            'detailAlat_id' =>  KameralistTest::KONDISI,
            
        ]);
        //do something
        //user buka halaman list price
        $response = $this->actingAs($user)->get(KameralistTest::KAMERATAMBAHURL);
        //pastikan halamannya bisa dibuka
        $response->assertStatus(200);
        //cek header table
        $response->assertSee("Nomer");
        $response->assertSee("Kamera");
        // $response->assertSee("Speksifikasi");
        // $response->assertSee("Harga");
        // $response->assertSee("Stok");
        // $response->assertSee("Kondisi");
        // $response->assertSee("Kategori");
        // $response->assertSee("Pemilik kamera");
        // $response->assertSee("Gambar");
        
    }


    public function test_create_kamera_test()
    {
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        //buka halaman /price/create
        $response = $this->actingAs($user)->get('/pemilik/alat/create');
        //pastikan halamannya bisa dibuka
        $response->assertStatus(200);
        $response->assertSee("Nama kamera");
        $response->assertSee("Speksifikasi");
        $response->assertSee("kategori");
        $response->assertSee("Foto");
        $response->assertSee("harga");
        $response->assertSee("stok");
        $response->assertSee("Pemilik");
        $response->assertSee("Kondisi");
        //ada tombol submit
        $response->assertSeeText("Submit");
    }


    public function test_create_kondisi_kamera_test()
    {
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        //buka halaman /price/create
        $response = $this->actingAs($user)->get('/pemilik/kondisi-kamera/create');
        //pastikan halamannya bisa dibuka
        $response->assertStatus(200);
     
        $response->assertSee("Kondisi Kamera");
        $response->assertSee("Sub nama detail");
        //ada tombol submit
        $response->assertSee("submit");
    }


    public function test_deleted_kondisi_kamera_test()
    {
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        //buka halaman /price/create
        $response = $this->actingAs($user)->get('/pemilik/kondisi-kamera');
        //pastikan halamannya bisa dibuka
        $detailalat = Detail_Alat::created([
            'kondisi_alat' =>  KameralistTest::KONDISI,
            'sub_nama' =>  KameralistTest::SUBNAMA, 
        ]);
         //do something
         $this->followingRedirects()->delete($detailalat->id);
         //assert
        
         $this->assertDatabaseMissing('detail_alat', [
            'id' => $detailalat->id]);

         $response->assertStatus(200);

 

    }


    // public function test_deleted_kondisi_kamera_test()
    // {
    //       // bikin akun 
    //       $user = User::factory()->create([
    //         'hak_akses' => 1
    //     ]);
    //     //buka halaman /price/create
    //     $response = $this->actingAs($user)->get('/pemilik/kondisi-kamera');
    //     //pastikan halamannya bisa dibuka
    //     Detail_Alat::created([
    //         'kondisi_alat' =>  KameralistTest::KONDISI,
    //         'sub_nama' =>  KameralistTest::SUBNAMA, 
    //     ]);
    //      //do something
    //     //  $this->followingRedirects()->delete($kondisikamera->id);
    //     $this->assertDatabaseCount('detail_alat',0);
    //      //assert
    //     //  $this->assertDatabaseMissing('detail_alat', $kondisikamera->toArray());

    //      $response->assertStatus(200);



    // }

    // public function test_deleted_kamera_test()
    // {
    //       // bikin akun 
    //       $user = User::factory()->create([
    //         'hak_akses' => 1
    //     ]);
    //     //buka halaman /price/create
    //     $response = $this->actingAs($user)->get('/pemilik/alat');
    //     //pastikan halamannya bisa dibuka
    //     // Isi dulu satu data
    //     Alat::updated([
    //         'nama_alat' => KameralistTest::NAME,
    //         'kategori' =>  KameralistTest::KATEGORI,
    //         'speksifikasi' =>  KameralistTest::SPEK,
    //         'harga' =>  KameralistTest::HARGA,
    //         'stok'=>  KameralistTest::STOK,
    //         'gambar' =>  KameralistTest::GAMBAR,
    //         'user_id' =>  KameralistTest::PEMILIK,
    //         'detailAlat_id' =>  KameralistTest::KONDISI,
            
    //     ]);
    //      //do something
    //     //  $this->followingRedirects()->delete($kondisikamera->id);
    //     $this->assertDatabaseCount('alat',0);
    //      //assert
    //     //  $this->assertDatabaseMissing('detail_alat', $kondisikamera->toArray());

    //      $response->assertStatus(200);



    // }


    public function test_deleted_kamera_test()
    {
          // bikin akun 
          $user = User::factory()->create([
            'hak_akses' => 1
        ]);
        //buka halaman /price/create
        $response = $this->actingAs($user)->get('/pemilik/alat');
        //pastikan halamannya bisa dibuka
        // Isi dulu satu data
        $alat = Alat::Created([
            'nama_alat' => KameralistTest::NAME,
            'kategori' =>  KameralistTest::KATEGORI,
            'speksifikasi' =>  KameralistTest::SPEK,
            'harga' =>  KameralistTest::HARGA,
            'stok'=>  KameralistTest::STOK,
            'gambar' =>  KameralistTest::GAMBAR,
            'user_id' =>  KameralistTest::PEMILIK,
            'detailAlat_id' =>  KameralistTest::KONDISI,
            
        ]);
         //do something
        //  $this->followingRedirects()->delete($kondisikamera->id);
        //do something
        $this->followingRedirects()->delete($alat->id);
        //assert
       
        $this->assertDatabaseMissing('detail_alat', [
           'id' => $alat->id]);

         $response->assertStatus(200);



    }
}