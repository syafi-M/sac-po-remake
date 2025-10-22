<?php

return [
    /*
     * The optimizers that can be used. Each optimizer should implement
     * \Spatie\ImageOptimizer\Optimizers\Optimizer.
     */
    'optimizers' => [
        \Spatie\ImageOptimizer\Optimizers\JpegOptim::class => [
            '--strip-all',
            '--all-progressive',
        ],
        \Spatie\ImageOptimizer\Optimizers\Pngquant::class => [
            '--force',
            '--quality=85-95',
        ],
        \Spatie\ImageOptimizer\Optimizers\Optipng::class => [
            '-i0',
            '-o7',
            '-quiet',
        ],
        \Spatie\ImageOptimizer\Optimizers\Svgo::class => [
            '--disable=cleanupIDs',
        ],
        \Spatie\ImageOptimizer\Optimizers\Gifsicle::class => [
            '-b',
            '-O3',
        ],
    ],
];
