<?php

namespace Tests\Feature;

use Tests\TestCase;

class LatihanPagesTest extends TestCase
{
    public function test_daftar_mahasiswa_menampilkan_seluruh_mahasiswa(): void
    {
        $response = $this->get('/daftar/mahasiswa');

        $response->assertOk()
            ->assertSeeText('Anton')
            ->assertSeeText('Budi')
            ->assertSeeText('Ani')
            ->assertSeeText('Sinta')
            ->assertSeeText('Surabaya')
            ->assertSeeText('Kediri')
            ->assertSeeText('Malang');
    }

    public function test_kalkulator_menghitung_luas_segitiga_dari_input(): void
    {
        $this->get('/kalkulator/segitiga')->assertOk();

        $this->post('/kalkulator/segitiga', [
            'alas' => 10,
            'tinggi' => 8,
        ])->assertOk()
            ->assertSeeText('40,00 cm²');
    }

    public function test_kalkulator_menolak_nilai_nonpositif(): void
    {
        $this->from('/kalkulator/segitiga')
            ->post('/kalkulator/segitiga', [
                'alas' => 0,
                'tinggi' => 8,
            ])
            ->assertRedirect('/kalkulator/segitiga')
            ->assertSessionHasErrors('alas');
    }
}
