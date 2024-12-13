<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProfileTest extends TestCase
{

    public function testUpload()
    {
        // Usamos Storage::fake para simular el almacenamiento en disco
        Storage::fake('local');

        // Simulamos un archivo cargado
        $photo = UploadedFile::fake()->image('avatar.jpg');

        // Realizamos una solicitud POST al endpoint 'profile', simulando la carga de un archivo
        $response = $this->post('profile', [
            'photo' => $photo  // Cambié 'avatar' por 'photo'
        ]);

        // Verificamos que el archivo se haya guardado en el directorio 'profiles/'
        Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");

        // Verificamos que la respuesta sea una redirección
        $response->assertRedirect();
    }

   
    public function test_photo_required()
    {
        $response = $this->post('profile', [
            'photo' => null
        ]);

        $response->assertSessionHasErrors('photo');
    }

}
