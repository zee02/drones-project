<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File; 
use Tinify\Tinify;

class OptimizeImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:optimize-images';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
      // Verificar se a chave API está definida
        if (! env('TINYPNG_API_KEY')) {
            $this->error('A chave TINYPNG_API_KEY não está definida no arquivo .env.');
            return 1; // Retorna um código de erro
        }
        
        // 1. Configurar a chave da API
        \Tinify\setKey(env('TINYPNG_API_KEY')); // Note: Usamos \Tinify\setKey pois o cliente TinyPNG usa namespace global

        $path = public_path('img');
        
        // 2. Itera sobre todos os arquivos JPEG e PNG
        foreach (File::allFiles($path) as $file) {
            if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png'])) {
                try {
                    $this->info("Otimizando: {$file->getFilename()}...");
                    
                    // Note: Aqui usamos \Tinify\fromFile para o cliente TinyPNG.
                    $source = \Tinify\fromFile($file->getRealPath()); 
                    
                    // Sobrescreve o arquivo original com a versão otimizada
                    $source->toFile($file->getRealPath()); 
                    
                    $this->info("✅ Otimização concluída.");
                } catch (\Tinify\Exception $e) {
                    $this->error("❌ Falha na otimização de {$file->getFilename()}: {$e->getMessage()}");
                }
            }
        }
        
        $this->info('--- Otimização concluída! ---');
    }

}
