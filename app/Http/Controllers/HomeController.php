<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return response()->view('index', [
            'galleries' => $this->openAndExposeGalleries(),
        ]);
    }

    private function openAndExposeGalleries()
    {
        return  [
            'corporativo' => [
                'block_id' => 'dom-ruan-gallery',
                'label' => 'Móveis Corporativos',
                'paragraph' => 'dom-ruan-gallery',
                'thumbnails_images' => array_map(function($filename) {
                    return '/img/galleries/corporativo/thumb/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/corporativo/thumb/*.*')),
                'original_images' => array_map(function($filename) {
                    return '/img/galleries/corporativo/original/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/corporativo/original/*.*')),
            ],
            'cozinha' => [
                'block_id' => 'cozinha-gallery',
                'paragraph' => 'cozinha-gallery',
                'label' => 'Móveis para cozinha',
                'thumbnails_images' => array_map(function($filename) {
                    return '/img/galleries/cozinhas/thumb/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/cozinhas/thumb/*.*')),
                'original_images' => array_map(function($filename) {
                    return '/img/galleries/cozinhas/original/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/cozinhas/original/*.*')),
            ],
            'quarto' => [
                'block_id' => 'quartos-gallery',
                'paragraph' => 'quartos-gallery',
                'label' => 'Móveis para quartos',
                'thumbnails_images' => array_map(function($filename) {
                    return '/img/galleries/quartos/thumb/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/quartos/thumb/*.*')),
                'original_images' => array_map(function($filename) {
                    return '/img/galleries/quartos/original/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/quartos/original/*.*')),
            ],
            'closets' => [
                'block_id' => 'closets-gallery',
                'paragraph' => 'closets-gallery',
                'label' => 'Móveis para Closets',
                'thumbnails_images' => array_map(function($filename) {
                    return '/img/galleries/closets/thumb/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/closets/thumb/*.*')),
                'original_images' => array_map(function($filename) {
                    return '/img/galleries/closets/original/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/closets/original/*.*')),
            ],
            'banheiros' => [
                'block_id' => 'banheiros-gallery',
                'paragraph' => 'banheiros-gallery',
                'label' => 'Móveis para Banheiros',
                'thumbnails_images' => array_map(function($filename) {
                    return '/img/galleries/banheiros/thumb/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/banheiros/thumb/*.*')),
                'original_images' => array_map(function($filename) {
                    return '/img/galleries/banheiros/original/' . basename($filename);
                }, \File::glob(public_path() . '/img/galleries/banheiros/original/*.*')),
            ],


        ];
    }
}
