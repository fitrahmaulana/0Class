<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\admin\KelasController;
use App\Kelas;

class AdminKelasControllerTest extends TestCase
{
    public function test_show_uses_passed_model_in_view()
    {
        $controller = new KelasController();
        $kelas = new Kelas(['id' => 1, 'nama_kelas' => 'Test']);

        $view = $controller->show($kelas);

        $this->assertEquals('admin.kelas.show', $view->name());
        $this->assertSame($kelas, $view->getData()['detailKelas']);
    }
}
